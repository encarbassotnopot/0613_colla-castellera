@extends('layouts.app')
@section('title', 'Calendari de diades')
@section('content')
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
@endsection