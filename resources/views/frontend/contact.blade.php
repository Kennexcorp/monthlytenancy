@extends('frontend.layout')
@section('content')
<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" data-stellar-background-ratio="0.5"
        style="background-image: url({{  isset($image_path) ? Storage::url($image_path) : $image_url }})">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-7">
                    <h1 class="mb-2">Get In Touch</h1>
                    <p class="text-white">For More Details and Enquiries Please Fill The Form Below</p>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="site-section bg-light" id="contact-section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-7 text-center mb-5">
                <h2>Contact Us</h2>
                <p>For more enquiries</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mb-5">
                <form action="{{ route('admin.requests.store') }}" method="post">
                    @csrf
                    @if(isset($property))
                    <div class="form-group row">
                        <div class="col-md-12 mb-4 mb-lg-0">
                            <input type="text" value="Request inspection for property @ {{ $property->landlord->name }}"
                                class="form-control" readonly>
                            <input type="hidden" value="{{ $property->id }}" name="property">
                        </div>
                    </div>
                    @endif
                    <div class="form-group row">
                        <div class="col-md-6 mb-4 mb-lg-0">
                            <input type="text" class="form-control" placeholder="Name" name="name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Contact" name="contact">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Email address" name="email">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <textarea name="message" class="form-control" placeholder="Write your message." cols="30"
                                rows="10"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12 mr-auto">
                            <button type="submit" class="btn btn-block btn-primary text-white py-3 px-5">Send
                                Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 ml-auto">
                <div class="bg-white p-3 p-md-5">
                    <h3 class="text-black mb-4">Contact Info</h3>
                    <ul class="list-unstyled footer-link">
                        <li class="d-block mb-3">
                            <span class="d-block text-black">Address:</span>
                            <span>No 15 Freetown street Ademola Adetokunbo Way Wuse2 abuja</span></li>
                        <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+234 809 5258 963,
                                +234 80 9525 8967</span></li>
                        <li class="d-block mb-3">
                            <span class="d-block text-black">Email:</span>
                            <span>monthlytenancy@gmail.com</span>
                        </li>
                        <li class="d-block mb-3">
                            <span class="d-block text-black">Twitter:</span>
                            <span><a href="https://twitter.com/The_MTP_abuja" target="_blank">@The_MTP_abuja</a></span>
                        </li>
                        <li class="d-block mb-3">
                            <span class="d-block text-black">Instagram:</span>
                            <span><a href="https://www.instagram.com/themtp_abuja/" target="_blank">@themtp_abuja
                            </a></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
