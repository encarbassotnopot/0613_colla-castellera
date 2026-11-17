@extends('layouts.app')
@section('title', 'Llistat de Castellers')
@section('content')
@if(session('success'))
    <p style="color: green;">{!! session('success') !!}</p>
@endif
@auth
<a href="{{ route('castellers.create') }}">+ Afegeix un casteller</a>
@endauth
<table>
<thead>
<tr>
<th>Nom</th>
<th>Posició</th>
<th>Accions</th>
</tr>
</thead>
<tbody>
@forelse($castellers as $c)
<tr>
<td><strong>{{ $c->nom }}</strong></td>
<td>{{$c->posicio}}</td>
<td>
<a href="{{ route('castellers.show', $c->id) }}">Veure</a>
@auth
<a href="{{ route('castellers.edit', $c->id) }}">Editar</a>
<form action="{{ route('castellers.destroy', $c->id)}}" method="POST" onsubmit="return confirm('Segur?')">
@csrf @method('DELETE')
<button type="submit">Eliminar</button>
</form>
@endauth
</td>
</tr>
@empty
<tr>
<td colspan="3" style="padding: 40px;">No hi ha castellers.</td>
</tr>
@endforelse
</tbody>
</table>
@endsection