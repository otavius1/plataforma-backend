<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';

    protected $fillable = [
        'nome', 'perfil', 'email', 'senha', 'curso_inscrito', 'aulas_assistidas', 'data_nascimento', 'sexo', 'matricula', 'numero_contato',
    ];

    protected $hidden = [
        'senha',
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_inscrito');
    }
}
