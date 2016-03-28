<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = [
        'name'
    ];

    protected $table = 'provinces';

    public function cities()
    {
        return $this->hasMany('App\City');
    }
}
