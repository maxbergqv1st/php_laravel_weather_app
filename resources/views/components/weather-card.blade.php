{{-- resources/views/components/weather-card.blade.php --}}
@props(['weather'])

<div class="weather-card">
    @if($weather)
        <h1>star</h1>
        <h1>{{ $weather['location']['name'] }} 📍</h1>
        <p class="desc">{{ $weather['current']['condition']['text'] }}</p>
        
        <div class="temp-section" style="display: flex; align-items: center; justify-content: center; gap: 10px;">
            <img src="https:{{ $weather['current']['condition']['icon'] }}" alt="Väderikon">
            <span style="font-size: 3rem; font-weight: bold;">
                {{ round($weather['current']['temp_c']) }}°C
            </span>
        </div>

        <div class="details" style="margin-top: 15px; display: grid; grid-template-columns: 1fr 1fr; gap: 10px; font-size: 0.9rem;">
            <div>💨 Vind: {{ $weather['current']['wind_kph'] }} km/h</div>
            <div>💧 Luftfuktighet: {{ $weather['current']['humidity'] }}%</div>
        </div>
    @else
        <p>Kunde inte ladda väderdata just nu. ☁️</p>
    @endif
</div>