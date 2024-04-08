<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\AulaRepository;

class AulaController extends Controller
{
    protected $aulaRepository;

    public function __construct(AulaRepository $aulaRepository)
    {
        $this->aulaRepository = $aulaRepository;
    }

    public function index()
    {
        $aulas = $this->aulaRepository->all();
        return response()->json($aulas, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function getAula($id)
    {
        $aula = $this->aulaRepository->find($id);
        return response()->json($aula, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function create(Request $request)
    {
        $data = $request->all();

        $aula = $this->aulaRepository->create($data);
        return response()->json(['message' => 'Aula criada com sucesso', 'aula' => $aula], 200);
    }

    public function destroy($id)
    {
        $aula = $this->aulaRepository->find($id);
        $aula->destroy($id);
        return response()->json(['message' => 'Aula deletada com sucesso'], 200);
    }
}
