@extends('layouts.frontend')
@section('title', 'টাকা জমা হিসাব')
@section('content')
<!-- About Start -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                <div class="table-responsive">
						<table class="table">
							@if($moneies->count()>0)
							<thead>
								<tr>
									<th>#</th>
									<th>নাম</th>
									<th>টাকা</th>
									<th>জমা</th>
								</tr>
							</thead>
							@php
							$moneys = 0;
							@endphp
							<tbody>
								@foreach($moneies as $money)
								<tr>
									<td>{{ $loop->index + 1 }}</td>
									<td>{{ $money->name }}</td>
									<td>
										{{ $money->money }} টাকা --- 
										{{ date('d-m-Y', strtotime($money->created_at)) }}
										<br>
										@if($money->money1)
										{{ $money->money1 }} টাকা --- {{ date('d-m-Y', strtotime($money->date1)) }}
										<br>
										@endif
										@if($money->money2)
										{{ $money->money2 }} টাকা --- {{ date('d-m-Y', strtotime($money->date2)) }}
										<br>
										@endif
										@if($money->money3)
										{{ $money->money3 }} টাকা --- {{ date('d-m-Y', strtotime($money->date3)) }}
										<br>
										@endif
										@if($money->money4)
										{{ $money->money4 }} টাকা --- {{ date('d-m-Y', strtotime($money->date4)) }}
										<br>
										@endif
										@if($money->money5)
										{{ $money->money5 }} টাকা --- {{ date('d-m-Y', strtotime($money->date5)) }}
										<br>
										@endif
										@if($money->money6)
										{{ $money->money6 }} টাকা --- {{ date('d-m-Y', strtotime($money->date6)) }}
										<br>
										@endif
										@if($money->money7)
										{{ $money->money7 }} টাকা --- {{ date('d-m-Y', strtotime($money->date7)) }}
										<br>
										@endif
										@if($money->money8)
										{{ $money->money8 }} টাকা --- {{ date('d-m-Y', strtotime($money->date8)) }}
										<br>
										@endif
										@if($money->money9)
										{{ $money->money9 }} টাকা --- {{ date('d-m-Y', strtotime($money->date9)) }}
										<br>
										@endif
										@if($money->money10)
										{{ $money->money10 }} টাকা --- {{ date('d-m-Y', strtotime($money->date10)) }}
										<br>
										@endif
										@if($money->money11)
										{{ $money->money11 }} টাকা --- {{ date('d-m-Y', strtotime($money->date11)) }}
										<br>
										@endif
										@if($money->money12)
										{{ $money->money12 }} টাকা --- {{ date('d-m-Y', strtotime($money->date12)) }}
										<br>
										@endif
										@if($money->money13)
										{{ $money->money13 }} টাকা --- {{ date('d-m-Y', strtotime($money->date13)) }}
										<br>
										@endif
										@if($money->money14)
										{{ $money->money14 }} টাকা --- {{ date('d-m-Y', strtotime($money->date14)) }}
										<br>
										@endif
									</td>
									<td>
										@php
										$mon = $money->money;
										$one = $money->money1;
										$two = $money->money2;
										$three = $money->money3;
										$four = $money->money4;
										$five = $money->money5;
										$six = $money->money6;
										$seven = $money->money7;
										$eight = $money->money8;
										$nine = $money->money9;
										$ten = $money->money10;
										$eliven = $money->money11;
										$twoalve = $money->money12;
										$thertin = $money->money13;
										$fourtin = $money->money14;
										$total =  $mon + $one + $two + $three + $four + $five + $six + $seven + $eight + $nine + $ten + $eliven + $twoalve + $thertin + $fourtin; 
										echo $total;
										@endphp
										টাকা
									</td>
								</tr>
								@php
								$moneys += $total;
								@endphp
								@endforeach
							</tbody>
							<tfoot>
								<tr>
									<th></th>
									<th></th>
									<th></th>
									<th>মোট জমা: {{ $moneys }}</th>
								</tr>
							</tfoot>
							@else
							<h3 class="text-center">No Data</h3>
							@endif
						</table>
						<div class="justify-content-center d-flex">
							{{ $moneies->links() }}
						</div>
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