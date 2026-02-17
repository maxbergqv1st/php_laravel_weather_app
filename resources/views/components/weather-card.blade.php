@props(['weather'])

<section class="weather-card">
    <header>
        <h3>{{ $weather['location']['name'] }}</h3>
    </header>
    
    <div class="temp-main">
        <img src="https:{{ $weather['current']['condition']['icon'] }}" alt="Ikon">
        <span class="degrees">{{ round($weather['current']['temp_c']) }}°C</span>
    </div>
</section>