@extends('layouts.app')
@section('title', "Edició d'un Casteller")
@section('content')
@if ($errors->any())
    <div style="color: #ff0000;">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>
@endif
<form action="{{ route('castellers.update', $casteller->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="nom">Nom del casteller: </label>
    <input type="text" name="nom" id="nom" value="{{ $casteller->nom }}">
    <br>
    <label for="posicio">Posició: </label>
    <input type="text" name="posicio" id="posicio" value="{{ $casteller->posicio }}">
    <br>
    <button type="submit">Actualitza</button>
    <a href="{{ route('castellers.index') }}" style="margin-left: 15px; color: #ff0000;">Cancel·lar</a>
</form>
@endsection