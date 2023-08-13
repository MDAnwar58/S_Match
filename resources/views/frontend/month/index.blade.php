@extends('layouts.frontend')
@section('title', 'প্রত্যেক মাসের হিসাব')
@section('content')
<!-- About Start -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            @if($months->count()>0)
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>নাম</th>
                                    <th>মিল</th>
                                    <th>মিল চার্জ</th>
                                    <th>মিল খরচ</th>
                                    <th>বিবিধ খরচ</th>
                                    <th>মোট টাকা</th>
                                    <th>জমা টাকা</th>
                                    <th>ম্যাচ পাবে(+)/ম্যাচদেব(-)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($months as $month)
                                <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>
                                            {{ $month->name }}
                                        </td>
                                        <td>
                                            <div class="form-group mt-4">
                                                <input type="text" name="mile" class="form-control" disabled style="width: 4rem;" value="{{ $month->mile }}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group mt-4">
                                                <input type="text" name="milecherge" class="form-control" disabled style="width: 4rem;" value="{{ $month->milecherge }}">
                                            </div>
                                        </td>
                                        <td>
                                            @php
                                            $milekhoroce = $month->mile * $month->milecherge;
                                            @endphp
                                            <div class="form-group mt-4">
                                                <input type="text" name="milekhoroce" class="form-control" disabled style="width: 5rem;" value="{{ $milekhoroce }}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group mt-4">
                                                <input type="text" name="bibidhkhroce" class="form-control" disabled style="width: 5rem;" value="{{ $month->bibidhkhroce }}">
                                            </div>
                                        </td>
                                        <td>
                                            @php
                                            $mot = $month->milekhoroce + $month->bibidhkhroce;
                                            @endphp
                                            <div class="form-group mt-4">
                                                <input type="text" name="mot" class="form-control" disabled style="width: 5rem;" value="{{ $mot }}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group mt-4">
                                                <input type="text" name="joma" class="form-control" disabled style="width: 5rem;" value="{{ $month->joma }}">
                                            </div>
                                        </td>
                                        <td>
                                            @php
                                            $messpaba = $month->mot - $month->joma;
                                            @endphp
                                            <div class="form-group mt-4">
                                                <input type="text" name="messpaba" class="form-control" disabled style="width: 5rem;" value="{{ $messpaba }}">
                                            </div>
                                        </td>
                                </tr>
                                @endforeach
                            </tbody>
                            @else
                            <h3 class="text-center">No Data</h3>
                            @endif
                        </table>
                    </div>
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