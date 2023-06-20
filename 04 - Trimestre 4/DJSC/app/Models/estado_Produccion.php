<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estado_Produccion extends Model
{
    protected $table = 'estado__producciones';
    
    protected $fillable = [
        'estadoProduccion',
    ];
    
    // Relación uno a muchos con el modelo Produccion
    public function producciones()
    {
        return $this->hasMany(Produccion::class, 'id_estado');
    }
}
