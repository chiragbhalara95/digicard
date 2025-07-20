@extends('frontView.layouts.app')

@section('content')
<div class="container py-5 mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                @if($blog->image)
                    <img src="{{ asset('public/images/' . $blog->image) }}"
                         alt="{{ $blog->title }}"
                         class="img-fluid rounded-top"
                         style="height: 250px; object-fit: cover; width: 100%;">
                @endif
                <div class="card-body">
                    <h1 class="card-title mb-4">{{ $blog->title }}</h1>
                    <div class="card-text">
                        {!! $blog->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
