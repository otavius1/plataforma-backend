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
        // Obtém os dados da requisição
        $data = $request->all();

        // Criptografa a senha antes de salvar o usuário
        $data['senha'] = Hash::make($request->input('senha'));

        // Cria o usuário
        $usuario = $this->usuarioRepository->create($data);

        // Retorna a resposta
        return response()->json(['message' => 'Usuário criado com sucesso', 'usuario' => $usuario], 201);
    }

    public function update(UsuarioRequest $request, $id)
    {
        // Obtém os dados da requisição
        $data = $request->all();

        // Verifica se a senha foi fornecida na requisição e se precisa ser atualizada
        if ($request->has('senha')) {
            // Criptografa a nova senha antes de atualizar o usuário
            $data['senha'] = Hash::make($request->input('senha'));
        }

        // Atualiza o usuário
        $usuario = $this->usuarioRepository->update($data, $id);

        // Retorna a resposta
        return response()->json(['message' => 'Usuário atualizado com sucesso', 'usuario' => $usuario], 200);
    }

    public function destroy($id)
    {
        $this->usuarioRepository->destroy($id);
        return response()->json(['message' => 'Usuário deletado com sucesso'], 200);
    }
}
