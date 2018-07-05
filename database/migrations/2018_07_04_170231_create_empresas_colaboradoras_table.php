<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasColaboradorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('empresas_colaboradoras', function (Blueprint $table) {
            $table->increments('id_empresa_colaboradora');
            $table->integer('codigo_empresa')->unique();
            $table->string('nombre_empresa',80);
            $table->unsignedInteger('id_tipo_precio');
            $table->foreign('id_tipo_precio')->references('id_tipo_precio')->on('tipos_precios');
            $table->string('destinatario',80);
            $table->integer('identificacion')->unique();
            $table->boolean('estado')->default(1);
            $table->unsignedInteger('id_solicitud_movil');
            $table->foreign('id_solicitud_movil')->references('id_solicitud_movil')->on('solicitudes_moviles');
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
        Schema::dropIfExists('empresas_colaboradoras');
    }
}
