<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
       'title', 'category_id',
    ];
    // protected $pivot= 'teacher_subjects';
    public function users(){

   		return $this->belongsToMany('App\User', 'teacher_subjects', 'user_id', 'subject_id')->withPivot('interval', 'cost', 'description', 'id');
   	}

   	 public function category(){

   		return $this->belongsTo(Category::class);
   	}

   
}

