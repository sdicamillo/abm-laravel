@extends ('layouts.plantilla')
@section('title', 'Infracciones')
@section('content')
    <div class="d-flex justify-content-between">
            <h2>Lista de infracciones</h2>
            <a class="btn btn-primary align-self-center" href="{{route('infraccion.create')}}">Nueva</a>
    </div>
        

    <table class="table table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Fecha</th>
                <th scope="col">Tipo</th>
                <th scope="col">Descripción</th>
                <th scope="col">Auto</th>
            </tr>
        </thead>
        <tbody>
            @foreach($infracciones as $infraccion)
                <tr>
                    <th scope="row">{{$infraccion->id}}</td>
                    <td>{{$infraccion->fecha}}</td>
                    <td>{{$infraccion->tipo}}</td>
                    <td>{{$infraccion->descripcion}}</td>
                    <td>{{$infraccion->auto->patente}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection