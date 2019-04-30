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



class ProfileController extends Controller
{
    public function index(){
    	
    	return view('profile');
    }

    public function show(Request $users)
    {   
        $users = Auth::user();
        //dd($users);
        return view('profile', compact('users'));    
    }

    public function update(Request $request)
    {
        $data = Auth::user();
        $data->update([
            'name' => request('name'),
            'no_telp' => request('no_telp'),
            'email' => request('email'),
            'alamat' => request('alamat'),
            'status' => request('status')
        ]);
        return redirect()->route('profile')->with('alert-success','Data berhasil diubah!');
    }
}