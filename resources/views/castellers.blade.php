@extends('layouts.app')
@section('title', "Alta d'un nou casteller")
@section('content')
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
@endsection