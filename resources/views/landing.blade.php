@extends('layouts.app')

@section('content')
    <div class="weather-card">
        <h1>{{ $city ?? 'Stockholm' }}</h1>
        <div class="temp">12°C</div>
        <p class="desc">Växlande molnighet</p>

        <form action="/" method="GET">
            <input type="text" name="city" placeholder="Sök stad...">
            <button type="submit">Sök</button>
        </form>
    </div>
@endsection