@extends('layouts.app')

@section('content')
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
        class="img-fluid" alt="Sample image">
    </div>
    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
          <p class="lead fw-normal mb-0 me-3">Sign in with</p>
          <button type="button" class="btn btn-primary btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
        </button>

        <button type="button" class="btn btn-primary btn-floating mx-1">
            <i class="fab fa-twitter"></i>
        </button>

        <button type="button" class="btn btn-primary btn-floating mx-1">
            <i class="fab fa-linkedin-in"></i>
        </button>
    </div>
    <div class="divider d-flex align-items-center my-4">
      <p class="text-center fw-bold mx-3 mb-0">Or</p>
  </div>
  <form method="POST" action="{{ route('register') }}">
      @csrf
      <!-- Email input -->
      <div class="form-outline mb-4">
        <label for="" class="mb-2">Username</label>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-outline mb-4">
        <label for="" class="mb-2">Email</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-outline mb-4">
        <label for="" class="mb-2">Password</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <!-- Password input -->
    <div class="form-outline mb-3">
        <label class="form-label" for="form3Example4">Conform Password</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

    </div>

    <div class="d-flex justify-content-between align-items-center">
        <!-- Checkbox -->

        <div class="text-center text-lg-start pt-2">
          <button type="submit" class="btn btn-primary btn-lg"
          style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
          <p class="small fw-bold mt-2 pt-1 mb-0">You have already a account? <a href="{{ route('login') }}"
              class="link-danger">Login</a></p>
          </div>
      </div>



  </form>
</div>
</div>
</div>
<div
class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
<!-- Copyright -->
<div class="text-white mb-3 mb-md-0">
  Created By <span style="font-weight: bolder;">MD Anwar Sayeed Saif Kader</span> © 2022. All rights reserved.
</div>
<!-- Copyright -->
</div>
</section>
@endsection
