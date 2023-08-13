@extends('layouts.frontend')
@section('title', 'সদস্য')
@section('content')


<!-- Team Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <h1 class="mb-5">Our Members</h1>
        </div>
        <div class="row">
            @foreach($users as $user)
            @if(!$user->role == 0)
            <div class="col-md-6 col-lg-3 text-center team mb-5">
                <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                    <img class="img-fluid w-100" src="{{ url('assets/frontend/img/team-4.jpg') }}" alt="" >
                    <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>

                    @if(Cache::has('user-is-online-' . $user->id))
                    <p class="bg-success" style="width: 100%; height: 30px; color: white;">Online</p>
                    @endif
                    @if(!Cache::has('user-is-online-' . $user->id))
                    <p class="border border-success text-success" style="width: 100%; height: 30px;">Offline: {{ Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}</p>
                    @endif
                </div>
                <h4>@username: {{ $user->name }}</h4>
                <i>
                    @if($user->role == 2)
                    Member
                    @elseif($user->role == 1)
                    Sub Admin
                    @elseif($user->role == 3)
                    Admin
                    @endif
                </i>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-fluid py-5">
    <div class="container p-0">
        <div class="text-center pb-2">
            <h1 class="mb-5">Active Member</h1>
        </div>
        <div class="row">
            @foreach($users as $user)
            @if(!$user->role == 0)
            @if(Cache::has('user-is-online-' . $user->id))
            <div class="col-md-6 col-lg-3 text-center team mb-5">
                <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                    <img class="img-fluid w-100" src="{{ url('assets/frontend/img/team-4.jpg') }}" alt="" >
                    <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <p class="bg-success" style="width: 100%; height: 30px; color: white;">Online</p>
                </div>
                <h4>Donald John</h4>
                <i>Art Teacher</i>
            </div>
            @endif
            @endif
            @endforeach
        </div>
        <!-- Testimonial End -->
        @endsection