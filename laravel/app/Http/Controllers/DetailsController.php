<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DetailsController extends Controller
{
    public function index(){
    	$user = Auth::User();
		$user->load('subjects');
		$user->load('experiences');
		$user->load('educations');
		return view('front.details', compact('user'));
    }
}
