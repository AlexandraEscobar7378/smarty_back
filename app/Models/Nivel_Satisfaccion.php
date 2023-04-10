<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivel_Satisfaccion extends Model
{
    use HasFactory;

    protected $table = 'smarty';
    //desactivamos la fechas automaticas
    public $timestamps = false;
     // Campos que usara los INSERT
     protected $fillable = [
        'estrella',
        'comentario',
        'fecha_registro',
        'fecha_actualizacion',
        'id_alumno',
    ];

}
