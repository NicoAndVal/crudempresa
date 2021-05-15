@extends('layouts.app')

@section('content')
    <h1 class="container text-center">Crea una nueva empresa</h1>

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            {{-- Formulario para crear una nueva empresa --}}
            <form action={{route('empresas.store')}} method="POST" novalidate>
                @csrf

                {{-- Input del nombre --}}
                <div class="form-group">
                    <label for="nombre">Nombre de la empresa</label>

                    <input type="text"
                        name="nombre"
                        class="form-control @error('nombre') is-invalid @enderror"
                        id="nombre"
                        placeholder="Nombre de la empresa"
                        value={{old('nombre')}}>
           {{-- Muestra el error --}}
                    @error('nombre')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>
                                {{$message}}
                            </strong>
                        </span>
                    @enderror
                </div>


                {{-- Input cantidad de trabajadores --}}
                <div class="form-group">
                    <label for="cantidad_trabajadores">Número de trabajadores</label>

                    <input type="number"
                        name="cantidad_trabajadores"
                        class="form-control "
                        id="cantidad_trabajadores"
                        placeholder="Cantidad de trabajadores"
                        value={{old('cantidad_trabajadores')}}
                    >
                </div>

                {{-- Select de los tipos de empresa --}}
                <div class="form-group">
                    <label for="tipo_empresa">Tipo Empresa</label>

                    <select name="tipo_empresa" id="tipo_empresa" class="form-control @error('tipo_empresa') is-invalid @enderror">
                        <option value="">--Seleccione--</option>
                        {{-- Se recorre el arreglo para obtener el tipo de empresas --}}
                        @foreach ($tipo_empresa as $id=>$tipo)
                            <option value={{$tipo}} {{old('tipo_empresa') ==$id ? 'selected':''}} >{{$tipo}}</option>
                        @endforeach
                    </select>
           {{-- Muestra el error --}}
                    @error('tipo_empresa')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                {{-- Submit para guardar empresa --}}
                <div class="form-group">
                    <input type="submit" value="Agrega Empresa" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection
