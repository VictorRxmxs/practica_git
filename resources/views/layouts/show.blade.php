@extends('layouts.app')
@section('content')

<h1>Detalles del Usuario</h1>

<div class="mb-3">
    <strong>ID:</strong> {{ $usuario->id }}
</div>
<div class="mb-3">
    <strong>Nombre:</strong> {{ $usuario->nombre }}
</div>
<div class="mb-3">
    <strong>Email:</strong> {{ $usuario->email }}
</div>

<a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Volver</a>

@endsection