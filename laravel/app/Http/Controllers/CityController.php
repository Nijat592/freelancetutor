<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\City;
use App\Subject;

use App\Category;

class CityController extends Controller
{
	public function index ()
	{
		$city = City::get();
		$fenn = Subject::get();
		$kateqoriya = Category::get();
		$kateqoriya->load('subjects');
		return view('front.index')->with(compact('city'))->with(compact('fenn'))->with(compact('kateqoriya'));
	}

	public function submit()
	{
		// $muellim = User::where('status', 1)->where('type', 0);
		// return view('front.results')->compact('muellim'));
	}
}
