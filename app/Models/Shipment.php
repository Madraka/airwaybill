<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $guarded = [];

    public function service()
    {
        return $this->belongsTo(\App\Models\Service::class);
    }
   
    public function dimensions()
    {
        return $this->hasMany(\App\Models\Dimension::class, 'shipment_id');
    }
    
}
