@extends('layouts.home')

@push('title')
    CatatanKu
@endpush

@section('content')
    <div class="home-page mt-4">
        <div class="group mt-5">
            <div class="container">
                <h2 class="title mb-4" data-aos="fade-up">
                    {{ $name->name }}
                </h2>
                <div class="row">
                    @forelse ($articles as $article)
                        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="card">
                                <img src="{{ Storage::url($article->image_poster) }}" class="card-img-top" alt="...">
                                <div class="date">{{ $article->category->name }} - {{ date('M, d Y', strtotime($article->created_at)) }}</div>
                                <h5 class="title card-title mt-1 mb-3 w-75">{{ $article->title }}</h5>
                                <a href="{{ route('detail', $article->slug) }}" class="">Read Article</a>
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
