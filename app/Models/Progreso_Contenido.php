<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progreso_Contenido extends Model
{
    use HasFactory;
    protected $table = 'smarty';
    //desactivamos la fechas automaticas
    public $timestamps = false;
     // Campos que usara los INSERT
     protected $fillable = [
        'id_contenidos',
        'id_usuarios',
        'cantidad_contenidos',
        
    ];
}
