@extends('layouts.app')

@section('content')
    <section class="weather-wheel">
        @if($weather)
            <x-weather-card :weather="$weather" />
            
            {{-- 
                @foreach($weatherData as $data)
                 <x-weather-card :weather="$data" />
                @endforeach 
            --}}
        @endif
    </section>
@endsection