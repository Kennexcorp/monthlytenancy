@extends('frontend.layout')
@section('content')
<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" data-stellar-background-ratio="0.5"
      style="background-image: url({{ Storage::url($image_path) }})">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="card">
            <div class="card-body">
              <form class="form-signin" action="{{ route('auth.login.authenticate') }}" method="POST">
                @csrf
                <h1 class="h3 mb-3 font-weight-normal text-dark">Login</h1>


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

                <div class="">
                  <div class="form-group">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                  </div>

                </div>
                <div class="checkbox mb-3">
                  <label>
                    <input type="checkbox" value="remember-me" name="remember_me"> Remember me
                  </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                <p class="text-dark">Not registered? <a href="{{ route('auth.signup') }}">Create an account</a></p>
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
