<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teachersubject extends Model
{
<<<<<<< HEAD
	protected $table='teacher_subjects';
	protected $fillable = [
       'subject_id', 'interval', 'cost', 'description'
    ];

    // public function category(){
   	// 	return $this->belogsTo(Category::class);
   	// }

   	public function users(){
   		
   		return $this->belongsToMany(User::class);
   	}
=======
   protected $table='teacher_subjects';
   protected $fillable = ['subject_id', 'interval', 'cost', 'description'];

   public function users(){
   	return $this->belongsToMany(User::class);
   }

>>>>>>> 310fd2413b0d1ac4d804cc7c818193065f683eb7
}
