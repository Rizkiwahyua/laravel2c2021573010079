<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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

Route::get('/stok_barang/{jenis}/{merek}', function ($a,$b){
    echo"Cek sisa stok untuk $a $b";
});

Route::get('/stok_barang/{jenis}/{merek}', function ($a = 'smartphone',$b ='samsung'){
    return"Cek sisa stok untuk $a $b";
});

route::get('/user/{id}', function($id){
    return "Tempilkan user dengan id = $id";
});

Route::get('/user/{id}', function($id){
    return "Tempilkan user dengan id = $id";
})->where('id','[0-9]+');

Route::get('/user/{id}', function($id){
    return "Tempilkan user dengan id = $id";
})->where('id','[A-Z]{2}[0-9]+');


Route::get('?hubungi-kami',function(){
    return'<h1>hubungi kami</h1>';
});


Route::get('/admin/mahasiswa', function () { 
    return "<h1>Daftar Mahasiswa</h1>"; 
}); 
Route::get('/admin/dosen', function () { 
    return "<h1>Daftar Dosen</h1>"; 
}); 
Route::get('/admin/karyawan', function () { 
    return "<h1>Daftar Karyawan</h1>"; 
});


Route::prefix('/admin')->group(function () { 
    Route::get('/mahasiswa', function () { 
        echo "<h1>Daftar Mahasiswa</h1>"; 
    }); 
    Route::get('/dosen', function () { 
        echo "<h1>Daftar Dosen</h1>";
    }); Route::get('/karyawan', function () { 
        echo "<h1>Daftar Karyawan</h1>"; 
    }); 
});

Route::fallback(function(){
    return 'Maaf,Alamat tidak ditemukan';
});

Route::get('/buku/1', function () {   
    return "Buku ke-1"; 
}); 
Route::get('/buku/1', function () { 
    return "Buku saya ke-1"; 
}); 
Route::get('/buku/1', function () {
     return "Buku kita ke-1"; 
});


Route::get('/buku/{a}', function ($a) { 
    return "Buku ke-$a"; 
}); 
Route::get('/buku/{b}', function ($b) { 
    return "Buku saya ke-$b"; 
}); 
Route::get('/buku/{c}', function ($c) { 
    return "Buku kita ke-$c"; 
});

Route::get('mahasiswa/andi', function (){
    echo"Halaman mahasiswa andi";
});

Route::get('mahasiswa/andi', function (){
    echo"Halaman mahasiswa andi";
});


Route::get('/',function () {
    return view ('welcome');   
});

Route::get('/home', function () {
    return view ('halaman_home');   
});

Route::get('/mahasiswa', function(){
    return View::make('mahasiswa');
});

Route::get('/mahasiswa', function(){
    return view('kampus.mahasiswa');
});

Route::get('/mahasiswa', function(){
    return view('kampus.mahasiswa',["mahasiswa01"=>"Maulana sultan"]);
});

// Route::get('/mahasiswa',function(){
//     return view('kampus.mahasiswa',
//     [
//         "mahasiswa01"=>"indra kenz",
//         "mahasiswa02"=>"Doni salmanan",
//         "mahasiswa03"=>"ulfi Rizkia",
//         "mahasiswa04"=>"Deliana Putri"
//     ]);
// });

Route::get('/mahasiswa',function(){   //agar terlihat rapi gunakan seperti ini kalau normalnya seperti diatas
    $arrmahasiswa=
    [
        "mahasiswa01"=>"indra kenz",
        "mahasiswa02"=>"Doni salmanan",
        "mahasiswa03"=>"ulfi Rizkia",
        "mahasiswa04"=>"Deliana Putri"
    ];
    return view('kampus.mahasiswa',$arrmahasiswa);
});

Route::get('/mahasuswa',function(){
    $arrmahasiswa = ["doni sadikin","Syadwina sahara","Deliana putri","idra kenz"];
    return view('kampus.mahasiswa',['mahasiswa'=> $arrmahasiswa]);
});


Route::get('/mahasiswa',function(){
   return view('kampus.mahasiswa')->with('mahasiswa01','Risa lestari'); 
});

Route::get('/mahasiswa',function(){
    $arrmahasiswa = ["Doni sadikin","Syadzwina sahara","Deliana putri","indra kenz"];
return view('kampus.mahasiswa')->with('mahasiswa',$arrmahasiswa);
});

Route::get('/mahasiswa',function(){ #digunakan lebih singkat
    return view('kampus.mahaiswa')
    ->with('mahaiswa01','Doni salmanan')
    ->with('mahaiswa02','Doni aja')
    ->with('mahaiswa03','Doni epep');
});


Route::get('/mahasiswa',function(){
    $mahasiswa01="indra kenz",
    $mahasiswa02="doni salmanan",
    $mahasiswa01="ulfi rizkia",
    $mahasiswa02="deliana putri"
return view('kampus.mahasiswa',compact("mahasiswa01","mahasiswa02","mahasiswa03","mahasiswa04"));
});