<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teachersubject extends Model
{
   protected $table='teacher_subjects';
   protected $fillable = ['subject_id', 'interval', 'cost', 'description'];

   public function users(){
   	return $this->belongsToMany(User::class);
   }

}
