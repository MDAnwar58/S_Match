@extends('layouts.admin')
@section('title', 'Latest Report Created Here')
@section('content')
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-8 grid-margin stretch-card">
			<div class="card">
				<div class="card-header">
					<h2 class="text-center pt-2">Latest Report Added</h2>
				</div>
				<div class="card-body">
					<form action="{{ route('latest_report.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
						<input type="hidden" name="admin_id" value="{{ Auth::guard('admin')->user()->id }}">
						<div class="form-group">
							<label for="">Report Title</label>
							<input type="text" name="title" class="form-control" value="{{ old('title') }}">
							@if($errors->has('title'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('title') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">Report Content</label>
							<textarea name="content" id="content" class="form-control" value="{{ old('content') }}"></textarea>
							@if($errors->has('content'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('content') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">Report Image</label>
							<input type="file" name="image" id="image" data-default-file="" class="form-control" value="{{ old('image') }}">
							@if($errors->has('image'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:crimson;">{{ $errors->first('image') }}</span>
							@endif
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success" style="color: white;">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')

<script>
	$('#content').summernote({
		placeholder: 'Write your blog here.............',
		height: 250
	});

	$('#image').dropify({});
</script>

@endsection