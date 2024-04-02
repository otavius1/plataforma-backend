<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Curso;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
            'nome' => 'Cristiano Ronaldo dos Santos Aveiro',
            'email' => 'usuario1@exemplo.com',
            'senha' => Hash::make('senha123'),
            'curso_inscrito' => Curso::where('titulo', 'Engenharia de Software')->first()->id,
            'aulas_assistidas' => 0,
            'data_nascimento' => '1990-01-01',
            'sexo' => 'masculino',
            'matricula' => '123456789',
            'numero_contato' => '123456789',
        ]);

        Usuario::create([
            'nome' => 'Neymar da Silva Santos Júnior',
            'email' => 'usuario2@exemplo.com',
            'senha' => Hash::make('senha123'),
            'curso_inscrito' => Curso::where('titulo', 'Ciência da Computação')->first()->id,
            'aulas_assistidas' => 0,
            'data_nascimento' => '1995-05-15',
            'sexo' => 'feminino',
            'matricula' => '987654321',
            'numero_contato' => '987654321',
        ]);

        Usuario::create([
            'nome' => 'Suphachai Saenpong',
            'email' => 'usuario3@exemplo.com',
            'senha' => Hash::make('senha123'),
            'curso_inscrito' => Curso::where('titulo', 'Sistemas de Informação')->first()->id,
            'aulas_assistidas' => 0,
            'data_nascimento' => '1992-08-20',
            'sexo' => 'masculino',
            'matricula' => '543210987',
            'numero_contato' => '111222333',
        ]);
    }
}
