<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class novedad_Produccion extends Model
{
    protected $table = 'novedad__producciones';
    
    protected $fillable = [
        'novedadProduccion',
    ];
    
    // Relación uno a muchos con el modelo Produccion
    public function producciones()
    {
        return $this->hasMany(Produccion::class, 'id_novedad');
    }
}
