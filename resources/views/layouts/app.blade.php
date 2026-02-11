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
        padding: 20px;
    }

    /* Menyn */
    header {
        background: rgba(255, 255, 255, 0.2);
        padding: 10px 0;
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
</style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Hem</a></li>
                <li><a href="/om-oss">Om oss</a></li>
                <li><a href="/welcome">Welcome</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content') {{-- Här kommer innehållet från dina andra filer hamna! --}}
    </main>

    <footer>
        <p>&copy; 2026 Mitt Projekt</p>
    </footer>
</body>
</html>