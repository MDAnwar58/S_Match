@extends('layouts.sub_admin')
@section('title', 'বিবিধ খরচের হিসাব')
@section('content')


<!-- /# row -->
<section id="main-content">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							@if($bibidhs->count()>0)
							<thead>
								<tr>
									<th>#</th>
									<th>তারিখ</th>
									<th>বার</th>
									<th>নাম</th>
									<th>বিবরণ</th>
									<th>টাকা</th>
									<th>বিবরণের ছবি</th>
									<th>বিবিধ লিস্ট ম্যানেজ</th>
								</tr>
							</thead>

							@php
							$total_bibidh = 0;
							@endphp
							<tbody>
								@foreach($bibidhs as $bibidh)
								<tr>
									<td>{{ $loop->index + 1 }}</td>
									<td>{{ date('d/m/Y', strtotime($bibidh->created_at)) }}</td>
									<td>{{ date('D', strtotime($bibidh->created_at)) }}</td>
									<td>{{ $bibidh->name }}</td>
									<td>{{ $bibidh->des }}</td>
									<td>{{ $bibidh->taka }}</td>
									<td>
										<img src="{{ url('upload/images', $bibidh->image) }}" alt="" style="width: 100px;">
									</td>
									<td>
										<a href="{{ route('edit', $bibidh->id) }}" class="btn btn-info">Edit</a>
									</td>
								</tr>

								@php
								$total_bibidh += $bibidh->taka;
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
									<th>মোট টাকা:- {{ $total_bibidh }}</th>
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