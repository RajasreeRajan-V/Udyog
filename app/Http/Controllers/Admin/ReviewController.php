<?php

namespace App\Http\Controllers\Admin;

use App\Models\Review;
use Illuminate\Http\Request;


class ReviewController 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::all();
        return view('admin.admin_reviews', compact('reviews'));
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
        'name'        => 'required|string|max:255',
        'designation' => 'required|string|max:255',
        'review'      => 'required|string',
        'img'         => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);
        $imagePath = $request->file('img')->store('reviews', 'public');
        Review::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'review' => $request->review,
            'img' => $imagePath,
        ]);
        return redirect()->back()->with('success', 'Review added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
        'name'        => 'required|string|max:255',
        'designation' => 'required|string|max:255',
        'review'      => 'required|string',
        'img'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);
        $review = Review::findOrFail($id);
        $data = [
            'name' => $request->name,
            'designation' => $request->designation,
            'review' => $request->review,   
    ];
        if ($request->hasFile('img')) {
            $imagePath = $request->file('img')->store('reviews', 'public');
            $data['img'] = $imagePath;
        }
        $review->update($data);
        return redirect()->back()->with('success', 'Review updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();
        return redirect()->back()->with('success', 'Review deleted successfully!');
    }
}
