<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class CMSService extends Model
{
<<<<<<< HEAD
    protected $fillable = ['order','image','title','description'];
=======
    use Sluggable;
    protected $fillable = ['order','icon','image','title','slug','description'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
>>>>>>> 822ee076bca64d8e30d558f829e399fa65984dc6
}
