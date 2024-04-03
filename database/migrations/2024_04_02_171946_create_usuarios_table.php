<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->unique();
            $table->enum('perfil', ['administrador', 'professor', 'aluno'])->nullable();
            $table->string('email')->unique();
            $table->string('senha')->nullable();
            $table->unsignedBigInteger('curso_inscrito')->nullable();
            $table->foreign('curso_inscrito')->references('id')->on('cursos')->onDelete('set null');
            $table->integer('aulas_assistidas')->default(0);
            $table->date('data_nascimento')->nullable();
            $table->enum('sexo', ['masculino', 'feminino', 'outro'])->nullable();
            $table->string('matricula')->nullable();
            $table->string('numero_contato')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
