@extends('layouts.sub_admin')
@section('title', 'বাজার খরচের হিসাব')
@section('content')

<!-- /# row -->
<section id="main-content">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							@if($bajars->count()>0)
							<thead>
								<tr>
									<th>#</th>
									<th>তারিখ</th>
									<th>বার</th>
									<th>বাজারকারীদের নাম</th>
									<th>বাজারের বিবরণ</th>
									<th>টাকা</th>
									<th>বাজারের বিবরণের ছবি</th>
									<th>বাজার লিস্ট ম্যানেজ</th>
								</tr>
							</thead>
							@php
							$total_bajar = 0;
							@endphp
							<tbody>
								@foreach($bajars as $bajar)
								<tr>
									<td>{{ $loop->index + 1 }}</td>
									<td>{{ date('d/m/Y', strtotime($bajar->created_at)) }}</td>
									<td>{{ date('D', strtotime($bajar->created_at)) }}</td>
									<td>{{ $bajar->name }}</td>
									<td>{{ $bajar->des }}</td>
									<td>{{ $bajar->taka }}</td>
									<td>
										<img src="{{ url('upload/images', $bajar->image) }}" alt="" style="width: 100px;">
									</td>
									<td>
										<a href="{{ route('bajar.edit', $bajar->id) }}" class="btn btn-info">Edit</a>
									</td>
								</tr>
								@php
								$total_bajar += $bajar->taka;
								@endphp
								@endforeach
							</tbody>
							<tfoot>
								<tr>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th>মোট টাকা: {{ $total_bajar }}</th>
									<th></th>
									<th></th>
									<th></th>
								</tr>
							</tfoot>
							
							@else
							<h3>No Data</h3>
							@endif
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
	$(".delete").on('click', function(event){
		var url = $(this).attr('data-url');
		$('#delete_form').attr('action', url);
		$('#delete_modal').modal('show');
	});
</script>

@endsection