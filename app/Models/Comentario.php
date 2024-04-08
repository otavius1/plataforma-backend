<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $fillable = ['usuario_id', 'aula_id', 'comentario'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function aula()
    {
        return $this->belongsTo(Aula::class);
    }
}
