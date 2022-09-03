@extends('layouts.dashboard')

@push('title')
    Create Category Dashboard
@endpush

@section('content')
    <div class="container">
        <h3>
            Edit Category
        </h3>
        <form method="POST" action="{{ route('category.update', $category->id) }}" enctype="multipart/form-data">
          @method('PUT')  
          @csrf
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="name" class="mb-3">Category Name</label>
                        <input type="text" class="form-control" id="name" value="{{ $category->name }}"
                            name="name" required />
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12 col-md-6 mt-3">
                    <p>Image</p>
                    <p>
                        leave it empty if you don't want to change the image
                    </p>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile01" name="image">
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="{{ Storage::url($category->image) }}" alt="">
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
