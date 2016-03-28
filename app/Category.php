<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
    ];

    public function ads()
    {
        return $this->hasMany('App\Ad');
    }
}
