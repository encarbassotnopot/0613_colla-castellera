<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gammes - Colles Castelleres</title>
        <style>
            .error {
                background-color: rgba(255, 0, 0, 0.3);
            }

            .ok {
                background-color: rgba(0, 255, 0, 0.3);
            }
        </style> 
    </head>
    <body>
        <h1>Calculadora de Gammes</h1>
        <form action="{{ route('gammes.calcular') }}" method="post">
            @csrf
            <label for="pisos">Nombre de pisos del castell que es vol intentar: </label>
            <input type="number" name="pisos" id="pisos" value="{{ old('pisos') }}">
            <button type="submit">Calcula</button>
            @error('pisos')
                <div class="error">{{ $message }}</div>
            @enderror
            @if(session('missatge'))
                <div class="ok">{!! session('missatge') !!}</div>
            @endif
        </form>
    </body>
</html>
