@extends('layouts.admin')
@section('title', 'Section Info Edit')
@section('content')
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-8 grid-margin stretch-card">
			<div class="card">
				<div class="card-header">
					<h2 class="text-center pt-2">Edit Section Information</h2>
				</div>
				<div class="card-body">
					<form action="{{ route('section.update', $section->id) }}" method="POST" enctype="multipart/form-data">
						@csrf
						@method('PUT')
						<div class="form-group">
							<label for="">Title</label>
							<input type="text" name="title" class="form-control" value="{{ $section->title }}">
							@if($errors->has('title'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('title') }}</span>
							@endif
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label for="">Sit Fee</label>
									<input type="text" name="price" class="form-control" value="{{ $section->price }}">
									@if($errors->has('price'))
									<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('price') }}</span>
									@endif
								</div>	
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label for="">Stublist Charge</label>
									<input type="text" name="stablist_charge" class="form-control" value="{{ $section->stablist_charge }}">
									@if($errors->has('stablist_charge'))
									<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('stablist_charge') }}</span>
									@endif
								</div>	
							</div>
						</div>
						<div class="form-group">
							<label for="">Facility Content</label>
							<textarea name="content" id="content" class="form-control">{{ $section->content }}</textarea>
							@if($errors->has('content'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('content') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">Facility Content</label>
							<input type="file" name="image" id="image" data-default-file="{{ url('upload/images', $section->image) }}" class="form-control">@if($errors->has('image'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('image') }}</span>
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
@endsection

@section('script')

<script>
	$('#content').summernote({
		placeholder: 'Write your facility here.............',
		height: 250
	});
	$('#image').dropify({});
</script>

@endsection