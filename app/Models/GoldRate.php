<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class GoldRate extends Model
{
    protected $guarded = [];


    protected $table = 'gold_rates';


    public function getTodayAuPrice(): void
    {
        $today = Carbon::today();
        $today_rate = self::whereDate('created_at', $today)->get();

        if ($today_rate->isEmpty()) {

            $apiKey = "goldapi-2g5eetldaall6o-io";
            $symbol = "XAU";
            $curr = "USD";
            $date = "";

            $myHeaders = array(
                'x-access-token: ' . $apiKey,
                'Content-Type: application/json'
            );

            $curl = curl_init();
            $url = "https://www.goldapi.io/api/{$symbol}/{$curr}{$date}";

            curl_setopt_array($curl, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTPHEADER => $myHeaders
            ));

            $response = curl_exec($curl);
            $error = curl_error($curl);

            curl_close($curl);

            if ($error) {
                echo 'Error: ' . $error;
            } else {
                $q = self::create([
                    'rate'=>json_decode($response)->price_gram_10k/100,
                ]);

            }
        }

    }
}
