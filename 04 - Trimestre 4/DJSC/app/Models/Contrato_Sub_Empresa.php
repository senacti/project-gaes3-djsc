<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato_Sub_Empresa extends Model
{
    use HasFactory;

    public function estado_contrato(){
        return $this->belongsTo(Estado_Contrato::class,'id_estado');
    }
    public function subempresa()
{
    return $this->belongsTo(Sub_Empresa::class, 'id_empresa');
}
}
