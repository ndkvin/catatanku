@extends('layouts.detail')

@push('title')
    Detail page
@endpush


@section('content')
    <div class="container page-detail">
        <div class="col-12 col-md-8 mx-auto">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                class="breadcrumb-nav" aria-label="breadcrumb" data-aos="fade-down">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-dark">Technology</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-dark">Article</a></li>
                    <li class="breadcrumb-item active" aria-current="page" class="text-dark">Detail</li>
                </ol>
            </nav>

            <h2 class="text-center title" data-aos="fade-down">{{ $article->title }}</h2>
            <div class="info text-center mt-3" data-aos="fade-down">
                <span class="category text-success">
                    {{ $article->category->name }},
                </span>
                <span class="date">
                  {{ date('M Y', strtotime($article->created_at)) }}
                </span>
            </div>
            <div class="text-center mt-1 writer" data-aos="fade-down">
                {{ $article->user->name }}
            </div>
            <div class="row" data-aos="fade-down">
                <div class="col mt-4">
                    <img src="{{ Storage::url($article->image_poster) }}" class="w-100 rounded-4" alt="">
                </div>
            </div>
            <div class="row mt-5" data-aos="fade-up">
                <div class="col text-black-50 description">
                    {!! $article->content !!}
                </div>
            </div>
            <div class="tags text-center mt-4 mb-2" data-aos="fade-up">
                <h4>Tags</h4>
                <span class="px-3 py-2 bg-secondary text-white rounded-3">Technology</span>
                <span class="px-3 py-2 bg-secondary text-white rounded-3">Computer</span>
            </div>
            <div class="row mt-4" data-aos="fade-up">
                <div class="col-4 mx-auto text-center">
                    <h4>Share</h4>
                    <div class="share">
                        <div class="row list-medsos">
                            <div class="col">
                                <a href="" target="”_blank”" class="text-dark">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </div>
                            <div class="col">
                                <a href="" target="”_blank”" class="text-dark">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                            </div>
                            <div class="col">
                                <a href="" target="”_blank”" class="text-dark">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </div>
                            <div class="col">
                                <a href="" target="”_blank”" class="text-dark">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
