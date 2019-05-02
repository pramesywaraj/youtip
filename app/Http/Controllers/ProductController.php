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

        $data = Auth::user();
        $tambah = new Product();
        $tambah->user_id = $data['id'];
        $tambah->name = $request['name'];
        $tambah->price = $request['price'];
        $tambah->deskripsi = $request['deskripsi'];

        $file       = $request->file('image');
        $fileName   = $file->getClientOriginalName();
        $request->file('image')->move("image/", $fileName);

        $tambah->image = $fileName;
        $tambah->save();
        return redirect()->to('/oke'); 
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
            $request->file('image')->move("image/", $fileName);
            $data->image = $fileName;
        }
        
        $data->update();
        return redirect()->to('/oke')->with('success', 'Data buku telah diubah');       
   

    }

    public function showid(Request $datas, $id)
    {   
        $datas = \App\Product::where('id',$id)->first();
        return view('oke2', compact('datas'));
        
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
        return redirect('/')->with('success','Data buku telah di hapus');

    }
}