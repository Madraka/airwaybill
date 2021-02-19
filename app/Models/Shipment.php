<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $guarded = [];

    public function service()
    {
        return $this->belongsTo(\App\Models\Service::class,'service_id');
    }
    public function manifests()
    {
        return $this->belongsToMany(\App\Models\Manifest::class,'manifest_id');
    }
}
