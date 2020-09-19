<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Property;
use App\PropertyType;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    //
    public function viewProperty($id) {
        $property = Property::find($id);
        $properties = Property::all();
        return view('frontend.property-single', ['property' => $property, 'properties' => $properties]);
    }

    public function properties() {
        $properties = Property::paginate(8);
        // dd($properties->toArray());
        $houseTypes = PropertyType::where('category', 'House')->get();
        // return view('frontend.home', compact('properties', 'houseTypes'));
        return view('frontend.property', ['properties' => $properties, 'houseTypes' => $houseTypes]);
    }
}
