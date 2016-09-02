<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    // ['id', 'user_id', 'name', city']

    protected $fillable = ['name', 'city'];

    public function owner()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function rooms()
    {
        return $this->hasMany('App\Room');
    }
}
