<?php

namespace App\Http\Controllers;

use App\jastiper;
use App\keranjang;
use App\order;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;



class ProductController extends Controller
{
    public function store(Request $request){

        $tambah = new Product();
        $tambah->name = $request['name'];
        $tambah->price = $request['price'];
        $tambah->deskripsi = $request['deskripsi'];

        $file       = $request->file('image');
        $fileName   = $file->getClientOriginalName();
        $request->file('image')->move("image/", $fileName);

        $tambah->image = $fileName;
        $tambah->save();
        return redirect()->to('/'); 
    }
}