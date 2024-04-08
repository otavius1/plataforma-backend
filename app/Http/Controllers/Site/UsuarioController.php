<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UsuarioRequest;
use App\Repositories\UsuarioRepository;

class UsuarioController extends Controller
{
    protected $usuarioRepository;

    public function __construct(UsuarioRepository $usuarioRepository)
    {
        $this->usuarioRepository = $usuarioRepository;
    }

    public function index()
    {
        $usuarios = $this->usuarioRepository->all();
        return response()->json($usuarios, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function getUser($id)
    {
        $usuario = $this->usuarioRepository->find($id);
        return response()->json($usuario, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function create(UsuarioRequest $request)
    {
        $data = $request->all();
        $data['senha'] = Hash::make($request->input('senha'));

        $usuario = $this->usuarioRepository->create($data);
        return response()->json(['message' => 'Usuário criado com sucesso', 'usuario' => $usuario], 201);
    }

    public function update(UsuarioRequest $request, $id)
    {
        $data = $request->all();

        if ($request->has('senha')) {
            $data['senha'] = Hash::make($request->input('senha'));
        }

        $usuario = $this->usuarioRepository->update($data, $id);
        return response()->json(['message' => 'Usuário atualizado com sucesso', 'usuario' => $usuario], 200);
    }

    public function destroy($id)
    {
        $this->usuarioRepository->destroy($id);
        return response()->json(['message' => 'Usuário deletado com sucesso'], 200);
    } 
}
