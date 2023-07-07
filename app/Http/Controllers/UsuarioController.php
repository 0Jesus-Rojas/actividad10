<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use App\Models\rol;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = usuario::all();

        return response()->json($usuarios);

        //return view('usuarios.index', ['usuarios'=> $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('usuarios.create', ['roles'=> rol::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombres'=> 'required',
            'apellidos'=> 'required',
            'TipoIdentificacion'=> 'required',
            'NumeroIdentificacion'=> 'required',
            'telefono'=> 'required',
            'correo'=> 'required|email',
            'profesion'=> 'required',
            'rol'=> 'required',
            
        ]);
        $usuario = new usuario();
        $usuario->nombres = $request->nombres;
        $usuario->apellidos = $request->apellidos;
        $usuario->TipoIdentificacion = $request->TipoIdentificacion;
        $usuario->NumeroIdentificacion = $request->NumeroIdentificacion;
        $usuario->Telefono = $request->telefono;
        $usuario->email = $request->correo;
        $usuario->profesion = $request->profesion;
        $usuario->rol_id = $request->rol;
        $usuario->save();

        $data=[
            'message' => 'usuario creado',
            'usuario' => $usuario
        ];
        return response()-> json($data);
        
        //return view("usuarios.message", ['msg'=>"registro guardado"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(usuario $usuario)
    {
        return response()-> json($usuario);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $rol = rol::all();
        $usuario=usuario::find($id);
        return view('usuarios.edit', ['usuario' => $usuario,'rol'=>$rol]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $usuario=usuario::find($id);
        /* $request->validate([
            'nombres'=> 'required',
            'apellidos'=> 'required',
            'TipoIdentificacion'=> 'required',
            'NumeroIdentificacion'=> 'required',
            'telefono'=> 'required',
            'correo'=> 'required|email',
            'profesion'=> 'required',
            'rol'=> 'required',
            
        ]); */
        $usuario =usuario::find($id);
        $usuario->nombres = $request->nombres;
        $usuario->apellidos = $request->apellidos;
        $usuario->TipoIdentificacion = $request->TipoIdentificacion;
        $usuario->NumeroIdentificacion = $request->NumeroIdentificacion;
        $usuario->Telefono = $request->telefono;
        $usuario->email = $request->correo;
        $usuario->profesion = $request->profesion;
        $usuario->rol_id = $request->rol;
        $usuario->save();

        $data=[
            'message' => 'usuario modificado',
            'usuario' => $usuario,
        ];
        return response()-> json($data);

        //return view("usuarios.message", ['msg'=>"registro modificado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usuario=usuario::find($id);
        $usuario->delete();
        $data=[
            'message' => 'usuario eliminado',
            'usuario' => $usuario
        ];
        return response()-> json($data);

        //return redirect("usuarios");
    }
}
