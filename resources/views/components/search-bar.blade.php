@props(['placeholder' => 'Skriv stad och tryck Enter...'])
<div class="search-container">
    <form action="{{ route('home') }}" method="GET">
        <input
            type="text"
            name="city"
            value="{{ request('city') }}"
            placeholder="{{ $placeholder }}"
        >
    </form>
</div>