<?php

namespace App\Http\Controllers;

use App\jastiper;
use App\keranjang;
use App\Event;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Auth;



class EventController extends Controller
{
    //fungsi untuk menampilkan event sesuai user id di event view blade
    public function show()
    {   
        $tampil = Auth::user();
        $datas = DB::table('events')->where('user_id', $tampil['id'])->get();
        return view('event', compact('datas'));
        
    }

    //fungsi untuk menampilkan apa ini?!
    public function showq()
    {   
        $tampil = Auth::user();
        $datas = DB::table('events')->where('user_id', $tampil['id'])->get();
        return view('oke', compact('datas'));
        
    }

    //fungsi untuk menampilkan keterangan event di oke view blade
    public function showid(Request $request, $id)
    {   
        $tampil = \App\Event::where('id', $id)->first();
        return view('oke', compact('tampil'));
        
    }

    //fungsi untuk menampilkan product di produkuser view blade
    public function showproduct(Request $request, $id)
    {   
        $show = DB::table('products')->where('event_id', $id)->get();
        return view('produkuser', compact('show'));
        
    }

    //fungsi untuk menghapus event
    public function destroy($id)
    {
        //
        $hapus = \App\Event::find($id);
        $hapus->delete();
        return redirect('/event')->with('success','Event telah di hapus');

    }

}