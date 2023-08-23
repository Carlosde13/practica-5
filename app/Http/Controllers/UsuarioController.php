<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function create(Request $post)
    {

        $nuevoUsuario = new Usuario();

        $nuevoUsuario->nombre= $post->nombre;
        $nuevoUsuario->apellido= $post->apellido;
        $nuevoUsuario->email= $post->email;
        $nuevoUsuario->contrasena= password_hash($post->contrasena, PASSWORD_DEFAULT); //la contrasena se guarda encriptada

        $nuevoUsuario->save();

        return "El registro se creo correctamente";
    }
}
