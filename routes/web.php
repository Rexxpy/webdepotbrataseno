<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardProdukController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', ["title" => "Home"]);
});

Route::get('/about', [AboutController::class, 'index']);

Route::resource('/menu', ProdukController::class);

Route::get('/cart/tambah/{id}', 'App\Http\Controllers\CartController@tambah_cart')->where("id","[0-9]+");
Route::get('/cart/hapus/{id}', 'App\Http\Controllers\CartController@hapus_cart')->where("id","[0-9]+");
Route::get('/cart/checkout/{id}', 'App\Http\Controllers\CartController@checkout')->where("id","[0-9]+");
Route::get('/cart', 'App\Http\Controllers\CartController@cart');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/menu', DashboardProdukController::class)->middleware('auth');
