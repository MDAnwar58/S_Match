@extends('layouts.admin')
@section('title', 'Banner List')
@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-8 grid-margin stretch-card">
      <div class="card">
        <div class="card-header">
          <h2>{{ $contact->sub }}</h2>
        </div>
        <div class="card-body">
          <p><span style="font-size: 18px; font-weight: bold;">Name:</span>  {{ $contact->name }}</p>
          <p><span style="font-size: 18px; font-weight: bold;">Email:</span>  {{ $contact->email }}</p>
          <p><span style="font-size: 18px; font-weight: bold;">User Supports:</span>  {{ $contact->msg }}</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-lg-4 col-md-4">
      <div class="card">
        <div class="card-header">
          <h4 class="text-center">Sibmit Your User Report's Replay</h4>
          <div class="row mt-3">
            <div class="col-lg-2 col-md-2 text-center mt-1 fs-4">Form:</div>
            <div class="col-lg-10 col-md-10">
              <input type="text" name="from_email" class="form-control">
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-lg-2 col-md-2 text-center mt-1 fs-4">To:</div>
            <div class="col-lg-10 col-md-10">
              <input type="text" name="to_email" class="form-control">
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-lg-2 col-md-2 text-center fs-4">Report:</div>
            <div class="col-lg-10 col-md-10">
              <textarea name="report" class="form-control" placeholder="Please Enter Your Report................." rows="10"></textarea>
            </div>
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