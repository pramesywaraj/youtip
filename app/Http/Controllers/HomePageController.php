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
        $datas = DB::table('events')->select('user_id')->get();
        $tampils = DB::table('users');
        foreach($tampils as $tampil){
            foreach($datas as $data){
            if($tampils['id']==$data['user_id']){
                return view('coba', compact('tampils'));
                }
            }
        }
    }
        
}