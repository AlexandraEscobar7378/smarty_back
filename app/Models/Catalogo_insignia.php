<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogo_insignia extends Model
{
    use HasFactory;
    protected $table = 'catalogo_insignia';

    public $timestamps=false;
    protected $fillable=[
        "nombre_insignia",
        "nivel_insignia",
        "fecha_registro",
        "fecha_actualizacion",
        "estado",
        
    ];


}
