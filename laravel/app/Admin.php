<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
	protected $table = 'subjects';
    protected $fillable = [
        'username', 'password'
    ];
}
