<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;

class AdminSubjectController extends Controller
{
    // public function index()
    // {
    //     // $subjects = Subject::all();
    //     $subjects = Subject::with('teachers')->paginate(5);
        
    //     return view('admin.subject.index', [
    //     'title' => 'subject',
    //     'subjects' => $subjects
    //     ]);
    // }

    public function index(Request $request)
{
    $subjects = Subject::with('teachers')
        ->when(trim($request->search) !== '', function ($query) use ($request) {
            $search = $request->search;

            $query->where('name', 'like', "%{$search}%")
                  ->orWhereHas('teachers', function ($tq) use ($search) {
                      $tq->where('name', 'like', "%{$search}%");
                  });
        })
        ->paginate(5)
        ->withQueryString();

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
