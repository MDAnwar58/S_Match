@extends('layouts.admin')
@section('title', 'Gallery Images Added')
@section('content')
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-5 grid-margin stretch-card">
			<div class="card">
				<div class="card-header">
					<h2 class="text-center pt-2">Gallery's Added</h2>
				</div>
				<div class="card-body">
					<form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
						@csrf

						<div class="form-group">
							<label for="">Main Category</label>
							<select name="allcategory_id" id="allcategory_id" class="form-control">
								<option  value="" disabled selected>(Select Your Main Category)</option>
								@foreach($allcategories as $allcategory)
								<option {{ $allcategory->id ? 'selected' : '' }} value="{{ $allcategory->id }}">{{ $allcategory->all_name }}</option>
								@endforeach
							</select>
							@if($errors->has('allcategory_id'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('allcategory_id') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">Category</label>
							<select name="category_id" id="category_id" class="form-control">
								<option value="" disabled selected>(Select Your Category)</option>
								@foreach($categories as $category)
								<option {{ old('category_id') == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
								@endforeach
							</select>
							@if($errors->has('category_id'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('category_id') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">Image</label>
							<input type="file" name="image" id="image">
							@if($errors->has('content'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('content') }}</span>
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
	$('#content').summernote({
		placeholder: 'Write your facility here.............',
		height: 250
	});
	$('#image').dropify({});
</script>

@endsection