@extends('layouts.app')
@section('title', 'Calculadora de Gammes')
@section('content')
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
@endsection