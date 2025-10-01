<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home', [
            'judul' => 'Home'
        ]);
    }

    public function dashboard()
    {
        return view('beranda', [
            'judul' => 'Beranda'
        ]);
    }
}
