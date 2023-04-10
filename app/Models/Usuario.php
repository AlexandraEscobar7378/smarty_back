<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'smarty';
    //desactivamos la fechas automaticas
    public $timestamps = false;
     // Campos que usara los INSERT
     protected $fillable = [
        'id_usuario',
        'id_alumno',
        'nombre_usuario',
        'contraseña',
        'estado',
        
    ];
}
