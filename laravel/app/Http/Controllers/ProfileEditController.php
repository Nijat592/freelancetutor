<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\User;
use App\City;
class ProfileEditController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$city = City::get();
return view('front.profile',compact('city'));
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
//
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
// $profile_img = $request->file('profile_img');
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
public function editProfile()
{
$user = User::find(Auth::user()->id);
$city = City::get();
return view('front.profile')->with('user',$user);
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
$user = User::find($id);
$user->name = $request['name'];
$user->surname = $request['surname'];
$user->phone = $request['phone'];
$user->bio = $request['bio'];
$user->address = $request['address'];
$user->email = $request['email'];
$user->birth_date = $request['birth_date'];
$user->city_id = $request['city'];
 if ($request->profile_img!='') {
            $realName=$request->profile_img->getClientOriginalName();
            $nameImg  = rand().'_'.$realName;
            $request->profile_img->move("uploadimage",$nameImg);
          $user->profile_img = $nameImg;
            
        }
$user->save();
return redirect('/profile');
}
/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{
//
}
}