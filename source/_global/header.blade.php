<header class="@yield('header-class')">
    <div id="nav-bar" class="cf">
        <div class="container nav-container cf">
            <a href="/" class="logo-a">
                <h1 class="logo-sm">
                    Hillary<span>&amp;</span>Forrest
                </h1>
            </a>
            <h1 class="logo-md">
                H<span>&amp;</span>F
            </h1>
            <nav>
                <ul>
                    @foreach($nav as $key => $item)
                        <li>
                            <a href="{{ $item['link'] }}" class="@yield($key . '-nav-active')">{{ $item['title'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>

    <div class="container nav-container">
        @yield('hero')
    </div>
</header>