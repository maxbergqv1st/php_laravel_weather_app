@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('resources/css/weather.css') }}">
@endpush

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