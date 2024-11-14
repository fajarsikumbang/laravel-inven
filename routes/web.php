<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;


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

Route::get('/masterbarang', [BarangController::class, 'index']);


Route::get('/barangmasuk', function () {
    return view('barangmasuk', ['title' => 'Barang Masuk']);
});

Route::get('/barangkeluar', function () {
    return view('barangkeluar', ['title' => 'Barang Keluar']);
});

Route::get('/masterbarang', function () {
    return view('masterbarang', ['title' => 'Master Barang']);
});

Route::get('/login', function () {
    return view('login', ['title' => 'Login']);
});

Route::get('/profil', function () {
    return view('profil', ['title' => 'Profil']);
});