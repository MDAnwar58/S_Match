@extends('layouts.sub_admin')
@section('title', 'মিলের জন্য সদস্যের নাম')
@section('content')

<!-- /# row -->
<section id="main-content">
	<div class="row justify-content-center">
		<div class="col-lg-4">
			<div class="card">
				<div class="card-header">
					<div class="card-title">
						<h4 class="text-center">মিলের জন্য সদস্যের নাম জমা করণ</h4>
					</div>
				</div>
				<div class="card-body p-4">
					<form action="{{ route('sub_admin.mile.store') }}" method="POST">
						@csrf
						<div class="form-group">
							<label for="" class="">সদস্য নাম</label>
							<select name="name" id="name" class="form-control">
								<option value="">(সদস্যের নাম নির্বাচন করণ)</option>
								@foreach($users as $user)
								<option value="{{ $user->name }}">{{ $user->name }}</option>
								@endforeach
							</select>
							@if($errors->has('name'))
							<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color: blue;">{{ $errors->first('name') }}</span>
							@endif
						</div>
						<div class="form-action">
							<button type="submit" class="btn btn-success">লিস্টে নাম জমা করণ</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /# row -->
@endsection