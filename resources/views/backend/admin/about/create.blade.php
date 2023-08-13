@extends('layouts.admin')
@section('title', 'Abouts Content Added')
@section('content')

<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-8 grid-margin stretch-card">
			<div class="card">
				<div class="card-header">
					<h2 class="text-center pt-2">About Added</h2>
				</div>
				<div class="card-body">
					<form action="{{ route('about.store') }}" method="POST">
						@csrf
						<div class="form-group">
							<label for="">Title</label>
							<input type="text" name="title" class="form-control">
							@if($errors->has('title'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('title') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">Content</label>
							<textarea name="about_content" id="about_content"></textarea>
							@if($errors->has('about_content'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('about_content') }}</span>
							@endif
						</div>
						<div class="form-action">
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
	$('#about_content').summernote({
		placeholder: 'Write here.............',
		height: 250
	});
</script>

@endsection