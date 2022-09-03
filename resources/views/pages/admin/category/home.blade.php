@extends('layouts.dashboard')

@push('title')
    Category Home Dashboard
@endpush


@section('content')
    <div class="container">
        <a href="{{ route('category.create') }}" class="btn btn-dark"><i class="fa-solid fa-plus me-2"></i>Add Category</a>
        <div class="row">
            <div class="mt-3 col-12">
                <h2>
                    Category Dashboard
                </h2>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>
                            No
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Slug
                        </th>
                        <th>
                            Images
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                @php
                    $no = 1;
                @endphp
                <tbody class="table-group-divide">
                    @foreach ($categories as $category)
                        <tr>
                            <td>
                                {{ $no }}
                            </td>
                            <td>
                                {{ $category->name }}
                            </td>
                            <td>
                                {{ $category->slug }}
                            </td>
                            <td class="w-25">
                                <img class="w-100" src="{{ Storage::url($category->image) }}" alt="">
                            </td>
                            <td>
                                <a href="{{ route('category.edit', $category->id) }}" class="btn btn-dark"><i
                                        class="fa-solid fa-pen me-2"></i>Edit</a>

                                <form class="mt-2" action="{{ route('category.destroy', $category->id) }}" method="POST">
                                    {{ method_field('delete') }} {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @php
                            $no += 1;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
