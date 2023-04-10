<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefono_Centro_Ed extends Model
{
    use HasFactory;
    protected $table = 'smarty';
    //desactivamos la fechas automaticas
    public $timestamps = false;
     // Campos que usara los INSERT
     protected $fillable = [
        'id_telefono_centro_ed',
        'numero_telefonico',
        'fecha_registro',
        'estado',
        'id_centro_educativo',
        
    ];
}
