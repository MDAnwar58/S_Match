@extends('layouts.frontend')
@section('title', 'বাজার খরচ জমা')
@section('content')
<!-- About Start -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('frontend.bajar.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">নাম</label>
                            <input type="text" name="name" id="name" class="form-control">
                            @if($errors->has('name'))
                            <span style="color: blue; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">বিবরণ</label>
                            <input type="text" name="des" id="des" class="form-control">
                            @if($errors->has('des'))
                            <span style="color: blue; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('des') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">টাকা</label>
                            <input type="text" name="taka" id="taka" class="form-control">
                            @if($errors->has('taka'))
                            <span style="color: blue; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('taka') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">ছবি</label>
                            <input type="file" name="image" id="image" class="form-control">
                            @if($errors->has('image'))
                            <span style="color: blue; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                        <div class="form-action">
                            <button type="submit" class="btn btn-success btn-block">জমা করুণ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
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
                    <input type="email" class="form-control border-0 py-4" placeholder="Your Email" required="required" />
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