@extends('layouts.app')

@section('content')
    <section class="weather-wheel">  
        @foreach($weather as $data)
            <x-weather-card :weather="$data" />
        @endforeach 
    </section>
@endsection