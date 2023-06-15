<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado_Solicitud extends Model
{
    protected $table = 'estado__solicitudes';

    public function solicitudes()
    {
        return $this->hasMany(Solicitud::class, 'id_estado');
    }
}
