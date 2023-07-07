@extends('layout/template')

@section('title', 'Lista de usuarios')
    

@section('contenido')


<main>
    <div class="container py-4">
        <h2>Listado de usuarios</h2>

        <a href="{{url('usuarios/create')}}" class="btn btn-primary btn-sm">Nuevo Registro</a>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Tipo de identificacion</th>
                    <th>Numero de documento</th>
                    <th>Telefono</th>
                    <th>Correo electronico</th>
                    <th>Profesion</th>
                    <th>Rol</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                <tr>
                    <td>{{$usuario->id}}</td>
                    <td>{{$usuario->nombres}}</td>
                    <td>{{$usuario->apellidos}}</td>
                    <td>{{$usuario->TipoIdentificacion}}</td>
                    <td>{{$usuario->NumeroIdentificacion}}</td>
                    <td>{{$usuario->Telefono}}</td>
                    <td>{{$usuario->email}}</td>
                    <td>{{$usuario->profesion}}</td>
                    <td>{{$usuario->rol_id}}</td>
                    <td><a href="{{url('usuarios/'.$usuario->id.'/edit')}}"class="btn btn-warning btn-sm">Editar</a></td>
                    <td>
                        <form action="{{url('usuarios/'.$usuario->id)}}" method="POST">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</main>