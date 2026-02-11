@extends('layouts.app')

@section('content')
<div class="weather-card">
            <h1>Logga in</h1>
    @if ($errors->any())
        <div style="color: #e3342f; margin-bottom: 1rem;">
            <ul style="list-style: none; padding: 0;">
                @foreach ($errors->all() as $error)
                    <li>⚠️ {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
            <form method='POST' action="/login">
                        @csrf
                        <input type="email" name="email" placeholder="E-post" required>
                        <input type="password" name="password" placeholder="password" required>
                        <button type='submit'>Gå in</button>
                        <a href="/register">Bli medlem?</a>
            </form>
</div>
@endsection