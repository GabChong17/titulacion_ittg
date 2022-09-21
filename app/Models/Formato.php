<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formato extends Model
{
    use HasFactory;

    protected $table='formatos';

    protected $fillable = 
    ['egresado_id', 
     'documentoInicio1',
     'documentoInicio2',
     'documentoInicio3',
     'documentoInicio4'
    ] ;
}
