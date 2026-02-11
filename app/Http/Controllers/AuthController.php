<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // För inloggningslogik 🔑
use Illuminate\Support\Facades\Hash; // Om du behöver skapa lösenord 🔒

class AuthController extends Controller
{
    // 1. Visa inloggningssidan
    public function showLogin()
    {
        return view('login');
    }

    // 2. Hantera inloggningsförsöket
    public function login(Request $request)
    {
        // Validera att användaren faktiskt skrev något
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Försök logga in användaren
        // Laravel kollar automatiskt e-post och hashat lösenord i 'users'-tabellen
        if (Auth::attempt($credentials)) {
            // Om det lyckas: Starta om sessionen (säkerhet!)
            $request->session()->regenerate();

            // Skicka användaren till startsidan
            return redirect()->intended('/');
        }

        // Om det misslyckas: Gå tillbaka med ett felmeddelande
        return back()->withErrors([
            'email' => 'Uppgifterna stämmer inte överens med våra register.',
        ])->onlyInput('email'); // Sparar mejlen i fältet så de slipper skriva om den
    }

    // 3. Logga ut
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}