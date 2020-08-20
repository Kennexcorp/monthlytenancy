@extends('frontend.layout')
@section('content')

<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" data-stellar-background-ratio="0.5"
        style="background-image: url({{ asset('img/frontend/images/hero_1.jpg') }})">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="card mt-3">
                    <div class="card-body">
                        <form class="form-signin" action="{{ route('auth.register') }}" method="POST">
                            <!-- <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
                            @csrf

                            <h1 class="h3 mb-3 font-weight-normal text-dark">Register</h1>
                            @if($errors)
                            <ul>
                                @foreach($errors->all() as $error)
                                <li class="text-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                            @endif

                            <div class="">
                                <div class="form-group">
                                    <label for="name" class="sr-only">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Name" required
                                        autofocus>
                                </div>

                            </div>

                            <div class="">
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email address</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email address"
                                        required autofocus>
                                </div>

                            </div>

                            <div class="">
                                <div class="form-group">
                                    <label for="phone_number" class="sr-only">Phone Number</label>
                                    <input type="text" name="phone_number" class="form-control"
                                        placeholder="Phone Number" required autofocus>
                                </div>

                            </div>

                            <div class="">
                                <div class="form-group">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password"
                                        required>
                                </div>

                            </div>

                            <div class="">
                                <div class="form-group">
                                    <label for="password_confirmation" class="sr-only">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control"
                                        placeholder="Confirm Password" +>
                                </div>

                            </div>


                            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                            <p class="text-dark">Already have an account? <a href="{{ route('auth.login') }}">Login</a>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
