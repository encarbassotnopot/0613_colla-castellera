<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
    </head>
    <body>
        <nav>
            <div>
                <a href="/">Benvinguda</a>
                <a href="/calendari">Calendari de diades</a>
                <a href="/gammes">Calculadora de gammes</a>
                <a href="{{ route('castellers.index') }}">Gestió de colla</a>
                @auth
                    <a href="{{ route('castellers.create') }}">+ Nou Casteller</a>
                    <span>Hola, <strong>{{Auth::user()->name }}</strong>!</span>
                    <form action="{{ route('logout') }}" method="POST"  style="display: inline">
                        @csrf
                        <button type="submit">Sortir</button>
                    </form>
                @else
                    <a href="{{ route('show.login') }}">Login</a>
                    <a href="{{ route('show.registre') }}">Registrar-se</a>
                @endauth
            </div>
        </nav>
        <h1>@yield('title')</h1>
        @yield('content')
    </body>
</html>
