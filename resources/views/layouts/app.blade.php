<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Väderappen</title>
<style>
    body {
        margin: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(180deg, #4facfe 0%, #00f2fe 100%);
        min-height: 100vh;
        display: flex;
        flex-direction: column; /* Staplar header, main och footer lodrätt */
        color: #333;
    }

    /* Gör att innehållet tar upp resten av skärmen och centrerar kortet */
    main {
        flex: 1; 
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 20px;
    }

    /* Menyn */
    header {
        background: rgba(255, 255, 255, 0.2);
        padding: 40px;
        display: flex;
        justify-content: center;
    }

    nav ul {
        list-style: none;
        display: flex;
        justify-content: center;
        padding: 0;
        margin: 0;
    }

    nav ul li { margin: 0 15px; }
    
    nav ul li a {
        text-decoration: none;
        color: white;
        font-weight: bold;
    }

    nav ul li a:hover { color: #007bff; }

    .search-container {
        padding-top: 25px;
        width: 300px;
         border-radius: 20px;
    }
    /* Väder-kortet (beåll som förut) */
    .weather-card {
        background: rgba(255, 255, 255, 0.9);
        padding: 2rem;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
        text-align: center;
    }

    footer {
        text-align: center;
        padding: 15px;
        background: rgba(0, 0, 0, 0.05);
        color: white;
    }

    /* Styling för alla text- och lösenordsfält */
    input[type="email"],
    input[type="password"],
    input[type="text"] {
        width: 100%; /* Tar upp hela bredden i kortet */
        padding: 12px 15px;
        margin: 10px 0; /* Ger lite luft mellan fälten */
        display: inline-block;
        border: 2px solid #eee; /* En subtil ram */
        border-radius: 12px; /* Matchar kortets runda hörn */
        box-sizing: border-box; /* Ser till att padding inte gör fältet bredare än 100% */
        font-size: 16px;
        transition: all 0.3s ease; /* Gör animationen mjuk */
        outline: none; /* Tar bort Windows standard-ram */
    }

    /* Vad som händer när man klickar i fältet */
    input[type="email"]:focus,
    input[type="password"]:focus,
    input[type="text"]:focus {
        border-color: #4facfe; /* Färgen ändras till blå (samma som din gradient) */
        box-shadow: 0 0 8px rgba(79, 172, 254, 0.3); /* Ger ett mjukt blått sken */
        background-color: #fff;
    }

    /* Gör knappen lite bredare och snyggare också */
    button {
        width: 100%;
        margin-top: 15px;
        padding: 12px;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
</style>
</head>
<body>
    <header>
        <nav>
            
            <ul>
            <li><a href="/">Hem</a></li>
            <li><a href="/om-oss">Om oss</a></li>
            <!-- <li><a href="/welcome">Welcome</a></li> -->

            @auth
                {{-- Detta visas bara när användaren är inloggad --}}
                <li>
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" style="background: none; border: none; color: white; font-weight: bold; cursor: pointer; padding: 0; font-family: inherit; text-transform: none; letter-spacing: normal; width: auto; margin: 0;">
                            Logga ut
                        </button>
                    </form>
                </li>
            @endauth

            @guest
                <li><a href="/login">Logga in</a></li>
                <li><a href="/register">Registrera</a></li>
            @endguest
        </ul>
        <div class="search-container">
            <form action="/" method="GET">
            <input type="text" 
               name="city" 
               value="{{ request('city') }}" 
               placeholder="Skriv stad och tryck Enter..."> 
            </form>
        </div>
        </nav>
    </header>

    <main>
        @yield('content') 
    </main>

    <footer>
        <p>&copy; 2026 Weather Api</p>
    </footer>
</body>
</html>