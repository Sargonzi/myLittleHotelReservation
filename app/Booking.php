<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'booking_code', 'user_userid', 'room_roomid', 'status', 'check_in', 'check_out','total_price'
    ];

}
