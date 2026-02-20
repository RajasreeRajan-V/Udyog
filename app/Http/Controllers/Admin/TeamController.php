<?php

namespace App\Http\Controllers\Admin;

use App\Models\Team;
use Illuminate\Http\Request;


class TeamController 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        return view('admin.admin_team', compact('teams'));
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
        'name'     => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'image'    => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);
    $imagePath = $request->file('image')->store('teams', 'public');
        Team::create([
            'name' => $request->name,
            'position' => $request->position,
            'image' => $imagePath,
        ]);
    return redirect()->back()->with('success', 'Team member added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $team = Team::findOrFail($id);
        $request->validate([
        'name'     => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'image'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('teams', 'public');
        $team->image = $imagePath;
    }
        $team->name = $request->name;
        $team->position = $request->position;
        $team->save();
    return redirect()->back()->with('success', 'Team member updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $team = Team::findOrFail($id);
        $team->delete();
        return redirect()->back()->with('success', 'Team member deleted successfully!');
    }
}
