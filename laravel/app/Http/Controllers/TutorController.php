<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\Education;
use App\Experience;
use App\Subject;
use App\Teachersubject;
use DB;


class TutorController extends Controller
{
    public function index($id){
    	// $user = new user();
    	$data = User::where('id',$id)->first();

    	// $edu  = new Education();
    	$usr_edu = Education::where('teacher_id',$id)->get();

    	// $exp = new Experience();
    	$usr_exp = Experience::where('teacher_id',$id)->get();
    	$usr_expr = Education::where('teacher_id',$id)->first();

    	$usr_sub = DB::select('call getSubjectsByTeacherID (?)',array($id));
    	// $tec_sub = Subject::where('subject_id', $id)->get();

    	$from = new \DateTime($data->birth_date);
        $to   = new \DateTime('today');
	    $age = $from->diff($to)->y;


    	// return view('front.details',compact('data', 'usr_exp', 'usr_edu', 'usr_sub','age', 'usr_expr', 'tec_sub' ));
    	return view('front.details')->with(compact('data'))->with(compact('usr_exp'))->with(compact('usr_edu'))->with(compact('usr_sub'))->with(compact('age'))->with(compact('usr_expr'))->with(compact('tec_sub'));
    }
}
