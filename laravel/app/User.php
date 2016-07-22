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
    protected $table = 'users';
    protected $fillable = [
        'status',  'address', 'email', 'phone', 'bio', 'password', 'name', 'surname', 'birth_date', 'profile_img', 'city_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

<<<<<<< HEAD
<<<<<<< HEAD

    public function subjects(){

        return $this->belongsToMany('App\Subject', 'teacher_subjects')->withPivot('interval', 'cost', 'description', 'id');
    }


    public function experiences(){

        return $this->belongsToMany('App\Experience');
    }

    public function educations(){

        return $this->belongsToMany('App\Education');
    }
=======
=======
>>>>>>> 310fd2413b0d1ac4d804cc7c818193065f683eb7
    public function educations ()
    {
        return $this-belongsTo('App\Education');
    }

<<<<<<< HEAD
>>>>>>> 310fd2413b0d1ac4d804cc7c818193065f683eb7
=======
>>>>>>> 310fd2413b0d1ac4d804cc7c818193065f683eb7
}

