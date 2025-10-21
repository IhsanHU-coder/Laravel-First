<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;

class ClassRoomController extends Controller
{
    public function index()
    {
         $classrooms = ClassRoom::all();
        //$classrooms = ClassRoom::with('students')->get();
        

        return view('classroom', [
        'judul' => 'classroom',
        'classrooms' => $classrooms
        ]);
    }
}
