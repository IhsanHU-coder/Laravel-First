<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;

class ClassRoomController extends Controller
{
    public function index()
    {
        $classrooms = ClassRoom::all();

        return view('classroom', [
        'judul' => 'classroom',
        'classrooms' => $classrooms
        ]);
    }
}
