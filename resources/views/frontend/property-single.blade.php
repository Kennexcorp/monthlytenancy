@extends('frontend.layout')
@section('header_styles')
<script src="https://js.paystack.co/v1/inline.js"></script>
@endsection
@section('footer_styles')
@isset($duration)
<script type="text/javascript" src="{{asset('js/_helper/paystack.js')}}"></script>
@endisset
@endsection
@section('content')
<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" data-stellar-background-ratio="0.5"
        style="background-image: url({{ isset($image_path) ? Storage::url($image_path) : $image_url  }})">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-7">
                    <span
                        class="h4 text-primary mb-4 d-block">&#8358;{{number_format(floatval($property->unit_price)) }}</span>
                    <h1 class="mb-2">{{ $property->landlord->type }}</h1>
                    <p class="text-center mb-5"><span
                            class="small address d-flex align-items-center justify-content-center"> <span
                                class="icon-room mr-3 text-primary"></span> <span>{{ $property->landlord->state }},
                                Nigeria</span></span></p>

                    <div class="d-flex media-38289 justify-content-around mb-5">
                        <div class="sq d-flex align-items-center"><span class="wrap-icon icon-fullscreen"></span>
                            <span>{{ $property->units }}</span></div>
                        <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bed"></span>
                            <span>{{ $property->rooms }}</span></div>
                        <div class="bath d-flex align-items-center"><span class="wrap-icon icon-bath"></span>
                            <span>{{ $property->bathrooms }}</span></div>
                    </div>
                    @isset($duration)

                    @else
                    @auth
                    <p><a href="#" class="btn btn-primary text-white px-4 py-3 col-12">Rent a Unit</a></p>
                    @endauth
                    <p><a href="{{ route('contact.property', $property->id) }}"
                            class="btn btn-primary text-white px-4 py-3">Request Inspection</a></p>
                    @endisset

                </div>
            </div>
        </div>
    </div>
</div>



