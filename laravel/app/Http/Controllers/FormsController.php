<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FormsController extends Controller
{
	public function education()
    {
    	return view('forms.education_Form');
    }
    public function experience()
    {
    	return view('forms.experience_Form');
    }
    public function subject()
    {
    	return view('forms.subject_Form');
    }
}
