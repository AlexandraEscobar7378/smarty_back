<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insignia_ganada extends Model
{
    use HasFactory;
    protected $table = 'insignia_ganada';

    public $timestamps=false;
    protected $fillable=[
        "cant_insignia_ganada"
        
    ];
}
