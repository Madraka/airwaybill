<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manifest extends Model
{
    protected $fillable = ['flight_no'];
    public function shipments()
    {
        return $this->hasMany(\App\Models\Shipment::class);
    }
}
