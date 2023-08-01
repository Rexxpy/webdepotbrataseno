<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Menu;

class CartController extends Controller
{
    function index()
    {
        $menu = Menu::list_menu();
        return view('menu' , ['menu' => $menu], ["title" => "Cart"]);

    }
    
    function tambah_cart(Request $request,$id){
        $cart = session('cart');
        
        $menu =  Menu::detail_menu($id);
        $cart[$id] = [
            'image' => $menu->image,
            'nama' => $menu->nama,
            'harga' => $menu->harga,
            'jumlah' => $menu->jumlah = $request->jumlah_pesan
        ];
        
        session(['cart'=>$cart]);
        
        return redirect('/cart');
    }
    
    function cart(){
        // session()->forget('cart');
        $cart = session('cart');
        return view ('cart' , ['cart' => $cart], ["title" => "Cart"]);
    }
    
    function hapus_cart($id){
        $cart = session('cart');
        unset($cart[$id]);
        session(['cart'=>$cart]);
        return redirect('/cart');
    }

    function checkout(){
        session()->forget('cart');
        return redirect('/cart');
    }
}
