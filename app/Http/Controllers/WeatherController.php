<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; 

class WeatherController extends Controller
{
    public function index(Request $request)
    {
        $city = $request->input('city', 'Halmstad'); 
        $apiKey = env('WEATHER_API_KEY'); 

        // Vi lägger till withoutVerifying() ifall din lokala dator har SSL-strul
        $response = Http::withoutVerifying()->get("https://api.weatherapi.com/v1/current.json", [
            'key' => $apiKey,
            'q' => $city,
            'lang' => 'sv'
        ]);

        $weatherData = $response->json();

        // Om API:et svarar med fel (t.ex. fel nyckel), sätt till null
        if (!isset($weatherData['location'])) {
            $weatherData = null;
        }

        return view('landing', ['weather' => $weatherData]);
    }
}