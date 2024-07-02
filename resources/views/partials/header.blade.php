<header>
    <a @class(['selected' => Route::currentRouteName() === 'home']) href="{{ route('home') }}">WELCOME</a>
    <a @class(['selected' => Route::currentRouteName() === 'movies']) href="{{ route('movies') }}">Movies</a>
</header>