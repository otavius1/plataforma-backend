<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';

    protected $fillable = [
        'titulo', 'descricao',
    ];

    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'curso_inscrito');
    }
}