<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; 

class WeatherController extends Controller
{
    public function index(Request $request)
    {
        $city = $request->input('city', 'Halmstad', 'Stockholm', 'Miami');
        $apiKey = env('WEATHER_API_KEY');

        $response = Http::withoutVerifying()->get("https://api.weatherapi.com/v1/current.json", [
            'key' => $apiKey,
            'q' => $city,
            'lang' => 'sv'
        ]);

        $weatherData = $response->json();

        // Denna rad visar datan snyggt längst upp på din webbsida i webbläsaren
        // Ta bort eller kommentera ut denna när du är klar ( // dump($weatherData) )
        // dump($weatherData);

        if (!isset($weatherData['location'])) {
            $weatherData = null;
        }

        return view('landing', ['weather' => $weatherData]);
    }
}