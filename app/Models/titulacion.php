<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class titulacion extends Model
{
    use HasFactory;

    protected $table='opcions';

    protected $fillable = [
        'name',
        'email',
        'password',
        'fullacces',
        'codigo',
    ];
}
