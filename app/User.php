<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $casts = [
        'isAdmin' => 'boolean',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'is_admin', 'phone', 'address', 'nrc', 'passport', 'city', 'country', 'is_foreigner', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
    {
        if ($this->is_admin === 1) {
            return true;
        }
        return false;
    }

    public function isForeigner()
    {
        if ($this->is_foreigner == 1) {
            return true;
        }
        return false;
    }


}
