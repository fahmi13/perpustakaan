<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){                
        $tbluser    = DB::table('users')->orderBy('created_at','DESC')->paginate(10);
        return view('user',['tabel_user'=>$tbluser]);
    }

    public function add(){        
        return view('adduser');
    }

    public function insert(Request $request){
        
        DB::table('users')->insert([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => $request->level            
        ]);

        return redirect('user');

    }

    public function edit($id){    

        $row_user   = DB::table('users')->where('id',$id)->get();        
        return view('edituser',['data_row'=>$row_user]);

    }

    public function update(Request $request){

        DB::table('users')->where('id',$request->id)->update([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => $request->level            
        ]);

        return redirect('user');

    }

    public function delete($id){
        DB::table('users')->where('id',$id)->delete();
        return redirect('/user');
    }
}
