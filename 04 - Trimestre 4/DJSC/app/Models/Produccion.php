<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produccion extends Model
{
    protected $table = 'producciones';

    protected $fillable = [
        'fechaproduccion',
        'id_tipo',
        'id_estado',
        'id_novedad',
    ];
    
    // Relación muchos a uno con el modelo TipoProduccion
    public function tipoProduccion()
    {
        return $this->belongsTo(tipo_Produccion::class, 'id_tipo');
    }
    
    // Relación muchos a uno con el modelo EstadoProduccion
    public function estadoProduccion()
    {
        return $this->belongsTo(estado_Produccion::class, 'id_estado');
    }
    
    // Relación muchos a uno con el modelo NovedadProduccion
    public function novedadProduccion()
    {
        return $this->belongsTo(novedad_Produccion::class, 'id_novedad');
    }
}
