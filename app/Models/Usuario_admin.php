<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario_admin extends Model
{
    use HasFactory;
    protected $table = 'usuario_admin';

    public $timestamps=false;
    protected $fillable=[
        "nombre_usuario",
        "contrasena",
        "fecha_registro",
        "fecha_actualizacion",
        "estado",
        
    ];
}
