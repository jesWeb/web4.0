<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbEstudiantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tb_estudiantes', function (Blueprint $table) {
            $table->id('id_estudiantes');
            $table->double('Matricula')->unique();
            $table->string('Nombre')->unique();
            $table->string('ApellidoP')->unique();
            $table->integer('FechaN');
            $table->integer('Sexo');
            $table->integer('direccion');
            $table->integer('estudio');
            $table->unsignedBigInteger('id_estado');
            $table->timestamps();
            //foreign Key
            $table->foreign('id_estado')->references('id_estados')->on('tb_estados');
        });
    }
    
    public function down()
    {
        //
        Schema::dropIfExists('tb_estudiantes');
    }

    
}
