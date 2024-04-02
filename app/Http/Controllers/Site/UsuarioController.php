<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index ()
    {
        $usuarios = Usuario::all();
        return response()->json($usuarios, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function getUser($id)
    {
        $usuario = Usuario::findOrFail($id);
        return response()->json($usuario, 200, [], JSON_UNESCAPED_UNICODE);
    }
}
