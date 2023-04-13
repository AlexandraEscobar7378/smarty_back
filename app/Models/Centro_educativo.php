<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centro_educativo extends Model
{
    use HasFactory;
    protected $table = 'centro_educativo';

    public $timestamps=false;
    protected $fillable=[
        "codigo_ced",
        "nombre_centro",
        "tipo_centro",
        "nivel_insignia",
        "fecha_registro",
        "fecha_actualizacion",
        "estado",
        
    ];
}
