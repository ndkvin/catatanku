@extends('layouts.home')

@push('title')
    CatatanKu
@endpush

@section('content')
    <div class="home-page mt-4">
        <div class="headline" data-aos="fade-down">
            <div class="container">
                <h2 class="title mb-4">Headline</h2>
                @if ($headline)
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <img src="{{ Storage::url($headline->image_poster) }}" class="rounded-4 w-100" alt="article image">
                        </div>
                        <div class="col-12 col-md-6 side">
                            <div class="info">
                                {{ $headline->category->name }} - {{ date('M, d Y', strtotime($headline->created_at)) }}
                            </div>
                            <h2 class="title w-75 my-3">
                                {{ $headline->title }}
                            </h2>
                            <div class="summary w-75">
                                {{ substr($headline->content, 3, 300) }}...
                            </div>
                            <a href="{{ route('detail', $headline->slug) }}" class="d-block mt-2">Read article</a>
                        </div>
                    </div>
                @else
                <div class="row">
                  <div class="col">
                    DATA EMPTY
                  </div>
                </div>
                @endif
            </div>
        </div>
        <div class="group mt-5">
            <div class="container">
                <h2 class="title mb-4" data-aos="fade-up">
                    Trending
                </h2>
                <div class="row">
                    @forelse ($trendings as $trending)
                        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="card">
                                <img src="{{ Storage::url($trending->image_poster) }}" class="card-img-top" alt="...">
                                <div class="date">{{ $trending->category->name }} -
                                    {{ date('M, d Y', strtotime($trending->created_at)) }}</div>
                                <h5 class="title card-title mt-1 mb-3 w-75">{{ $trending->title }}</h5>
                                <a href="{{ route('detail', $trending->slug) }}" class="">Read Article</a>
                            </div>
                        </div>
                    @empty
                        <div class="col-6 col-md-4">
                            <h5>Data Empty</h5>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
        <div class="group mt-5">
            <div class="container">
                <h2 class="title mb-4" data-aos="fade-up">
                    Technology
                </h2>
                <div class="row">
                    @forelse ($technologys as $technology)
                        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="card">
                                <img src="{{ Storage::url($technology->image_poster) }}" class="card-img-top"
                                    alt="...">
                                <div class="date">{{ $technology->category->name }} -
                                    {{ date('M, d Y', strtotime($technology->created_at)) }}</div>
                                <h5 class="title card-title mt-1 mb-3 w-75">{{ $technology->title }}</h5>
                                <a href="{{ route('detail', $technology->slug) }}" class="">Read Article</a>
                            </div>
                        </div>
                    @empty
                        <div class="col-6 col-md-4">
                            <h5>Data Empty</h5>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
