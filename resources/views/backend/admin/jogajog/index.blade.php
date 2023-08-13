@extends('layouts.admin')
@section('title', 'যোগাযোগ')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 grid-margin stretch-card">
			<div class="card">
				<div class="card-header">
					<h2 class="text-center pt-2">Added Contact Section's Content</h2>
				</div>
				<div class="card-body">
					@if($jogajogs->count()>0)
					<form action="{{ route('jogajog.store') }}" method="POST">
						@csrf

						<div class="form-group">
							<label for="">Title</label>
							<input type="text" name="title" class="form-control" disabled>@if($errors->has('title'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('title') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">Content</label>
							<textarea name="content" id="content" class="form-control" disabled></textarea>
							@if($errors->has('content'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('content') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">Email</label>
							<input type="text" name="email" class="form-control" disabled>@if($errors->has('email'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('email') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">Phone Number</label>
							<input type="number" name="phone" class="form-control" disabled>@if($errors->has('phone'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('phone') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">Address</label>
							<input type="text" name="address" class="form-control" disabled>@if($errors->has('address'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('address') }}</span>
							@endif
						</div>
						<div class="form-action">
							<button type="submit" class="btn btn-success" style="color: white;">Save</button>
						</div>
					</form>
					@else
					<form action="{{ route('jogajog.store') }}" method="POST">
						@csrf

						<div class="form-group">
							<label for="">Title</label>
							<input type="text" name="title" class="form-control">@if($errors->has('title'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('title') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">Content</label>
							<textarea name="content" id="content" class="form-control"></textarea>
							@if($errors->has('content'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('content') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">Email</label>
							<input type="text" name="email" class="form-control">@if($errors->has('email'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('email') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">Phone Number</label>
							<input type="number" name="phone" class="form-control">@if($errors->has('phone'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('phone') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">Address</label>
							<input type="text" name="address" class="form-control">@if($errors->has('address'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('address') }}</span>
							@endif
						</div>
						<div class="form-action">
							<button type="submit" class="btn btn-success" style="color: white;">Save</button>
						</div>
					</form>
					@endif
				</div>
			</div>
		</div>
		<div class="col-md-9 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<div class="responsive-table">
						<table class="table">
							<thead>
								<tr  class="fs-5" style="color: black; font-family: 'Poppins', sans-serif;">
									<td>#</td>
									<td>Title</td>
									<td>Content</td>
									<td>Email</td>
									<td>Phone</td>
									<td>Addres</td>
									<td>Action</td>
								</tr>
							</thead>
							<tbody>
								@foreach($jogajogs as $jogajog)
								<tr>
									<td>{{ $loop->index + 1 }}</td>
									<td>{{ $jogajog->title }}</td>
									<td>{!! $jogajog->content !!}</td>
									<td>{{ $jogajog->email }}</td>
									<td>{{ $jogajog->phone }}</td>
									<td>{{ $jogajog->address }}</td>
									<td>
										<a href="{{ route('jogajog.edit', $jogajog->id) }}" class="btn btn-primary">Edit</a>
										<a href="javascript:void(0)" data-url="{{ route('jogajog.destroy', $jogajog->id) }}" class="btn btn-danger delete">Delete</a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						{{ $jogajogs->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


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
					<h2 class="text-center">Do You Want</h2>
					<h2 class="text-center mt-2">To Delete Your Jogajog Content?</h2>
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
	$('#content').summernote({
		placeholder: 'Write your facility here.............',
		height: 350
	});


	$(".delete").on('click', function(event){
		var url = $(this).attr('data-url');
		$('#delete_form').attr('action', url);
		$('#delete_modal').modal('show');
	});
</script>

@endsection