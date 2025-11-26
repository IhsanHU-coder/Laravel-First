<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;

class AdminSubjectController extends Controller
{
    public function index()
    {
        // $subjects = Subject::all();
        $subjects = Subject::with('teachers')->get();
        
        return view('admin.subject.index', [
        'title' => 'subject',
        'subjects' => $subjects
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            // 'id'=> 'required|int'
        ]);

        Subject::create($validated);

        return redirect()->back()->with('success', 'Data berhasil disimpan !');
    }

    public function edit(Subject $subject)
{
    return view('admin.subject.edit', [
        'subject' => $subject
    ]);
}

public function update(Request $request, Subject $subject)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
    ]);

    $subject->update($validated);

    return redirect()->back()->with('success', 'Subject updated successfully!');
}

}
