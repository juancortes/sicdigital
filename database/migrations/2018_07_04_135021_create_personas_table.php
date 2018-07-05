<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id_persona');
            $table->string('nombre1',80);
            $table->string('nombre2',80)->nulleable();
            $table->string('apellido1',80);
            $table->string('apellido2',80)->nulleable();
            $table->string('correo',120)->unique();
            $table->unsignedInteger('id_tipo_documento');
            $table->integer('cedula')->unique();
            $table->foreign('id_tipo_documento')->references('id_tipo_documento')->on('tipos_documentos'); 
            $table->enum('genero', ['M', 'F']);
            $table->unsignedInteger('id_cargo');
            $table->foreign('id_cargo')->references('id_cargo')->on('cargos'); 
            $table->date('fecha_nacimeinto');
            $table->string('centro_costos',10);
            $table->unsignedInteger('id_division')->nulleable();
            $table->foreign('id_division')->references('id_division')->on('divisiones'); 
            $table->unsignedInteger('id_regimen');
            $table->foreign('id_regimen')->references('id_regimen')->on('regimenes');
            $table->string('co',18)->unique();
            $table->boolean('estado')->default(1);
            $table->string('movil',11);
            $table->string('extension',8)->nulleable();
            $table->unsignedInteger('id_sede_trabajo')->nulleable();
            $table->foreign('id_sede_trabajo')->references('id_sede_trabajo')->on('sedes_trabajo');
            $table->unsignedInteger('id_horario_trabajo');
            $table->foreign('id_horario_trabajo')->references('id_horario_trabajo')->on('horarios_trabajo');
            $table->unsignedInteger('id_rol_proceso');
            $table->foreign('id_rol_proceso')->references('id_rol_proceso')->on('roles_procesos');
            $table->unsignedInteger('id_proceso_encargado');
            $table->foreign('id_proceso_encargado')->references('id_proceso_encargado')->on('procesos_encargados');
            $table->unsignedInteger('id_proceso')->nulleable();
            $table->foreign('id_proceso')->references('id_proceso')->on('procesos');
            $table->unsignedInteger('id_tipo_contrato')->nulleable();
            $table->foreign('id_tipo_contrato')->references('id_tipo_contrato')->on('tipos_contratos');
            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->unsignedInteger('id_tipo_persona');
            $table->foreign('id_tipo_persona')->references('id_tipo_persona')->on('tipos_personas');
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
        Schema::dropIfExists('personas');
    }
}
