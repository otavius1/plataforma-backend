<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Repositories\ComentarioRepository;
use App\Repositories\AulaRepository;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    protected $comentarioRepository;
    protected $aulaRepository;

    public function __construct(ComentarioRepository $comentarioRepository, AulaRepository $aulaRepository)
    {
        $this->comentarioRepository = $comentarioRepository;
        $this->aulaRepository = $aulaRepository; 
    }

    public function index()
    {
        $comentarios = $this->comentarioRepository->all();
        return response()->json($comentarios, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function getComentario($aula_id, $usuario_id)
    {
        $comentarios = $this->comentarioRepository->find($aula_id, $usuario_id);
        return response()->json($comentarios, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function getComentarioPorAula($aula_id)
    {
        $tituloAula = $this->aulaRepository->findTitulo($aula_id);
        $comentarios = $this->comentarioRepository->findByClass($aula_id);

        $data = [
            'titulo_da_aula' => $tituloAula,
            'comentarios' => $comentarios,
        ];
    
        return response()->json($data, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function getComentarioPorUsuario($usuario_id)
    {
        $comentarios = $this->comentarioRepository->findByUser($usuario_id);
        return response()->json($comentarios, 200, [], JSON_UNESCAPED_UNICODE);
    }
}
