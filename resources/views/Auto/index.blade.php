@extends ('layouts.plantilla')
@section('title', 'Autos')
@section('content')
    <div class="d-flex justify-content-between">
            <h2>Lista de autos</h2>
            <a class="btn btn-primary align-self-center" href="{{route('auto.create')}}">Nuevo</a>
    </div>

    <table class="table table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Patente</th>
                <th scope="col">Tipo</th>
                <th scope="col">Titular</th>
            </tr>
        </thead>
        <tbody>
            @foreach($autos as $auto)
                <tr>
                    <th scope="row">{{$auto->id}}</td>
                    <td>{{$auto->marca}}</td>
                    <td>{{$auto->modelo}}</td>
                    <td>{{$auto->patente}}</td>
                    <td>{{$auto->tipo}}</td>
                    <td>{{$auto->titular->nombre}} {{$auto->titular->apellido}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection