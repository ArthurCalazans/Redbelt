<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TriggerTipoIncidentes extends Migration
{
    public function up()
    {
        DB::unprepared('
        CREATE DEFINER = CURRENT_USER TRIGGER `teste`.`tipo_incidentes_BEFORE_UPDATE` BEFORE UPDATE ON `tipo_incidentes` FOR EACH ROW
        BEGIN
            set new.created_at = now();
        END
        ');
    }

    public function down()
    {
        DB::unprepared('DROP TRIGGER IF EXISTS `teste`.`tipo_incidentes_BEFORE_UPDATE`');
    }
}
