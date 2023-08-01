<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menu";
    protected $fillable = [
        'id',
        'nama',
        'harga',
        'deskripsi',
        'image'
    ];

    static function list_menu(){
        $data = Menu::all();
        return $data;
    }

    static function tambah_cart($nama,$harga,$image,$jumlah){
        Menu::create([
            'image' => $image,
            'nama' => $nama,
            'harga' => $harga,
            'jumlah' => $jumlah,
        ]);
    }

    static function detail_menu($id){
        $data = Menu::where('id',$id)->first();
        return $data;
    }
}
