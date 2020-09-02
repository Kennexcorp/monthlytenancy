<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\InspectionRequest;
use Illuminate\Http\Request;

class InspectionRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $values = InspectionRequest::all();

        return view('backend.requests-index', ['values'=> $values]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        // dd($request);
        $value = InspectionRequest::create([
            'name' => $request->name,
            'property_id' => $request->property,
            'email' => $request->email,
            'message' => $request->message,
            'contact' => $request->contact,
            'status' => 'Pending',
        ]);

        return back()->with('success', 'Request sent Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InspectionRequest  $inspectionRequest
     * @return \Illuminate\Http\Response
     */
    public function show(InspectionRequest $inspectionRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InspectionRequest  $inspectionRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(InspectionRequest $inspectionRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InspectionRequest  $inspectionRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InspectionRequest $inspectionRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InspectionRequest  $inspectionRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(InspectionRequest $inspectionRequest)
    {
        //
    }
}
