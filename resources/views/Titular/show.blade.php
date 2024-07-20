@extends ('layouts.plantilla')
@section('title', 'Titular ' .  $titular->id)
@section('content')
    <div class="d-flex justify-content-between">
        <h2>Titular {{$titular->id}}</h2>
        <a href="{{route('titular.edit', $titular)}}" class="btn btn-primary d-flex align-items-center">Editar</a>
    </div>
    <p class="mb-3"><span class="fw-semibold">Nombre: </span> {{$titular->nombre}}</p>
    <p class="mb-3"><span class="fw-semibold">Apellido: </span> {{$titular->apellido}}</p>
    <p class="mb-3"><span class="fw-semibold">DNI: </span> {{$titular->dni}}</p>
    <p class="mb-3"><span class="fw-semibold">Domicilio: </span> {{$titular->domicilio}}</p>
@endsection