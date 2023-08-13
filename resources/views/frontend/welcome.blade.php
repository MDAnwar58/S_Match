@extends('layouts.welcome')
@section('title', 'S-Match')
@section('content')

<!-- Header Start -->
<div class="container-fluid bg-primary px-0 px-md-5 mb-5">
    <div class="row align-items-center px-3">
        @foreach($banners as $banner)
        <div class="col-lg-6 text-center text-lg-left">
            <h4 class="text-white mb-4 mt-5 mt-lg-0">{{ $banner->banner_title }}</h4>
            <h1 class="display-4 font-weight-bold text-white">{{ $banner->banner_sub_title }}</h1>
            <p class="text-white mb-4" style="color: white;">{!! $banner->banner_content !!}</p>
            <a href="{{ route('login') }}" class="btn btn-secondary mt-1 py-3 px-5">{{ $banner->banner_btn }}</a>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <img class="img-fluid mt-5" src="{{ url('upload/images', $banner->image) }}" alt="{{ $banner->banner_title }}">
        </div>
        @endforeach
    </div>
</div>
<!-- Header End -->


<!-- Facilities Start -->
<div class="container-fluid pt-5">
    <div class="container pb-3">
        <div class="row">
            @foreach($facilties as $facilty)
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                    <i class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"></i>
                    <div class="pl-4">
                        <h4>{{ $facilty->title }}</h4>
                        <p class="m-0">{!! $facilty->content !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Facilities Start -->


<!-- About Start -->
<div class="container py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            <div class="row counter-row">
                                <div class="col-md-3 col-sm-6">
                                    <div class="counter">
                                        <span class="counter-value">{{ $users->count() }} <span></span></span>
                                        @php
                                        $sit = 13;
                                        $user = App\Models\User::all()->count();
                                        $block_sit = $sit - $user;
                                        @endphp
                                        <h3>Free Sit/Total Sit<br><span class="mt-3">{{ $block_sit }}/{{ $sit }}</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @foreach($abouts as $about)
            <div class="col-lg-7">
                <p class="section-title pr-5"><span class="pr-2">{{ $about->header }}</span></p>
                <h1 class="mb-4">{{ $about->title }}</h1>
                <p>{!! $about->content !!}</p>
                <div class="row pt-2 pb-4">
                    <div class="col-6 col-md-8">
                        <ul class="list-inline m-0">
                            <li class="py-2 border-top border-bottom"><i class="fa fa-check text-primary mr-3"></i>{{ $about->quality1 }}</li>
                            @if($about->quality2)
                            <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>{{ $about->quality2 }}</li>
                            @endif
                            @if($about->quality3)
                            <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>{{ $about->quality3 }}</li>
                            @endif
                            @if($about->quality4)
                            <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>{{ $about->quality4 }}</li>
                            @endif
                            @if($about->quality5)
                            <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>{{ $about->quality5 }}</li>
                            @endif
                            @if($about->quality6)
                            <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>{{ $about->quality6 }}</li>
                            @endif
                            @if($about->quality7)
                            <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>{{ $about->quality7 }}</li>
                            @endif
                        </ul>
                    </div>
                </div>
                <a href="{{ route('home') }}" class="btn btn-primary mt-2 py-2 px-4">Learn More</a>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- About End -->


<!-- Class Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Popular Classes</span></p>
            <h1 class="mb-4">Classes for Your Kids</h1>
        </div>
        <div class="row justify-content-center">
            @foreach($sections as $section)
            <div class="col-lg-4 mb-5">
                <div class="card border-0 bg-light shadow-sm pb-2">
                    <img class="card-img-top mb-2" src="{{ url('upload/images', $section->image) }}" alt="">
                    <div class="card-body text-center">
                        <h4 class="card-title">{{ $section->title }}</h4>
                        <p class="card-text">{!! $section->content !!}</p>
                    </div>
                    <div class="card-footer bg-transparent py-4 px-5">
                        <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right"><strong>Total Seats</strong></div>
                            <div class="col-6 py-1">40 Seats</div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right"><strong>Stublist Charge</strong></div>
                            <div class="col-6 py-1">{{ $section->stablist_charge }} tk</div>
                        </div>
                        <div class="row">
                            <div class="col-6 py-1 text-right border-right"><strong>Tution Fee</strong></div>
                            <div class="col-6 py-1">{{ $section->price }} tk</div>
                        </div>
                    </div>
                    <a href="" class="btn btn-primary px-4 mx-auto mb-4">Join Now</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Class End -->



<!-- Blog Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Latest Blog</span></p>
            <h1 class="mb-4">Latest Articles From Blog</h1>
        </div>
        <div class="row pb-3">
            @foreach($latests as $latest)
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow-sm mb-2">
                    <img class="card-img-top mb-2" src="{{ url('upload/images', $latest->image) }}" alt="">
                    <div class="card-body bg-light text-center p-4">
                        <h4 class="">{{ $latest->title }}</h4>
                        <div class="d-flex justify-content-center mb-3">
                            <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                            <small class="mr-3"> {{ date('d F, Y', strtotime($latest->created_at)) }}</small>
                            <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                        </div>
                        <p>{!! mb_strimwidth($latest->content, 0, 200, "...") !!}</p>
                        <a href="" class="btn btn-primary px-4 mx-auto my-2">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Blog End -->


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
            &copy; <a class="text-primary font-weight-bold" href="#">Created By MD. Anwar Sayeed@01918725999</a>. All Rights Reserved. Designed
            by
            <a class="text-primary font-weight-bold" href="https://htmlcodex.com">Laravel Framework</a>
        </p>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('.counter-value').each(function() {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 15500,
                easing: 'swing',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    });
</script>
@endsection