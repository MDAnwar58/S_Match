@extends('layouts.admin')
@section('title', 'যোগাযোগ')
@section('content')
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-5 grid-margin stretch-card">
			<div class="card">
				<div class="card-header">
					<h2 class="text-center pt-2">Added Contact Section's Content</h2>
				</div>
				<div class="card-body">
					<form action="{{ route('jogajog.update', $jogajog->id) }}" method="POST">
						@csrf
						@method('PUT')
						<div class="form-group">
							<label for="">Title</label>
							<input type="text" name="title" class="form-control" value="{{ $jogajog->title }}">@if($errors->has('title'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('title') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">Content</label>
							<textarea name="content" id="content" class="form-control">{!! $jogajog->content !!}</textarea>
							@if($errors->has('content'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('content') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">Email</label>
							<input type="text" name="email" class="form-control" value="{{ $jogajog->email }}">@if($errors->has('email'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('email') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">Phone Number</label>
							<input type="number" name="phone" class="form-control" value="{{ $jogajog->phone }}">
							@if($errors->has('phone'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('phone') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">Address</label>
							<input type="text" name="address" class="form-control" value="{{ $jogajog->address }}">
							@if($errors->has('address'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('address') }}</span>
							@endif
						</div>
						<div class="form-action">
							<button type="submit" class="btn btn-success" style="color: white;">Update</button>
						</div>
					</form>
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
					<h2 class="text-center mt-2">To Delete Your Category?</h2>
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
</script>

@endsection