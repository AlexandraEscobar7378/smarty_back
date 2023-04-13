<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivel_satisfaccion extends Model
{
    use HasFactory;
    protected $table = 'nivel_satisfaccion';

    public $timestamps=false;
    protected $fillable=[
        "estrella",
        "comentario",
        "fecha_registro",
        "fecha_actualizacion"
        
    ];
}
