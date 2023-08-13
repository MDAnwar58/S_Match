@extends('layouts.admin')
@section('title', 'ম্যাচের সদস্য')
@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-10 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <table class="table table-border">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
              <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                  @if($user->role == 1)
                  <a href="{{ route('admin.member.status', $user->id) }}" class="btn btn-success btn-sm">Sub Admin</a>
                  @elseif($user->role == 2)
                  <a href="{{ route('admin.member.status', $user->id) }}" class="btn btn-warning btn-sm">Member</a>
                  @elseif($user->role == 3)
                  <a href="{{ route('admin.member.status', $user->id) }}" class="btn btn-danger btn-sm">Admin</a>
                  @else
                  <a href="{{ route('admin.member.status', $user->id) }}" class="btn btn-warning btn-sm">Guest</a>
                  @endif
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

<!-- content-wrapper ends -->
@endsection