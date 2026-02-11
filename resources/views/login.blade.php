@extends('layouts.app')

@section('content')
<div class="weather-card">
            <h1>Logga in</h1>
            <form method='POST' action="/login">
                        @csrf
                        <input type="email" name="email" placeholder="E-post" required>
                        <input type="password" name="password" placeholder="password" required>
                        <button type='submit'>Gå in</button>
                        <a href="/register">Bli medlem?</a>
            </form>
</div>
@endsection