<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'z_number', 'name', 'college', 'department', 'class', 'class_crn',
        'class_number', 'class_name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isRegistered()
    {
        if ($this->get('password' == NULL))
        {
            return false;
        }
        else return true;
    }

    public function register()
    {

    }
}
