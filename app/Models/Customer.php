<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = ['address','phone','reference_no','user_id'];

    public function user(){
        return $this->hasOne(\App\User::class,'id');
    }
}
