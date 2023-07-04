@php
    $locale = app()->getLocale();
@endphp
@extends('layouts.webapp')
@push('meta_tags')
    @if(app()->getLocale() == 'en')
        @section('title', 'Home')
    @else
    @section('title', 'Home')
@endif
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


<!--    SLIDER SECTION-->
<section class="slider-section">
    <div class="container-fluid p-0">
        <div class="slider-main">
            <!--<div class="slick-controls">-->
            <!--  <i class="fa fa-angle-right next-btn" aria-hidden="true"></i>-->
            <!--  <i class="fa fa-angle-left prev-btn" aria-hidden="true"></i>-->
            <!--</div>-->
            <div class="slider-slide">
                <div class="bg-white">
                    <div class="slider-video">
                        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                            <source src="{{ asset('web-assets') }}/images/slider/video_slider.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--    SLIDER SECTION-->

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
                            <h5 class="card-title"> <a
                                    href="{{ route('projects.detail', $project->id) }}">{{ $project->title }}</a>
                            </h5>
                        </div>
                        <div class="card-footer bg-transparent">
                            <div class="d-flex text-center">
                                <div class="w-50 whatsappchat border border-success bg-success py-2 mx-2 rounded">
                                    <a href="https://wa.me/+8801322910431" class="text-white"> <i class="bi bi-whatsapp"></i>
                                        WhatsApp Chat
                                    </a>
                                </div>
                                <div class="w-50 callus bg-dark py-2 rounded text-dark">
                                    <a href="" class="propertyphone rounded-circle py-1 px-2 text-white"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="+8801322-910430"> <i
                                            class="bi bi-telephone"></i> Call Us </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-12 pt-4">
                <div class="text-center">
                    <a href="{{ route('projects') }}" class="see-all">VISIT ALL</a>
                </div>
            </div>
        </div>


    </div>
</section>
<!--    PROJECT SECTION END-->

<!--    INQUERY SECTION-->
<section class="query-section py-5">
    <div class="container">
        <div class="section-title text-center">
            <h3 class="after">GET IN TOUCH</h3>
        </div>

        <div class="mt-5">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Submit your data for more information</h4>

                            <form action="{{ route('bookingstore') }}" method="post">
                                @csrf
                                <div class="py-2">
                                    <label for="">Your Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" value="{{ old('name') }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="py-2">
                                    <label for="">Company Name <span class="text-danger">*</span></label>
                                    <input type="text" name="companyname" value="{{ old('companyname') }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="py-2">
                                    <label for="">Designation</label>
                                    <input type="text" name="designation" value="{{ old('designation') }}"
                                        class="form-control" placeholder="">
                                </div>
                                <div class="py-2">
                                    <label for="">Mobile Number <span class="text-danger">*</span></label>
                                    <input type="text" name="phone" value="{{ old('phone') }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="py-2">
                                    <label for="">Email <span class="text-danger">*</span></label>
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="py-2">
                                    <label for="">Address</label>
                                    <input type="text" name="address" value="{{ old('address') }}"
                                        class="form-control" placeholder="">
                                </div>
                                <div class="py-2">
                                    <label for="">Comment <span class="text-danger">*</span></label>
                                    <textarea name="comments" id="comments" rows="5" class="form-control" placeholder="message" required>{{ old('comments') }}</textarea>
                                </div>
                                <div class="mt-4 text-center">
                                    <button type="submit" class="see-all">SUBMIT</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-4 mt-md-0">
                    <div class="support-box">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sales Agent</h4>
                                <p>Phone Number : <i class="bi bi-telephone"></i> 01322-910430 </p>
                                <p>Whatsapp Number : <a href="https://wa.me/+8801322910431"> <i
                                            class="bi bi-whatsapp text-green"></i> Whatsapp Chat</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--    INQUERY SECTION END-->

<!--    PROJECT LAYOUT SECTION-->
<section class="project-layout-section py-5">
    <div class="container">
        <div class="section-title text-center">
            <h3 class="after">PROJECT LAYOUT</h3>
        </div>

        <div class="row mt-5">
            @foreach ($projects as $project)
                <div class="col-12 col-sm-6 col-md-4 pb-4">
                    <div class="pro-layout-box">
                        <h5> {{ $project->title }} </h5>
                        <div>
                            <img class="test-popup-link" src="{{ $project->urlOf('image') }}" alt="image">
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
<!--    PROJECT LAYOUT SECTION END-->

<!--    MESSAGE SECTION-->
<section class="message-section py-5 bg-white">
    <div class="container">
        <div class="section-title text-center">
            <h3 class="after">CHAIRMAN MESSAGE</h3>
        </div>

        <div class="message-box mt-5">
            <div class="row">
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="message-text">
                        <p class="lead">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but also
                            the leap into electronic typesetting, remaining essentially
                            unchanged. It was popularised in the 1960s with the release of
                            Letraset sheets containing Lorem Ipsum passages, and more
                            recently with desktop publishing software like Aldus PageMaker
                            including versions of Lorem Ipsum
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-4 d-none d-md-block">
                    <div class="message-img text-center">
                        <img src="{{ asset('web-assets') }}/images/photos/message.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--    MESSAGE SECTION END-->


<!--    CERTIFICATE SECTION-->
<section class="certificate-section py-5">
    <div class="container">
        <div class="section-title text-center">
            <h3 class="after">CERTIFICATIONS</h3>
        </div>
        <div class="row mt-5">
            @foreach ($certificates as $certificate)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-4">
                    <div class="certificate-box">
                        <img src="{{ $certificate->urlOf('image') }}" alt="certificate">
                        <h5>{{ $certificate->name }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!--    CERTIFICATE SECTION END-->


@endsection
