<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefono_Alumno extends Model
{
    use HasFactory;
    protected $table = 'smarty';
    //desactivamos la fechas automaticas
    public $timestamps = false;
     // Campos que usara los INSERT
     protected $fillable = [
        'numero_telefono',
        'fecha_registro',
        'fecha_actualizacion',
        'estado',
        'id_alumno',
        
    ];
}
