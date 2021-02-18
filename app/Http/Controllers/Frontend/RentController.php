<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Property;
use App\Rent;
use App\UserRent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class RentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rents = UserRent::with(['rents'])->where('user_id', auth()->user()->id)->get();
        // dd($rents->toArray());
        $current = $rents->where('status', 'ACTIVE')->first();
        // dd($current->rents->where('status', 'UNPAID')->count());
        if (!blank($current) && $current->rents->where('status', 'UNPAID')->count() == 0) {
            $current->update(['status' => 'EXPIRED']);
        }
        $past = $rents->where('status', '!=', 'ACTIVE');
        return view('frontend.my-rents', ['current' => $current, 'past' => $past]);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function show(Rent $rent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function edit(Rent $rent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rent $rent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rent $rent)
    {
        //
    }

    public function rentAUnit(Request $request) {
        // dd($request->toArray());
        $property = Property::find($request->property);
        // $duration_of_stay = $stay_duration;
        $properties = Property::paginate(8);

        return view('frontend.property-single', ['properties' => $properties, 'property' => $property, 'duration' => $request->duration]);
    }

    public function handleGatewayCallback($txref)
    {


        // dd($txref);
        $verified_data = Http::withToken(env('PAYSTACK_SECRET_KEY'))->get('https://api.paystack.co/transaction/verify/'.$txref);

        $data = json_decode($verified_data);
        // dd($data);
        if($data->status) {
            // dd(json_decode($verified_data));
            if($data->data->status == 'success') {
                $amount = $data->data->amount/100;
                $property = $data->data->metadata->property;
                $duration = $data->data->metadata->duration;
                $user = $data->data->metadata->user;
                $this->processRent($property, $duration, $amount, $user, $data->data->status, $txref);
                return redirect()->route('rents.index')->with('success', 'Rent for ');
            }

        } else {
            $this->handleGatewayCallback($txref);
        };


        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }

    public function processRent($property, $duration = null, $amount, $user, $status, $txref)
    {
        // dd($duration);
        $userProp = Property::find($property);
        if ($duration != null) {
            if(auth()->user()->id == $user){
                DB::transaction(function () use ($property, $duration, $amount, $user, $status, $txref, $userProp) {
                    // dd($duration);
                    $userRent = UserRent::create([
                        'user_id' => $user,
                        'property_id' => $property,
                        'duration' => $duration
                    ]);
                    Rent::create([
                        'user_rent_id' => $userRent->id,
                        'due_date' => now(),
                        'status' => $status,
                        'amount' => $amount,
                        'tref' => $txref
                    ]);

                    for ($i=1; $i < $duration; $i++) {
                        # code...
                        Rent::create([
                            'user_rent_id' => $userRent->id,
                            'due_date' => now()->addMonth($i),
                            'status' => 'UNPAID',
                            'amount' => $userProp->unit_price,
                            'tref' => ''
                        ]);
                    }

                    $userProp->units = $userProp->units - 1;
                    $userProp->save();
                });

            }

        } else {

        }


    }
}
