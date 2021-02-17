<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['user_id', 'about', 'avatar', 'facebook', 'youtube'];

    public function user()
    {
        return $this->belongsTo(App\User::class, 'user_id');
    }
}
