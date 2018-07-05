<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenesPresupuestalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes_presupuestales', function (Blueprint $table) {
            $table->increments('id_orden_presupuestal');
            $table->string('orden',15)->unique();
            $table->string('descripcion',50);
            $table->unsignedInteger('id_pep');
            $table->foreign('id_pep')->references('id_pep')->on('pep');
            $table->unsignedInteger('id_base_activo');
            $table->foreign('id_base_activo')->references('id_base_activo')->on('bases_activos');
            $table->unsignedInteger('id_circuito');
            $table->foreign('id_circuito')->references('id_circuito')->on('circuitos');
            $table->enum('tipo_activo', ['Inversion', 'Gasto']);
            $table->smallInteger('anio');
            $table->unsignedInteger('id_division');
            $table->foreign('id_division')->references('id_division')->on('divisiones');
            $table->string('factibilidad',50)->nulleable();
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
        Schema::dropIfExists('ordenes_presupuestales');
    }
}
