<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Education;

class EducationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educations=Education::all();
        return view('front.profile.education', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.edit_profile.create_education');
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    }

    public function store(Request $request)
    {
        $education=new Education;
        $education->faculty=$request->faculty;
        $education->university=$request->university;
        $education->begin=$request->begin;
        $education->end=$request->end;
        $education->description=$request->description;
        $education->teacher_id = Auth::User()->id;
        $education->save();

        return redirect('/education');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *

     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Education $education)
    {
        // $education=Education::find($id);
        return view("front.edit_profile.edit_education", compact('education'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
       
       $education->update($request->all());
       return redirect('/education');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        
       $education->delete();
       return redirect('/education');

    }
}
