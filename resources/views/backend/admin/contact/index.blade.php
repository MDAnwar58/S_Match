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
                  <th>Name</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($contacts as $contact)
                <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $contact->name }}</td>
                  <td>{{ $contact->email }}</td>
                  <td>{{ $contact->sub }}</td>
                  <td>
                    @if($contact->role == 0)
                    <span class="badge-new">New</span>
                    @else
                    <span class="badge-old">Read</span>
                    @endif
                  </td>
                  <td>
                    <a href="{{ route('support.user.show', $contact->id) }}" class="btn btn-primary">View</a>
                    <a href="javascript:void(0)" data-url="{{ route('support.user.destroy', $contact->id) }}" class="btn btn-danger delete">Delete</a>
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
          <h2 class="text-center mt-2">This Report?</h2>
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