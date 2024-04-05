<?php

namespace App\Repositories;

use App\Models\Curso;

class CursoRepository
{
    public function all()
    {
        return Curso::all();
    }

    public function find($id)
    {
        return Curso::findOrFail($id);
    }

    public function create(array $data)
    {
        return Curso::create($data);
    }

    public function update(array $data, $id)
    {
        $curso = Curso::find($id);
        $curso->fill($data);
        $curso->save();
        return $curso;
    }
}
