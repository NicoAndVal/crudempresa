<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema de los tipos de empresa
        Schema::create('tipo_empresa', function(Blueprint $table){
            $table->id();
            $table->string('tipo');
            $table->timestamps();
        });

        //Schema de las empresas
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            // $table->foreignId('tipo_empresa_id')->references('id')->on('tipo_empresa')->comment('Los tipos de empresas que se pueden ingresar');
            $table->string('tipo_empresa');
            $table->integer('cantidad_trabajadores')->nullable();
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
        Schema::dropIfExists('empresas');
        Schema::dropIfExists('tipo_empresa');
    }
}
