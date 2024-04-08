<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    protected $table = 'aulas';

    protected $fillable = [
        'curso_id', 'titulo', 'descricao', 'link', 'porcentagem_assistida', 'periodo_inicio', 'periodo_fim', 'anotacao'
    ];

    public function cursos()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }
}
