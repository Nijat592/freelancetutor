<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = 'categories';
    protected $fillable = [
        'title'
    ];

<<<<<<< HEAD
    public function subjects(){	
        return $this->hasMany(Subject::class);
=======
    public function subjects (){
    	return $this->hasMany('App\Subject');
>>>>>>> e5ce22179c0b189fb509a121967ada987c539fd9
    }
}
