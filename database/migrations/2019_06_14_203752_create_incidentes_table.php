<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncidentesTable extends Migration
{
    public function up()
    {
        Schema::create('incidentes', function (Blueprint $table) {
            $table->bigIncrements('id_incidente');
            $table->string('titulo');
            $table->string('descricao', 999);
            $table->integer('criticidade');
            $table->bigInteger('id_tipo_incidente')->unsigned();
            $table->foreign('id_tipo_incidente')->references('id_tipo_incidente')->on('tipo_incidentes')->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('status')->default(1);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->nullable();
        });
    }
    public function down()
    {
        Schema::dropIfExists('incidentes');
    }
}
