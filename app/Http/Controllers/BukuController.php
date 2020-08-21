<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BukuController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){                
        $tblbuku    = DB::table('buku')->orderBy('tanggal','DESC')->paginate(10);
        return view('buku',['tabel_buku'=>$tblbuku]);
    }

    public function add(){
        $tblpenulis = DB::table('penulis')->get();
        return view('addbuku',['tabel_penulis'=>$tblpenulis]);
    }

    public function insert(Request $request){
        
        DB::table('buku')->insert([
            'buku_judul' => $request->judul,
            'buku_penulis' => $request->penulis,
            'buku_penerbit' => $request->penerbit
        ]);

        return redirect('buku');

    }

    public function edit($id){    

        $row_buku   = DB::table('buku')->where('buku_id',$id)->get();
        $tblpenulis = DB::table('penulis')->get();
        return view('editbuku',['data_row'=>$row_buku,'tabel_penulis'=>$tblpenulis]);

    }

    public function update(Request $request){

        DB::table('buku')->where('buku_id',$request->id)->update([
            'buku_judul' => $request->judul,
            'buku_penulis' => $request->penulis,
            'buku_penerbit' => $request->penerbit
        ]);

        return redirect('buku');

    }

    public function delete($id){
        DB::table('buku')->where('buku_id',$id)->delete();
        return redirect('/buku');
    }

}
