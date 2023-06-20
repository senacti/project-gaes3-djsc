<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class novedadProduccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $novedades = [
            'Retraso en el suministro de materiales',
            'Falla en la maquinaria',
            'Ausencia de personal',
            'Problemas de calidad',
            'Sin novedades',
        ];

        foreach ($novedades as $novedad) {
            DB::table('novedad__producciones')->insert([
                'novedadProduccion' => $novedad
            ]);
        }
    }
}
