<?php

namespace App\Http\Controllers\Admin;

use App\Models\Career;
use Illuminate\Http\Request;


class CareerController 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $careers = Career::all();
        return view('admin.admin_career', compact('careers'));
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
       $request->validate([
        'job_title'     => 'required|string|max:255',
        'salary_range'  => 'required|string|max:255',
        'description'   => 'required|string',
        'experience'    => 'required|string|max:255',
        'skills'        => 'required|string|max:255',
    ]);
    Career::create([
        'job_title' => $request->job_title,
        'salary_range' => $request->salary_range,
        'description' => $request->description,
        'experience' => $request->experience,
        'skills' => $request->skills,
    ]);
    return redirect()->back()->with('success', 'Career opportunity added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Career $career)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Career $career)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
        'job_title'     => 'required|string|max:255',
        'salary_range'  => 'required|string|max:255',
        'description'   => 'required|string',
        'experience'    => 'required|string|max:255',
        'skills'        => 'required|string|max:255',
    ]);
    $career = Career::findOrFail($id);
    $career->update([
        'job_title' => $request->job_title,
        'salary_range' => $request->salary_range,
        'description' => $request->description,         
        'experience' => $request->experience,
        'skills' => $request->skills,
    ]);
    return redirect()->back()->with('success', 'Career opportunity updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $career = Career::findOrFail($id);
        $career->delete();
        return redirect()->back()->with('success', 'Career opportunity deleted successfully!');
    }
}
