<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{

    protected $table = 'solicitudes';
    protected $fillable = ['cantidad', 'descripcion'];
    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }
    public function solicitud()
    {
        return $this->hasOne(Solicitud::class);
    }
    public function estadosolicitud()
    {
        return $this->belongsTo(Estado_Solicitud::class, 'id_estado');
    }
}
