<?php

namespace App\Http\Controllers;

use App\Models\GoldRate;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;

class PlatformICOController extends Controller
{
    protected string $excludeKey = 'TWh7BeGu5dxBtYJApWsN7F7SAqeeK4eKyK';
    protected string $contract = 'TCzvVtyPKaVejCXBjD8SZZuSPi4RK3jb4z';
    public function index()
    {
        $goldPrice = $this->getTodayAuPrice();
        $holders = $this->contractHoldersInfo();
        $sendSumm = $this->contractSendSum();
        $percent = (int)ceil(($sendSumm / 700000) * 100);
        $ExchangeRates = json_encode($this->getExchangeRates());

        return view('platformico.ico', compact('goldPrice','holders','ExchangeRates','sendSumm','percent'));
    }



    public function contractHoldersInfo(): int|string
    {
        $holdersUrl = "https://api.trongrid.io/v1/contracts/{$this->contract}/tokens?only_confirmed=true";
        $holdersData = $this->fetchAndDecodeData($holdersUrl);

        if (is_string($holdersData)) {
            return $holdersData; // Возвращаем сообщение об ошибке
        }

        if (!isset($holdersData['data']) || !is_array($holdersData['data'])) {
            return "Некорректные данные от API"; // Обработка некорректных данных
        }

        $holdersCount = count($holdersData['data']);
        return $holdersCount - 1;
    }

    public function contractSendSum()
    {
        $totalSum = 0;
        $totalOwner = 0;

        $sumUrl = "https://api.trongrid.io/v1/contracts/{$this->contract}/tokens?only_confirmed=true";
        $sumData = $this->fetchAndDecodeData($sumUrl);
        if (is_string($sumData)) {
            return ["error" => $sumData]; // Возвращаем сообщение об ошибке
        }

        if (!isset($sumData['data']) || !is_array($sumData['data'])) {
            return ["error" => "Некорректные данные от API"]; // Обработка некорректных данных
        }

        foreach ($sumData['data'] as $item) {
            foreach ($item as $address => $amount) {

                if ($address !== $this->excludeKey) {
                    $totalSum += (float)$amount;
                }
            }
        }

        return number_format($totalSum * 0.000001, 0, '.', '');
    }


    /**
     * Метод для получения и декодирования данных из API
     *
     * @param string $url URL для запроса
     * @return array|string Возвращает массив данных или строку с сообщением об ошибке
     */
    protected function fetchAndDecodeData(string $url): array|string
    {
        $response = file_get_contents($url);
        if ($response === false) {
            return "Ошибка при получении данных";
        }

        $data = json_decode($response, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return "Ошибка при декодировании JSON";
        }

        return $data;
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
            'usdt-trc20' => $data['tether']['usd'] ?? null,
            'trx' => $data['tron']['usd'] ?? null,
        ];

        return $exchangeRates;
    }

    //Запрос на сегодняшнюю ставку золото
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
}
