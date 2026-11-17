@extends('layouts.app')
@section('title', "Alta d'un Casteller")
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
<form action="{{ route('castellers.store') }}" method="post">
    @csrf
    <label for="nom">Nom del casteller: </label>
    <input type="text" name="nom" id="nom" value="{{ old('nom') }}">
    <br>
    <label for="posicio">Posició: </label>
    <input type="text" name="posicio" id="posicio" value="{{ old('posicio') }}">
    <br>
    <button type="submit">Alta</button>
    <a href="{{ route('castellers.index') }}" style="margin-left: 15px; color: #ff0000;">Cancel·lar</a>
</form>
@endsection