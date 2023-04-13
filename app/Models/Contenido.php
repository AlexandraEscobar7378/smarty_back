<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contenido extends Model
{
    use HasFactory;
    protected $table = 'contenido';

    public $timestamps=false;
    protected $fillable=[
        "tema",
        "nivel",
        "desarrollo",
        "fecha_registro",
        "fecha_actualizacion",
        "estado",
        
    ];
}