<div class="site-section">
    <div class="container">
        @isset($duration)
        <div class="row">
            <h3>Rent Breakdown</h3>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Month</th>
                            <th scope="col">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 1; $i <= $duration; $i++) <tr>
                            <th scope="row">{{ $i }}</th>
                            <td>{{ now()->addMonth($i)->toFormattedDateString() }}</td>
                            <td>&#8358;{{number_format(floatval($property->unit_price)) }}</td>
                            </tr>
                            @endfor
                            <tr>
                                <th scope="row" colspan="2">Total</th>
                                <td>&#8358;{{number_format(floatval($property->unit_price * $duration)) }}</td>
                            </tr>
                    </tbody>
                </table>
                <form id="paymentForm">
                    {{-- @csrf --}}
                    <div class="form-group row">
                        <input type="hidden" id="property" value="{{ $property->id }}">
                        <input type="hidden" id="duration" value="{{ $duration }}">
                        <input type="hidden" id="email" value="{{  auth()->user()->email }}">
                        <input type="hidden" id="amount" value="{{ $property->unit_price }}"> {{-- required in kobo --}}
                        <input type="hidden" id="currency" value="NGN">
                        <input type="hidden" id="name" value="{{ auth()->user()->name }}">
                        <input type="hidden" id="user" value="{{ auth()->user()->id }}">
                        <input type="hidden" id="callback" value="{{ route('rent.callback') }}">
                        {{-- <input type="hidden" id="metadata" value="{{ json_encode($array = ['property' => $property->id, 'duration' => $duration]) }}">
                        --}}
                        {{-- For other necessary things you want to add to your payload. it is optional though --}}
                        {{-- <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> required --}}
                    </div>
                    {{-- <div>
                        <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                            <i class="fa fa-plus-circle fa-lg"></i> Rent Now!
                        </button>
                    </div> --}}
                    <div class="form-submit">
                        <button class="btn btn-success btn-lg btn-block" type="submit" onclick="payWithPaystack()"><i
                                class="fa fa-plus-circle fa-lg"></i> Rent Now! </button>
                    </div>
                </form>
            </div>

        </div>
        @else
        <div class="row">
            <div class="col-md-8">
                {{-- <p>{{ $property }}</p> --}}
                <p><strong>Type: </strong>{{ $property->type }}</p>
                <p><strong>Avaliable Units: </strong>{{ $property->units }}</p>
                <p><strong>Unit Price: </strong>&#8358;{{number_format(floatval($property->unit_price)) }}</p>
                <p><strong>Other Details: </strong>{{$property->other_description }}</p>
                {{-- <p><a href="{{ route('rents.rentAUnit', $property) }}" class="btn btn-primary text-white">Rent a
                unit</a>
                </p> --}}
            </div>

            @auth
                <div class="col-md-4">
                    <form method="GET" action="{{ route('rents.rentAUnit') }}">
                        {{-- @csrf --}}
                        <div class="form-group row">
                            <div class="col-12">
                                <input type="number" class="form-control" placeholder="Enter Duration of Stay" name="duration" min="1"
                                    value="1" required>
                                <small class="">Please enter number of month you wish to rent this unit for</small>
                            </div>
                            <input type="hidden" name="property" value="{{ $property->id }}">
                        </div>
                        <div>
                            <button class="btn btn-primary col-12" type="submit">Rent Now</button>
                        </div>
                    </form>
                </div>
            @endauth

            <div class="col-12">
                <p>Other Images:</p>
                <div id="carouselExampleIndicators" class="carousel" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach ($property->propertyImages as $images)
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" @if($loop->index == 0)class="active" @endif></li>

                        @endforeach

                    </ol>
                    <div class="carousel-inner">
                        @foreach ($property->propertyImages as $images)
                            <div class="carousel-item @if($loop->index == 0)active @endif">
                                <img class="d-block w-100" src="{{ Storage::url($images->image_path) }}"
                                    alt="First slide">
                            </div>
                        @endforeach

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        @endisset

    </div>
</div>


<div class="site-section bg-black">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <h3 class="heading-29201 text-center text-white">More Related Properties</h3>


            </div>
        </div>

        <div class="row">
            @foreach($properties as $prop)
            <div class="col-md-4 mb-5">
                <div class="media-38289">
                    <a href="{{  route('property.viewProperty', $prop->id) }}" class="d-block"><img
                            src="{{ Storage::url($prop->propertyImages()->first()->image_path) }}" alt="Image"
                            class="img-fluid"></a>
                    <div class="text">
                        <div class="d-flex justify-content-between mb-3">
                            <div class="sq d-flex align-items-center"><span class="wrap-icon icon-fullscreen"></span>
                                <span>{{ $prop->units }}</span></div>
                            <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bed"></span>
                                <span>{{ $prop->rooms }}</span></div>
                            <div class="bath d-flex align-items-center"><span class="wrap-icon icon-bath"></span>
                                <span>{{ $prop->bathrooms }}</span></div>
                        </div>
                        <h3 class="mb-3"><a href="#">&#8358;{{number_format(floatval($property->unit_price)) }}</a></h3>
                        <span class="d-block small address d-flex align-items-center"> <span
                                class="icon-room mr-3 text-primary"></span>
                            <span>{{ $prop->landlord->address }}</span></span>
                        <div class="row">
                            @auth
                            <p><a href="#" class="btn btn-primary text-white px-4 py-3">Rent Now</a></p>&nbsp;
                            <p><a href="{{ route('contact.property', $prop->id) }}"
                                    class="btn btn-secondary text-white px-4 py-3">Request Inspection</a>
                            </p>&nbsp;
                            @else
                            <p><a href="{{ route('contact.property', $prop->id) }}"
                                    class="btn btn-primary text-white px-4 py-3">Request Inspection</a>
                            </p>
                            @endauth

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>



@endsection
