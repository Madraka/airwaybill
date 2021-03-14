<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Awb extends Model
{
    //
    protected $fillable = ['awb_number','service_id'];
    public function awb(){
        return $this->belongsTo(\App\Models\Service::class);
    }
}
