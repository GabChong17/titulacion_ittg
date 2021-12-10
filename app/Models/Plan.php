<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Nombre',
        
    ];

protected $table='planes';  
        public function opciones(){
        return $this->hasMany('App\Models\Opcion','Planes_id','id', 'Nombre');

        return $this->belongsTo('App\Models\Egresado');


    }
}
