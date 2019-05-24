<?php

namespace App\Http\Controllers;

use App\jastiper;
use App\keranjang;
use App\order;
use App\Product;
use App\User;
use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;



class JastiperController extends Controller
{

    //fungsi untuk menambahkan event di jastiper view blade
    public function storeEvent(Request $request){

        $data = Auth::user();
        $tambah = new Event();
        $tambah->user_id = $data['id'];
        $tambah->name = $request['name'];
        $tambah->negara = $request['negara'];
        $tambah->deskripsi = $request['deskripsi'];
        $tambah->no_rekening = $request['no_rekening'];
        
        $file       = $request->file('image');
        $fileName   = $file->getClientOriginalName();
        $request->file('image')->move("image/event/", $fileName);

        $tambah->image = $fileName;
        $tambah->save();
        return redirect()->to('event'); 
    }

    //fungsi untuk menampilkan orderan di jastiper(orderlist view blade)
    public function tampilkanorder()
    {  
        $akun = Auth::user();
        $datas = DB::table('keranjang_items')->where('jastiper_id', $akun['id'])->get();
        return view('order', compact('datas'));
        
    }
}