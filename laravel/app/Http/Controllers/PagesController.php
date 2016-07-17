<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
   	public function index()
    {
    	return view('front.index');
    }
    public function result()
    {
    	return view('front.result');
    }
    public function detalis()
    {
    	return view('front.detalis');
    }

    
}
