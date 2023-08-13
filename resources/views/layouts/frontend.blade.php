<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title') - Of Bachelor Website</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('assets/frontend/welcome/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="{{ asset('assets/frontend/welcome/lib/flaticon/font/flaticon.css') }}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/frontend/welcome/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/welcome/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- toastr -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- toastr -->
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/frontend/welcome/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/welcome/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-light position-relative shadow">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
            <a href="{{ route('welcome This site') }}" class="navbar-brand font-weight-bolder text-secondary" style="font-size: 30px;">
                <span class="text-primary">S Match</span>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0">
                    <a href="{{ route('home') }}" class="nav-item nav-link {{ Route::is('home') ? 'active' : '' }}">হোম</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link {{ Route::is('about') ? 'active' : '' }}">ম্যাচ সর্ম্পকে জানুন</a>
                    <a href="{{ route('section') }}" class="nav-item nav-link {{ Route::is('section') ? 'active' : '' }}">সেকশন</a>
                    <a href="{{ route('member') }}" class="nav-item nav-link {{ Route::is('member') ? 'active' : '' }}">সদস্য</a>
                    <a href="{{ route('gallery') }}" class="nav-item nav-link {{ Route::is('gallery') ? 'active' : '' }}">ম্যাচের ছবি</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ Route::is('frontend.mile') ? 'active' : '' }} {{ Route::is('frontend.bajar') ? 'active' : '' }} {{ Route::is('frontend.money') ? 'active' : '' }} {{ Route::is('frontend.bibidh') ? 'active' : '' }} {{ Route::is('frontend.month') ? 'active' : '' }} {{ Route::is('frontend.bajar.create') ? 'active' : '' }}" data-toggle="dropdown">র্বতমান ম্যাচের হিসাব নিকাশ</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{ route('frontend.mile') }}" class="dropdown-item {{ Route::is('frontend.mile') ? 'active' : '' }}">মিলের হিসাব</a>
                            <a href="{{ route('frontend.money') }}" class="dropdown-item {{ Route::is('frontend.money') ? 'active' : '' }}">টাকা জমা হিসাব</a>
                            <a href="{{ route('frontend.bajar') }}" class="dropdown-item {{ Route::is('frontend.bajar') ? 'active' : '' }}">বাজার খরচ হিসাব</a>
                            <a href="{{ route('frontend.bajar.create') }}" class="dropdown-item {{ Route::is('frontend.bajar.create') ? 'active' : '' }}">বাজার খরচ জমা</a>
                            <a href="{{ route('frontend.bibidh') }}" class="dropdown-item {{ Route::is('frontend.bibidh') ? 'active' : '' }}">বিবিধ খরচের হিসাব</a>
                            <a href="{{ route('frontend.month') }}" class="dropdown-item {{ Route::is('frontend.month') ? 'active' : '' }}">প্রত্যেক মাসের হিসাব</a>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="nav-item nav-link {{ Route::is('contact') ? 'active' : '' }}">যোগাযোগ কুরুণ</a>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown"><img src="{{ url('assets/frontend/img/team-2.jpg') }}" alt="" style="width: 50px; height: 50px; border-radius: 50px;"></a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="single.html" class="dropdown-item">Profile</a>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="dropdown-item">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Header Start -->
    @if(Route::is('home'))
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px">
            <h3 class="display-3 font-weight-bold text-white">@yield('title')</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="{{ route('welcome This site') }}">Welcome</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">@yield('title')</p>
            </div>
        </div>
    </div>
    @endif
    @if(!Route::is('home'))
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">@yield('title')</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="{{ route('welcome This site') }}">Welcome</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">@yield('title')</p>
            </div>
        </div>
    </div>
    @endif
    <!-- Header End -->


    @yield('content')


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/frontend/welcome/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/welcome/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/welcome/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/welcome/lib/lightbox/js/lightbox.min.js') }}"></script>

      <!-- toastr   -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- toastr   -->
    <!-- Contact Javascript File -->
    <script src="{{ asset('assets/frontend/welcome/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/welcome/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/frontend/welcome/js/main.js"></script>
</body>

</html>