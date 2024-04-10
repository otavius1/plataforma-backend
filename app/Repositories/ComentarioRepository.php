<?php 

namespace App\Repositories;

use App\Models\Comentario;
use App\Models\Curso;

class ComentarioRepository
{
    public function all()
    {
        return Comentario::all();
    }

    public function find($aula_id, $usuario_id)
    {
        return Comentario::where('aula_id', $aula_id)
                         ->where('usuario_id', $usuario_id)
                         ->get();
    }

    public function findByUser($usuario_id)
    {
        return Comentario::where('usuario_id', $usuario_id)->get();
    }

    public function findByClass($aula_id)
    {
        return Comentario::where('aula_id', $aula_id)->get();
    }
    
    public function create(array $data)
    {
        return Comentario::create($data);
    }

    public function update(array $data, $id)
    {
        $comentario = Comentario::find($id);
        $comentario->fill($data);
        $comentario->save();
        return $comentario;
    }

    public function destroy($id)
    {
        $comentario = Comentario::find($id);
        $comentario->delete();
    }
}