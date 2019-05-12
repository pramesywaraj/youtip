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

}