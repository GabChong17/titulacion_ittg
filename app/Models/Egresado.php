<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Egresado extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'NoControl',
        'name',
        'a_paterno',
        'a_materno',
        'carrera',
        'campus',
        'planDeestudios',
        'email',
        'telefono',
        'rol',
        'estado',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function plan()
    {
        return $this->belongsTo('App\Models\Plan','planDeestudios','id');

    }
    public function jurado()
    {
        return $this->hasMany('App\Models\Jurado');

    }
}
