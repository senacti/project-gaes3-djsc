<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_Produccion extends Model
{
    protected $table = 'tipo__producciones';
    
    protected $fillable = [
        'tipoProduccion',
    ];
    
    // Relación uno a muchos con el modelo Produccion
    public function producciones()
    {
        return $this->hasMany(Produccion::class, 'id_tipo');
    }
}