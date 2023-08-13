@extends('layouts.sub_admin')
@section('title', 'প্রত্যেক মাসের হিসাব')
@section('content')

<!-- /# row -->
<section id="main-content">
	<div class="row justify-content-center">
		<div class="col-lg-9 col-md-10">
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
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
									<form action="{{ route('update', $month->id) }}" method="POST">
										@csrf
										@method('PUT')
										<td>{{ $loop->index + 1 }}</td>
										<td>
											{{ $month->name }}
											<br>
											<button type="submit" class="btn btn-success">জমা</button>
										</td>
										<td>
											<div class="form-group mt-4">
												<input type="text" name="mile" class="form-control" style="width: 4rem;" value="{{ $month->mile }}">
											</div>
										</td>
										<td>
											<div class="form-group mt-4">
												<input type="text" name="milecherge" class="form-control" style="width: 4rem;" value="{{ $month->milecherge }}">
											</div>
										</td>
										<td>
											@php
											$milekhoroce = $month->mile * $month->milecherge;
											@endphp
											<div class="form-group mt-4">
												<input type="text" name="milekhoroce" class="form-control" style="width: 5rem;" value="{{ $milekhoroce }}">
											</div>
										</td>
										<td>
											<div class="form-group mt-4">
												<input type="text" name="bibidhkhroce" class="form-control" style="width: 5rem;" value="{{ $month->bibidhkhroce }}">
											</div>
										</td>
										<td>
											@php
											$mot = $month->milekhoroce + $month->bibidhkhroce;
											@endphp
											<div class="form-group mt-4">
												<input type="text" name="mot" class="form-control" style="width: 5rem;"  value="{{ $mot }}">
											</div>
										</td>
										<td>
											<div class="form-group mt-4">
												<input type="text" name="joma" class="form-control" style="width: 5rem;"  value="{{ $month->joma }}">
											</div>
										</td>
										<td>
											@php
											$messpaba = $month->mot - $month->joma;
											@endphp
											<div class="form-group mt-4">
												<input type="text" name="messpaba" class="form-control" style="width: 5rem;" value="{{ $messpaba }}">
											</div>
										</td>
									</form>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /# row -->

<div class="modal fade" id="delete_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Delete Modal</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="delete_form" method="post" action="">
				@csrf
				@method('DELETE')
				<div class="modal-body">
					<h2 class="text-center">Do you want to delete this data?</h2>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Confirm</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@section('script')

<script>

   // money add model
   $(document).ready(function(){
   	   $('#open').click(function(){
   	   	  $('.model-container').css('transform', 'scale(1)');
   	   });
   	   $('.model-container').click(function(){
   	   	  $('.model-container').css('transform', 'scale(0)');
   	   });
   });


   // money add model




	$(".delete").on('click', function(event){
		var url = $(this).attr('data-url');
		$('#delete_form').attr('action', url);
		$('#delete_modal').modal('show');
	});
</script>

@endsection