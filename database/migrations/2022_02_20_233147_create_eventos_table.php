<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();

            //En inglés porque así lo maneja Fullcalendar
            $table->string("title", 255);

            //Este es un dato adicional que no especifíca Fullcalendar
            $table->text("hora");

            //El día que se seleccione, el usuario no  lo envia como tal
            $table->dateTime("start");
            $table->dateTime("end");

            $table->timestamps();

            //Se valida en app/Models/Evento
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
