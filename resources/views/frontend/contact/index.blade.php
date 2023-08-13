@extends('layouts.frontend')
@section('title', 'যোগাযোগ কুরুণ')
@section('content')
<!-- Contact Start -->
@if (Session::has('success'))
<p class="text-center pt-3 pb-3" style="width: 100%; height: 70px; background-color: rgba(23, 162, 184, .5); color: white; font-size: 25px; font-weight: bold;">{{ Session::get('success') }}</p>
@endif
<div class="container-fluid pt-5">
    @foreach($jogajogs as $jogajog)
    <div class="container">
        <div class="text-center pb-2">
            <h1 class="mb-5">{{ $jogajog->title }}</h1>
        </div>
        <div class="row">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" name="sub" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="6" id="message" name="msg" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
               {!! $jogajog->content !!}
               <div class="d-flex">
                <i class="fa fa-map-marker-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px;"></i>
                <div class="pl-3">
                    <h5>Address</h5>
                    <p>{{ $jogajog->address }}</p>
                </div>
            </div>
            <div class="d-flex">
                <i class="fa fa-envelope d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px;"></i>
                <div class="pl-3">
                    <h5>Email</h5>
                    <p>{{ $jogajog->email }}</p>
                </div>
            </div>
            <div class="d-flex">
                <i class="fa fa-phone-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px;"></i>
                <div class="pl-3">
                    <h5>Phone</h5>
                    <p>{{ $jogajog->phone }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
</div>
<!-- Contact End -->


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
