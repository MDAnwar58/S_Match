@extends('layouts.sub_admin')
@section('title', 'হিসাবের জন্য প্রত্যেক নাম')
@section('content')


			<!-- /# row -->
			<section id="main-content">
				<div class="row justify-content-center">
					<div class="col-lg-4">
						<div class="card">
							<div class="card-header text-center">
								<div class="card-title">
									<h4>প্রত্যেক মাসের হিসাবের জন্য নাম জমা করু্ন</h4>
								</div>
							</div>
							<div class="card-body p-4">
								<form action="{{ route('month.store') }}" method="POST">
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
										<span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color: rgba(106, 131, 251);">{{ $errors->first('name') }}</span>
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
			<!-- /# row -->

@endsection