<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opcion extends Model
{
    use HasFactory;
    public $table = "opcions";
    public function requisitos(){
        return $this->hasMany('App\Models\Requisito','Opciones_id','id');

    }

}
