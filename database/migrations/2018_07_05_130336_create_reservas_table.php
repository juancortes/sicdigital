<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('solicitud',150)->unique();
            $table->unsignedInteger('id_tipo_solicitud');
            $table->foreign('id_tipo_solicitud')->references('id_tipo_solicitud')->on('tipos_solicitudes');
            $table->unsignedInteger('id_persona');
            $table->foreign('id_persona')->references('id_persona')->on('personas');
            $table->unsignedInteger('id_solicitud_movil');
            $table->foreign('id_solicitud_movil')->references('id_solicitud_movil')->on('solicitudes_moviles');
            $table->unsignedInteger('id_empresa_colaboradora');
            $table->foreign('id_empresa_colaboradora')->references('id_empresa_colaboradora')->on('empresas_colaboradoras');
            $table->unsignedInteger('id_zona');
            $table->foreign('id_zona')->references('id_zona')->on('zonas');
            $table->unsignedInteger('id_mobil_ett')->nulleable();
            $table->foreign('id_mobil_ett')->references('id_mobil_ett')->on('mobiles_etts');
            $table->date('fecha_solicitud');
            $table->unsignedInteger('id_municipio');
            $table->foreign('id_municipio')->references('id_municipio')->on('municipios');
            $table->string('vereda',80); 
            $table->unsignedInteger('id_orden_presupuestal');
            $table->foreign('id_orden_presupuestal')->references('id_orden_presupuestal')->on('ordenes_presupuestales');
            $table->unsignedInteger('id_circuito');
            $table->foreign('id_circuito')->references('id_circuito')->on('circuitos');
            $table->string('centro_distribucion',80);
            $table->unsignedInteger('id_tipo_antecedente');
            $table->foreign('id_tipo_antecedente')->references('id_tipo_antecedente')->on('tipos_antecedentes');
            $table->string('referencia_antecedente',50);
            $table->string('observaciones',190);
            $table->string('orden_trabajo_gom',50);
            $table->smallInteger('cantidad_cliente_sin_servicio')->nulleable();
            $table->date('fecha_necesidad')->nulleable();
            $table->unsignedInteger('id_motivo_pendiente')->nulleable();
            $table->foreign('id_motivo_pendiente')->references('id_motivo_pendiente')->on('motivos_pendientes');
            $table->date('fecha_pendiente')->nulleable();
            $table->enum('estado_solicitud', ['Nueva', 'Pendiente','Salida_manual'])->default('Nueva');
            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('reservas');
    }
}
