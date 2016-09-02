<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    // ['id', 'hotel_id', 'number', 'floor', 'num_beds', 'occupied']

    protected $fillable = ['number', 'floor', 'num_beds', 'occupied'];

    public function hotel()
    {
        return $this->belongsTo('App\Hotel');
    }

    public function offers()
    {
        return $this->belongsToMany('App\Offer');
    }

    public function reservations()
    {
        return $this->hasMany('App\Reservation');
    }
}
