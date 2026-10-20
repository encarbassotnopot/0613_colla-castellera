<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Castellers - Colles Castelleres</title>
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
        <h1>Alta d'un nou casteller</h1>
        <form action="{{ route('castellers.alta') }}" method="post">
            @csrf
            <label for="nom">Nom del casteller: </label>
            <input type="text" name="nom" id="nom" value="{{ old('nom') }}">
            <br>
            <label for="posició">Posició: </label>
            <input type="text" name="posició" id="posició" value="{{ old('pos') }}">
            <br>
            <button type="submit">Alta</button>
        </form>
        @error('*')
            <div class="error">{{ $message }}</div>
        @enderror
        @if(session('status'))
            <div class="ok">{!! session('status') !!}</div>
        @endif
    </body>
</html>
