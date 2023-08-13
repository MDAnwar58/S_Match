@extends('layouts.admin')
@section('title', 'Facilities Edit')
@section('content')
<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-md-5 grid-margin stretch-card">
				<div class="card">
					<div class="card-header">
						<h2 class="text-center pt-2">Facilities Added</h2>
					</div>
					<div class="card-body">
						<form action="{{ route('facility.update', $facility->id) }}" method="POST">
							@csrf
							@method('PUT')
							<div class="form-group">
								<label for="">Icon</label>
								<input type="text" name="icon" class="form-control" value="{{ $facility->icon }}">
								@if($errors->has('icon'))
								<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('icon') }}</span>
								@endif
							</div>
							<div class="form-group">
								<label for="">Facility Title</label>
								<input type="text" name="title" class="form-control" value="{{ $facility->title }}">
								@if($errors->has('title'))
								<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('title') }}</span>
								@endif
							</div>
							<div class="form-group">
								<label for="">Facility Content</label>
								<textarea name="content" id="content" class="form-control">{{ $facility->content }}</textarea>
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
	<!-- content-wrapper ends -->
	<!-- partial:partials/_footer.html -->
	<!-- partial -->
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