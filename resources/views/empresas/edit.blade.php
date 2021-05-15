@extends('layouts.app')

@section('content')
    <h1 class="container text-center">Editar la empresa : {{$empresa->nombre}}</h1>

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            {{-- Formulario para crear una nueva empresa --}}
            <form action={{route('empresa.update',['empresa'=>$empresa->id])}} method="POST" novalidate>
                @csrf

                {{-- Se actualiza la empresa por el método put --}}
                @method('PUT')
                {{-- Input del nombre de la empresa --}}
                <div class="form-group">
                    <label for="nombre">Nombre de la empresa</label>

                    <input type="text"
                        name="nombre"
                        class="form-control @error('nombre') is-invalid @enderror"
                        id="nombre"
                        placeholder="Nombre de la empresa"
                        value='{{$empresa->nombre}}'
                    />
                    {{-- Se muestra el error --}}
                    @error('nombre')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>
                                {{$message}}
                            </strong>
                        </span>
                    @enderror
                </div>
                {{-- Input de la cantidad de trabajadores --}}
                <div class="form-group">
                    <label for="cantidad_trabajadores">Número de trabajadores</label>

                    <input type="number"
                        name="cantidad_trabajadores"
                        class="form-control "
                        id="cantidad_trabajadores"
                        placeholder="Cantidad de trabajadores"
                        value='{{$empresa->cantidad_trabajadores}}'
                    >
                </div>

                {{-- Input del tipo de empresa --}}
                <div class="form-group">
                    <label for="tipo_empresa">Tipo Empresa</label>

                    <select name="tipo_empresa" id="tipo_empresa" class="form-control @error('tipo_empresa') is-invalid @enderror">
                        <option value="">--Seleccione--</option>
                        {{-- Se recorre el arreglo para obtener el tipo de empresas --}}
                        @foreach ($tipos_empresa as $tipo)
                            <option value={{$tipo}} {{$empresa->tipo_empresa==$tipo ? 'selected':''}} >{{$tipo}}</option>
                        @endforeach
                    </select>
                    {{-- Se muestra el error --}}
                    @error('tipo_empresa')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="submit" value="Agrega Empresa" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection
