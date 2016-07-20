<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\User;
use Request;
class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function changepassword(Request $request)
    { 

        return "test";
        $user = Auth::user();
        return $user;
        $pass=$request->first();
        $confirmpass=$request->last();


        if($pass==$confirmpass)
        {
        $user->password=bcrypt($pass);
        // bcrypt($user->password);
        $user->save();
        }

    }

}
