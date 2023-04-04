<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Str;
use App\Http\Controllers\coba\foo;


    class PageController extends Controller
    {
        public function index(){
            return "halaman home admin";
        }
        public function tampil(){
            return "data mahasiswa";
        }
        // public function cobaFacade(){
        //     echo Str::snake('SedangBelajarLaravelUncover');
        //     echo "<br>";
        //     echo Str::kebab('SedangBelajarLaravelUncover');
        // }

        public function cobaClass(){
            $foo = new foo();
            echo $foo->bar();
        }
    }
?>