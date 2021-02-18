<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dimension extends Model
{
    protected $fillable = ['shipment_id','pieces','length','width','height'];

    public function shipment()
    {
        return $this->belongsTo(\App\Models\Shipment::class, 'shipment_id');
    }
}
