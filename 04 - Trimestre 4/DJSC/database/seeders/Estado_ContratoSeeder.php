<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Estado_ContratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estadosContrato = ['en espera','en proceso','finalizado'];

        foreach ($estadosContrato as $estadoContrato) {
            DB::table('estado__contratos')->insert([
                'estadoContrato' => $estadoContrato
            ]);
        }
    }
}
