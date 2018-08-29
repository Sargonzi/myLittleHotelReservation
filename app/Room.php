<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'price','room_type_id','hasTV','hasWarmshower','hasBreakfast','maxPerson','status'
    ];


    public function type()
    {
        return $this->belongsTo('App\RoomType');
    }


}
