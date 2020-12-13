<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('permission:update profile', ['only' => ['update']]);
        // $this->middleware('permission:view profile', ['only' => ['show']]);
        // $this->middleware('permission:delete profile', ['only' => ['destroy']]);
        // $this->middleware('permission:create profile', ['only' => ['create']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::where('id', $id)->with(['profile'])->first();

        // dd($user->toArray());

        return view('frontend.profile')->with(['user'=> $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $type)
    {
        //
        $user = User::find($id);

        switch ($type) {
            case 'personal':
                # code...
                // dd($request->toArray());
                $user->profile()->updateOrCreate([
                    'date_of_birth' => $request->date_of_birth
                ]);
                break;

            case 'work':
                # code...
                // dd($request->toArray());
                $user->workInfo()->updateOrCreate([
                    'occupation' => $request->occupation,
                    'organization_name' => $request->organization_name,
                    'organization_address' => $request->organization_address,
                    'id_number' => $request->id_number,
                    'id_type' => $request->id_type,
                    'account_statement' => $request->account_statement,
                    'callup_letter' => $request->callup_letter,
                ]);
                break;

            case 'account':
                # code...
                $user->bankInfo()->updateOrCreate([
                    'card_name' => $request->card_name,
                    'card_number' => $request->card_number,
                    'expiry_date' => $request->exp_date,
                    'bvn' => $request->bvn,
                ]);
                break;

            default:
                # code...
                $request->session()->flash('failure', 'Something went wrong');
                return back();
                break;
        }
        return back()->with('success', 'profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
