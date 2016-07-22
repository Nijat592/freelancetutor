<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Input;

class ResultController extends Controller
{
    public function index(Request $request){
    	$subject_id = $request->input('subject');
    	$city_id = $request->input('city');
    	if($city_id){
    	$result = \DB::select('call getTeacherByCityIdAndSubjectId(?,?)',
    	array($subject_id,$city_id));
    }else{

    	$result = \DB::select('call getTeachersBySubjectId(?)',
    	array($subject_id));
    	// return view('front.index',compact('result'));
    }
    	return view('front.results',compact('result'));
    }
}
