<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    // ['id', 'hotel_id', 'name', 'price', 'num_days', 'description']]

    protected $fillable = ['name', 'price', 'num_days', 'description'];

    public function rooms()
    {
        return $this->belongsToMany('App\Room');
    }

    public function reservations()
    {
        return $this->hasMany('App\Reservation');
    }

    public function hotel()
    {
        return $this->belongsTo('App\Hotel');
    }
}
