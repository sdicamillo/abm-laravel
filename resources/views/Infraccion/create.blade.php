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
    <form action="{{route('infraccion.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" class="form-control" id="fecha" name="fecha">
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
            <label for="patente" class="form-label">Patente</label>
            <select class="form-control" id="patente" name="patente">
                <option value="" disabled selected>Selecciona una patente</option>
                @foreach($autos as $auto)
                    <option value="{{ $auto->id }}">{{ $auto->patente }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion">
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
@endsection