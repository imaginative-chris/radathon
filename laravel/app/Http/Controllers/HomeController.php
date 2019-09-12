<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    private $user;

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

        if(Auth::user()->events){
            return view('landing');
        } else {
            return view('modules');
        }
    }

    public function modules()
    {
        return view('modules', ['courses' => Auth::user()->courses]);
    }

    public function events()
    {
        return view('events');
    }


}
