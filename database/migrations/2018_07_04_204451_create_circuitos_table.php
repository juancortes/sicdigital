<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCircuitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('circuitos', function (Blueprint $table) {
            $table->increments('id_circuito');
            $table->string('codigo_circuito',15)->unique();
            $table->string('nombre',30);
            $table->string('subestacion',30);
            $table->double('voltaje_nominal', 8, 2);
            $table->unsignedInteger('id_division');
            $table->foreign('id_division')->references('id_division')->on('divisiones');
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
        Schema::dropIfExists('circuitos');
    }
}
