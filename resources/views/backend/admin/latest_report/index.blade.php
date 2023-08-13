@extends('layouts.admin')
@section('title', 'Latest Report List')
@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="responsive-table">
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Report Title</th>
                  <th>Slug</th>
                  <th>Report Content</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($latest_reports as $latest_report)
                <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $latest_report->title }}</td>
                  <td>{{ $latest_report->slug }}</td>
                  <td>{!! $latest_report->content !!}</td>
                  <td>
                    @if($latest_report->image)
                    <img src="{{ url('upload/images', $latest_report->image) }}" alt="{{ $latest_report->title }}" style="width: 100px;">
                    @endif
                  </td>
                  <td>
                    @if($latest_report->role == 0)
                    <a href="{{ route('latest_report.reportRole', $latest_report->id) }}" class="btn btn-secondary">Publish</a>
                    @else
                    <a href="{{ route('latest_report.reportRole', $latest_report->id) }}" class="btn btn-warning">Block</a>
                    @endif
                  </td>
                  <td>
                    <a href="{{ route('latest_report.edit', $latest_report->id) }}" class="btn btn-primary">Edit</a>
                    <a href="javascript:void(0)" data-url="{{ route('latest_report.destroy', $latest_report->id) }}" class="btn btn-danger delete">Delete</a>
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
          <h2 class="text-center mt-2">To Delete Your Report?</h2>
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