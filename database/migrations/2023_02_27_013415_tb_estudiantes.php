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
            $table->integer('Matricula')->unique();
            $table->string('Nombre')->unique();
            $table->string('ApellidoP')->unique();
            $table->double('FechaN');
            $table->string('Sexo');
            $table->string('direccion');
            $table->string('estudio');
            $table->unsignedBigInteger('id_estados');
            $table->timestamps();
            //foreign Key
            $table->foreign('id_estados')->references('id_estados')->on('tb_estados');
        });
    }
    
    public function down()
    {
        //
        Schema::dropIfExists('tb_estudiantes');
    }

    
}
