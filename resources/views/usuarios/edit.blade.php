@extends('layout/template')

@section('title', 'Editar usuarios')
    

@section('contenido')

<main>
    <div class="container py-4">
        <h2>Editar usuario</h2>
        @if($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </ul>
        </div>
        @endif
        <form action="{{url('usuarios/'.$usuario->id)}}" method="post">
            @method("PUT")
            @csrf
            {{-- input nombre --}}
            <div class="mb-3 row">
                <label for="nombres" class="col-sm-2 col-form-label">nombres</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nombres" id="nombres" value{{$usuario->nombres}}>
                </div>
            </div>

            {{-- input apellidos --}}
            <div class="mb-3 row">
                <label for="apellidos" class="col-sm-2 col-form-label">apellidos</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="apellidos" id="apellidos" value{{$usuario->apellidos}}>
                </div>
            </div>

            {{-- input Tipo de identificacion --}}
            <div class="mb-3 row">
                <label for="TipoIdentificacion" class="col-sm-2 col-form-label">tipo de identificacion</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="TipoIdentificacion" id="TipoIdentificacion" value{{$usuario->TipoIdentificacion}}>
                </div>
            </div>

            {{-- input numero de identificacion --}}
            <div class="mb-3 row">
                <label for="NumeroIdentificacion" class="col-sm-2 col-form-label">numero de identificacion</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="NumeroIdentificacion" id="NumeroIdentificacion" value{{$usuario->NumeroIdentificacion}}>
                </div>
            </div>
            {{-- input numero de telefono --}}
            <div class="mb-3 row">
                <label for="telefono" class="col-sm-2 col-form-label">telefono</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" name="telefono" id="telefono" value{{$usuario->telefono}}>
                </div>
            </div>

            {{-- input correo electronico --}}
            <div class="mb-3 row">
                <label for="correo" class="col-sm-2 col-form-label">correo</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="correo" id="correo" value{{$usuario->correo}}>
                </div>
            </div>

            {{-- input profesion --}}
            <div class="mb-3 row">
                <label for="profesion" class="col-sm-2 col-form-label">profesion</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="profesion" id="profesion" value{{$usuario->profesion}}>
                </div>
            </div>

            {{-- input rol --}}
            <div class="mb-3 row">
                <label for="rol" class="col-sm-2 col-form-label">rol</label>
                <div class="col-sm-5">
                    <select name="rol" id="rol" class="form-select">
                        <option value="">seleccionar nivel</option>
                        <option value="1">administrador</option>
                        <option value="2">visualizador</option>
                        <option value="3">ejecutor</option>
                        <option value="4">invitado</option>
                    </select>
                </div>
            </div>
            <a href="{{url('usuarios')}}" class="btn btn-secondary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>        
        </form>
    </div>
</main>