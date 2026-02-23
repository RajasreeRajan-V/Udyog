<?php

namespace App\Http\Controllers\Admin;

use App\Models\Offer;
use Illuminate\Http\Request;


class OfferController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offers = Offer::all();
        return view('admin.admin_offers', compact('offers'));
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
        'title'         => 'required|string|max:255',
        'description'   => 'required|string',
        'discount_text' => 'required|string|max:255',
        'valid_till'    => 'nullable|date',
        'badge'         => 'nullable|string|max:255',
        'type'          => 'required|in:current,upcoming',
    ]);
    Offer::create([
        'title' => $request->title,
        'description' => $request->description,
        'discount_text' => $request->discount_text,
        'valid_till' => $request->valid_till,
        'badge' => $request->badge,
        'type' => $request->type,
    ]);
    return redirect()->back()->with('success', 'Offer added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offer $offer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $offer = Offer::findOrFail($id);
        $request->validate([
            'title'         => 'required|string|max:255',
            'description'   => 'required|string',
            'discount_text' => 'required|string|max:255',
            'valid_till'    => 'nullable|date',
            'badge'         => 'nullable|string|max:255',
            'type'          => 'required|in:current,upcoming',
        ]);
        $offer->update($request->all());
        return redirect()->back()->with('success', 'Offer updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $offer = Offer::findOrFail($id);
        $offer->delete();
        return redirect()->back()->with('success', 'Offer deleted successfully!');
    }
}
