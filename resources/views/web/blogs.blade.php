@php
    $locale = app()->getLocale();
@endphp

@extends('welcome')
@if($locale == "en")
    @section('title', 'Homepage')
@else
    @section('title', 'হোমপেজ')
@endif
@section('content')
 
    <!--    BLOG SECTION-->
    <section class="blog-section py-5">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="after">News & Media</h2>
            </div>
            <div class="row mt-5">
                @foreach ($news as $newss)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-5">
                        <div class="blog-box d-flex align-content-between flex-wrap h-100">
                            <div class="w-100">
                                <img src="{{ $newss->urlOf('image') }}" alt="Blog Image">

                            <h6 class="mb-3"> {{ $newss->title }}</h6>
                            </div>
                            <a href="{{route('blog.details',$newss->id)}}">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--    BLOG SECTION END-->
@endsection
