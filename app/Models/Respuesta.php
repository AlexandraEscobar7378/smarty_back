<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;
    protected $table = 'respuesta';

    public $timestamps=false;
    protected $fillable=[
        "texto_opcion",
        "es_correcta",
        "fecha_registro",
        "fecha_actualizacion"
        
    ];
}
