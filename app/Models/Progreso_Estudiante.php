<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progreso_Estudiante extends Model
{
    use HasFactory;
    protected $table = 'smarty';
    //desactivamos la fechas automaticas
    public $timestamps = false;
     // Campos que usara los INSERT
     protected $fillable = [
        'cant_cuest_resuelto',
        'cant_tema_estudiado',
        'nivel_aprendizaje_estudiante',
        'fecha_actualizacion',
        'id_usuario',
        
    ];
    
}
