<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egresado extends Model
{
    
    use HasFactory;
    protected $table='egresados';

    protected $fillable = [
        'name',
        'email',
        'password',
        'fullacces',
        'codigo',
    ];

    public function plan()
    {
        return $this->belongsTo('App\Models\Plan','PlanDeEstudios');

    }
}
