@extends('layouts.admin')
@section('title', 'Section Info List')
@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-11 col-lg-10 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="responsive-table">
            <table class="table">
              <thead>
                <tr class="fs-5" style="color: black; font-family: 'Poppins', sans-serif;">
                  <th>#</th>
                  <th style="width: 10%;">Title</th>
                  <th style="width: 10%;">Sit Price</th>
                  <th style="width: 10%;">Total Sit</th>
                  <th>Content</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
               @foreach($sections as $section)
               <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $section->title }}</td>
                <td>{{ $section->price }}</td>
                <td>{{ $section->stablist_charge }}</td>
                <td>{!! $section->content !!}</td>
                <td>
                  <img src="{{ url('upload/images', $section->image) }}" style="width: 100px;" alt="">
                </td>
                <td>
                 <a href="{{ route('section.edit', $section->id) }}" class="btn btn-primary">Edit</a>
                 <a href="javascript:void(0)" data-url="{{ route('section.destroy', $section->id) }}" class="btn btn-danger delete">Delete</a>
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
          <h2 class="text-center mt-2">To Delete Your Section?</h2>
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