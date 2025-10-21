<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //  $students = [
        // ['no' => 1, 
        // 'name' => 'Ihsan',
        // 'grade' => '11 PPLG 1', 
        // 'email' => 'ihsan@mail.com', 
        // 'address' => 'Depok'],
        // ['no' => 2, 
        // 'name' => 'Raden',
        // 'grade' => '11 PPLG 1',
        // 'email' => 'raden@mail.com', 
        // 'address' => 'Serang'],
        // ['no' => 3, 
        // 'name' => 'Azka',
        // 'grade' => '11 PPLG 1', 
        // 'email' => 'azka@mail.com', 
        // 'address' => 'Kudus'],
        // ['no' => 4, 
        // 'name' => 'Enriko',
        // 'grade' => '10 PPLG 1', 
        // 'email' => 'enriko@mail.com', 
        // 'address' => 'Pati'],
        // ['no' => 5, 
        // 'name' => 'Ugi',
        // 'grade' => '10 PPLG 1', 
        // 'email' => 'ugi@mail.com', 
        // 'address' => 'Ciputat'],
        // ];

         $students = Student::all();
        //$students = Student::with('classroom')->get();
        

        return view('student', [
        'judul' => 'students',
        'students' => $students
        ]);
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function student()
{
   
}

}
