<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        return view('beranda');
    }

    public function profil()
    {
        $data = [
            'nama' => 'Budi Sanjaya',   // bisa ganti dengan nama kamu
            'kelas' => 'XI PPLG 1',
            'sekolah' => 'SMK Bisa Hebat'
        ];
        return view('profil', $data);
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function home()
    {
        return view('home');
    }
}
