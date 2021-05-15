@extends('layouts.app')

@section('content')
    <h1 class="container text-center">Empresas Registradas</h1>

    <div class="col-md-10 mx-auto bg-white p-3">
        <table class="table">
            <thead class="bg-primary text-light">
                <tr>
                    <th>Nombre</th>
                    <th>Cantidad de trabajadores</th>
                    <th>Tipo de empresa</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empresas as $empresa)
                    <tr>
                        <td>{{$empresa->nombre}}</td>
                        @if ($empresa->cantidad_trabajadores==0)
                            <td>No especifica la cantidad de trabajadores</td>
                        @else
                            <td>{{$empresa->cantidad_trabajadores}}</td>
                        @endif
                        <td>{{$empresa->tipo_empresa}}</td>
                        <td>
                            <a href={{ route('empresa.edit', ['empresa'=>$empresa->id]) }} class="btn btn-dark d-block mb-2">Editar</a>
                            <form action="{{route('empresa.destroy',['empresa'=>$empresa->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger d-block w-100 mb-2" value="Eliminar Empresa">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection
