<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Teachersubject;

use App\Category;

use App\Subject;

use Auth;

use DB;

use App\User;

class SubjectsController extends Controller
{	

	public function index(){

		$user = Auth::User();
		$user->load('subjects');
		// return $user;

    // $id = Auth::user()->id;
    // $teacher_subject =  new Teachersubject;

    // $list = $teacher_subject->where('user_id',$id)->w->get();
    // dd($user);
		return view('front.profile.subject', compact('user'));
	}



	
    public function create(Request $request)
    {
        $subject = new Teachersubject;
		
		    $subject->status = '1';
       	$subject->user_id = Auth::User()->id;
       	$subject->subject_id = $request->title;
       	$subject->interval = $request->interval;
       	$subject->cost = $request->cost;
       	$subject->description = $request->description;

		$subject->save();
       
        return redirect("/subject");
    }



    public function edit($id){
      $data = Teachersubject::where('id',$id)->first();
    	$category = Category::All();
      $subject = Subject::all();
		return view('front.edit_profile.edit_subject', compact('category', 'subject','data'));
	
	}




	public function update(Request $request, Teachersubject $data){
		

    	$data->update($request->all());
    	// return $t_subject;
    	return redirect("/subject");
    }

 

    public function delete(Teachersubject $id){

      $id->delete();
    	return redirect("/subject");
    }



	public function show(){
		$category = Category::All();
		$subject = Subject::All();

		return view('front.edit_profile.create_subject', compact('category', 'subject'));
	}


}
