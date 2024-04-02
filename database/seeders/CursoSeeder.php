<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curso::create([
            'titulo' => 'Engenharia de Software',
            'descricao' => 'Curso de Engenharia de Software com foco no desenvolvimento de software de alta qualidade.',
        ]);

        Curso::create([
            'titulo' => 'Ciência da Computação',
            'descricao' => 'Curso de Ciência da Computação com ênfase em algoritmos, programação e computação teórica.',
        ]);

        Curso::create([
            'titulo' => 'Sistemas de Informação',
            'descricao' => 'Curso de Sistemas de Informação com enfoque em gestão e desenvolvimento de sistemas.',
        ]);

        Curso::create([
            'titulo' => 'Tecnologia da Informação',
            'descricao' => 'Curso de Tecnologia da Informação com abordagem prática em tecnologias e sistemas de informação.',
        ]);

        Curso::create([
            'titulo' => 'Engenharia Elétrica',
            'descricao' => 'Curso de Engenharia Elétrica com ênfase em sistemas elétricos e eletrônicos.',
        ]);

        Curso::create([
            'titulo' => 'Engenharia Mecânica',
            'descricao' => 'Curso de Engenharia Mecânica com foco em projetos e manutenção de máquinas e equipamentos.',
        ]);

        Curso::create([
            'titulo' => 'Administração',
            'descricao' => 'Curso de Administração com ênfase em gestão empresarial e estratégias de negócios.',
        ]);

        Curso::create([
            'titulo' => 'Medicina',
            'descricao' => 'Curso de Medicina com abordagem teórica e prática em ciências médicas e saúde humana.',
        ]);

        Curso::create([
            'titulo' => 'Direito',
            'descricao' => 'Curso de Direito com foco em legislação, justiça e práticas jurídicas.',
        ]);
    }
}
