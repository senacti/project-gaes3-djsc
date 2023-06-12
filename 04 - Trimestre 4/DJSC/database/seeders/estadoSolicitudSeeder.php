<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class estadoSolicitudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estados = ['en proceso','finalizada','cancelada'];

        foreach ($estados as $estado) {
            DB::table('estado__solicitudes')->insert([
                'estadoSolicitud'=>$estado
            ]);
        }
    }
}
