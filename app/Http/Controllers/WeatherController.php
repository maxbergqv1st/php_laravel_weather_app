<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; 

class WeatherController extends Controller
{
    public function index(Request $request)
    {
        $searchCity = $request->input('city');

        if($searchCity) {
           $citiesToFetch = [$searchCity];
        } else {
            $citiesToFetch = ['Halmstad', 'Stockholm', 'Miami'];
        }

        $apiKey = env('WEATHER_API_KEY');
        $weatherData = [];

        foreach ($citiesToFetch as $city) {
            $response = Http::withoutVerifying()->get("https://api.weatherapi.com/v1/current.json", [
            'key' => $apiKey,
            'q' => $city,
            'lang' => 'sv'
        ]);

        $data = $response->json();

            if (isset($data['location'])) {
                $weatherData[] = $data;
            }
        }  

        return view('landing', ['weather' => $weatherData]);
    
    }
}