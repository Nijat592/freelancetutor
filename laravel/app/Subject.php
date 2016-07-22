<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
       'title', 'category_id',
    ];
<<<<<<< HEAD
<<<<<<< HEAD
    // protected $pivot= 'teacher_subjects';
    public function users(){

   		return $this->belongsToMany('App\User', 'teacher_subjects', 'user_id', 'subject_id')->withPivot('interval', 'cost', 'description', 'id');
   	}

   	 public function category(){

   		return $this->belongsTo(Category::class);
   	}

   
}

=======
=======
>>>>>>> 310fd2413b0d1ac4d804cc7c818193065f683eb7

public function users(){
	return $this->belongsToMany('App\User', 'teacher_subjects', 'user_id', 'subject_id')->withPivot('interval', 'cost', 'description', 'id');
}
public function category(){
	return $this->belongsTo(Category::class);
<<<<<<< HEAD
}
}
>>>>>>> 310fd2413b0d1ac4d804cc7c818193065f683eb7
=======
}
}
>>>>>>> 310fd2413b0d1ac4d804cc7c818193065f683eb7
