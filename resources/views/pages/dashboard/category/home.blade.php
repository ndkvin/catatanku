@extends('layouts.dashboard')

@push('title')
    Category Home Dashboard
@endpush


@section('content')
    <div class="container">
      <a href="{{ route('category.create') }}" class="btn btn-dark"><i class="fa-solid fa-plus me-2"></i>Add Category</a>
      <div class="row">
        <div class="col">
          
        </div>
        <div class="col">
          
        </div>
      </div>
    </div>
@endsection
