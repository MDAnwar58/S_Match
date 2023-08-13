@extends('layouts.admin')
@section('title', 'Gallery Images Edit')
@section('content')
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-5 grid-margin stretch-card">
			<div class="card">
				<div class="card-header">
					<h2 class="text-center pt-2">Gallery's Added</h2>
				</div>
				<div class="card-body">
					<form action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
						@csrf
						@method('PUT')
						<div class="form-group">
							<label for="">Category</label>
							<select name="category_id" id="category_id" class="form-control">
								<option value="" disabled selected>(Select Your Category)</option>
								@foreach($categories as $category)
								<option {{ $gallery->category_id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
								@endforeach
							</select>
							@if($errors->has('category_id'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('category_id') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">Main Category</label>
							<select name="all" id="all" class="form-control">
								<option  value="" disabled selected>(Select Your All Category)</option>
								@php
								$categorie = App\Models\Category::orderBy('id', 'ASC')->take(1)->get();
								@endphp
								@foreach($categorie as $category)
								<option {{ $gallery->all == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
								@endforeach
							</select>
							@if($errors->has('all'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('all') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">Image</label>
							<input type="file" name="image" id="image" data-default-file="{{ url('upload/images', $gallery->image) }}">
							@if($errors->has('content'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('content') }}</span>
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