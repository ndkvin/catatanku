@extends('layouts.dashboard')

@push('title')
    Article Home Dashboard
@endpush


@section('content')
    <div class="container dashboard-home">
        <div class="row">
            <div class="mt-3 col-12 mb-5">
                <h2>
                    Home Admin
                </h2>
            </div>
        </div>

        <div class="row card-list">
            @foreach ($articles as $article)
                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card bg-light">
                        <img src="{{ Storage::url($article->image_poster) }}" class="card-img-top">
                        <div class="date">{{ $article->category->name }} - {{ date('M, d Y', strtotime($article->created_at)) }}</div>
                        <h5 class="title card-title mt-1 mb-3 w-75">
                            {{ $article->title }}
                        </h5>
                        <a href="#" class="d-block">Read Article</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
