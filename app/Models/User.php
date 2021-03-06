<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use HasRoles;

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
        'profesion',
        'cedula',
        'carrera',
        'campus',
        'planDeestudios',
        'email',
        'telefono',
        'password',
        'tema',
        'rol',
        'estado',
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

    
    public function jurado()
    {
        return $this->hasMany('App\Models\Jurado');
    }
    public function asesor()
    {
        return $this->hasMany('App\Models\Asesor');
    }
    public function plan(){
        return $this->belongsTo('App\Models\Plan','planDeestudios','id');
    }    
}
