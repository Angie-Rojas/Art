<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Paciente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes',function(Blueprint $table) {
            $table->id();

            $table->integer('id_usuario')->nullable();

            $table->dateTime('fecha_nacimiento')->nullable();
            $table->string('nombre', 100);
            $table->string('sexo', 45)->nullable();;
            $table->integer('edad')->nullable();;
            $table->float('peso', 4, 2)->nullable();
            $table->float('altura', 3, 0)->nullable();
            $table->string('grupo_sanguineo', 2)->nullable();
            $table->string('rh', 1)->nullable();
            $table->string('aseguradora', 45)->nullable();
            $table->string('ciudad', 45)->nullable();;
            $table->string('direccion', 100)->nullable();;
            $table->string('telefono',45)->nullable();;
            $table->string('correo')->unique()->nullable();
            $table->string('tipo_paciente', 45)->nullable();
            $table->text('diagnostico')->nullable();
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
        Schema::dropIfExists('pacientes');
    }
}
