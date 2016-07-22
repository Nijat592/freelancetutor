<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function changepassword(Request $request)
    { 

        $user = Auth::user();

        $pass=$request->password;
        $confirmpass=$request->password_confirmation;

        if($pass==$confirmpass)
        {
            $user->password=bcrypt($pass);
            // bcrypt($user->password);
            $user->save();
            return redirect('/profile');
        }
        else
        {
            
        }


    }
}
