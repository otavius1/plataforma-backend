<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Aula;
use Carbon\Carbon;

class AulaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aula::create([
            'curso_id' => 1,
            'titulo' => 'Relacionamentos no Eloquent',
            'descricao' => 'Aula sobre os diferentes tipos de relacionamentos no Eloquent ORM.',
            'link' => 'https://www.exemplo.com/aula3',
            'porcentagem_assistida' => 0,
            'periodo_inicio' => '2024-04-09',
            'periodo_fim' => '2024-12-20',
            'anotacao' => 'Nesta aula, vamos explorar os relacionamentos como "um para um", "um para muitos" e "muitos para muitos" no Laravel.',
        ]);

        Aula::create([
            'curso_id' => 1,
            'titulo' => 'Eloquent ORM',
            'descricao' => 'Aula sobre o Eloquent ORM do Laravel.',
            'link' => 'https://www.exemplo.com/aula2',
            'porcentagem_assistida' => 0,
            'periodo_inicio' => '2024-04-09',
            'periodo_fim' => '2024-12-20',
            'anotacao' => 'Nesta aula, aprenderemos sobre o uso do Eloquent ORM para interagir com o banco de dados.',
        ]);

        Aula::create([
            'curso_id' => 1,
            'titulo' => 'Relacionamentos no Eloquent',
            'descricao' => 'Aula sobre os diferentes tipos de relacionamentos no Eloquent ORM.',
            'link' => 'https://www.exemplo.com/aula3',
            'porcentagem_assistida' => 0,
            'periodo_inicio' => '2024-04-10',
            'periodo_fim' => '2024-12-20',
            'anotacao' => 'Nesta aula, vamos explorar os relacionamentos como "um para um", "um para muitos" e "muitos para muitos" no Laravel.',
        ]);

        Aula::create([
            'curso_id' => 2,
            'titulo' => 'Autenticação de Usuários',
            'descricao' => 'Aula sobre como implementar autenticação de usuários no Laravel.',
            'link' => 'https://www.exemplo.com/aula4',
            'porcentagem_assistida' => 0,
            'periodo_inicio' => '2024-04-11',
            'periodo_fim' => '2024-12-20',
            'anotacao' => 'Nesta aula, aprenderemos a usar o sistema de autenticação embutido do Laravel para autenticar usuários em nosso aplicativo.',
        ]);

        Aula::create([
            'curso_id' => 3,
            'titulo' => 'Testes no Laravel',
            'descricao' => 'Aula sobre como escrever e executar testes no Laravel.',
            'link' => 'https://www.exemplo.com/aula5',
            'porcentagem_assistida' => 0,
            'periodo_inicio' => '2024-04-12',
            'periodo_fim' => '2024-12-20',
            'anotacao' => 'Nesta aula, vamos aprender sobre testes automatizados e como eles são implementados no Laravel.',
        ]);

        Aula::create([
            'curso_id' => 4,
            'titulo' => 'Introdução ao Vue.js',
            'descricao' => 'Aula introdutória sobre o framework Vue.js.',
            'link' => 'https://www.exemplo.com/aula6',
            'porcentagem_assistida' => 0,
            'periodo_inicio' => '2024-04-13',
            'periodo_fim' => '2024-12-20',
            'anotacao' => 'Nesta aula, vamos explorar os conceitos básicos do Vue.js e como integrá-lo ao Laravel.',
        ]);

        Aula::create([
            'curso_id' => 5,
            'titulo' => 'Deploy de Aplicações Laravel',
            'descricao' => 'Aula sobre como fazer o deploy de aplicações Laravel em servidores de produção.',
            'link' => 'https://www.exemplo.com/aula7',
            'porcentagem_assistida' => 0,
            'periodo_inicio' => '2024-04-14',
            'periodo_fim' => '2024-12-20',
            'anotacao' => 'Nesta aula, vamos aprender sobre as melhores práticas para fazer o deploy de aplicações Laravel e garantir que elas funcionem corretamente em ambientes de produção.',
        ]);
    }
}
