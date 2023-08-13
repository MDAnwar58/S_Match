@extends('layouts.admin')
@section('title', 'Gallery Category Edit')
@section('content')
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-4 grid-margin stretch-card">
			<div class="card">
				<div class="card-header">
					<h2 class="text-center pt-2">Category Edit</h2>
				</div>
				<div class="card-body">
					<form action="{{ route('category.update', $category->id) }}" method="POST">
						@csrf
						@method('PUT')
						<div class="form-group">
							<label for="">Category</label>
							<input type="text" name="name" class="form-control" value="{{ $category->name }}">
							@if($errors->has('name'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('name') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">Category</label>
							<select name="allcategory_id" class="form-control">
								<option value="">(Seleted Your Main Category)</option>
								@foreach($allcategories as $allcategory)
								<option {{ $allcategory->id ? 'selected' : '' }} value="{{ $allcategory->id }}">{{ $allcategory->all_name }}</option>
								@endforeach
							</select>
							@if($errors->has('allcategory_id'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('allcategory_id') }}</span>
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

</script>

@endsection