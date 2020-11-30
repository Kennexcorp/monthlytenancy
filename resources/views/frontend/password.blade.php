@extends('frontend.layout')
@section('content')
<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" data-stellar-background-ratio="0.5"
      style="background-image: url({{ isset($image_path) ? Storage::url($image_path) : $image_url }})">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center pt-5">
            {{-- <div class="pt-5">&nbsp;</div> --}}
          <div class="card">
            <div class="card-body">
              <form class="form-signin" action="{{ route('password.email') }}" method="POST">
                @csrf
                <h1 class="h3 mb-3 font-weight-normal text-dark">Password Reset</h1>


                <div class="">
                    @if(Session::has('message'))
                    <p class="text-danger">{{ Session::get('message') }}</p>
                    @endif
                    <div class="form-group">
                      <label for="email" class="sr-only">Email address</label>
                      <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required
                        autofocus>
                    </div>

                  </div>



                <button class="btn btn-lg btn-primary btn-block" type="submit">Reset Password</button>
                <p class="mt-5 mb-3 text-muted">&copy;<script>
                    document.write(new Date().getFullYear());
                </script></p>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection
