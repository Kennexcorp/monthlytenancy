<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Property;
use App\PropertyImages;
use App\PropertyType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AppController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except(['about', 'contact', 'home', 'contactProperty', 'downloadTerms']);
    }

    public function home() {
        $properties = Property::all();
        // $property = Property::all();

        $houseTypes = PropertyType::where('category', 'House')->get();
        return view('frontend.home', compact('properties', 'houseTypes'));
    }

    public function about() {
        return view('frontend.about');
    }

    public function contact() {

        return view('frontend.contact');
    }

    public function contactProperty($property) {

        $inspectProp = Property::find($property);

        return view('frontend.contact', ['property' => $inspectProp]);
    }

    public function downloadTerms() {

        return Storage::download('/terms/MTP_terms.pdf');
    }

}
