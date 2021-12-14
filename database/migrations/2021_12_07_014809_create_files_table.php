<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            /* CAMPO DONDE SE GUARDARAN LOS ARCHIVOS SUBIDOS */
            $table->string('url');
            /* CAMPO DONDE SE MOSTRARA EL ID DEL USUARIO */
            $table->unsignedBigInteger('user_id');
            /* LLAVE FORANIA Y RELACION CON LA TABLA DEL USUARIO */
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
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
        Schema::dropIfExists('files');
    }
}
