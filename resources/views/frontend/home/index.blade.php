@extends('layouts.frontend')
@section('title', 'হোম')
@section('content')
<!-- About Start -->
<div class="container">
    @if($latests->count()>0)
    <p class="section-title pr-5"><span class="pr-2" style="font-size: 25px; font-weight: bold;">Latest Update Mentenance</span></p>
    @foreach($latests as $latest)
    @if($latest->image)
    <div class="row mb-5">
        <div class="col-lg-3" style="height: 200px;">
            <img class="img rounded" src="{{ url('upload/images', $latest->image) }}" style="height: 100%; width: 100%"  alt="">
        </div>
        <div class="col-lg-9">
            <div class="d-flex"><h1 class="mb-2">{{ $latest->title }}</h1></div>
            <span>Post By: Admin | {{ date('d F, Y', strtotime($latest->created_at)) }} | Comments: </span>
            <p>{!! $latest->content !!}</p>
            <p class="text-right border border-white" style="padding: 5px 0 0 0; margin-right: 10px;">{{ $latest->created_at->diffForHumans() }}</p>
        </div>
    </div>
    @else
    <div class="row mb-5">
        <div class="col-lg-12">
            <h1 class="mb-2">{{ $latest->title }}</h1>
            <span>Post By: Admin | {{ date('d F, Y', strtotime($latest->created_at)) }} | Comments: </span>
            <p>{!! $latest->content !!}</p>
            <p class="text-right border border-white" style="padding: 5px 0 0 0; margin-right: 10px;">{{ $latest->created_at->diffForHumans() }}</p>
        </div>
    </div>
    @endif
    @endforeach
    @else
    <p class="pr-5 text-center text-primary"><span class="pr-2" style="font-size: 25px; font-weight: bold;">No Update Mentenance Here</span></p>
    @endif
</div>
<!-- About End -->





<!-- Footer Start -->
<div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
    <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
            <a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0" style="font-size: 40px; line-height: 40px;">
                <i class="flaticon-043-teddy-bear"></i>
                <span class="text-white">KidKinder</span>
            </a>
            <p>Labore dolor amet ipsum ea, erat sit ipsum duo eos. Volup amet ea dolor et magna dolor, elitr rebum duo est sed diam elitr. Stet elitr stet diam duo eos rebum ipsum diam ipsum elitr.</p>
            <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h3 class="text-primary mb-4">Get In Touch</h3>
            <div class="d-flex">
                <h4 class="fa fa-map-marker-alt text-primary"></h4>
                <div class="pl-3">
                    <h5 class="text-white">Address</h5>
                    <p>123 Street, New York, USA</p>
                </div>
            </div>
            <div class="d-flex">
                <h4 class="fa fa-envelope text-primary"></h4>
                <div class="pl-3">
                    <h5 class="text-white">Email</h5>
                    <p>info@example.com</p>
                </div>
            </div>
            <div class="d-flex">
                <h4 class="fa fa-phone-alt text-primary"></h4>
                <div class="pl-3">
                    <h5 class="text-white">Phone</h5>
                    <p>+012 345 67890</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h3 class="text-primary mb-4">Quick Links</h3>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Classes</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Teachers</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Blog</a>
                <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h3 class="text-primary mb-4">Newsletter</h3>
            <form action="">
                <div class="form-group">
                    <input type="text" class="form-control border-0 py-4" placeholder="Your Name" required="required" />
                </div>
                <div class="form-group">
                    <input type="email" class="form-control border-0 py-4" placeholder="Your Email"
                    required="required" />
                </div>
                <div>
                    <button class="btn btn-primary btn-block border-0 py-3" type="submit">Submit Now</button>
                </div>
            </form>
        </div>
    </div>
    <div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, .2);;">
        <p class="m-0 text-center text-white">
            &copy; <a class="text-primary font-weight-bold" href="#">Your Site Name</a>. All Rights Reserved. Designed
            by
            <a class="text-primary font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
        </p>
    </div>
</div>
<!-- Footer End -->
@endsection