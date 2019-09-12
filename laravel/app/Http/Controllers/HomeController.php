<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //end user to diff place depending on something
        $user = Auth::user();
        if($user->events){
            return view('landing');
        } else {
            return view('modules');
        }
    }

    public function modules()
    {
        return view('modules');
    }

    public function events()
    {
        return view('events');
    }


}
