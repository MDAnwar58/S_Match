<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Focus Admin: SubAdmin Dashboard</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="{{ asset('assets/backend/sub_admin/css/lib/calendar2/pignose.calendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/sub_admin/css/lib/chartist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/sub_admin/css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/sub_admin/css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/sub_admin/css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/backend/sub_admin/css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/backend/sub_admin/css/lib/weather-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/backend/sub_admin/css/lib/menubar/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/sub_admin/css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/sub_admin/css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/sub_admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/sub_admin/css/demo.css') }}" rel="stylesheet">
    <!-- toastr -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- toastr -->
</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="{{ route('sub_admin.home') }}">
                        <!-- <img src="assets/images/logo.png" alt="" /> --><span style="font-size: 15px;">খাওয়ার ম্যানেজার পেনেল</span></a></div>
                        <li><a href="{{ route('sub_admin.home') }}"><i class="ti-home"></i>হোম পেজ</a></li>
                        <li class="label">মেন</li>
                        <li><a href="{{ route('sub_admin.mile.create') }}"><i class="ti-home"></i>মিলের জন্য সদস্যের নাম</a></li>
                        <li><a href="{{ route('sub_admin.mile') }}"><i class="ti-home"></i>মিলের হিসাব</a></li>
                        <li><a href="{{ route('money.create') }}"><i class="ti-home"></i>টাকা জমা দেওয়া</a></li>
                        <li class="{{ Route::is('money.index') ? 'active' : '' }}{{ Route::is('money.edit') ? 'active' : '' }}"><a href="{{ route('money.index') }}"><i class="ti-home"></i>টাকা জমা হিসাব</a></li>
                        <li><a href="{{ route('bajar.create') }}"><i class="ti-home"></i>বাজার খরচ জমা</a></li>
                        <li class="{{ Route::is('bajar.edit') ? 'active' : '' }}"><a href="{{ route('bajar.index') }}"><i class="ti-home"></i>বাজার খরচের হিসাব</a></li>
                        <li><a href="{{ route('bibidh.create') }}"><i class="ti-home"></i>বিবিধ খরচ জমা</a></li>
                        <li class="{{ Route::is('edit') ? 'active' : '' }}"><a href="{{ route('bibidh.index') }}"><i class="ti-home"></i>বিবিধ খরচের হিসাব</a></li>
                        <li><a href="{{ route('month.create') }}"><i class="ti-home"></i>হিসাবের জন্য প্রত্যেক নাম</a></li>
                        <li><a href="{{ route('month.index') }}"><i class="ti-home"></i>প্রত্যেক মাসের হিসাব</a></li>
                        
                        <li><a><i class="ti-close"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /# sidebar -->

        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="float-left">
                            <div class="hamburger sidebar-toggle">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="float-right">
                            <div class="dropdown dib">
                                <div class="header-icon" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <div class="drop-down dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-content-heading">
                                            <span class="text-left">Recent Notifications</span>
                                        </div>
                                        <div class="dropdown-content-body">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <img class="pull-left m-r-10 avatar-img"
                                                        src="{{ asset('assets/backend/sub_admin/images/avatar/3.jpg') }}" alt="" />
                                                        <div class="notification-content">
                                                            <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                            <div class="notification-heading">Mr. John</div>
                                                            <div class="notification-text">5 members joined today </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="pull-left m-r-10 avatar-img"
                                                        src="{{ asset('assets/backend/sub_admin/images/avatar/3.jpg') }}" alt="" />
                                                        <div class="notification-content">
                                                            <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                            <div class="notification-heading">Mariam</div>
                                                            <div class="notification-text">likes a photo of you</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="pull-left m-r-10 avatar-img"
                                                        src="{{ asset('assets/backend/sub_admin/images/avatar/3.jpg') }}" alt="" />
                                                        <div class="notification-content">
                                                            <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                            <div class="notification-heading">Tasnim</div>
                                                            <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="pull-left m-r-10 avatar-img"
                                                        src="{{ asset('assets/backend/sub_admin/images/avatar/3.jpg') }}" alt="" />
                                                        <div class="notification-content">
                                                            <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                            <div class="notification-heading">Mr. John</div>
                                                            <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="text-center">
                                                    <a href="#" class="more-link">See All</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown dib">
                                <div class="header-icon" data-toggle="dropdown">
                                    <i class="ti-email"></i>
                                    <div class="drop-down dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-content-heading">
                                            <span class="text-left">2 New Messages</span>
                                            <a href="email.html">
                                                <i class="ti-pencil-alt pull-right"></i>
                                            </a>
                                        </div>
                                        <div class="dropdown-content-body">
                                            <ul>
                                                <li class="notification-unread">
                                                    <a href="#">
                                                        <img class="pull-left m-r-10 avatar-img"
                                                        src="{{ asset('assets/backend/sub_admin/images/avatar/1.jpg') }}" alt="" />
                                                        <div class="notification-content">
                                                            <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                            <div class="notification-heading">Michael Qin</div>
                                                            <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="notification-unread">
                                                    <a href="#">
                                                        <img class="pull-left m-r-10 avatar-img"
                                                        src="{{ asset('assets/backend/sub_admin/images/avatar/2.jpg') }}" alt="" />
                                                        <div class="notification-content">
                                                            <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                            <div class="notification-heading">Mr. John</div>
                                                            <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="pull-left m-r-10 avatar-img"
                                                        src="{{ asset('assets/backend/sub_admin/images/avatar/3.jpg') }}" alt="" />
                                                        <div class="notification-content">
                                                            <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                            <div class="notification-heading">Michael Qin</div>
                                                            <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="pull-left m-r-10 avatar-img"
                                                        src="{{ asset('assets/backend/sub_admin/images/avatar/2.jpg') }}" alt="" />
                                                        <div class="notification-content">
                                                            <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                            <div class="notification-heading">Mr. John</div>
                                                            <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="text-center">
                                                    <a href="#" class="more-link">See All</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown dib">
                                <div class="header-icon" data-toggle="dropdown">
                                    <span class="user-avatar">{{ Auth::user()->name }}
                                        <i class="ti-angle-down f-s-10"></i>
                                    </span>
                                    <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-content-body">
                                            <ul>
                                                <li>
                                                    <a href="{{ Auth::user()->name }}">
                                                        <i class="ti-user"></i>
                                                        <span>Profile</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <i class="ti-email"></i>
                                                        <span>Inbox</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="ti-settings"></i>
                                                        <span>Setting</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                    <i class="ti-power-off"></i>
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('sub_admin.home') }}">হোম পেজ</a></li>
                                    <li class="breadcrumb-item active">@yield('title')</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- main content -->
                @yield('content')

            </div>
        </div>
    </div>
    <!-- main content -->

    <!-- jquery vendor -->
    <script src="{{ asset('assets/backend/sub_admin/js/lib/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/backend/sub_admin/js/lib/jquery.nanoscroller.min.js') }}"></script>
    <!-- nano scroller -->
    <script src="{{ asset('assets/backend/sub_admin/js/lib/menubar/sidebar.js') }}"></script>
    <script src="{{ asset('assets/backend/sub_admin/js/lib/preloader/pace.min.js') }}"></script>
    <!-- sidebar -->

    <script src="{{ asset('assets/backend/sub_admin/js/lib/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/backend/sub_admin/js/scripts.js') }}"></script>
    <!-- bootstrap -->

    <script src="{{ asset('assets/backend/sub_admin/js/lib/calendar-2/moment.latest.min.js') }}"></script>
    <script src="{{ asset('assets/backend/sub_admin/js/lib/calendar-2/pignose.calendar.min.js') }}"></script>
    <script src="{{ asset('assets/backend/sub_adminassets/js/lib/calendar-2/pignose.init.js') }}"></script>

    <!-- toastr   -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if (Session::has('success'))
            toastr.success("{{session('success')}}")
        @endif
    </script>
    <!-- toastr   -->

    <script src="{{ asset('assets/backend/sub_admin/js/lib/weather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('assets/backend/sub_admin/js/lib/weather/weather-init.js') }}"></script>
    <script src="{{ asset('assets/backend/sub_admin/js/lib/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/backend/sub_admin/js/lib/circle-progress/circle-progress-init.js') }}"></script>
    <script src="{{ asset('assets/backend/sub_admin/js/lib/chartist/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/backend/sub_admin/js/lib/sparklinechart/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/backend/sub_admin/js/lib/sparklinechart/sparkline.init.js') }}"></script>
    <script src="{{ asset('assets/backend/sub_admin/js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/backend/sub_admin/js/lib/owl-carousel/owl.carousel-init.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('assets/backend/sub_admin/js/dashboard2.js') }}"></script>
    @yield('script')
</body>

</html>