<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;

use App\Experience;

use App\Http\Requests;


class ExperiencesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $experiences = Experience::where('user_id',$id)->get();
        return view('front.profile.experience', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.edit_profile.create_experience');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tecrube = new Experience;
        $tecrube->company = $request->company;
        $tecrube->position = $request->position;
        $tecrube->years = $request->years;

        $tecrube->user_id = Auth::User()->id;
        $tecrube->save();

        return redirect('/experience');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tecr = Experience::where($id)->firstOrFail();
        return view('/experience', compact('tecr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        
         $tecrube = Experience::where('id', $id)->first();
         return view('front.edit_profile.edit_experience', compact('tecrube'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Experience $id)
    {
        
        $id->company        = $request->company;
        $id->position       = $request->position;
        $id->years          = $request->years;

        // return $id;

        $id->save();
        return redirect('/experience');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $id)
    {   
        $id->delete();
        // return redirect('/experience');
        return back();
    }
}
