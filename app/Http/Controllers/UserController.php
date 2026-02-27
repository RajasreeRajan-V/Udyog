<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;
use App\Models\Contactus;
use App\Mail\ContactThankYouMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Service;
use App\Models\Offer;
use App\Models\Gallery;
use App\Models\AboutUs;
use App\Models\Team;
use App\Models\Product;
use App\Models\Review;
 
class UserController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $about = AboutUs::latest()->get();
        $offers = Offer::all();
        $reviews = Review::all();
        $reviewsData = $reviews->map(function ($review) {
            return [
                'name' => $review->name,
                'title' => $review->designation,
                'quote' => $review->review,
            ];
        });
        return view('user.index', compact('services','about','offers','reviews','reviewsData'));
    }   

    public function about()
    {
        $about = AboutUs::latest()->get();
        $team = Team::all();
        return view('user.about', compact('about','team'));
    }  

    public function careers()
    {
        $careers = Career::all();
        return view('user.careers', compact('careers'));
    }

    public function products()
    {
        $product = Product::all();
        return view('user.products', compact('product'));
    }
    public function gallery()
    {
        $gallery = Gallery::all();
        return view('user.gallery', compact('gallery'));
    }
    public function offers()
    {
        $offers = Offer::all();
        return view('user.offers', compact('offers'));
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
