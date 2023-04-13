<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progreso_contenido extends Model
{
    use HasFactory;
    protected $table = 'progreso_contenido';

    public $timestamps=false;
    protected $fillable=[
        "cantidad_contenidos",
        
    ];
}
