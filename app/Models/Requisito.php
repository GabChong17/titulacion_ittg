<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisito extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nombre',
        
    ];


    protected $table='requisitoso';  

    public function opcion(){
        return $this->belongsTo('App\Models\Opcion','Opciones_id','id');

    }
}
