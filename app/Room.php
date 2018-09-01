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
        'name', 'price', 'roomtype_id', 'hasTV', 'hasWarmshower', 'hasBreakfast', 'maxPerson', 'status'
    ];


    public function roomtype()
    {
        return $this->belongsTo('App\RoomType');
    }


}
