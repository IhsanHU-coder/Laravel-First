<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index()
    {
         $teachers = Teacher::all();
        //$teachers = Teacher::with('subject')->get();

        return view('teacher', [
        'judul' => 'teacher',
        'teachers' => $teachers
        ]);
    }
}
