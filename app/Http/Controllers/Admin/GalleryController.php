<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;

class GalleryController 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.admin_gallery', compact('galleries'));
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
        'title' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'img' => 'required|image|mimes:jpg,jpeg,png,webp|max:51200',
    ]);
     $imagePath = $request->file('img')->store('galleries', 'public');
    Gallery::create([
        'title' => $request->title,
        'category' => $request->category,
        'img' => $imagePath,
    ]);
    return redirect()->back()->with('success', 'Gallery item added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
        'title' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'img' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);
    $gallery = Gallery::findOrFail($id);
    $data = [
        'title' => $request->title,
        'category' => $request->category,
    ];
    if ($request->hasFile('img')) {
        $imagePath = $request->file('img')->store('galleries', 'public');
        $data['img'] = $imagePath;
    }
    $gallery->update($data);
    return redirect()->back()->with('success', 'Gallery updated successfully.');                                                          
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();
        return redirect()->back()->with('success', 'Gallery item deleted successfully.');
    }
}
