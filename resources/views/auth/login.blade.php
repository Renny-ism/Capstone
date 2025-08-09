@extends('layouts.guest')

@section('content')

<div class="container-fluid h-custom">
  <div class="row justify-content-center align-items-center min-vh-100">
    <!-- image (hidden on very small screens so form stays centered) -->
    <div class="col-md-9 col-lg-6 col-xl-5 d-none d-md-block">
      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
           class="img-fluid" alt="Sample image">
    </div>

    <!-- form column -->
    <div class="col-12 col-md-8 col-lg-6 col-xl-4">
      <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
          <p class="lead fw-normal mb-0 me-3">Sign in with Microsoft Teams</p>
          <button type="button" class="btn btn-primary btn-floating mx-1">
            <i class="bi bi-microsoft-teams"></i>
          </button>
        </div>

        <div class="divider d-flex align-items-center my-4">
          <p class="text-center fw-bold mx-3 mb-0">Or</p>
        </div>

        <div class="form-outline mb-4">
          <input type="email" name="email" id="email" class="form-control form-control-lg"
                 placeholder="Enter a valid email address" value="{{ old('email') }}" required autofocus/>
          <label class="form-label" for="email">Email address</label>
          @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <div class="form-outline mb-3">
          <input type="password" name="password" id="password" class="form-control form-control-lg"
                 placeholder="Enter password" required/>
          <label class="form-label" for="password">Password</label>
          @error('password') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="form-check mb-0">
            <input class="form-check-input me-2" type="checkbox" name="remember" id="remember"/>
            <label class="form-check-label" for="remember">Remember me</label>
          </div>
        </div>

        <div class="text-center text-lg-start mt-4 pt-2">
          <button type="submit" class="btn btn-primary btn-lg" style="padding-left:2.5rem; padding-right:2.5rem;">
            Login
          </button>
        </div>

      </form>
    </div>
  </div>
</div>

@endsection
