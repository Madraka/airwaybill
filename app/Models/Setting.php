<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['favicon','company_name','company_logo','company_description','company_email','company_address','company_phone','company_mobile','copyright'];   
}
