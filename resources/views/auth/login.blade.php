@extends('layouts.app')
@section('title', 'Inici de Sessió')
@section('content')
<div>
<form action="{{ route('login') }}" method="POST">
@csrf
<div>
<label><strong>Correu Electrònic</strong></label>
<input type="email" name="email" value="{{ old('email') }}" required autofocus>
@error('email') <p>{{ $message}}</p> @enderror
</div>
<div>
<label><strong>Contrasenya</strong></label>
<input type="password" name="password" required>
@error('password') <p>{{$message }}</p> @enderror
</div>
<button type="submit">Entrar</button>
<div>
<a href="{{ route('show.registre') }}">Encara no tens compte? Registra't</a>
</div>
</form>
</div>
@endsection