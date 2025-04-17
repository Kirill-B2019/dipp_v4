<?php

namespace App\Http\Controllers;

use App\Http\Requests\ICOBuyPFTGRequest;
use App\Models\BuyPlatformToken;
use Illuminate\Support\Facades\Log;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class BuyPlatformTokenController extends Controller
{
    //
    public function CreateOrder(ICOBuyPFTGRequest $request): \Illuminate\Http\RedirectResponse
    {

        $order = new BuyPlatformToken();
        $order->order_id = $this->generateOrderId();
        $order->amount = $request->validated('amount');
        $order->payment_method = $request['payment_method'];
        $order->wallet = $request->validated('wallet');
        $order->price = $request['price'];
        $order->token = $request['token'];
        $order->token_bonus = $request['token_bonus'];
        $order->token_total = $request['token']+$request['token_bonus'];
        $order->price_crypto = $request['priceCrypto'];
        $order->amount_crypto = $request['cryptoAmount'];
        $order->status = 'created';


        // Попытка сохранить ордер в базе данных

        try {
            $order->save();
            return redirect()->route('show_order_PFTG', ['id' => $order->order_id]);
        } catch (\Exception $e) {
            // Логирование ошибки
            Log::error('Ошибка при сохранении заказа: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Не удалось создать заказ. Попробуйте еще раз.']);
        }



    }

    public function ShowOrder($id)
    {

        $order = BuyPlatformToken::where('order_id', $id)->firstOrFail();


        switch ($order->payment_method){
            case 'btc':
                $cionImg = 'bitcoin.webp';
                $price = $this->getCryptoPrice('bitcoin');
                $recive_wallet = 'bc1qymsskzjlkrkpxmqx8388swjqtcw6fng5d3galg';
                $qrString = "bitcoin:{$recive_wallet}?amount={$order->amount_crypto}&label=" . urlencode($order->order_id);
                $qr = $this->QRgenerate($qrString);
                $cryptoName = 'BTC';
                break;
            case 'eth':
                $cionImg = 'ethereum.webp';
                $price = $this->getCryptoPrice('ethereum');
                $recive_wallet = '0xC2d60259f71adB1d1c1E6E07283b6Ee471dc6aba';
                $qrString = "ethereum:{$recive_wallet}?value={$order->amount_crypto}&message=" . urlencode($order->order_id);
                $qr = $this->QRgenerate($qrString);
                $cryptoName = 'ETH';
                break;
            case 'trx':
                $cionImg = 'tron-logo.webp';
                $price = $this->getCryptoPrice('tron');
                $recive_wallet = 'TK1bBEYr4Y6XmyVZRiqzVYjC5DSyU6GCE5';
                $qrString = "tron:{$recive_wallet}?amount={$order->amount_crypto}&memo=" . urlencode($order->order_id);
                $qr = $this->QRgenerate($qrString);
                $cryptoName = 'TRX';
                break;
            case 'usdt-trc20':
                $cionImg = 'Tether.webp';
                $price = $this->getCryptoPrice('tether');
                $recive_wallet = 'TK1bBEYr4Y6XmyVZRiqzVYjC5DSyU6GCE5';
                $qrString = "tron:{$recive_wallet}?amount={$order->amount_crypto}&memo=" . urlencode($order->order_id);
                $qr = $this->QRgenerate($qrString);
                $cryptoName = 'USDT (TRC)';
                break;
            case 'usdt-erc20':
                $cionImg = 'Tether.webp';
                $price = $this->getCryptoPrice('tether');
                $recive_wallet = '0xC2d60259f71adB1d1c1E6E07283b6Ee471dc6aba';
                $qrString = "ethereum:{$recive_wallet}?value={$order->amount_crypto}&message=" . urlencode($order->order_id);
                $qr = $this->QRgenerate($qrString);
                $cryptoName = 'USDT (ERC)';
                break;
        }



        return view('platformico.order', compact('order','cionImg','qr','price','recive_wallet','cryptoName'));
    }


    protected function generateOrderId()
    {
    // Генерация уникального order_id
    do {
        $orderId = rand(100000, 999999); // Генерация случайного числа в заданном диапазоне
        } while (BuyPlatformToken::where('order_id', $orderId)->exists()); // Проверка уникальности
    return $orderId;
    }

    //QR и номер кошелька
    public function QRgenerate($string) {

        return $qrCodes = QrCode::size(120)->color(43,44,45)->generate($string);


    }

    function getCryptoPrice($token)
    {
        $url = 'https://api.coingecko.com/api/v3/simple/price?ids='.$token.'&vs_currencies=usd';
        $response = file_get_contents($url);
        $data = json_decode($response, true);
        return $data[$token]['usd'];
    }

    public function CancelOrder($id)
    {

        $order = BuyPlatformToken::where('order_id', $id)->firstOrFail();
        $order->update(['status' => 'cancel']);
        return redirect()->route('platform_ico');
    }
    public function PaidOrder($id)
    {

        $order = BuyPlatformToken::where('order_id', $id)->firstOrFail();
        $order->update(['status' => 'paid']);
        return redirect()->route('platform_ico');
    }
}


