@extends('layouts.admin')
@section('title', 'Banner Created Here')
@section('content')
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-8 grid-margin stretch-card">
			<div class="card">
				<div class="card-header">
					<h2 class="text-center pt-2">Added Learn About Us</h2>
				</div>
				<div class="card-body">
					<form action="{{ route('learn_about.store') }}" method="POST">
						@csrf
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="">Header</label>
									<input type="text" name="header" class="form-control" value="{{ old('header') }}">
									@if($errors->has('header'))
									<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('header') }}</span>
									@endif
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="">Title</label>
									<input type="text" name="title" class="form-control" value="{{ old('title') }}">
									@if($errors->has('title'))
									<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('title') }}</span>
									@endif
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="">Content</label>
							<textarea name="content" id="content" class="form-control" value="{{ old('content') }}"></textarea>
							@if($errors->has('content'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('content') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">Mass Quality 1</label>
							<input type="text" name="quality1" class="form-control" value="{{ old('quality1') }}">
							@if($errors->has('quality1'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('quality1') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">Mass Quality 2</label>
							<input type="text" name="quality2" class="form-control" value="{{ old('quality2') }}">
							@if($errors->has('quality2'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('quality2') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">Mass Quality 3</label>
							<input type="text" name="quality3" class="form-control" value="{{ old('quality3') }}">
							@if($errors->has('quality3'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('quality3') }}</span>
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