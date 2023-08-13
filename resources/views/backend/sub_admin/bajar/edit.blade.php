@extends('layouts.sub_admin')
@section('title', 'বাজার খরচটি পরিবর্তন করুন')
@section('content')

<!-- /# row -->
<section id="main-content">
	<div class="row justify-content-center">
		<div class="col-lg-6">
			<div class="card">
				<div class="card-header">
					<h4 class="text-center">বাজার খরচের হিসাব জমা করুণ</h4>
				</div>
				<div class="card-body p-4">
					<form action="{{ route('bajar.update', $bajar->id) }}" method="POST" enctype="multipart/form-data">
						@csrf
						@method('PUT')
						<div class="form-group">
							<label for="">নাম</label>
							<input type="text" name="name" id="name" class="form-control" value="{{ $bajar->name }}">
							@if($errors->has('name'))
							<span style="color: blue; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('name') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">বিবরণ</label>
							<input type="text" name="des" id="des" class="form-control" value="{{ $bajar->des }}">
							@if($errors->has('des'))
							<span style="color: blue; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('des') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">টাকা</label>
							<input type="text" name="taka" id="taka" class="form-control" value="{{ $bajar->taka }}">
							@if($errors->has('taka'))
							<span style="color: blue; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('taka') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label for="">ছবি</label>
							<input type="file" name="image" id="image" data-default-file="{{ url('upload/images', $bajar->image) }}" class="form-control">
							@if($errors->has('image'))
							<span style="color: blue; padding: .1rem .3rem; border-radius: 5px; background-color:black;">{{ $errors->first('image') }}</span>
							@endif
						</div>
						<div class="form-action">
							<button type="submit" class="btn btn-success btn-block">জমা করুণ</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /# row -->
@endsection