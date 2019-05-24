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

    //fungsi untuk menambahkan produk ke dalam cart
    public function tambahproduk(Request $request, $id)
    {

        $akun = Auth::user();
        $prod = \App\Product::find($id);
        $akun2 = DB::table('users')->where('id', $prod['user_id'])->first();
        $even = DB::table('events')->where('id', $prod['event_id'])->first();
        $tambah = new KeranjangItem();
        $tambah->name = $prod['name'];
        $tambah->jumlah = $request['qty'];
        $tambah->price = $prod['price'];
        $tambah->image = $prod['image'];
        $tambah->event_id = $prod['event_id'];
        $tambah->pembeli_id = $akun['id'];
        $tambah->jastiper_id = $prod['user_id'];
        $tambah->no_rekening = $even->no_rekening;
        $tambah->kontak = $akun2->no_hp;
        $tambah->save();
        return redirect()->to('/cart');
    }

    //fungsi untuk menampilkan isi cart ke view blade
    public function showcart()
    {   
        $akun = Auth::user();
        $show = DB::table('keranjang_items')->where('pembeli_id', $akun['id'])->orderBy('jastiper_id')->get();
        return view('cart', compact('show'));
        
    }
    
    //fungsi untuk menghapus item di cart
    public function destroy($id)
    {
        //
        $hapus = \App\KeranjangItem::find($id);
        $hapus->delete();
        return redirect('/cart')->with('success','Event telah di hapus');

    }
}