<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Auth;

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
    public function index(Request $request)
    {        
        $datasesi = Auth::user();
        return view('home',['sesi'=>$datasesi]);
      
/*
        if(!Session::get('login')){
            
        }else{
            $user = Auth::user();
            Session::put('username', $user->username);

            return view('home');
        }
  */      
    }

}
