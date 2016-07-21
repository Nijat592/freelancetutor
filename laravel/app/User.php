<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status', 'type', 'address', 'email', 'phone', 'bio', 'password', 'name', 'surname', 'birth_date', 'profile_img', 'city_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function experinces()
    {
        return $this->hasMany('App\Experience');
    }

}
