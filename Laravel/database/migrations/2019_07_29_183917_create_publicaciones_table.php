<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('owner_id');
            $table->string('contenido')->nullable();
            $table->string('tipo_publicacion');
            $table->string('imagen')->nullable();
            $table->string('archivo')->nullable();
            $table->string('empresa');
            $table->string('area');
            $table->string('puesto');
            $table->string('persona');
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
        Schema::dropIfExists('publicaciones');
    }
}
