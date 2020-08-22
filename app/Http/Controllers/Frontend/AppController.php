<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Property;
use Illuminate\Http\Request;

class AppController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except(['about', 'contact', 'home']);
    }

    public function home() {
        $properties = Property::all();
        return view('frontend.home', compact('properties'));
    }

    public function about() {
        return view('frontend.about');
    }

    public function contact() {
        return view('frontend.contact');
    }
}
