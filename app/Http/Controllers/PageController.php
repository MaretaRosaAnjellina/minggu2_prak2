<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return "Selamat Datang";
    }

    public function about() {
        return "NIM: 2031710006 <br> Nama: Mareta Rosa Anjellina";
    }

    public function articles($id) {
        return "Halaman Artikel dengan Id '$id'";
    }
}
