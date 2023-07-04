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
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card w-100 propertybox">
                            <img src="{{ $project->urlOf('image') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"> <a href="{{ route('projects.detail',$project->id) }}">{{ $project->title }}</a>
                                </h5>
                            </div>
                            <div class="card-footer bg-transparent">
                               <div class="d-flex text-center">
                                    <div class="w-50 whatsappchat border border-success text-success py-2 mx-2 rounded"> 
                                    <a href="https://wa.me/+8801322910431"> <i class="bi bi-whatsapp text-green"></i>
                                        Whatsapp Chat 
                                    </a>
                                    </div>
                                    <div class="w-50 callus bg-dark py-2 rounded text-dark">
                                        <a href="" class="propertyphone rounded-circle py-1 px-2 text-white" data-bs-toggle="tooltip" data-bs-placement="bottom" title="+8801322-910430">  <i class="bi bi-telephone"></i> Call Us </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                 
            </div>
        </div>
    </section>
    <!--    PROJECT SECTION END-->


@endsection
