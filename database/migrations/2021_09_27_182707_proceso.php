<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Proceso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procesos',function(Blueprint $table){
            $table->id();

            $table->dateTime('fecha_hora');
            $table->string('informacion');
            $table->boolean('consentimiento');
            $table->unsignedBigInteger('paciente_id');
            $table->unsignedBigInteger('cuidador_id');

            $table->timestamps();//Hora y fecha en la que se realiza un registro y si se actualiza, también muestra hora y fecha
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('procesos');
    }
}
