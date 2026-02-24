<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contactus;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactReplyMail;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactuses = Contactus::latest()->get();
        return view('admin.admin_contactus', compact('contactuses'));
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
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function reply(Request $request, $id)
{
    $request->validate([
        'replay' => 'required|string'
    ]);

    $contact = Contactus::findOrFail($id);

    $contact->replay = $request->replay;
    $contact->save();
    Mail::to($contact->email)
        ->send(new ContactReplyMail($contact, $request->replay));

    return redirect()->back()->with('success', 'Reply sent successfully!');
}
}
