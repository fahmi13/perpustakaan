<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function home(){
        return view('home');
    }

    public function tentang(){
        return view('tentang');
    }

    public function kontak(){
        return view('kontak');
    }

    public function afiliasi(){
        return view('afiliasi');
    }
}
