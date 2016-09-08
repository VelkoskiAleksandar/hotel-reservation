<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    // ['id', 'user_id', 'name', city', 'country', 'stars', 'parking_space', 'wifi', 'pet_friendly', 'indoor_pool', 'outdoor_pool', 'spa']

    protected $fillable = ['name', 'city', 'country', 'stars', 'parking_space', 'wifi', 'pet_friendly', 'indoor_pool', 'outdoor_pool', 'spa'];

    public function owner()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function rooms()
    {
        return $this->hasMany('App\Room');
    }
}
