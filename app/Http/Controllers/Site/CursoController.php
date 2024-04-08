<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Repositories\CursoRepository;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    protected $cursoRepository;

    public function __construct(CursoRepository $cursoRepository)
    {
        $this->cursoRepository = $cursoRepository;
    }

    public function index()
    {
        $cursos = $this->cursoRepository->all();
        return response()->json($cursos, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function getCourse($id)
    {
        $curso = $this->cursoRepository->find($id);
        return response()->json($curso, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function create(Request $request)
    {
        $curso = $this->cursoRepository->create($request->all());
        return response()->json(['message' => 'Curso criado com sucesso', $curso], 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function update(Request $request, $id)
    {
        $curso = $this->cursoRepository->update($request->all(), $id);
        return response()->json(['message' => 'Curso atualizado com sucesso', $curso], 201, [], JSON_UNESCAPED_UNICODE);
    }
    
    public function destroy($id)
    {
        $curso = $this->cursoRepository->destroy($id);
        return response()->json(['message' => 'Curso deletado com sucesso'], 201);

    }
}
