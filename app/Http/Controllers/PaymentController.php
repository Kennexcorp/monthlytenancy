<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Paystack;
class PaymentController extends Controller
{
    //

    public function redirectToGateway()
    {
        
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback($txref)
    {
        

        // dd($txref);
        $verified_data = Http::withToken(env('PAYSTACK_SECRET_KEY'))->get('https://api.paystack.co/transaction/verify/'.$txref);

        if($verified_data->successful()) {

        }

        dd(json_decode($verified_data));
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }

}
