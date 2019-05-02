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

    public function show()
    {   
        $users = Auth::user();
        //dd($users);
        return view('profile', compact('users'));    
    }

    public function show1()
    {   
        $user = Auth::user();
        //dd($users);
        return view('profile', compact('user'));    
    }

    public function update(Request $request)
    {
        $data = Auth::user();
        $data->name = $request->get('name');
        $data->username = $request->get('username');
        $data->no_hp = $request->get('no_hp');
        $data->email = $request->get('email');
        $data->alamat = $request->get('alamat');
        $data->save();
        return redirect()->route('profile')->with('alert-success','Data berhasil diubah!');
    }

 
}