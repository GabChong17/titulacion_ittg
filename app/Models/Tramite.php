<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
    use HasFactory;
    //protected $table='tramites';

    protected $fillable = [
        'opcion_id', 'egresado_id', 'estado', 'liberacion', 'fecha_recepcion', 'hora_recepcion', 'lugar_recepcion', 'Foto', 'cita'
    ];
        
}
