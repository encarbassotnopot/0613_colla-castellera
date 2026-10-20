<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Calendari - Colles Castelleres</title>
    </head>
    <body>
        <h1>Calendari de diades</h1>
        <table>
            <thead>
                <tr>
                    <th>Nom de la diada</th>
                    <th>Població</th>
                    <th>Dia i hora</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($calendari as $diada)
                <tr>
                    <td>{{ $diada['Nom'] }}</td>
                    <td>{{ $diada['Població'] }}</td>
                    <td>{{ $diada['Hora'] }}</td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </body>
</html>
