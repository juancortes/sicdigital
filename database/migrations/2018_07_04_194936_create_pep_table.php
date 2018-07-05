<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pep', function (Blueprint $table) {
            $table->increments('id_pep');
            $table->string('pep',15)->unique();
            $table->string('descripcion',50);
            $table->string('nombre_proyecto',50);
            $table->string('codigo_proyecto',50);
            $table->enum('tipo_actividad', ['Inversion', 'Gasto']);
            $table->unsignedInteger('id_division');
            $table->foreign('id_division')->references('id_division')->on('divisiones');
            $table->integer('anio');
            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->boolean('estado')->default(1);
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
        Schema::dropIfExists('pep');
    }
}
