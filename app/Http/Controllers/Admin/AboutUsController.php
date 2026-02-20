<?php

namespace App\Http\Controllers\Admin;

use App\Models\AboutUs;

use Illuminate\Http\Request;

class AboutUsController 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutus = AboutUs::first(); 
        return view('admin.admin_aboutus', compact('aboutus'));
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
            'heading' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'tagline' => 'required|string|max:255',
            'description' => 'required',

            'person1_name' => 'required|string|max:255',
            'person1_position' => 'required|string|max:255',
            'person1_image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',

            'person2_name' => 'required|string|max:255',
            'person2_position' => 'required|string|max:255',
            'person2_image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $person1ImagePath = $request->file('person1_image') ->store('aboutus', 'public');

        $person2ImagePath = $request->file('person2_image') ->store('aboutus', 'public');

         AboutUs::create([
            'heading' => $request->heading,
            'title' => $request->title,
            'tagline' => $request->tagline,
            'description' => $request->description,

            'person1_name' => $request->person1_name,
            'person1_position' => $request->person1_position,
            'person1_image' => $person1ImagePath,

            'person2_name' => $request->person2_name,
            'person2_position' => $request->person2_position,
            'person2_image' => $person2ImagePath,
        ]);
    return redirect()
        ->back()
        ->with('success', 'About Us section created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(AboutUs $aboutUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutUs $aboutUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       $about = AboutUs::findOrFail($id);
        $request->validate([
        'heading' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'tagline' => 'required|string|max:255',
        'description' => 'required',

        'person1_name' => 'required|string|max:255',
        'person1_position' => 'required|string|max:255',
        'person1_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

        'person2_name' => 'required|string|max:255',
        'person2_position' => 'required|string|max:255',
        'person2_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);
    $about->update($request->all());
    return redirect()
        ->back()
        ->with('success', 'About Us section updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutUs $aboutUs)
    {
        //
    }
}
