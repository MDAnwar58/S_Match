@extends('layouts.admin')
@section('title', 'Banner Created Here')
@section('content')
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-8 grid-margin stretch-card">
			<div class="card">
				<div class="card-header">
					<h2 class="text-center pt-2">Banner Added</h2>
				</div>
				<div class="card-body">
					<form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
						@csrf

						<div class="form-group">
							<label for="">Banner Title</label>
							<input type="text" name="banner_title" class="form-control" value="{{ old('banner_title') }}">
							@if($errors->has('banner_title'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('banner_title') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">Banner Sub Title</label>
							<input type="text" name="banner_sub_title" class="form-control" value="{{ old('banner_sub_title') }}">
							@if($errors->has('banner_sub_title'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('banner_sub_title') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">Banner Content</label>
							<textarea name="banner_content" id="banner_content" class="form-control" value="{{ old('banner_content') }}"></textarea>
							@if($errors->has('banner_content'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('banner_content') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">Banner Button</label>
							<input type="text" name="banner_btn" class="form-control" value="{{ old('banner_btn') }}">
							@if($errors->has('banner_btn'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('banner_btn') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">Banner Image</label>
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
	$('#banner_content').summernote({
		placeholder: 'Write your blog here.............',
		height: 250
	});

	$('#image').dropify({});
</script>

@endsection