<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; 

class WeatherController extends Controller
{
    public function index(Request $request)
    {
        $city = $request->input('city', 'Halmstad'); 
        $apiKey = env('WEATHER_API_KEY'); // Hämtar från .env

        $response = Http::get("https://api.weatherapi.com/v1/current.json", [
            'key' => $apiKey,
            'q' => $city,
            'lang' => 'sv'
        ]);

        $weatherData = $response->json();

        return view('landing', ['weather' => $weatherData]);
    }
}