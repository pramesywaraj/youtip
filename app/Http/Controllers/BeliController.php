<?php

namespace App\Http\Controllers;

use App\jastiper;
use App\keranjang;
use App\Event;
use App\Product;
use App\User;
use App\KeranjangItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Auth;


class BeliController extends Controller
{
    public function tambahproduk(Request $request, $id)
    {
        $akun = Auth::user();
        $prod = \App\Product::find($id);
        $tambah = new KeranjangItem();
        $tambah->name = $prod['name'];
        $tambah->jumlah = '2';
        $tambah->price = $prod['price'];
        $tambah->image = $prod['image'];
        $tambah->event_id = $prod['event_id'];
        $tambah->pembeli_id = $akun['id'];
        $tambah->jastiper_id = $prod['user_id'];

        $tambah->save();
        return redirect()->to('/cart');
    }

    public function showcart()
    {   
        $akun = Auth::user();
        $show = DB::table('keranjang_items')->where('user_id', $akun['id'])->get();
        return view('cart', compact('show'));
        
    }
    
}