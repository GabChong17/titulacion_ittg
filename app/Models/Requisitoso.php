<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisitoso extends Model
{
    use HasFactory;
    protected $fillable = [
        'Planes_id',
        'Nombre',
        'Opciones_id',
        
        
    ];


    // protected $table='requisitoso';  

    public function opcion(){
        return $this->belongsTo('App\Models\Opcion','Opciones_id','id');

    }
    public function plan(){
        return $this->belongsTo('App\Models\Plan','Planes_id','id');

    }
}