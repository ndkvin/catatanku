@extends('layouts.dashboard')

@push('title')
    Edit User Admin Dashboard
@endpush

@section('content')
    <div class="container">
        <h3>
            Edit User
        </h3>
        <form method="POST" action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data">
          @method('PUT')  
          @csrf
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="name" class="mb-3">User Name</label>
                        <input type="text" class="form-control" id="name" value="{{ $user->name }}"
                            name="name" required />
                    </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-group">
                      <label for="name" class="mb-3">Role</label>
                      <select class="form-select form-select-lg" aria-label="role" name="role">
                        <option value="USER" {{ $user->role == 'USER' ? 'selected' : '' }}>USER</option>
                        <option value="WRITER" {{ $user->role == 'WRITER' ? 'selected' : '' }}>WRITER</option>
                        <option value="ADMIN" {{ $user->role == 'ADMIN' ? 'selected' : '' }}>ADMIN</option>
                      </select>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-6">
                <button type="submit" class="w-50 mt-3 btn btn-dark">Submit</button>
            </div>
            </div>
        </form>
    </div>
@endsection
