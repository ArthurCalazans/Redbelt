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
            $table->string('titulo')->nullable();
            $table->string('descricao')->nullable();
            $table->integer('criticidade');
            $table->integer('tipo');
            $table->boolean('status');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->nullable();
        });
    }
    public function down()
    {
        Schema::dropIfExists('incidentes');
    }
}
