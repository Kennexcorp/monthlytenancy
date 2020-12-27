<?php

namespace App\Http\Controllers\Backend;

use App\Property;
use App\Http\Controllers\Controller;
use App\Landlord;
use App\PropertyType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class PropertyController extends Controller
{
    private $propertyTypes;
    private $houseTypes;

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:update-property', ['only' => ['update']]);
        $this->middleware('permission:view-property', ['only' => ['show']]);
        $this->middleware('permission:delete-property', ['only' => ['destroy']]);
        $this->middleware('permission:create-property', ['only' => ['create']]);

        $this->propertyTypes = PropertyType::where('category', 'Property')->get();
        $this->houseTypes = PropertyType::where('category', 'House')->get();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $values = Landlord::with(['properties'])->get();

        // dd($states->json());

        return view('backend.property-index')->with(['values' => $values]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $states = array();
        try {
            //code...

            $states = Http::get('http://locationsng-api.herokuapp.com/api/v1/lgas')->json();
        } catch (\Throwable $th) {
            //throw $th;
            report($th);

        }

        return view('backend.property-create')->with(['states' => $states, 'propertyTypes' => $this->propertyTypes, 'houseTypes' => $this->houseTypes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        // dd($request->toArray());
        if($request->has('landlord_property')) {
            $landlord = Landlord::find($request->landlord_property);
            $landlord->properties()->create([
                'type' => $request->house_type,
                'units' => $request->units,
                'toilets' => $request->toilets,
                'bathrooms' => $request->bathrooms,
                'rooms' => $request->rooms,
                'unit_price' => $request->price,
                'other_description' => $request->description,
            ]);

            if($request->hasfile('images'))
                {
                    $this->addImages($landlord->property(), $request->file('images'));
                }

        } else {
            $result = DB::transaction(function () use ($request) {
            $landlord = Landlord::create([
                'name' => $request->name,
                'contact' => $request->contact,
                'type' => $request->property_type,
                'state' => $request->state,
                'lga' => $request->lga,
                'address' => $request->address,
            ]);

            $property = $landlord->properties()->create([
                'type' => $request->house_type,
                'units' => $request->units,
                'toilets' => $request->toilets,
                'bathrooms' => $request->bathrooms,
                'rooms' => $request->rooms,
                'other_description' => $request->description,
                'unit_price' => $request->price,
            ]);

            if($request->hasfile('images'))
            {
                $this->addImages($property, $request->file('images'));
            }

        });
        }


        return redirect()->route('admin.property.index')->with('success', 'Property added Successfully');
        dd($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $value = Landlord::find($id)->with(['properties'])->first();
        $propertyTypes = $this->propertyTypes;
        $houseTypes = $this->houseTypes;
        $states = array();
        try {
            //code...

            $states = Http::get('http://locationsng-api.herokuapp.com/api/v1/lgas')->json();
        } catch (\Throwable $th) {
            //throw $th;
            report($th);

        }

        return view('backend.property-show', compact('value', 'states', 'propertyTypes', 'houseTypes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $value = Property::find($id);

        return view('backend.property-edit')->with(['value' => $value, 'houseTypes' => $this->houseTypes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // dd($request->toArray());
        $request->validate([
            'images[]' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        switch ($request->request_type) {
            case 'property':
                # code...
                $property = Property::find($id)->update([
                    'type' => $request->house_type,
                    'units' => $request->units,
                    'toilets' => $request->toilets,
                    'bathrooms' => $request->bathrooms,
                    'rooms' => $request->rooms,
                    'other_description' => $request->description,
                    'unit_price' => $request->price,
                ]);

                if($request->hasfile('images'))
                {
                    $this->addImages($property, $request->file('images'));
                }

                break;

            case 'landlord':
                # code...
                Landlord::find($id)->update([
                    'name' => $request->name,
                    'contact' => $request->contact,
                    'type' => $request->property_type,
                    'state' => $request->state,
                    'lga' => $request->lga,
                    'address' => $request->address,
                ]);
                break;

            default:
                # code...
                return back();
                break;
        }
        return back()->with('success', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $landlord = Landlord::find($id);

        $landlord->delete();

        return back()->with('success', 'property deleted successfully');
    }

    public function addImages($property, $images) {
        foreach($images as $file)
        {
            $name = uniqid('image_').'.'.$file->extension();
            // $file->move(public_path().'/files/', $name);
            $path = $file->storeAs('public/propertyImages', $name);
            // $data->push(["path" => $path]);
            $property->propertyImages()->create([
                'image_path' => $path
            ]);
        }

    }
}
