@extends ('layouts.plantilla')
@section('title', 'Titulares')
@section('content')
    <h2>Crear titular</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('auto.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <input type="text" class="form-control" id="marca" name="marca">
        </div>
        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo</label>
            <input type="text" class="form-control" id="modelo" name="modelo">
        </div>
        <div class="mb-3">
            <label for="patente" class="form-label">Patente</label>
            <input type="text" class="form-control" id="patente" name="patente">
        </div>
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <select class="form-control" id="tipo" name="tipo">
                <option value="" disabled selected>Selecciona un tipo</option>
                @foreach($tipos as $tipo)
                    <option value="{{ $tipo }}">{{ $tipo }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="titular" class="form-label">Titular</label>
            <select class="form-control" id="titular" name="titular_id">
                <option value="" disabled selected>Selecciona un titular</option>
                @foreach($titulares as $titular)
                    <option value="{{ $titular->id }}">{{ $titular->nombre }} {{ $titular->apellido }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
@endsection