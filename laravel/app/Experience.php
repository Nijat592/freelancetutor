<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
	protected $table = 'experiences';
    protected $fillable = [
        'teacher_id', 'company', 'position', 'years'
    ];
}
