<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historial_sesion extends Model
{
    use HasFactory;
    protected $table = 'historial_sesion';

    public $timestamps=false;
    protected $fillable=[
        "fecha_inicio_sesion",
        "fecha_cierre_sesion"
        
    ];
}
