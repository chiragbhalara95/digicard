@extends('frontView.layouts.app')

@section('content')
<section id="intro" class="clearfix">
<div class="container py-5 mt-5">
    <h1 class="mb-4">Blog Posts</h1>

    <div class="row">
        @foreach($blogs as $blog)
            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm">
                    @if($blog->image)
                        <img src="{{ asset('public/images/' . $blog->image) }}"
                             alt="{{ $blog->title }}"
                             class="img-fluid rounded-top"
                             style="height: 180px; object-fit: cover; width: 100%;">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ route('blogs.show', $blog->slug) }}" class="text-decoration-none text-dark">
                                {{ $blog->title }}
                            </a>
                        </h5>
                        <p class="card-text">{{ $blog->excerpt }}</p>
                        <a href="{{ route('blogs.show', $blog->slug) }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $blogs->links('pagination::bootstrap-4') }}
    </div>
</div>
</section>
@endsection
