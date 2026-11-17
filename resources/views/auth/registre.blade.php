@extends('layouts.app')
@section('title', 'Crea un compte')
@section('content')
<div style="max-width: 500px; margin: 0 auto;">
<form action="{{ route('registre') }}" method="POST">
@csrf

<label><strong>Nom Complet</strong></label>
<input type="text" name="name" value="{{ old('name') }}"
required>
@error('name')
<p>{{ $message }}</p>
@enderror

<br>
<label><strong>Correu Electrònic</strong></label>
<input type="email" name="email" value="{{ old('email') }}" required>
@error('email')
<p>{{ $message }}</p>
@enderror

<br>
<label><strong>Contrasenya</strong></label>
<input type="password" name="password" required>
@error('password') <p>{{ $message }}</p>
@enderror

<br>

<label><strong>Confirmar Contrasenya</strong></label>
<input type="password" name="password_confirmation" required>
<div>
<button type="submit">Registrar-se</button>
</div>
<div>
<a href="{{ route('show.login') }}">Ja tens un compte? Inicia sessió</a>
</div>
</form>
</div>
@endsection