<?php

namespace App\Http\Controllers;

use App\Models\CareerApplication;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class CareerApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.careers');
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
            'career_id' => 'required|exists:careers,id',

            'full_name' => 'required|string|max:255',

            'phone_number' => [
                'required',
                'regex:/^[6-9]\d{9}$/',
                Rule::unique('career_applications')
                    ->where(function ($query) use ($request) {
                        return $query->where('career_id', $request->career_id);
                    }),
            ],

            'email_address' => [
                'required',
                'email',
                'max:255',
                Rule::unique('career_applications')
                    ->where(function ($query) use ($request) {
                        return $query->where('career_id', $request->career_id);
                    }),
            ],

            'resume' => 'required|mimes:pdf,doc,docx|max:2048',

        ], [
            'phone_number.regex'  => 'Enter a valid 10-digit mobile number starting with 6, 7, 8, or 9.',
            'phone_number.unique' => 'You have already applied for this job with this phone number.',
            'email_address.unique' => 'You have already applied for this job with this email.',
        ]);
    $resumePath = $request->file('resume')
                          ->store('resumes', 'public');
    CareerApplication::create([
        'career_id' => $request->career_id,
        'full_name' => $request->full_name,
        'phone_number' => $request->phone_number,
        'email_address' => $request->email_address,
        'resume' => $resumePath,
    ]);
    return redirect()->back()->with('success', 'Your application has been submitted successfully!');
    }

    /**
     * Display the specified resource.
     */

    public function show(CareerApplication $careerApplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CareerApplication $careerApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CareerApplication $careerApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CareerApplication $careerApplication)
    {
        //
    }
}
