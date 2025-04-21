<?php

namespace App\Http\Controllers;

use App\Http\Requests\ICOBuyPFTGRequest;
use App\Models\BuyPlatformToken;
use Illuminate\Support\Facades\Log;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class BuyPlatformTokenController extends Controller
{
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

    // Конфигурация кошельков и изображений
    $paymentMethodsConfig = [
        'btc' => [
            'image' => 'bitcoin.webp',
            'token' => 'bitcoin',
            'wallet' => 'bc1qymsskzjlkrkpxmqx8388swjqtcw6fng5d3galg',
            'qr_key' => 'label',
            'cryptoName' => 'BTC'
        ],
        'eth' => [
            'image' => 'ethereum.webp',
            'token' => 'ethereum',
            'wallet' => '0xC2d60259f71adB1d1c1E6E07283b6Ee471dc6aba',
            'qr_key' => 'message',
            'cryptoName' => 'ETH'
        ],
        'trx' => [
            'image' => 'tron-logo.webp',
            'token' => 'tron',
            'wallet' => 'TK1bBEYr4Y6XmyVZRiqzVYjC5DSyU6GCE5',
            'qr_key' => 'memo',
            'cryptoName' => 'TRX'
        ],
        'usdt-trc20' => [
            'image' => 'Tether.webp',
            'token' => 'tether',
            'wallet' => 'TK1bBEYr4Y6XmyVZRiqzVYjC5DSyU6GCE5',
            'qr_key' => 'memo',
            'cryptoName' => 'USDT (TRC)'
        ],
        'usdt-erc20' => [
            'image' => 'Tether.webp',
            'token' => 'tether',
            'wallet' => '0xC2d60259f71adB1d1c1E6E07283b6Ee471dc6aba',
            'qr_key' => 'message',
            'cryptoName' => 'USDT (ERC)'
        ],
    ];

    // Получение конфигурации для текущего метода оплаты
    $config = $paymentMethodsConfig[$order->payment_method] ?? null;

    if (!$config) {
        Log::error('Неизвестный метод оплаты: ' . $order->payment_method);
        return redirect()->back()->withErrors(['error' => 'Неизвестный метод оплаты.']);
    }

    $cionImg = $config['image'];
    $price = $this->getCryptoPrice($config['token']);
    $recive_wallet = $config['wallet'];
    $qrString = $this->generateQRString($order, $config);
    $qr = $this->QRgenerate($qrString);
    $cryptoName = $config['cryptoName'];

    return view('platformico.order', compact('order', 'cionImg', 'qr', 'price', 'recive_wallet', 'cryptoName'));
}

protected function generateQRString($order, $config)
{
    $qr_key = $config['qr_key'];
    return "{$config['token']}:{$config['wallet']}?{$qr_key}=" . urlencode($order->amount_crypto) . "&label=" . urlencode($order->order_id);
}

    protected function generateOrderId()
    {
    // Генерация уникального order_id
    do {
        $orderId = random_int(100000, 999999); // Генерация случайного числа в заданном диапазоне
        } while (BuyPlatformToken::where('order_id', $orderId)->exists()); // Проверка уникальности
    return $orderId;
    }
    //QR и номер кошелька
    public function QRgenerate($string) {

        return $qrCodes = QrCode::size(120)->color(43,44,45)->generate($string);


    }
    protected $requestCount = 0;
    protected $maxRequestsPerMonth = 10000; // Примерный лимит

    public function getCryptoPrice($token)
    {
        $this->requestCount++;

        if ($this->requestCount > $this->maxRequestsPerMonth) {
            Log::error('Превышен лимит запросов в месяц.');
            throw new \Exception('Превышен лимит запросов в месяц.');
        }

        $url = 'https://api.coingecko.com/api/v3/simple/price?ids=' . $token . '&vs_currencies=usd';
        $response = file_get_contents($url);
        $data = json_decode($response, true);

        return $data[$token]['usd'] ?? null;
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


