<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Correo_centro_ed extends Model
{
    use HasFactory;
    protected $table = 'correo_centro_ed';

    public $timestamps=false;
    protected $fillable=[
        "correo",
        "fecha_registro",
        "fecha_actualizacion",
        "estado",
        
    ];
}
