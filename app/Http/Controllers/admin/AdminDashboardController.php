<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\ClassRoom;
use App\Models\Subject;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index', [
            'title'          => 'Dashboard',
            'totalStudents'  => Student::count(),
            'totalTeachers'  => Teacher::count(),
            'totalClasses'   => ClassRoom::count(),
            'totalMapel'     => Subject::count(),
        ]);
    }
}
