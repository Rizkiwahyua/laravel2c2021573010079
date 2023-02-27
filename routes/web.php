<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello world';
});

Route::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang  belajar</p>';
});

Route::get('/mahasiswa/profil/coba', function () {
    echo'<h2 style="text-align: center"><u>welcome Profil coba</u></h2>';
});




Route ::get('/mahasiswa/{nama}', function($nama){
return "Tampilkan data mahasiswa bernama $nama";
});


Route::get('/stok_barang/{jenis}/{merek}', function($jenis, $merek){
return "Tampilkan data mahasiswa bernama $jenis tanggal $merek";
});

Route::get('/stok_barang/{jenis}/{merek}', function ($a,$b){
    echo"Cek sisa stok untuk $a $b";
});

