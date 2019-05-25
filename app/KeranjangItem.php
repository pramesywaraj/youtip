<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeranjangItem extends Model
{
    protected $fillable = ['event_id', 'pembeli_id', 'jastiper_id', 'no_rekening', 'deskripsi', 'image', 'name', 'nama_pembeli', 'price', 'image', 'no_hp'];

    
}
