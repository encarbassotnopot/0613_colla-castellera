@extends('layouts.app')
@section('title', 'Detall: ' . $casteller->nom)
@section('content')
<div>
<p>
Nom del casteller: {{ $casteller->nom}}
</p>
<p>
Posició: {{ $casteller->posicio ?? 'Aquest casteller no té
posició assignada.' }}
</p>
</div>

<div>
<a href="{{ route('castellers.edit', $casteller->id) }}">Editar</a>
<a href="{{ route('castellers.index') }}">← Tornar</a>
</div>
@endsection