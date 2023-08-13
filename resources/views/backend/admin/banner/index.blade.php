@extends('layouts.admin')
@section('title', 'Banner List')
@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-8 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="responsive-table">
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Banner Title</th>
                  <th>Banner Sub Title</th>
                  <th>Banner Btn</th>
                  <th>Banner Image</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($banners as $banner)
                <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $banner->banner_title }}</td>
                  <td>{{ $banner->banner_sub_title }}</td>
                  <td>{{ $banner->banner_btn }}</td>
                  <td>
                    <img src="{{ url('upload/images', $banner->image) }}" alt="{{ $banner->banner_title }}" style="width: 100px;">
                  </td>
                  <td>
                    <a href="{{ route('banner.edit', $banner->id) }}" class="btn btn-primary">Edit</a>
                    <a href="javascript:void(0)" data-url="{{ route('banner.destroy', $banner->id) }}" class="btn btn-danger delete">Delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
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
          <h2 class="text-center">Do You Want To Delete</h2>
          <h2 class="text-center mt-2">Your Banner Content/Image?</h2>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Confirm</button>
        </div>
      </form>
    </div>
  </div>
</div>

@section('script')

<script>
  $(".delete").on('click', function(event){
    var url = $(this).attr('data-url');
    $('#delete_form').attr('action', url);
    $('#delete_modal').modal('show');
  });
</script>

@endsection