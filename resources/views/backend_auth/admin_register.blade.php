@extends('layouts.admin_login')
@section('content')
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Admin Register</h2>
              <form action="{{ route('admin.register.store') }}" method="POST">
                @csrf
                <div class="form-outline form-white mb-4">
                  <input type="text" name="name" id="name" id="typeEmailX" class="form-control form-control-lg" />
                  <label class="form-label" for="typeEmailX">Username</label>
                </div>
                <div class="form-outline form-white mb-4">
                  <input type="email" name="email" id="email" id="typeEmailX" class="form-control form-control-lg" />
                  <label class="form-label" for="typeEmailX">Email</label>
                </div>
                <div class="form-outline form-white mb-4">
                  <input type="password" name="password" id="password" id="typeEmailX" class="form-control form-control-lg" />
                  <label class="form-label" for="typeEmailX">Password</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="password" name="password-confirm" id="password-confirm" id="typePasswordX" class="form-control form-control-lg" />
                  <label class="form-label" for="typePasswordX">Conform Password</label>
                </div>

                <button class="btn btn-outline-light btn-lg px-5" type="submit">Register</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection