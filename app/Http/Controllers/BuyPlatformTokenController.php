<?php

namespace App\Http\Controllers;

use App\Http\Requests\ICOBuyPFTGRequest;
use App\Models\BuyPlatformToken;
use Illuminate\Support\Facades\Log;


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

    public function showOrder($id)
    {
        $order = BuyPlatformToken::where('order_id', $id)->firstOrFail();
        $cionImg = '';
        switch ($order->payment_method){
            case 'btc':
                $cionImg = 'bitcoin.webp';
                break;
            case 'eth':
                $cionImg = 'ethereum.webp';
                break;
            case 'trx':
                $cionImg = 'Tether.webp';
                break;
            case 'usdt-trc20':
            case 'usdt-erc20':
                $cionImg = 'tron-logo.webp';
                break;
        }

        return view('platformico.order', compact('order','cionImg'));
    }


    protected function generateOrderId()
    {
    // Генерация уникального order_id
    do {
        $orderId = rand(100000, 999999); // Генерация случайного числа в заданном диапазоне
        } while (BuyPlatformToken::where('order_id', $orderId)->exists()); // Проверка уникальности
    return $orderId;
    }

}
