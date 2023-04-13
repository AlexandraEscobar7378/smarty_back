<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuestionario extends Model
{
    use HasFactory;
    protected $table = 'cuestionario';

    public $timestamps=false;
    protected $fillable=[
        "inicio_cuest",
        "finalizacion_cuest",
        "fecha_realizacion",
        "fecha_actualizacion",
        "numero_intento",
        "estado",
        "aprobado"
        
    ];
}
