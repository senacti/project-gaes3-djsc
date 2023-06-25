<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Estado_SubEmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estadosSubempresa = ['disponible','ocupada'];

        foreach ($estadosSubempresa as $estadoSubempresa) {
            DB::table('estado__sub__empresas')->insert([
                'estadoSubEmpresa' => $estadoSubempresa
            ]);
        }
    }
}
