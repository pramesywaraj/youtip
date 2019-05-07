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
use Auth;



class JastiperController extends Controller
{
    public function store(){
        $data = Auth::user();
        $tambah = new jastiper();
        $tambah->user_id = $data['id'];
        $tambah->save();
        return redirect()->to('jastiper'); 
    }

    public function storeEvent(Request $request){

        $data = Auth::user();
        $cari = \App\jastiper::where('user_id', $data['id'])->first();
        $tambah = new Event();
        $tambah->jastiper_id = $cari['id'];
        $tambah->name = $request['name'];
        $tambah->negara = $request['negara'];
        $tambah->deskripsi = $request['deskripsi'];
        $tambah->no_rekening = $request['no_rekening'];
        $tambah->save();
        return redirect()->to('\oke'); 
    }

}