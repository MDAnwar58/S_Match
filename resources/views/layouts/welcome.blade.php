<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title') - WelCome in this Website</title>
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

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/frontend/welcome/css/style.css') }}" rel="stylesheet">
    <!-- Customized custom Stylesheet -->
    <link href="{{ asset('assets/frontend/welcome/css/custom.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-light position-relative shadow">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
            <a href="{{ route('welcome This site') }}" class="navbar-brand font-weight-bolder text-secondary" style="font-size: 30px;">
            @foreach($logos as $logo)  
            @if($logo->text_logo) 
            <span class="text-primary">{{ $logo->text_logo }}</span>
            @else
            <span class="text-primary"><img src="{{ url('upload/images', $logo->file_logo) }}" style="width: 80px;" alt=""></span>
            @endif
            @endforeach
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0">
                    <a href="{{ route('home') }}" class="nav-item nav-link {{ Route::is('home') ? 'active' : '' }}">হোম</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link {{ Route::is('about') ? 'active' : '' }}">ম্যাচ সর্ম্পকে জানুন</a>
                    <a href="{{ route('section') }}"" class="nav-item nav-link {{ Route::is('section') ? 'active' : '' }}">সেকশন</a>
                    <a href="{{ route('member') }}" class="nav-item nav-link {{ Route::is('member') ? 'active' : '' }}">সদস্য</a>
                    <a href="{{ route('gallery') }}" class="nav-item nav-link {{ Route::is('gallery') ? 'active' : '' }}">ম্যাচের ছবি</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">র্বতমান হিসাব নিকাশ আপডেট</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="single.html" class="dropdown-item">মিলের হিসাব</a>
                            <a href="blog.html" class="dropdown-item">টাকা জমা হিসাব</a>
                            <a href="blog.html" class="dropdown-item">বাজার খরচ হিসাব</a>
                            <a href="blog.html" class="dropdown-item">বাজার খরচ জমা</a>
                            <a href="blog.html" class="dropdown-item">বিবিধ খরচের হিসাব</a>
                            <a href="blog.html" class="dropdown-item">প্রত্যেক মাসের হিসাব</a>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="nav-item nav-link {{ Route::is('contact') ? 'active' : '' }}">যোগাযোগ কুরুণ</a>
                </div>
                <a href="{{ route('register') }}" class="btn btn-primary px-4">Join Here</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


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

    <!-- Contact Javascript File -->
    <script src="{{ asset('assets/frontend/welcome/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/welcome/mail/contact.js') }}"></script>
    <!-- loader   -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
@yield('script')
    <!-- Template Javascript -->
    <script src="{{ asset('assets/frontend/welcome/js/main.js"></script>
    <script src="{{ asset('assets/frontend/welcome/js/custom.js"></script>
</body>

</html>