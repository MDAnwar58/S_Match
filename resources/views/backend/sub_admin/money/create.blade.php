@extends('layouts.sub_admin')
@section('title', 'টাকা জমা দেওয়া')
@section('content')

<!-- /# row -->
<div class="container">
	<section id="main-content">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="card">
					<div class="card-header text-center">
						<div class="card-title">
							<h4>টাকা জমা দিন</h4>
						</div>
					</div>
					<div class="card-body p-4">
						<form action="{{ route('money.store') }}" method="POST">
							@csrf
							<div class="form-group">
								<label for="">নাম</label>
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
							<div class="form-group">
								<label for="">টাকা</label>
								<input type="number" name="money" id="money" class="form-control">
								@if($errors->has('money'))
								<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color: blue;">{{ $errors->first('money') }}</span>
								@endif
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-success">জমা দিন</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!-- /# row -->

@endsection