<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    // public function index()
    // {
    //     return view('beranda', [
    //         'judul' => 'Beranda'
    //     ]);
    // }

    public function profil()
    {
        return view('profil', [
            'judul' => 'Profil',
            'nama' => 'Ihsan',
            'kelas' => 'XI PPLG 1',
            'sekolah' => 'SMK Bisa Hebat'
        ]);
    }

    // public function kontak()
    // {
    //     return view('kontak', [
    //         'judul' => 'Kontak'
    //     ]);
    // }

    // public function home()
    // {
    //     return view('home', [
    //         'judul' => 'Home'
    //     ]);
    // }

//     public function student()
// {
//     $students = [
//         // ['no' => 1, 'name' => 'Ihsan', 'email' => 'ihsan@mail.com', 'address' => 'Depok'],
//         // ['no' => 2, 'name' => 'Raden', 'email' => 'raden@mail.com', 'address' => 'Serang'],
//         // ['no' => 3, 'name' => 'Azka', 'email' => 'azka@mail.com', 'address' => 'Kudus'],
//         // ['no' => 4, 'name' => 'Enriko', 'email' => 'enriko@mail.com', 'address' => 'Pati'],
//         // ['no' => 5, 'name' => 'Ugi', 'email' => 'ugi@mail.com', 'address' => 'Ciputat'],
//     ];

//     return view('student', [
//         'judul' => 'Student',
//         // 'students' => $students
//     ]);
// }


    
}
