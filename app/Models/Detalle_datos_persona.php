<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_datos_persona extends Model
{
    use HasFactory;
    protected $table = 'detalle_datos_persona';

    public $timestamps=false;
    protected $fillable=[
        "primer_nombre",
        "segundo_nombre",
        "primer_apellido",
        "segundo_apellido",
        "genero",
        "fecha_nacimiento"
        
    ];
}
