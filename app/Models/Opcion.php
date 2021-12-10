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
        'requisito1',
        'requisito2',
        'requisito3',
        'requisito4',
        'requisito5',
        'requisito6',
        
    ];
    public $table = "opciones";
    public function requisitos(){
        return $this->hasMany('App\Models\Requisito','Opciones_id','id');

    }
}
