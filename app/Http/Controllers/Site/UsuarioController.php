<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Http\Requests\UsuarioRequest;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return response()->json($usuarios, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function getUser($id)
    {
        $usuario = Usuario::findOrFail($id);
        return response()->json($usuario, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function create(UsuarioRequest $request)
    {
        $name = $request->input('nome');
        $perfil = $request->input('perfil');
        $email = $request->input('email');
        $senha = $request->input('senha');
        $curso_Inscrito = $request->input('curso_Inscrito');
        $aulas_assistidas = $request->input('aulas_assistidas');
        $data_nascimento = $request->input('data_nascimento');
        $sexo = $request->input('sexo');
        $matricula = $request->input('matricula');
        $numero_contato = $request->input('numero_contato');

        $user_exists = Usuario::where('matricula', $matricula)
            ->orWhere('email', $email)
            ->first();

        if ($user_exists) {
            return response()->json(['message' => 'Usuário já existe'], 409, [], JSON_UNESCAPED_UNICODE);
        }

        $usuario = Usuario::create($request->all());

        return response()->json(['message' => 'Usuário criado com sucesso', 'usuario' => $usuario], 201, [], JSON_UNESCAPED_UNICODE);
    }

    public function update(UsuarioRequest $request, $id)
    {
        $usuario = Usuario::find($id);

        $usuario->fill($request->all());
        $usuario->save();

        return response()->json(['message' => 'Usuario atualizado com sucesso', $usuario], 201, [], JSON_UNESCAPED_UNICODE);
    }

    public function destroy($id)
    {
        $usuario = Usuario::find($id);

        $usuario->delete();

        return response()->json(['message' => 'Usuário excluído com sucesso', 'usuario' => $usuario], 201, [], JSON_UNESCAPED_UNICODE);
    }
}
