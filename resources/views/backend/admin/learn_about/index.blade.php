@extends('layouts.admin')
@section('title', 'Banner List')
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
                  <th>Header</th>
                  <th>Title</th>
                  <th>Content</th>
                  <th>Quality1</th>
                  <th>Quality2</th>
                  <th>Quality3</th>
                  <th>Quality4</th>
                  <th>Quality5</th>
                  <th>Quality6</th>
                  <th>Quality7</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($learn_abouts as $learn_about)
                <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $learn_about->header }}</td>
                  <td>{{ $learn_about->title }}</td>
                  <td>{!! $learn_about->content !!}</td>
                  <td>{{ $learn_about->quality1 }}</td>
                  <td>{{ $learn_about->quality2 }}</td>
                  <td>{{ $learn_about->quality3 }}</td>
                  <td>{{ $learn_about->quality4 }}</td>
                  <td>{{ $learn_about->quality5 }}</td>
                  <td>{{ $learn_about->quality6 }}</td>
                  <td>{{ $learn_about->quality7 }}</td>
                  <td>
                    <a href="{{ route('learn_about.edit', $learn_about->id) }}" class="btn btn-primary">Edit</a>
                    <a href="javascript:void(0)" data-url="{{ route('learn_about.destroy', $learn_about->id) }}" class="btn btn-danger delete">Delete</a>
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
          <h2 class="text-center">Do You Want To Delete</h2>
          <h2 class="text-center mt-2">Your Learn About Contents?</h2>
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