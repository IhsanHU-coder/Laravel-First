<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;

class ClassRoomController extends Controller
{
    public function index()
    {
         $class_rooms = ClassRoom::all();
        //$class_rooms = ClassRoom::with('students')->get();
        $title = 'Classroom List';
        

        return view('classroom', [
        'judul' => 'classroom',
        'class_rooms' => $class_rooms
        ]);
    }
}
