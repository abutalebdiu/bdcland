@extends('layouts.webapp')
@section('title', 'Blog')
@section('content')

    <!--    BLOG SECTION-->
    <section class="blog-section py-5">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="after">Blog</h2>
            </div>
            <div class="row mt-5">
                @foreach ($blogs as $blog)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-5">
                        <div class="blog-box d-flex align-content-between flex-wrap h-100">
                            <div class="w-100">
                                <img src="{{ $blog->urlOf('image') }}" alt="Blog Image" class="img-fluid">
                                <h6 class="mb-3"> {{ $blog->title }}</h6>
                            </div>
                            <a href="{{ route('blog.detail', $blog->id) }}">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--    BLOG SECTION END-->
@endsection
