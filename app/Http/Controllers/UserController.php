<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;
use App\Models\Contactus;
use App\Mail\ContactThankYouMail;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }   

    public function about()
    {
        return view('user.about');
    }  

    public function careers()
    {
        $careers = Career::all();
        return view('user.careers', compact('careers'));
    }

    public function products()
    {
        return view('user.products');
    }
    public function gallery()
    {
        return view('user.gallery');
    }
    public function offers()
    {
        return view('user.offers');
    }
    public function contactStore(Request $request)
    {
       $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|unique:contactuses,email',
            'phone'   => 'required|string|max:12|unique:contactuses,phone',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ], [
            'email.unique' => 'This email already submitted a message.',
            'phone.unique' => 'This phone number already submitted a message.',
        ]);

        Contactus::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        Mail::to($request->email)
        ->send(new ContactThankYouMail($request->name));
        return redirect()
        ->route('home')
        ->with('success', 'Your message has been sent successfully!')
        ->withFragment('contact');
    }
    public function forgotPassword()
    {
        return view('admin.forgot-password');
    }
}
