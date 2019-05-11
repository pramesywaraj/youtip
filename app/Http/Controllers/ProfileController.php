<?php

namespace App\Http\Controllers;

use App\jastiper;
use App\keranjang;
use App\order;
use App\Event;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
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


    public function show3()
    {   
        $pengguna = DB::table('users');
        $events = DB::table('events')->where('user_id', $pengguna['id'])->get();
        return view('profile1', compact('pengguna', 'events')); 
    }


    public function update(Request $request)
    {
        $data = Auth::user();
        $data->name = $request->get('name');
        $data->username = $request->get('username');
        $data->no_hp = $request->get('no_hp');
        $data->email = $request->get('email');
        $data->alamat = $request->get('alamat');

        if($request->file('image') == "")
        {
            $data->image = $data->image;
        } 
        else
        {
            $file       = $request->file('image');
            $fileName   = $file->getClientOriginalName();
            $request->file('image')->move("image/profile/", $fileName);
            $data->image = $fileName;
        }

        $data->update();
        return redirect()->route('profile')->with('alert-success','Data berhasil diubah!');
    }

    

 
}