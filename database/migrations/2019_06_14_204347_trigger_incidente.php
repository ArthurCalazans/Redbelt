<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TriggerIncidente extends Migration
{
    public function up()
    {
        DB::unprepared('
        CREATE DEFINER = CURRENT_USER TRIGGER `teste`.`incidentes_BEFORE_UPDATE` BEFORE UPDATE ON `incidentes` FOR EACH ROW
        BEGIN
            set new.updated_at = now();
        END
        ');
    }

    public function down()
    {
        DB::unprepared('DROP TRIGGER IF EXISTS `teste`.`incidentes_BEFORE_UPDATE`');
    }
}
