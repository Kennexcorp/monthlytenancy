<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    //
    public function login() {
        return view('frontend.login');
    }

    public function signup() {
        return view('frontend.signup');
    }

    public function register(Request $request) {
        // dd($request->toArray());

        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone_number' => ['required', 'max:11', 'unique:profiles']
        ]);

        DB::transaction(function () use ($request) {

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $user->profile()->create([
                'phone_number' => $request->phone_number
            ]);

            $user->workInfo()->create([]);
            $user->bankInfo()->create([]);
        });


        $request->session()->flash('message', 'Registration successful! Please Login here');

        return redirect()->route('auth.login');
    }

    public function authenticate(Request $request)
    {
        // dd($request->toArray());
        $credentials = ['email' => $request->email, 'password' => $request->password, 'is_admin' => 0];

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('member.home');
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

        return back()->with("message", 'Reset password link sent on your email id.');
    }

    public function getReset($token)
    {
        // dd($token);
        return view('frontend.password-reset', ['token' => $token]);
    }

    public function reset(Request $request) {

        // dd($request->toArray());
        $credentials = request()->validate([
            'email' => 'required|email',
            'token' => 'required|string',
            'password' => 'required|string|confirmed'
        ]);
        // dd($credentials);

        $reset_password_status = Password::reset($credentials, function ($user, $password) {
            $user->password = Hash::make($password);
            $user->save();
        });

        // dd($reset_password_status);

        if ($reset_password_status == Password::INVALID_TOKEN) {
            return back()->with("message", "Invalid token provided");
        }

        return redirect()->route('auth.login')->with("message", "Password has been successfully changed");
    }


}
