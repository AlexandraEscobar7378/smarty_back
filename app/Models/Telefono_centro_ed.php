<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefono_centro_ed extends Model
{
    use HasFactory;
    protected $table = 'telefono_centro_ed';

    public $timestamps=false;
    protected $fillable=[
        "numero_telefono",
        "fecha_registro",
        "fecha_actualizacion",
        "estado",
        
    ];
}
