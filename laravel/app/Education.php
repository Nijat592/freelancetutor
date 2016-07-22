<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
	protected $table = 'education';
    protected $fillable = [
        'teacher_id', 'faculty', 'university', 'begin', 'end', 'description'
    ];
}
