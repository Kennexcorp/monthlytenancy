<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login() {
        return view('backend.login');
    }

    public function signup() {
        return view('frontend.signup');
    }

    public function authenticate(Request $request)
    {
        // dd($request->toArray());
        
        $credentials = ['email' => $request->email, 'password' => $request->password, 'is_admin' => 1];

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('admin.home');
        } else {
            $request->session()->flash('message', 'Incorrect username or password');
            return back();
        }

    }
}
