<?php

namespace App\Repositories;

use App\Models\Aula;

class AulaRepository
{
    public function all()
    {
        return Aula::all();
    }

    public function find($id)
    {
        return Aula::find($id);
    }

    public function create(array $data)
    {
        return Aula::create($data);
    }

    public function update(array $data, $id)
    {
        $aula = Aula::findOrFail($id);
        $aula->fill();
        $aula->save();
        return $aula;
    }

    public function destroy($id)
    {
        $aula = Aula::findOrFail($id);
        $aula->delete();
    }

    public function findTitulo($id)
    {
        $aula = Aula::findOrFail($id);
        return $aula->titulo;
    }
}
