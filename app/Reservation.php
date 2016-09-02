<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    // ['id', 'offer_id', 'room_id', 'user_id', 'start', 'end', 'rating', 'complaints']

    protected $fillable = ['start', 'end', 'rating', 'complaints'];

    public function offer()
    {
        return $this->belongsTo('App\Offer');
    }

    public function room()
    {
        return $this->belongsTo('App\Room');
    }

    public function visitor()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function hotelVisit()
    {
        return $this->hasOne('App\HotelVisit');
    }
}
