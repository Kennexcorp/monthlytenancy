<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()  {
        return view('backend.index');
    }
}
