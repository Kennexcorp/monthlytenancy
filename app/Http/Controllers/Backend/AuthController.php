<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

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

    public function forgotPassword()
    {
        return view('frontend.password');
    }

    public function forgot() {
        $credentials = request()->validate(['email' => 'required|email']);

        Password::sendResetLink($credentials);

        return back()->with("msg", 'Reset password link sent on your email id.');
    }

    public function reset() {
        $credentials = request()->validate([
            'email' => 'required|email',
            'token' => 'required|string',
            'password' => 'required|string|confirmed'
        ]);

        $reset_password_status = Password::reset($credentials, function ($user, $password) {
            $user->password = $password;
            $user->save();
        });

        if ($reset_password_status == Password::INVALID_TOKEN) {
            return back()->with("msg", "Invalid token provided");
        }

        return back()->with("msg", "Password has been successfully changed");
    }
}
