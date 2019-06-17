<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoIncidentesTable extends Migration
{
    public function up()
    {
        Schema::create('tipo_incidentes', function (Blueprint $table) {
            $table->bigIncrements('id_tipo_incidente');
            $table->string('nome');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipo_incidentes');
    }
}
