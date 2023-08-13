@extends('layouts.admin')
@section('title', 'Logo Edit')
@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-header">
          <h2 class="text-center pt-2">Logo Updated</h2>
        </div>
        <div class="card-body">
          <form action="{{ route('logo.update', $logo->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @if($logo->file_logo)
            <div class="form-group">
              <label for="">File Logo</label>
              <input type="file" name="file_logo" class="form-control">
              @if($errors->has('file_logo'))
              <span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:crimson;">{{ $errors->first('file_logo') }}</span>
              @endif
            </div>
            @else
            <div class="form-group">
              <label for="">Text Logo</label>
              <input type="text" name="text_logo" class="form-control" value="{{ $logo->text_logo }}">
              @if($errors->has('text_logo'))
              <span style="color: white; padding: .1rem .3rem; border-radius: 5px; background-color:crimson;">{{ $errors->first('text_logo') }}</span>
              @endif
            </div>
            @endif
            <div class="form-group">
              <button type="submit" class="btn btn-success" style="color: white;">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection