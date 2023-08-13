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
					<form action="{{ route('learn_about.update', $learn_about->id) }}" method="POST">
						@csrf
						@method('PUT')
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="">Header</label>
									<input type="text" name="header" class="form-control" value="{{ $learn_about->header }}">
									@if($errors->has('header'))
									<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('header') }}</span>
									@endif
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="">Title</label>
									<input type="text" name="title" class="form-control" value="{{ $learn_about->title }}">
									@if($errors->has('title'))
									<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('title') }}</span>
									@endif
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="">Content</label>
							<textarea name="content" id="content" class="form-control">{{ $learn_about->content }}</textarea>
							@if($errors->has('content'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('content') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">Mass Quality 1</label>
							<input type="text" name="quality1" class="form-control" value="{{ $learn_about->quality1 }}">
							@if($errors->has('quality1'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('quality1') }}</span>
							@endif
						</div>

						<div class="form-group">
							<label for="">Mass Quality 2</label>
							<input type="text" name="quality2" class="form-control" value="{{ $learn_about->quality2 }}">
							@if($errors->has('quality2'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('quality2') }}</span>
							@endif
						</div>

						<div class="form-group">
							<label for="">Mass Quality 3</label>
							<input type="text" name="quality3" class="form-control" value="{{ $learn_about->quality3 }}">
							@if($errors->has('quality3'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('quality3') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">Mass Quality 4</label>
							<input type="text" name="quality4" class="form-control" value="{{ $learn_about->quality4 }}">
							@if($errors->has('quality4'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('quality4') }}</span>
							@endif
						</div>

						<div class="form-group">
							<label for="">Mass Quality 5</label>
							<input type="text" name="quality5" class="form-control" value="{{ $learn_about->quality5 }}">
							@if($errors->has('quality5'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('quality5') }}</span>
							@endif
						</div>

						<div class="form-group">
							<label for="">Mass Quality 6</label>
							<input type="text" name="quality6" class="form-control" value="{{ $learn_about->quality6 }}">
							@if($errors->has('quality6'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('quality6') }}</span>
							@endif
						</div>

						<div class="form-group">
							<label for="">Mass Quality 7</label>
							<input type="text" name="quality7" class="form-control" value="{{ $learn_about->quality7 }}">
							@if($errors->has('quality7'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('quality7') }}</span>
							@endif
						</div>

						<div class="form-group">
							<label for="">Mass Quality 8</label>
							<input type="text" name="quality8" class="form-control" value="{{ $learn_about->quality8 }}">
							@if($errors->has('quality8'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('quality8') }}</span>
							@endif
						</div>

						<div class="form-group">
							<label for="">Mass Quality 9</label>
							<input type="text" name="quality9" class="form-control" value="{{ $learn_about->quality9 }}">
							@if($errors->has('quality9'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('quality9') }}</span>
							@endif
						</div>

						<div class="form-group">
							<label for="">Mass Quality 10</label>
							<input type="text" name="quality10" class="form-control" value="{{ $learn_about->quality10 }}">
							@if($errors->has('quality10'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('quality10') }}</span>
							@endif
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-success" style="color: white;">Update</button>
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