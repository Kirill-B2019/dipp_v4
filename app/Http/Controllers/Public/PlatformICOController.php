<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\GoldRate;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;

class PlatformICOController extends Controller
{
    public function index()
    {
        $goldPrice = $this->getTodayAuPrice();
        $contract = 'TCzvVtyPKaVejCXBjD8SZZuSPi4RK3jb4z';
        $holders = $this->contractHoldersInfo();
        $ExchangeRates = json_encode($this->getExchangeRates());


/*dd($ExchangeRates);*/
        return view('platformico.ico', compact('goldPrice','holders','contract','ExchangeRates'));
    }

    public function getTodayAuPrice()
    {
        $today = Carbon::today();
        $today_rate = GoldRate::whereDate('created_at', $today)->first();

        if (!$today_rate) {
            $apiKey = "goldapi-2g5eetldaall6o-io";
            $symbol = "XAU";
            $curr = "USD";
            $date = "";
            $myHeaders = [
                'x-access-token: ' . $apiKey,
                'Content-Type: application/json'
            ];

            $curl = curl_init();
            $url = "https://www.goldapi.io/api/{$symbol}/{$curr}{$date}";

            curl_setopt_array($curl, [
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTPHEADER => $myHeaders
            ]);

            $response = curl_exec($curl);
            $error = curl_error($curl);
            curl_close($curl);

            if ($error) {
                echo 'Error: ' . $error;
                return null; // Возвращаем null в случае ошибки
            } else {
                $data = json_decode($response);

                if (isset($data->price_gram_10k)) {
                    $today_rate_value = $data->price_gram_10k / 100;
                    GoldRate::create(['rate' => $today_rate_value]);
                    return $today_rate_value; // Возвращаем значение
                } else {
                    echo 'Invalid response structure';
                    return null; // Возвращаем null, если структура ответа неверная
                }
            }
        }

        return number_format($today_rate->rate, 2, '.', ''); // Возвращаем сохраненную ставку с двумя знаками после запятой
    }


    public function contractHoldersInfo()
    {


        $holdersUrl = "https://api.trongrid.io/v1/contracts/TCzvVtyPKaVejCXBjD8SZZuSPi4RK3jb4z/tokens?only_confirmed=true";
        $holdersResponse = file_get_contents($holdersUrl);
        $holdersData = json_decode($holdersResponse, true);
        $holdersCount = count($holdersData['data']);
        return $holdersCount-1;

    }

    //сумма токенов отправленных
    public function contractSendSum()
    {
        // Ключ элемента, который нужно исключить
        $excludeKey = "TWh7BeGu5dxBtYJApWsN7F7SAqeeK4eKyK"; // замените на нужный ключ

        $totalSum = 0;
        $totalOnwer =0;
        $sumUrl = "https://api.trongrid.io/v1/contracts/TCzvVtyPKaVejCXBjD8SZZuSPi4RK3jb4z/tokens?only_confirmed=true";
        $sumResponse = file_get_contents($sumUrl);
        $sumData = json_decode($sumResponse, true);
        foreach ($sumData['data'] as $item) {
            // Получаем ключ и значение
            $key = key($item);
            $value = $item[$key];

            // Проверяем, нужно ли исключить элемент
            if ($key !== $excludeKey) {
                $totalSum += (float)$value; // Приводим к числу и добавляем к общей сумме
            }
            // Проверяем, нужно ли исключить элемент
            if ($key == $excludeKey) {
                $totalOnwer = (float)$value; // Приводим к числу и добавляем к общей сумме
            }
        }
        return [
            'totalSum'=> number_format($totalSum*0.000001, 6, '.', ' '),
            'totalOnwer'=>number_format($totalOnwer*0.000001, 6, '.', ' '),
        ];
    }

    //Запрос котировок
    public function getExchangeRates()
    {
        $ids = 'bitcoin,ethereum,tether,tron';
        $response = Http::get("https://api.coingecko.com/api/v3/simple/price?ids={$ids}&vs_currencies=usd");

        // Проверяем, успешен ли запрос
        if ($response->failed()) {
            return response()->json(['error' => 'Unable to fetch exchange rates'], 500);
        }

        $data = $response->json();

        // Проверяем, что все необходимые данные получены
        $exchangeRates = [
            'btc' => $data['bitcoin']['usd'] ?? null,
            'eth' => $data['ethereum']['usd'] ?? null,
            'usdt-erc20' => $data['tether']['usd'] ?? null,
            'usdt-trc20' => $data['tether']['usd'] ?? null, // Это может потребовать изменения в зависимости от API
            'trx' => $data['tron']['usd'] ?? null,
        ];

        return $exchangeRates;
    }

}
