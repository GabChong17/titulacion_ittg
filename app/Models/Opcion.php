<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opcion extends Model
{
    use HasFactory;   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Nombre',
        'Descripcion',
        'Planes_id',

        
    ];
    public $table = "opciones";


    public function requisitos(){
        return $this->hasMany('App\Models\Requisito','Opciones_id','id', 'Nombre');
    }

    public function plan(){
        return $this->belongsTo('App\Models\Plan','Planes_id','id');
    }
   
}
