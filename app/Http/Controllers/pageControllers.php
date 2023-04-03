<?php

namespace App\Http\Controllers;
    class pageControllers extends Controller
    {
        public function index()
        {
            return "Halaman home";
        }
        public function tampil()
        {
            return "Data mahasiswa";
        }
    }