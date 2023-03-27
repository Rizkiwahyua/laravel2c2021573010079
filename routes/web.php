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

Route::get('/mahasiswa', function(){
    $arrmahasiswa = ["luhut panjaitan", "vidlamir putin", "jokowi", "lisa pramata"];

    return view('mahasiswa')->with('mahasiswa', $arrmahasiswa);
});

Route::get('/dosen', function(){
    $arrdosen = ["maya fitriani, M.M.", "Prof. Silvia Nst, M,farm.", "Dr. Umar Agustinus", "Dr. Syahrial, M.Kom."];

    return view('dosen')->with('dosen', $arrdosen);
});

Route::get('/gallery', function(){
    return view('galery');
});

Route::get('admin', function(){
    return view('admin');
});

?>

