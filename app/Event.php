<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $user_id
 * @property User $user
 * @property Product $product
 */

class Event extends Model
{
    protected $fillable = ['name', 'user_id', 'no_rekening', 'negara', 'deskripsi', 'image', 'nama_penjual', 'image_penjual', 'no_hp'];

    public function product(){
        return $this->hasMany('App\Model\Product');
    }

    public function user(){
        return $this->belongsTo('App\Model\User', 'user_id' );
    }
}

