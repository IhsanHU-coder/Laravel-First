<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\guardian;

class AdminGuardianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     // $guardians = guardian::all();
    //     $guardians = Guardian::paginate(5);
    //             // $students = Student::with('classroom')->paginate(10);


    //     return view('admin.guardian.index', [
    //     'title' => 'guardian',
    //     'guardians' => $guardians
    //     ]);
    // }

    public function index(Request $request)
{
    $guardians = Guardian::when(trim($request->search) !== '', function ($query) use ($request) {
            $search = $request->search;

            $query->where('nama', 'like', "%{$search}%")
                  ->orWhere('job', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('address', 'like', "%{$search}%");
        })
        ->paginate(5)
        ->withQueryString();

    return view('admin.guardian.index', [
        'title' => 'guardian',
        'guardians' => $guardians
    ]);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.guardian.create', [
            'title' => 'Add Guardian'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nama'    => 'required',
        'job'     => 'required',
        'phone'   => 'required',
        'email'   => 'required|email',
        'address' => 'required',
    ]);

    Guardian::create($request->all());

    return redirect()->route('guardians.index')->with('success', 'Guardian berhasil ditambahkan!');
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
        $guardian = Guardian::findOrFail($id);

        return view('admin.guardian.edit', [
            'title' => 'Edit Guardian',
            'guardian' => $guardian
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required',
        'job' => 'required',
        'phone' => 'required',
        'email' => 'required|email',
        'address' => 'required',
    ]);

    $guardian = Guardian::findOrFail($id);

    $guardian->update([
        'nama' => $request->nama,
        'job' => $request->job,
        'phone' => $request->phone,
        'email' => $request->email,
        'address' => $request->address,
    ]);

    return redirect()->route('guardians.index')
                     ->with('success', 'Guardian updated successfully!');
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $guardian = Guardian::findOrFail($id);
        $guardian->delete();

        return redirect()->route('guardians.index')
                         ->with('success', 'Guardian berhasil dihapus!');
    }
}
