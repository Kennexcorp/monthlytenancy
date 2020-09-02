@extends('frontend.layout')
@section('content')
<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" data-stellar-background-ratio="0.5"
        style="background-image: url({{ Storage::url($property->propertyImages()->first()->image_path) }})">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-7">
                    <span class="h4 text-primary mb-4 d-block">&#8358;{{ $property->unit_price }}</span>
                    <h1 class="mb-2">{{ $property->landlord->type }} ({{ $property->type }})</h1>
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
                    @auth
                    <p><a href="#" class="btn btn-primary text-white px-4 py-3">Rent Now</a></p>
                    <p><a href="{{ route('contact.property', $property->id) }}" class="btn btn-primary text-white px-4 py-3">Request Inspection</a></p>
                    @else
                    <p><a href="{{ route('contact.property', $property->id) }}" class="btn btn-primary text-white px-4 py-3">Request Inspection</a></p>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>



<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non alias labore similique, laboriosam
                    consequuntur tempora, quas accusantium voluptatibus eius, maiores, minima! Ipsam tempore ex qui
                    voluptatum quo voluptas! Incidunt, pariatur.</p>
                <p>Dolorem quaerat tenetur corporis praesentium, soluta debitis culpa asperiores, minus delectus
                    quibusdam amet recusandae aliquam voluptatibus dicta quis, facere tempora eum placeat repellendus
                    maxime nesciunt voluptates totam sapiente commodi. Tenetur.</p>
                <p>Labore natus ullam suscipit distinctio debitis voluptas minima ipsam. Odit, reprehenderit minima
                    distinctio, dolorum ipsam velit, minus labore eum commodi quia quae doloribus impedit blanditiis
                    architecto fugiat delectus provident quas.</p>
                <p>Asperiores temporibus adipisci dolor quasi assumenda est, itaque corrupti, neque facilis beatae natus
                    voluptatibus aperiam mollitia esse ipsam! Quam perferendis facere sed beatae repudiandae rerum
                    laudantium necessitatibus. Incidunt, dolorem, officiis?</p>
                <p>Mollitia impedit omnis ullam earum est, quaerat consectetur voluptates quia, dolore asperiores ipsum
                    eligendi quae iste, facere porro debitis nostrum obcaecati culpa eius perspiciatis alias distinctio.
                    Perferendis, magnam mollitia fuga.</p>
                <p><a href="#" class="btn btn-primary text-white">Contact Agent</a></p>
            </div>
            <div class="col-md-3 ml-auto">
                <h3 class="mb-5">Agent</h3>
                <div class="person-29381">
                    <div class="media-39912">
                        <img src="images/person_1.jpg" alt="Image" class="img-fluid">
                    </div>
                    <h3><a href="#">Josh Long</a></h3>
                    <span class="meta d-block mb-4">4 Properties</span>
                    <div class="social-32913">
                        <a href="#"><span class="icon-facebook"></span></a>
                        <a href="#"><span class="icon-twitter"></span></a>
                        <a href="#"><span class="icon-instagram"></span></a>
                    </div>
                </div>
            </div>
        </div>
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
                        <h3 class="mb-3"><a href="#">&#8358;{{ $prop->unit_price }}</a></h3>
                        <span class="d-block small address d-flex align-items-center"> <span
                                class="icon-room mr-3 text-primary"></span>
                            <span>{{ $prop->landlord->address }}</span></span>
                        <div class="row">
                            @auth
                            <p><a href="#" class="btn btn-primary text-white px-4 py-3">Rent Now</a></p>&nbsp;
                            <p><a href="{{ route('contact.property', $prop->id) }}" class="btn btn-secondary text-white px-4 py-3">Request Inspection</a>
                            </p>&nbsp;
                            @else
                            <p><a href="{{ route('contact.property', $prop->id) }}" class="btn btn-primary text-white px-4 py-3">Request Inspection</a>
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


<div class="site-section bg-primary">
    <div class="container block-13">
        <div class="nonloop-block-13 owl-carousel">
            <div class="testimonial-38920 d-flex align-items-start">
                <div class="pic mr-4"><img src="images/person_1.jpg" alt=""></div>
                <div>
                    <span class="meta">Business Man</span>
                    <h3 class="mb-4">Josh Long</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo sapiente unde pariatur id, hic
                        quos nihil nulla veritatis!</p>
                    <div class="mt-4">
                        <span class="icon-star text-white"></span>
                        <span class="icon-star text-white"></span>
                        <span class="icon-star text-white"></span>
                        <span class="icon-star text-white"></span>
                    </div>
                </div>
            </div>

            <div class="testimonial-38920 d-flex align-items-start">
                <div class="pic mr-4"><img src="images/person_1.jpg" alt=""></div>
                <div>
                    <span class="meta">Business Woman</span>
                    <h3 class="mb-4">Jean Doe</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo sapiente unde pariatur id, hic
                        quos nihil nulla veritatis!</p>
                    <div class="mt-4">
                        <span class="icon-star text-white"></span>
                        <span class="icon-star text-white"></span>
                        <span class="icon-star text-white"></span>
                        <span class="icon-star text-white"></span>
                    </div>
                </div>
            </div>

            <div class="testimonial-38920 d-flex align-items-start">
                <div class="pic mr-4"><img src="images/person_1.jpg" alt=""></div>
                <div>
                    <span class="meta">Business Woman</span>
                    <h3 class="mb-4">Jean Doe</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo sapiente unde pariatur id, hic
                        quos nihil nulla veritatis!</p>
                    <div class="mt-4">
                        <span class="icon-star text-white"></span>
                        <span class="icon-star text-white"></span>
                        <span class="icon-star text-white"></span>
                        <span class="icon-star text-white"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
