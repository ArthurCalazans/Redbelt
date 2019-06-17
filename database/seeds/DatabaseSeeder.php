<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_incidentes')->insert([
            'nome' => "Ataque Brute Force",
        ]);
        DB::table('tipo_incidentes')->insert([
            'nome' => "Credencias vazadas",
        ]);
        DB::table('tipo_incidentes')->insert([
            'nome' => "Ataque de DDoS",
        ]);
        DB::table('tipo_incidentes')->insert([
            'nome' => "Atividades anormais de usuários",
        ]);
    }
}
