<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta
  name="keywords"
  content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
  />
  <meta
  name="description"
  content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
  />
  <meta name="robots" content="noindex,nofollow" />
  <title>@yield('title') - Matrix Admin Lite Free Versions Template by WrapPixel</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/backend/admin/images/favicon.png') }}"/>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <!-- font poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- font poppins -->
  
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <!-- Custom CSS -->
  <link href="{{ asset('assets/backend/admin/libs/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet"/>
  <link href="{{ asset('assets/backend/admin/extra-libs/calendar/calendar.css') }}" rel="stylesheet" />
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('assets/backend/admin/summernote/summernote-lite.min.css') }}">
  <!-- dropify -->
  <link rel="stylesheet" href="{{ asset('assets/backend/admin/dropify/css/dropify.min.css') }}">
  @yield('link')
  <link href="{{ asset('assets/backend/admin/dist/css/style.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/backend/admin/dist/css/custom.css') }}" rel="stylesheet" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
    id="main-wrapper"
    data-layout="vertical"
    data-navbarbg="skin5"
    data-sidebartype="full"
    data-sidebar-position="absolute"
    data-header-position="absolute"
    data-boxed-layout="full"
    >
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    @include('backend.admin.partials.nav')
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    @include('backend.admin.partials.sidebar')
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->

    <div class="page-wrapper">

      <div class="page-breadcrumb">
        <div class="row">
          <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">@yield('title')</h4>
            <div class="ms-auto text-end">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">হোম</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    লাইব্রেরি
                  </li>
                  @if(Route::is('admin.member.index'))
                  <li class="breadcrumb-item active" aria-current="page">
                    ম্যাচের সদস্য
                  </li>
                  @endif
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      @yield('content')
    </div>
    <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- All Jquery -->
  <!-- ============================================================== -->
  <script src="{{ asset('assets/backend/admin/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script src="{{ asset('assets/backend/admin/dist/js/jquery.ui.touch-punch-improved.js') }}"></script>
  <script src="{{ asset('assets/backend/admin/dist/js/jquery-ui.min.js') }}"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="{{ asset('assets/backend/admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <!-- slimscrollbar scrollbar JavaScript -->
  <script src="{{ asset('assets/backend/admin/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
  <script src="{{ asset('assets/backend/admin/extra-libs/sparkline/sparkline.js') }}"></script>
  <!--Wave Effects -->
  <script src="{{ asset('assets/backend/admin/dist/js/waves.js') }}"></script>
  <!--Menu sidebar -->
  <script src="{{ asset('assets/backend/admin/dist/js/sidebarmenu.js') }}"></script>
  <!-- summernote -->
  <script src="{{ asset('assets/backend/admin/summernote/summernote-lite.min.js') }}"></script>
  <!-- dropify -->
  <script src="{{ asset('assets/backend/admin/dropify/js/dropify.min.js') }}"></script>
  <!-- End custom js for this page-->
  @yield('script')
  <script src="{{ asset('assets/backend/admin/dist/js/sweetalert.min.js') }}"></script>
  <script>
    @if(Session::has('success'))
    swal({
      title: "Good job!",
      text: "{{ Session::get('success') }}",
      icon: "success",
    });
    @endif
  </script>
  <!--Custom JavaScript -->
  <script src="{{ asset('assets/backend/admin/dist/js/custom.min.js') }}"></script>
  <!-- this page js -->
  <script src="{{ asset('assets/backend/admin/libs/moment/min/moment.min.js') }}"></script>
  <script src="{{ asset('assets/backend/admin/libs/fullcalendar/dist/fullcalendar.min.js') }}"></script>
  <script src="{{ asset('assets/backend/admin/dist/js/pages/calendar/cal-init.js') }}"></script>
</body>
</html>
