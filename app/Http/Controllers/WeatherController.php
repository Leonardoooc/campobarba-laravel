<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function getWeather(Request $request)
    {
        $apiKey = '27016dd2f918402ca632bcd3b6d9387c';

        $ip = $request->ip();

        if ($ip == "127.0.0.1") {
            error_log("mudando ip para Curitiba por ser localhost.");
            $ip = "177.92.50.104";
        }

        $url = "https://api.ipgeolocation.io/ipgeo?apiKey=$apiKey&ip=$ip";

        $response = Http::get($url);
        $data = $response->json();

        $latitude = $data['latitude'];
        $longitude = $data['longitude']; 

        $weatherUrl = "https://api.openweathermap.org/data/2.5/weather?lat=$latitude&lon=$longitude&appid=f17047134f597370f8f6d018a0a6715b";

        $weatherResponse = Http::get($weatherUrl);
        $weatherData = $weatherResponse->json();
        return response()->json($weatherData);
    }
}