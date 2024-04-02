<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index ()
    {
        $cursos = Curso::all();
        return response()->json($cursos, 200, [], JSON_UNESCAPED_UNICODE);
    }

    
}
