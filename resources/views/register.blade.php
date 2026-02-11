@extends('layouts.app')

@section('content')
<div class="weather-card">
    <h1>Skapa konto</h1>
    
    {{-- Visa felmeddelanden om valideringen misslyckas --}}
    @if ($errors->any())
        <div style="color: #e3342f; margin-bottom: 1rem;">
            <ul style="list-style: none; padding: 0;">
                @foreach ($errors->all() as $error)
                    <li>⚠️ {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

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