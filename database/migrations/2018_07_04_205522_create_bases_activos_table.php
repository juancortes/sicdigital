<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasesActivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bases_activos', function (Blueprint $table) {
            $table->increments('id_base_activo');
            $table->unsignedInteger('activo');
            $table->string('denominacion',50);
            $table->char('nivel_tension',5);
            $table->enum('tipo_elemento', ['AEREO', 'SUBT']);
            $table->string('instalacion',10);
            $table->string('clase_activos',10);
            $table->unsignedInteger('id_division');
            $table->foreign('id_division')->references('id_division')->on('divisiones');
            $table->unsignedInteger('id_circuito');
            $table->foreign('id_circuito')->references('id_circuito')->on('circuitos');
            $table->boolean('estado')->default(1);
            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('bases_activos');
    }
}
