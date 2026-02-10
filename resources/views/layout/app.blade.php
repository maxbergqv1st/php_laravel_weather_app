<!DOCTYPE html>
<html lang="sv">
<head>
    <title>Min Laravel Sida</title>
   
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