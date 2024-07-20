@extends ('layouts.plantilla')
@section('title', 'Titulares')
@section('content')
    <div class="d-flex justify-content-between">
            <h2>Lista de titulares</h2>
            <a class="btn btn-primary align-self-center" href="{{route('titular.create')}}">Nuevo</a>
    </div>

    <table class="table table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">DNI</th>
                <th scope="col">Domicilio</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($titulares as $titular)
                <tr>
                    <th scope="row">{{$titular->id}}</td>
                    <td>{{$titular->nombre}}</td>
                    <td>{{$titular->apellido}}</td>
                    <td>{{$titular->dni}}</td>
                    <td>{{$titular->domicilio}}</td>
                    <td class="d-flex justify-content-evenly">
                        <a class="btn btn-success" href="{{route('titular.show', $titular->id)}}">Ver</a>
                        <form action="{{ route('titular.destroy', $titular->id) }}" method="POST" onsubmit="return confirmDelete()">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <script src="{{ asset('confirmDelete.js') }}"></script>
@endsection