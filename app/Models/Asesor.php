<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asesor extends Model
{
    use HasFactory;
    protected $fillable = ['egresado_id','asesor_id','revisor1_id','revisor2_id'];


public function egresado()
{
    return $this->hasMany('App\Models\User','id','egresado_id');

}
public function asesor(){
    return $this->hasOne('App\Models\User','id','asesor_id');

}
public function revisor1(){
    return $this->hasOne('App\Models\User','id','revisor1_id');

}
public function revisor2(){
    return $this->hasOne('App\Models\User','id','revisor2_id');

}
}
