<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PenulisController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){                
        $tblpenulis    = DB::table('penulis')->orderBy('tanggal','DESC')->paginate(10);
        return view('penulis',['tabel_penulis'=>$tblpenulis]);
    }

    public function add(){        
        return view('addpenulis');
    }

    public function insert(Request $request){
        
        DB::table('penulis')->insert([
            'penulis_nama' => $request->nama,
        ]);

        return redirect('penulis');

    }

    public function edit($id){    

        $row_penulis   = DB::table('penulis')->where('penulis_id',$id)->get();        
        return view('editpenulis',['data_row'=>$row_penulis]);

    }

    public function update(Request $request){

        DB::table('penulis')->where('penulis_id',$request->id)->update([
            'penulis_nama' => $request->nama
        ]);

        return redirect('penulis');

    }

    public function delete($id){
        DB::table('penulis')->where('penulis_id',$id)->delete();
        return redirect('/penulis');
    }
}
