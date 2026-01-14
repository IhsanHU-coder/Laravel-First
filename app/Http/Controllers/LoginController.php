<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class LoginController extends Controller
{
    public function index()
    {
        $title = 'Student List';
        return view('login', [
            'judul' => 'logins',
            'logins' => $logins
        ]);
    }
}
