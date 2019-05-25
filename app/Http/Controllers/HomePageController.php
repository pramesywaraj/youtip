<?php

namespace App\Http\Controllers;
use App\Event;
use App\keranjang;
use App\order;
use App\Product;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;



class HomePageController extends Controller
{
    //fungsi untuk menampilkan seller di homepage
    public function show()
    {   
        $tampils = DB::table('events')->select('nama_penjual', 'image_penjual', 'user_id')->distinct()->get();
        return view('home', compact('tampils'));
    }
    
    //fungsi untuk menampilkan event per negara di homepage
    public function showevent(Request $request, $id)
    {   
        $oke = $id;
        $show = DB::table('events')->where('negara', $id)->get();
        return view('negara', compact('show', 'oke'));
        
    }
}