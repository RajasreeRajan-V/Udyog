<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Career;

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
}
