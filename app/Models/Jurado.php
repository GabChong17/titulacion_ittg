<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurado extends Model
{
    use HasFactory;
    
protected $fillable = ['egresado_id','secretario','presidente','vocalp','vocals'];


public function egresado(){
    return $this->hasOne('App\Models\User','id','egresado_id');

}
public function tema(){
    return $this->hasOne('App\Models\User','id','tema_id');

}



}
