<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Empresa extends Model
{
    use HasFactory;
    public function estado_empresa(){
        return $this->belongsTo(Estado_Sub_Empresa::class,'id_estado');
    }
}
