@extends('layouts.sub_admin')
@section('content')

<div class="content-wrap">
	<div class="main">
		<div class="container-fluid">
			<!-- /# row -->
			<section id="main-content">
				<div class="row justify-content-center">
					<div class="col-lg-3">
						<div class="card">
							<div class="card-body">
								<h4 class="text-center">টাকা জমা দিন</h4>
								<form action="{{ route('money.update', $money->id) }}" method="POST">
									@csrf
									@method('PUT')
									<div class="form-group">
										<label for="">নাম</label>
										<input type="text" name="name" id="name" value="{{ $money->name }}" class="form-control">
									</div>
									<div class="form-group">
										<label for="">টাকা</label>
										<input type="number" name="money" id="money" value="{{ $money->money }}" class="form-control">
									</div>
									@if($money->money)
									<div class="row">
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label for="">টাকা</label>
												<input type="number" name="money1" id="money1" value="{{ $money->money1 }}" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label for="">টাকা</label>
												<input type="date" name="date1" value="{{ $money->date1 }}" class="form-control">
											</div>
										</div>
									</div>
									@endif
									@if($money->money1)	
									<div class="row">
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label for="">টাকা</label>
												<input type="number" name="money2" id="money2" value="{{ $money->money2 }}" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label for="">টাকা</label>
												<input type="date" name="date2" value="{{ $money->date2 }}" class="form-control">
											</div>
										</div>
									</div>	
									@endif
									@if($money->money2)
									<div class="row">
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label for="">টাকা</label>
												<input type="number" name="money3" id="money3" value="{{ $money->money3 }}" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label for="">টাকা</label>
												<input type="date" name="date3" value="{{ $money->date3 }}" class="form-control">
											</div>
										</div>
									</div>	
									@endif
									@if($money->money3)
									<div class="row">
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label for="">টাকা</label>
												<input type="number" name="money4" id="money4" value="{{ $money->money4 }}" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label for="">টাকা</label>
												<input type="date" name="date4" value="{{ $money->date4 }}" class="form-control">
											</div>
										</div>
									</div>	
									@endif
									@if($money->money4)
									<div class="row">
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label for="">টাকা</label>
												<input type="number" name="money5" id="money5" value="{{ $money->money5 }}" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label for="">টাকা</label>
												<input type="date" name="date5" value="{{ $money->date5 }}" class="form-control">
											</div>
										</div>
									</div>	
									@endif
									@if($money->money5)
									<div class="row">
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label for="">টাকা</label>
												<input type="number" name="money6" id="money6" value="{{ $money->money6 }}" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label for="">টাকা</label>
												<input type="date" name="date6" value="{{ $money->date6 }}" class="form-control">
											</div>
										</div>
									</div>	
									@endif
									@if($money->money6)
									<div class="row">
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label for="">টাকা</label>
												<input type="number" name="money7" id="money7" value="{{ $money->money7 }}" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label for="">টাকা</label>
												<input type="date" name="date7" value="{{ $money->date7 }}" class="form-control">
											</div>
										</div>
									</div>	
									@endif
									@if($money->money7)
									<div class="row">
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label for="">টাকা</label>
												<input type="number" name="money8" id="money8" value="{{ $money->money8 }}" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label for="">টাকা</label>
												<input type="date" name="date8" value="{{ $money->date8 }}" class="form-control">
											</div>
										</div>
									</div>	
									@endif
									@if($money->money8)
									<div class="row">
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label for="">টাকা</label>
												<input type="number" name="money9" id="money9" value="{{ $money->money9 }}" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label for="">টাকা</label>
												<input type="date" name="date9" value="{{ $money->date9 }}" class="form-control">
											</div>
										</div>
									</div>	
									@endif
									@if($money->money9)
									<div class="row">
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label for="">টাকা</label>
												<input type="number" name="money10" id="money10" value="{{ $money->money10 }}" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label for="">টাকা</label>
												<input type="date" name="date10" value="{{ $money->date10 }}" class="form-control">
											</div>
										</div>
									</div>	
									@endif
									@if($money->money10)
									<div class="row">
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label for="">টাকা</label>
												<input type="number" name="money11" id="money11" value="{{ $money->money11 }}" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label for="">টাকা</label>
												<input type="date" name="date11" value="{{ $money->date11 }}" class="form-control">
											</div>
										</div>
									</div>	
									@endif
									@if($money->money11)
									<div class="row">
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label for="">টাকা</label>
												<input type="number" name="money12" id="money12" value="{{ $money->money12 }}" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label for="">টাকা</label>
												<input type="date" name="date12" value="{{ $money->date12 }}" class="form-control">
											</div>
										</div>
									</div>	
									@endif
									@if($money->money12)
									<div class="row">
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label for="">টাকা</label>
												<input type="number" name="money13" id="money13" value="{{ $money->money13 }}" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label for="">টাকা</label>
												<input type="date" name="date13" value="{{ $money->date13 }}" class="form-control">
											</div>
										</div>
									</div>	
									@endif
									@if($money->money13)
									<div class="row">
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label for="">টাকা</label>
												<input type="number" name="money14" id="money14" value="{{ $money->money14 }}" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label for="">টাকা</label>
												<input type="date" name="date14" value="{{ $money->date14 }}" class="form-control">
											</div>
										</div>
									</div>	
									@endif
									<div class="form-group">
										<button type="submit" class="btn btn-success">জমা দিন</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /# row -->

			<div class="row">
				<div class="col-lg-12">
					<div class="footer">
						<p>2022 © Admin Board. - <a href="#">example.com</a></p>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
</div>

@endsection