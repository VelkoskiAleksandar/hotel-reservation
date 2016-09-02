<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelVisit extends Model
{
    // ['id', 'reservation_id', 'check_in', 'check_out']

    protected $fillable = ['check_in', 'check_out'];

    public function reservation()
    {
        return $this->belongsTo('App\Reservation');
    }
}
