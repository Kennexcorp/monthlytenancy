<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    //
    public function viewProperty($id) {
        $property = Property::find($id);
        $properties = Property::all();
        return view('frontend.property-single', ['property' => $property, 'properties' => $properties]);
    }
}
