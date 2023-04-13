<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
   
    use HasFactory;
    protected $table = 'admin';

    public $timestamps=false;
    protected $fillable=[
        "nie",
        "fecha_registro",
        "fecha_actualizacion",
        "estado",
        "foto"
    ];

}
