<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Controllers\Controller;
use App\Models\ClassRoom;

class AdminStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $students = Student::with('classroom')->paginate(5);
    //     $class_rooms = ClassRoom::all();
    //     // $title = 'Student List';
        

    //     return view('admin.student.index', [
    //     'title' => 'students',
    //     'students' => $students,
    //     'class_rooms' => $class_rooms
    //     ]);
    // }

    public function index(Request $request)
{
    $students = Student::with('classroom')
        ->when(trim($request->search) !== '', function ($query) use ($request) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('address', 'like', "%{$search}%")
                  ->orWhereHas('classroom', function ($cq) use ($search) {
                      $cq->where('name', 'like', "%{$search}%");
                  });
            });
        })
        ->paginate(5)
        ->withQueryString();

    $class_rooms = ClassRoom::all();

    return view('admin.student.index', [
        'title' => 'students',
        'students' => $students,
        'class_rooms' => $class_rooms
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
        $validated = $request->validate([
            'name'         => 'required|string|max:255',
            'birthday' => 'required|date',
            'classroom_id' => 'required|exists:class_rooms,id',
            'email'        => 'required|email|unique:students,email',
            'address'      => 'nullable|string|max:255',
        ]);

        Student::create($validated);

        return redirect()->back()->with('success', 'Data berhasil disimpan !');
        // return redirect()->route('admin.student.index')->with('success', 'Data berhasil disimpan!');

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
    public function edit($id)
{
    $student = Student::findOrFail($id);
    $class_rooms = ClassRoom::all();

    return view('admin.student.edit', compact('student', 'class_rooms'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $student = Student::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'classroom_id' => 'required|exists:class_rooms,id',
            'birthday' => 'nullable|date',
            'email' => 'required|email|unique:students,email,'.$student->id,
            'address' => 'nullable|string|max:500',
        ]);

        $student->update($data);

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Data berhasil dihapus !');
    }

    public function student()
{
   
}

}
