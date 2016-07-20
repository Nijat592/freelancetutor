<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
	protected $table = 'subject';
    protected $fillable = [
       'title', 'category_id'
    ];
}
