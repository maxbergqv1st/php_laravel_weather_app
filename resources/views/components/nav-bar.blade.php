<ul>
    <li><a href="/">Hem</a></li>
    <li><a href="/om-oss">Om oss</a></li>

    @auth
        <li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="nav-button">Logga ut</button>
            </form>
        </li>
    @endauth

    @guest
        <li><a href="{{ route('login') }}">Logga in</a></li>
        <li><a href="{{ route('register') }}">Registrera</a></li>
    @endguest
</ul>