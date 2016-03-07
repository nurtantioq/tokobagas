<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable = [
        'name',
        'category_id',
        'user_id',
        'location',
        'price',
        'nego'
    ];

    protected $table = 'ads';

    public function category()
    {
        return $this->hasMany('App\Category');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
