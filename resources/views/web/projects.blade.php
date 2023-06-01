@extends('layouts.webapp')
@section('title','Projects')
@push('meta_tags')
     @if(app()->getLocale() == "en") @section('title', 'Home')   @else   @section('title', 'হোমপেজ')  @endif
    <link rel="canonical" href="{{ URL::current() }}" />
    <meta name='description' content="" />
    <meta name='keywords' content="" />
    <meta property="og:url" content="{{ URL::current() }}" />
    <meta property="og:type" content="{{ $setting->site_name }}" />
    <meta property="og:title" content="{{ $setting->site_name }}" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="{{ asset($setting->favicon) }}" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="{{ $setting->site_name }}" />
    <meta name="twitter:site" content="{{ $setting->site_name }}" />
    <meta name="distribution" content="Global">
    <meta name="Developed By" content="BATL" />
    <meta name="Developer" content="BATL Team" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="{{ $setting->site_name }}" />
@endpush
@section('content')


       <!--    PROJECT SECTION-->
       <section class="project-section py-5">
        <div class="container">
            <div class="section-title text-center">
                <h3 class="after">PROJECTS</h3>
            </div>
            <div class="row mt-5">
                @foreach ($projects as $project)
                    <div class="col-12 col-sm-6 col-md-4 pb-4">
                        <div class="project-box">
                            <img src="{{ $project->urlOf('image') }}" alt="project">

                            <h4>{{ $project->title }}</h4>
                            <p>
                                {!! $project->short_description !!}
                            </p>

                            <a href="{{ route('projects.detail',$project->id) }}">Project Details <i class="bi bi-arrow-right-short"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--    PROJECT SECTION END-->


@endsection
