@extends('layouts.admin')
@section('title', 'Gallery Category Added')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 grid-margin stretch-card">
			<div class="card">
				<div class="card-header">
					<h2 class="text-center pt-2">Category Added</h2>
				</div>
				<div class="card-body">
					<form action="{{ route('category.store') }}" method="POST">
						@csrf
						<div class="form-group">
							<label for="">Category</label>
							<input type="text" name="name" class="form-control" value="{{ old('name') }}">
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
		<div class="col-md-8 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<div class="responsive-table">
						<table class="table">
							<thead>
								<tr  class="fs-5" style="color: black; font-family: 'Poppins', sans-serif;">
									<td>#</td>
									<td>Main Category</td>
									<td>Category</td>
									<td>Slug</td>
									<td>Action</td>
								</tr>
							</thead>
							<tbody>
								@foreach($categories as $category)
								<tr>
									<td>{{ $loop->index + 1 }}</td>
									<td>{{ $category->allcategory['all_name'] }}</td>
									<td>{{ $category->name }}</td>
									<td>{{ $category->slug }}</td>
									<td>
										<a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary">Edit</a>
										<a href="javascript:void(0)" data-url="{{ route('category.destroy', $category->id) }}" class="btn btn-danger delete">Delete</a>
									</td>
								</tr>
								@endforeach
							</tbody>
							{{ $categories->links() }}
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="delete_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="delete_form" method="post" action="">
        @csrf
        @method('DELETE')
        <div class="modal-body">
          <h2 class="text-center">Do You Want</h2>
          <h2 class="text-center mt-2">To Delete Your Facility?</h2>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Confirm</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection


@section('script')

<script>
  $(".delete").on('click', function(event){
    var url = $(this).attr('data-url');
    $('#delete_form').attr('action', url);
    $('#delete_modal').modal('show');
  });
</script>

@endsection