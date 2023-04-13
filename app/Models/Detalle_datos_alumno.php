<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_datos_alumno extends Model
{
    use HasFactory;
    protected $table = 'detalle_datos_alumno';

    public $timestamps=false;
    protected $fillable=[
        "primer_nombre",
        "primer_apellido",
        "primer_apellido",
        "segundo_apellido",
        "genero",
        "fecha_nacimiento"
        
    ];
}
