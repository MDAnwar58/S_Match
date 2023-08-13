@extends('layouts.sub_admin')
@section('title', 'মিলের হিসাব')
@section('content')


<!-- /# row -->
<section id="main-content">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						@if($miles->count()>0)
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>সদস্যদের নাম</th>
									<th>বেলা</th>
									<th>দিন 1</th>
									<th>দিন 2</th>
									<th>দিন 3</th>
									<th>দিন 4</th>
									<th>দিন 5</th>
									<th>দিন 6</th>
									<th>দিন 7</th>
									<th>দিন 8</th>
									<th>দিন 9</th>
									<th>দিন 10</th>
									<th>দিন 11</th>
									<th>দিন 12</th>
									<th>দিন 13</th>
									<th>দিন 14</th>
									<th>দিন 15</th>
									<th>দিন 16</th>
									<th>দিন 17</th>
									<th>দিন 18</th>
									<th>দিন 19</th>
									<th>দিন 20</th>
									<th>দিন 21</th>
									<th>দিন 22</th>
									<th>দিন 23</th>
									<th>দিন 24</th>
									<th>দিন 25</th>
									<th>দিন 26</th>
									<th>দিন 27</th>
									<th>দিন 28</th>
									<th>দিন 29</th>
									<th>দিন 30</th>
									<th>দিন 31</th>
									<th>সদস্যদের মোট মিল</th>
									<th>র্সবোমোট মিল</th>
								</tr>
							</thead>
							<tbody>
								@foreach($miles as $mile)
								<form action="{{ route('sub_admin.mile.storeWithId', $mile->id) }}" method="POST">
									@csrf
									<tr>
										<td>1</td>
										<td>
											<h5>{{ $mile->name }}</h5>
											<button type="submit" class="btn btn-sm btn-success">লিটে মিল তুলুন</button>
										</td>
										<td>
											<p class="mt-1" style="font-size: 1.3rem;">সকাল:</p> 
											<p class="mt-3" style="font-size: 1.3rem; padding: .6rem 0 0 0;">দুপুর:</p> 
											<p class="mt-3" style="font-size: 1.3rem; padding: .5rem 0 0 0;">সন্ধা:</p>
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sokal1" value="{{ $mile->sokal1 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="dupur1" value="{{ $mile->dupur1 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="rattri1" value="{{ $mile->rattri1 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sokal2" value="{{ $mile->sokal2 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="dupur2" value="{{ $mile->dupur2 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="rattri2" value="{{ $mile->rattri2 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sokal3" value="{{ $mile->sokal3 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="dupur3" value="{{ $mile->dupur3 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="rattri3" value="{{ $mile->rattri3 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sokal4" value="{{ $mile->sokal4 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="dupur4" value="{{ $mile->dupur4 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="rattri4" value="{{ $mile->rattri4 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sokal5" value="{{ $mile->sokal5 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="dupur5" value="{{ $mile->dupur5 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="rattri5" value="{{ $mile->rattri5 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sokal6" value="{{ $mile->sokal6 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="dupur6" value="{{ $mile->dupur6 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="rattri6" value="{{ $mile->rattri6 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sokal7" value="{{ $mile->sokal7 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="dupur7" value="{{ $mile->dupur7 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="rattri7" value="{{ $mile->rattri7 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sokal8" value="{{ $mile->sokal8 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="dupur8" value="{{ $mile->dupur8 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="rattri8" value="{{ $mile->rattri8 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sokal9" value="{{ $mile->sokal9 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="dupur9" value="{{ $mile->dupur9 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="rattri9" value="{{ $mile->rattri9 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sokal10" value="{{ $mile->sokal10 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="dupur10" value="{{ $mile->dupur10 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="rattri10" value="{{ $mile->rattri10 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sokal11" value="{{ $mile->sokal11 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="dupur11" value="{{ $mile->dupur11 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="rattri11" value="{{ $mile->rattri11 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sokal12" value="{{ $mile->sokal12 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="dupur12" value="{{ $mile->dupur12 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="rattri12" value="{{ $mile->rattri12 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sokal13" value="{{ $mile->sokal13 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="dupur13" value="{{ $mile->dupur13 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="rattri13" value="{{ $mile->rattri13 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sokal14" value="{{ $mile->sokal14 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="dupur14" value="{{ $mile->dupur14 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="rattri14" value="{{ $mile->rattri14 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sokal15" value="{{ $mile->sokal15 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="dupur15" value="{{ $mile->dupur15 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="rattri15" value="{{ $mile->rattri15 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sokal16" value="{{ $mile->sokal16 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="dupur16" value="{{ $mile->dupur16 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="rattri16" value="{{ $mile->rattri16 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sokal17" value="{{ $mile->sokal17 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="dupur17" value="{{ $mile->dupur17 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="rattri17" value="{{ $mile->rattri17 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sokal18" value="{{ $mile->sokal18 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="dupur18" value="{{ $mile->dupur18 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="rattri18" value="{{ $mile->rattri18 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sokal19" value="{{ $mile->sokal19 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="dupur19" value="{{ $mile->dupur19 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="rattri19" value="{{ $mile->rattri19 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sokal20" value="{{ $mile->sokal20 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="dupur20" value="{{ $mile->dupur20 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="rattri20" value="{{ $mile->rattri20 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sokal21" value="{{ $mile->sokal21 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="dupur21" value="{{ $mile->dupur21 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="rattri21" value="{{ $mile->rattri21 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sokal22" value="{{ $mile->sokal22 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="dupur22" value="{{ $mile->dupur22 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="rattri22" value="{{ $mile->rattri22 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sokal23" value="{{ $mile->sokal23 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="dupur23" value="{{ $mile->dupur23 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="rattri23" value="{{ $mile->rattri23 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sokal24" value="{{ $mile->sokal24 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="dupur24" value="{{ $mile->dupur24 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="rattri24" value="{{ $mile->rattri24 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sokal25" value="{{ $mile->sokal25 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="dupur25" value="{{ $mile->dupur25 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="rattri25" value="{{ $mile->rattri25 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sokal26" value="{{ $mile->sokal26 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="dupur26" value="{{ $mile->dupur26 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="rattri26" value="{{ $mile->rattri26 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sokal27" value="{{ $mile->sokal27 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="dupur27" value="{{ $mile->dupur27 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="rattri27" value="{{ $mile->rattri27 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sokal28" value="{{ $mile->sokal28 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="dupur28" value="{{ $mile->dupur28 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="rattri28" value="{{ $mile->rattri28 }}" class="fomr-group text-center" style="width: 100%;">
											</div>						
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sokal29" value="{{ $mile->sokal29 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="dupur29" value="{{ $mile->dupur29 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="rattri29" value="{{ $mile->rattri29 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sokal30" value="{{ $mile->sokal30 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="dupur30" value="{{ $mile->dupur30 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="rattri30" value="{{ $mile->rattri30 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
										</td>

										<td>
											<div class="form-group">
												<input type="text" name="sokal31" value="{{ $mile->sokal31 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="dupur31" value="{{ $mile->dupur31 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
											<div class="form-group">
												<input type="text" name="rattri31" value="{{ $mile->rattri31 }}" class="fomr-group text-center" style="width: 100%;">
											</div>
										</td>
										<td>
											@php
											$total = $mile->sokal1 + $mile->dupur1 + $mile->rattri1 + $mile->sokal2 + $mile->dupur2 + $mile->rattri2 + $mile->sokal3 + $mile->dupur3 + $mile->rattri3 + $mile->sokal4 + $mile->dupur4 + $mile->rattri4 + $mile->sokal5 + $mile->dupur5 + $mile->rattri5 + $mile->sokal6 + $mile->dupur6 + $mile->rattri6 + $mile->sokal7 + $mile->dupur7 + $mile->rattri7 + $mile->sokal8 + $mile->dupur8 + $mile->rattri8 + $mile->sokal9 + $mile->dupur9 + $mile->rattri9 + $mile->sokal10 + $mile->dupur10 + $mile->rattri10 + $mile->sokal11 + $mile->dupur11 + $mile->rattri11 + $mile->sokal12 + $mile->dupur12 + $mile->rattri12 + $mile->sokal13 + $mile->dupur13 + $mile->rattri13 + $mile->sokal14 + $mile->dupur14 + $mile->rattri14 + $mile->sokal15 + $mile->dupur15 + $mile->rattri15 + $mile->sokal16 + $mile->dupur16 + $mile->rattri16 + $mile->sokal17 + $mile->dupur17 + $mile->rattri17 + $mile->sokal18 + $mile->dupur18 + $mile->rattri18 + $mile->sokal19 + $mile->dupur19 + $mile->rattri19 + $mile->sokal20 + $mile->dupur20 + $mile->rattri20 + $mile->sokal21 + $mile->dupur21 + $mile->rattri21 + $mile->sokal22 + $mile->dupur22 + $mile->rattri22 + $mile->sokal23 + $mile->dupur23 + $mile->rattri23 + $mile->sokal24 + $mile->dupur24 + $mile->rattri24 + $mile->sokal25 + $mile->dupur25 + $mile->rattri25 + $mile->sokal26 + $mile->dupur26 + $mile->rattri26 + $mile->sokal27 + $mile->dupur27 + $mile->rattri27 + $mile->sokal28 + $mile->dupur28 + $mile->rattri28 + $mile->sokal29 + $mile->dupur29 + $mile->rattri29 + $mile->sokal30 + $mile->dupur30 + $mile->rattri30 + $mile->sokal31 + $mile->dupur31 + $mile->rattri31;
											@endphp
											<div class="form-group">
												<input type="text" name="total" value="{{ $total }}" class="fomr-group text-center" style="width: 100%;">
											</div>
										</td>
										<td>
											
										</td>
									</tr>
								</form>
								@endforeach
							</tbody>
						</table>
						@else
						<span class="text-center"><h2>No Data</h2></span>
						@endif



					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /# row -->

@endsection