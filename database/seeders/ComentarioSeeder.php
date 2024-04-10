<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comentario;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Criar 10 comentários de exemplo
        for ($i = 0; $i < 10; $i++) {
            Comentario::create([
                'usuario_id' => rand(1, 10), 
                'aula_id' => rand(1, 20),
                'comentario' => 'Este é um comentário de exemplo.'
            ]);
        }
    }
}
