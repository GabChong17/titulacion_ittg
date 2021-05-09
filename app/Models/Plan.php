<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    public function opciones(){
        return $this->hasMany('App\Models\Opcion','Planes_id','id');

        return $this->belongsTo('App\Models\Egresado');

    }
}
