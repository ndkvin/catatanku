@extends('layouts.admin')

@push('title')
    Edit Category Admin Dashboard
@endpush

@section('content')
    <div class="container">
        <h3>
            Edit Category
        </h3>
        <form method="POST" action="{{ route('admin.article.update', $article->id) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="name" class="mb-3">Title</label>
                        <input value="{{ $article->title }}" type="text" class="form-control" id="name"
                            name="title" required />
                    </div>
                </div>
                <div class="mt-2 mt-md-0 col-12 col-md-12 w-75">
                    <p>Poster Image</p>
                    <p>leave it empty if you don't want to change the picture</p>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile01" name="image_poster" />
                    </div>
                    <img src="{{ Storage::url($article->image_poster) }}" class="w-100" alt="">
                </div>
                <div class="mt-2 mt-md-0 col-12 col-md-6">
                    <p>Category</p>
                    <div class="input-group mb-3">
                        <select class="form-select form-select-lg" aria-label="role" name="category_id" required>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"  {{ $category->id == $article->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mt-2 mt-md-0 col-12">
                    <p>Content</p>
                    <div class="input-group mb-3">
                        <textarea class="w-100 form-control" name="content" id="editor" required>{{ $article->content }}</textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>

            </div>
        </form>
    </div>
@endsection

@push('script')
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
@endpush
