@extends('layouts.dashboard')

@push('title')
    Create Category Dashboard
@endpush

@section('content')
    <div class="container">
        <h3>
            Create Category
        </h3>
        <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="name" class="mb-3">Category Name</label>
                        <input type="text" class="form-control" id="name" name="name" required />
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <p>Image</p>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile01" name="image" required />
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
