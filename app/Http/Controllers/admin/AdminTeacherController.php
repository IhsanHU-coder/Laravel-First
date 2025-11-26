<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Teacher;

class AdminTeacherController extends Controller
{
    public function index()
    {
        //  $teachers = Teacher::all();
         $teachers = Teacher::with('subject')->paginate(10);
         $subjects = Subject::all();
        //$teachers = Teacher::with('subject')->get();

        return view('admin.teacher.index', [
        'title' => 'teacher',
        'subjects' => $subjects,
        'teachers' => $teachers
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'         => 'required|string|max:255',
            'subject_id' => 'required|exists:subjects,id',
            'phone' => 'required|numeric',
            'address'      => 'nullable|string|max:255',
        ]);


        Teacher::create($validated);

        return redirect()->back()->with('success', 'Data berhasil disimpan !');
        // return redirect()->route('admin.student.index')->with('success', 'Data berhasil disimpan!');

    }


    public function edit($id)
{
    $teacher = Teacher::findOrFail($id);
    $subjects = Subject::all();

    return view('admin.teacher.edit', compact('teacher', 'subjects'));
}



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $teacher = Teacher::findOrFail($id);

        $data = $request->validate([
            'nama'         => 'required|string|max:255',
            'subject_id'     => 'required|exists:subjects,id',
            'phone'         => 'required|numeric',
            'address'      => 'nullable|string|max:255',
        ]);

        $teacher->update($data);

        return redirect()->route('teachers.index')->with('success', 'Student updated successfully.');
    }

    public function destroy($id)
{
    $teacher = Teacher::findOrFail($id);
    $teacher->delete();

    return redirect()->back()->with('success', 'Teacher deleted successfully.');
}

}
