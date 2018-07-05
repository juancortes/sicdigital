<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudesMovilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes_moviles', function (Blueprint $table) {
            $table->increments('id_solicitud_movil');
            $table->string('solicitud',50)->unique();
            $table->boolean('estado')->default(1);
            $table->unsignedInteger('id_tipo_solicitud');
            $table->foreign('id_tipo_solicitud')->references('id_tipo_solicitud')->on('tipos_solicitudes');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitudes_moviles');
    }
}
