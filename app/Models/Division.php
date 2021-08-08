<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'user_id'];

    public function user()
    {
        return $this->belongTo('App\User');
    }
    use HasFactory;
}
