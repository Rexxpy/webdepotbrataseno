<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class DashboardProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('dashboard.menu.index', [
            'menus' => Menu::all()
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.menu.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $nama = $request->get('nama');
        $harga = $request->get('harga');
        $deskripsi = $request->get('deskripsi');
       
        $save_men = new \App\Models\Menu;
        
        if($request->hasFile('image')){
            $save_men['image']=$request->file('image')->store('menu-images');

            $save_men['image'];
        }

        $save_men->nama = $nama;
        $save_men->harga = $harga;
        $save_men->deskripsi = $deskripsi;
        $save_men->save();

        return redirect()->route('menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        return view('dashboard.menu.show', [
            'menu' => $menu
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $men = \App\Models\Menu::findOrFail($id);
        return view('dashboard.menu.editmen', ['menu' => $men]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $men = \App\Models\Menu::findOrFail($id);
        $men->nama = $request->get('nama');
        $men->harga = $request->get('harga');
        $men->deskripsi = $request->get('deskripsi');
        $men->save();
        return redirect()->route('menu.index', [$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        // $prod_del = \App\Models\Produk::findOrFail($id);;
        // $prod_del->delete();
        // return redirect()->route('produk.index');
        
        Menu::destroy($menu->id);
        return redirect('/dashboard/menu')->with('success', 'Menu deleted');
    }
}
