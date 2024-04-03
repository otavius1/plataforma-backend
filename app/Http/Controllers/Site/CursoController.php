<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return response()->json($cursos, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function getCourse($id)
    {
        $curso = Curso::findOrFail($id);
        return response()->json($curso, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function create(Request $request)
    {
        $curso = Curso::create($request->all());
        return response()->json(['message' => 'Curso criado com sucesso', $curso], 201, [], JSON_UNESCAPED_UNICODE);
    }

    public function update(Request $request, $id)
    {
        $curso = Curso::find($id);

        $curso->fill($request->all());
        $curso->save();

        return response()->json(['message' => 'Curso atualizado com sucesso', $curso], 201, [], JSON_UNESCAPED_UNICODE);
    }
}
