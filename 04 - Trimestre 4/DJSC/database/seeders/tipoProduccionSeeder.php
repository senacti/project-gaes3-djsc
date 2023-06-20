<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class tipoProduccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipoProducciones = ['Camisas', 'Gorras', 'Pocillos', 'Llaveros', 'Cintas'];

        foreach ($tipoProducciones as $tipo) {
            DB::table('tipo__producciones')->insert([
                'tipoProduccion' => $tipo
            ]);
        }
    }
}
