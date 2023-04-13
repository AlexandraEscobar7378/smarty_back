<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_academico_alumno extends Model
{
    use HasFactory;
    protected $table = 'detalle_academico';

    public $timestamps=false;
    protected $fillable=[
        "nivel",
        "numero_grado"
        
    ];
}
