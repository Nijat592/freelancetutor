<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    public function index()
    {
      return view('main.index');
    }

    public function result()
    {
      return view('result.index');
    }

    public function profile()
    {
      return view('profile.index');
    }
}
