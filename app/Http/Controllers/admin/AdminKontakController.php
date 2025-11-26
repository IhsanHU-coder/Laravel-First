<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminKontakController extends Controller
{
    public function kontak()
    {
        return view('admin.kontak.index', [
            'judul' => 'Kontak'
        ]);
    }
}
