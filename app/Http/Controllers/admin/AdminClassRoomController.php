<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\ClassRoom;
use App\Models\Student;
use App\Http\Controllers\Controller;

class AdminClassRoomController extends Controller
{
    public function index()
    {
         $class_rooms = ClassRoom::with('students')->get();
        //$class_rooms = ClassRoom::with('students')->get();
        // $title = 'Classroom List';
        

        // return view('admin.classroom.index', [
        // 'title' => 'class_rooms',
        // 'class_rooms' => $class_rooms
        // ]);
        return view('admin.classroom.index',[
            'title' => 'class_rooms',
            'class_rooms' => $class_rooms
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            // 'id'=> 'required|int'
        ]);

        ClassRoom::create($validated);

        return redirect()->back()->with('success', 'Data berhasil disimpan !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $classroom = ClassRoom::findOrFail($id);
        $classroom->delete();

        return redirect()->route('class_rooms.index')->with('success', 'Data berhasil dihapus !');
    }

    public function edit(ClassRoom $classroom)
{
    return view('admin.classroom.edit', [
        'classroom' => $classroom
    ]);
}

public function update(Request $request, ClassRoom $classroom)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
    ]);

    $classroom->update($validated);

    return redirect()->back()->with('success', 'Classroom updated successfully!');
}


}
