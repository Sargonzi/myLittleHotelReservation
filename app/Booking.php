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
        'booking_code', 'user_userid', 'room_roomid', 'status'
    ];

    public function user(){
       return $this->belongsTo(User::class);
    }

    public function room(){
       return $this->hasMany(Room::class);
    }
}
