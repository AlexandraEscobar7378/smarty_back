<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autoguardado extends Model
{
    use HasFactory;
    protected $table = 'autoguardado';

    public $timestamps=false;
    protected $fillable=[
        "estado_sesion",
        "fecha-autoguardado"
    ];


}
