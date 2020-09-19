
@extends('frontend.layout')
@section('content')

<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" data-stellar-background-ratio="0.5"
        style="background-image: url({{ isset($image_path) ? Storage::url($image_path) : $image_url  }})">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-7">
                    <h1 class="mb-2">Available Properties</h1>
                    <p class="text-white">Search For available housing within or outside your location </p>
                </div>
            </div>
        </div>
    </div>
</div>



<form action="">
    <div class="realestate-filter">
        <div class="container">
            <div class="realestate-filter-wrap nav">
                <a href="#for-rent" class="active" data-toggle="tab" id="rent-tab" aria-controls="rent"
                    aria-selected="true">For Rent</a>
                {{-- <a href="#for-sale" class="" data-toggle="tab" id="sale-tab" aria-controls="sale" --}}
                    {{-- aria-selected="false">For Sale</a> --}}
            </div>
        </div>
    </div>

    <div class="realestate-tabpane pb-5">
        <div class="container tab-content">
            <div class="tab-pane active" id="for-rent" role="tabpanel" aria-labelledby="rent-tab">

                <div class="row">
                    <div class="col-md-6 form-group">
                        <select name="" id="" class="form-control w-100">
                            <option disabled selected hidden>Select Type</option>
                            @foreach($houseTypes as $type)
                            <option>{{ $type->value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <select name="" id="" class="form-control w-100">
                            <option value="">Select Location</option>
                            <option value="">0</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3+</option>
                        </select>
                    </div>
                    {{-- <div class="col-md-3 form-group">
                            <select name="" id="" class="form-control w-100">
                                <option value="">Any Bedrooms</option>
                                <option value="">0</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3+</option>
                            </select>
                        </div>
                        <div class="col-md-3 form-group">
                            <select name="" id="" class="form-control w-100">
                                <option value="">Any Bathrooms</option>
                                <option value="">0</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3+</option>
                            </select>
                        </div> --}}
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <select name="" id="" class="form-control w-100">
                            <option value="">Min Price</option>
                            <option value="">&#8358;100</option>
                            <option value="">&#8358;200</option>
                            <option value="">&#8358;300</option>
                            <option value="">&#8358;400</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <select name="" id="" class="form-control w-100">
                            <option value="">Max Price</option>
                            <option value="">&#8358;25,000</option>
                            <option value="">&#8358;50,000</option>
                            <option value="">&#8358;75,000</option>
                            <option value="">&#8358;100,000</option>
                            <option value="">&#8358;100,000,000</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <input type="submit" class="btn btn-black py-3 btn-block" value="Submit">
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>



<div class="site-section bg-black">
    <div class="container">

        <div class="row">

            @foreach($properties as $property)
            <div class="col-md-4 mb-5">
                <div class="media-38289">
                    <a href="{{ route('property.viewProperty', $property->id) }}" class="d-block"><img src="{{ Storage::url($property->propertyImages()->first()->image_path) }}" alt="Image"
                            class="img-fluid"></a>
                    <div class="text">
                        <div class="d-flex justify-content-between mb-3">
                            <div class="sq d-flex align-items-center"><span class="wrap-icon icon-fullscreen"></span>
                                <span>{{ $property->units }} units.</span></div>
                            <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bed"></span>
                               <span>{{ $property->rooms }}</span></div>
                            <div class="bath d-flex align-items-center"><span class="wrap-icon icon-bath"></span>
                                <span>{{ $property->bathrooms }}</span></div>
                        </div>
                        <h3 class="mb-3">&#8358;{{ $property->unit_price }}</h3>
                        <span class="d-block small address d-flex align-items-center"> <span
                                class="icon-room mr-3 text-primary"></span> <span>{{ $property->landlord->address }}</span></span>
                        <div class="row">
                            @auth<a href="{{ route('property.viewProperty', $property->id) }}" class="col-12 btn btn-primary">Rent Now</a>&nbsp;@endauth
                            <div class="col-12 btn btn-secondary">Request Inspection</div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach



            <div class="col-12 mt-5 text-center pagination-39291">
                @for ($i = 0 ; $i < $properties->lastPage(); $i++)
                {{-- <span class="active">1</span> --}}
                <a @if(Route::is($properties->url($i))) class="active" @endif href="{{ $properties->url($i) }}">{{ $i+1 }}</a>
                {{-- <a href="#">3</a>
                <a href="#">4</a> --}}
                @endfor

            </div>



        </div>
    </div>
</div>
@endsection
