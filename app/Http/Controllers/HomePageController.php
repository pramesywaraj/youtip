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
    public function show()
    {   
        $data = DB::table('events');
        $tampils = DB::table('users')->where('id',$data['user_id'])->first();
        dd($tampils);
        return view('coba', compact('tampils'));
    }
        
}