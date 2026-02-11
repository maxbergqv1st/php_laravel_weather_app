@extends('layouts.app')

@section('content')
<div class="weather-card">
    <h1>Skapa konto</h1>
    <p class="desc">Börja hålla koll på vädret</p>

    <form method="POST" action="/register">
        @csrf
        <input type="text" name="name" placeholder="Namn" required>
        <input type="email" name="email" placeholder="E-post" required>
        <input type="password" name="password" placeholder="Lösenord" required>
        <input type="password" name="password_confirmation" placeholder="Bekräfta lösenord" required>
        
        <button type="submit">Registrera mig</button>
    </form>
    
    <p class="desc" style="margin-top: 15px;">
        Redan medlem? <a href="/login">Logga in här</a>
    </p>
</div>
@endsection