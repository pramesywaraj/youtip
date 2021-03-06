<?php

namespace App\Http\Controllers;

use App\jastiper;
use App\keranjang;
use App\order;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Auth;



class ProductController extends Controller
{
    //fungsi untuk menambahkan product ke dalam event
    public function store(Request $request, $id){

        
        $data = Auth::user();
        $tambah = new Product();
        $tambah->user_id = $data['id'];
        $tambah->event_id = $id;
        $tambah->name = $request['name'];
        $tambah->price = $request['price'];
        $tambah->deskripsi = $request['deskripsi'];

        $file       = $request->file('image');
        $fileName   = $file->getClientOriginalName();
        $request->file('image')->move("image/product/", $fileName);

        $tambah->image = $fileName;
        $tambah->save();
        return redirect()->to('/profil'); 
    }
    public function update(Request $request, $id)
    {
        //
        $data= \App\Product::find($id);
        $data->name = $request->get('name');
        $data->price = $request->get('price');
        $data->deskripsi = $request->get('deskripsi');
        if($request->file('image') == "")
        {
            $data->image = $data->image;
        } 
        else
        {
            $file       = $request->file('image');
            $fileName   = $file->getClientOriginalName();
            $request->file('image')->move("image/product/", $fileName);
            $data->image = $fileName;
        }
        
        $data->update();
        return redirect()->to('/event')->with('success', 'Data buku telah diubah');       
   

    }

    public function showid(Request $request, $id)
    {   
        $show = DB::table('products')->where('id', $id)->first();
        return view('editproduk', compact('show'));
        
    }

    public function show()
    {   
        
        $tampils = \App\Product::all();
        return view('oke', compact('tampils'));
        
    }

    public function destroy($id)
    {
        //
        $hapus = \App\Product::find($id);
        $hapus->delete();
        return redirect('/profile1')->with('success','Data buku telah di hapus');

    }

    public function singleproduct($id)
    {
        //
        $single = \App\Product::find($id);
        return view('produk', compact('single'));

    }


}
