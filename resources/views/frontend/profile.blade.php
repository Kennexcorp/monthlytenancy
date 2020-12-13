@extends('frontend.layout')
@section('content')

<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" data-stellar-background-ratio="0.5"
        style="background-image: url({{ isset($image_path) ? Storage::url($image_path) : $image_url }})">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-7">
                    <h1 class="mb-2">My Profile <br> & Other Personal Information</h1>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="site-section bg-light">
    <div class="container">

        <div class="h-100" id="demopurpose">
            <div class="container h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-12 col-sm col-md col-lg">


                        <div class="profile-card py-3 card text-center">
                            <a class="btn-edit" href="">
                                <i class="fa fa-edit"></i>
                            </a>
                            <div class="card-body py-4">
                                
                                <h2 class="text-dark h5 font-weight-bold mt-4 mb-1">
                                    {{ $user->name }}
                                </h2>

                                <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="personal-tab" data-toggle="tab" href="#personal"
                                            role="tab" aria-controls="personal" aria-selected="true">Personal
                                            Information</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="work-tab" data-toggle="tab" href="#work" role="tab"
                                            aria-controls="work" aria-selected="false">Work
                                            Information</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="account-tab" data-toggle="tab" href="#account"
                                            role="tab" aria-controls="account" aria-selected="false">Payment
                                            Information</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="personal" role="tabpanel"
                                        aria-labelledby="personal-tab">
                                        <div class="d-flex px-1 w-100 align-items-center text-left pt-3">
                                            <div class="w-100">
                                                <form action="{{ route('profile.update',[ $user->id, 'personal']) }}"
                                                    method="POST" , enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" class="form-control" id="name"
                                                            placeholder="Enter Name" name="name"
                                                            value="{{ $user->name }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email address</label>
                                                        <input type="email" class="form-control" id="email"
                                                            placeholder="Enter email" name="email"
                                                            value="{{ $user->email }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="phone_number">Phone Number</label>
                                                        <input type="tel" class="form-control" id="phone_number"
                                                            placeholder="Phone Number" name="phone_number"
                                                            value="{{ $user->profile->phone_number }}" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="date_of_birth">Date of Birth</label>
                                                        <input type="date" class="form-control" id="date_of_birth"
                                                            name="date_of_birth" placeholder="Age" required>
                                                    </div>

                                                    {{-- <div class="form-group">
                                                        <label for="valid_id">Valid means of Identification</label>
                                                        <input type="file" class="form-control" id="valid_id"
                                                            name="valid_id" placeholder="Age">
                                                    </div> --}}

                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="work" role="tabpanel" aria-labelledby="work-tab">
                                        <div class="d-flex px-1 w-100 align-items-center text-left pt-3">
                                            <div class="w-100">
                                                <form action="{{ route('profile.update',[ $user->id, 'work']) }}"
                                                    method="POST" , enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="occupation">Occupation</label>
                                                        <select class="form-control" name="occupation" required>
                                                            <option default selected>Select one</option>
                                                            <option @if( $user->workInfo->occupation == "Corps Member") selected @endif >Corps Member</option>
                                                            <option @if( $user->workInfo->occupation == "Public/ Private Sector Worker") selected @endif>Public/ Private Sector Worker</option>
                                                            <option @if( $user->workInfo->occupation == "others") selected @endif value="others">Others</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="organization_name">Name of Organization you work for:</label>
                                                        <input type="text" class="form-control" id="organization_name" placeholder="Organization Name" name="organization_name"
                                                            value="{{ $user->workInfo->organization_name }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="organization_address">Address of Organization you work for:</label>
                                                        <input type="text" class="form-control" id="organization_address" placeholder="Organization Address" name="organization_address"
                                                            value="{{ $user->workInfo->organization_address }}"required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="id_type">Work ID/Nysc ID</label>
                                                        <select class="form-control" name="id_type" required>
                                                            <option default selected>Select one</option>
                                                            <option @if( $user->workInfo->id_type == "National ID") selected @endif>National ID</option>
                                                            <option @if( $user->workInfo->id_type == "Voters ID") selected @endif>Voters ID</option>
                                                            <option @if( $user->workInfo->id_type == "Passport") selected @endif>Passport</option>
                                                            <option @if( $user->workInfo->id_type == "Driver's license") selected @endif>Driver's license</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="id_number">ID number</label>
                                                        <input type="text" class="form-control" id="id_number"
                                                            placeholder="ID number" name="id_number" required value="{{ $user->workInfo->id_number }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="account_statement">One Year Account
                                                            Statement</label>
                                                        <input type="file" class="form-control" name="account_statement"
                                                            placeholder="Enter Account Statement" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="callup_letter">Call up letter</label>
                                                        <input type="file" class="form-control" name="callup_letter"
                                                            placeholder="Enter Account Statement" required>
                                                    </div>


                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="account" role="tabpanel"
                                        aria-labelledby="account-tab">
                                        <div class="d-flex px-1 w-100 align-items-center text-left pt-3">
                                            <div class="w-100">
                                                <form action="{{ route('profile.update',[ $user->id, 'account']) }}"
                                                    method="POST" , enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="card_number">Card Number</label>
                                                        <input type="tel" class="form-control" name="card_number"
                                                            placeholder="Enter Card Number" required value="{{ $user->bankInfo->card_number }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="card_name">Card Holder Name</label>
                                                        <input type="text" class="form-control" name="card_name" placeholder="Enter Card Holder Name" required  value="{{ $user->bankInfo->card_name }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="expiry_date">Expiry Date</label>
                                                        <input type="month" class="form-control" name="expiry_date" min="2020-01" required  value="{{ $user->bankInfo->expiry_date }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="bvn">BVN Number</label>
                                                        <input type="tel" class="form-control" name="bvn"
                                                            placeholder="Enter BVN Number" required value="{{ $user->bankInfo->bvn }}">
                                                    </div>


                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
