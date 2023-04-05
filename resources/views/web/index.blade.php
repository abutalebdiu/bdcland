@php
    $locale = app()->getLocale();
@endphp
@extends('layouts.webapp')
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


    <!--    SLIDER SECTION-->
    <section class="slider-section">
        <div class="container-fluid p-0">
            <div class="slider-main">
                <div class="slick-controls">
                  <i class="fa fa-angle-right next-btn" aria-hidden="true"></i>
                  <i class="fa fa-angle-left prev-btn" aria-hidden="true"></i>

                </div>
                <div class="slider-slide">
                    <div class="slider-img">
                        <img src="{{ asset('web-assets') }}/images/slider/1.png" alt="">
                    </div>
                    <div class="slider-img">
                        <img src="{{ asset('web-assets') }}/images/slider/2.jpg" alt="">
                    </div>
                    <div class="bg-white">
                        <div class="slider-video">
                            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                            <source src="{{ asset('web-assets') }}/images/slider/video.mp4" type="video/mp4">
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
                <div class="col-12 col-sm-6 col-md-4 pb-4">
                    <div class="project-box">
                        <img src="{{ asset('web-assets') }}/images/photos/project-1.png" alt="project">

                        <h4>My Project Name</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, harum.
                        </p>

                        <a href="#">Project Details <i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 pb-4">
                    <div class="project-box">
                        <img src="{{ asset('web-assets') }}/images/photos/project-2.png" alt="project">

                        <h4>My Project Name</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, harum.
                        </p>

                        <a href="#">Project Details <i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 pb-4">
                    <div class="project-box">
                        <img src="{{ asset('web-assets') }}/images/photos/project-3.png" alt="project">

                        <h4>My Project Name</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, harum.
                        </p>

                        <a href="#">Project Details <i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 pb-4">
                    <div class="project-box">
                        <img src="{{ asset('web-assets') }}/images/photos/project-1.png" alt="project">

                        <h4>My Project Name</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, harum.
                        </p>

                        <a href="#">Project Details <i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 pb-4">
                    <div class="project-box">
                        <img src="{{ asset('web-assets') }}/images/photos/project-2.png" alt="project">

                        <h4>My Project Name</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, harum.
                        </p>

                        <a href="#">Project Details <i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 pb-4">
                    <div class="project-box">
                        <img src="{{ asset('web-assets') }}/images/photos/project-3.png" alt="project">

                        <h4>My Project Name</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, harum.
                        </p>

                        <a href="#">Project Details <i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
                <div class="col-12 pt-4">
                    <div class="text-center">
                        <a href="#" class="see-all">VISIT ALL</a>
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

            <div class="query-box mt-5">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <div class="query-form">
                            <form action="#">
                                <div class="py-2">
                                    <label for="">Your Name</label>
                                    <input type="text" placeholder="john die">
                                </div>
                                <div class="py-2">
                                    <label for="">Mobile Number</label>
                                    <input type="text" placeholder="01*********">
                                </div>
                                <div class="py-2">
                                    <label for="">Email</label>
                                    <input type="email" placeholder="johndie@gmail.com">
                                </div>
                                <div class="py-2">
                                    <label for="">Quires</label>
                                    <textarea name="" id="" cols="30" rows="10" placeholder="message"></textarea>
                                </div>
                                <div class="mt-4 text-center">
                                    <button type="submit" class="see-all">SUBMIT</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mt-4 mt-md-0">
                        <div class="query-right">
                            <img src="{{ asset('web-assets') }}/images/photos/query.png" alt="query">
                            <h3>01322-910430</h3>
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
                <div class="col-12 col-sm-6 col-md-4 pb-4">
                    <div class="pro-layout-box">
                        <h5>Project Name</h5>

                        <div>
                            <img class="test-popup-link" src="{{ asset('web-assets') }}/images/photos/project-layout.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 pb-4">
                    <div class="pro-layout-box">
                        <h5>Project Name</h5>

                        <div>
                            <img class="test-popup-link"  src="{{ asset('web-assets') }}/images/photos/project-layout.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 pb-4">
                    <div class="pro-layout-box">
                        <h5>Project Name</h5>

                        <div>
                            <img class="test-popup-link"  src="{{ asset('web-assets') }}/images/photos/project-layout.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 pb-4">
                    <div class="pro-layout-box">
                        <h5>Project Name</h5>

                        <div>
                            <img class="test-popup-link" src="{{ asset('web-assets') }}/images/photos/project-layout.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 pb-4">
                    <div class="pro-layout-box">
                        <h5>Project Name</h5>

                        <div>
                            <img class="test-popup-link"  src="{{ asset('web-assets') }}/images/photos/project-layout.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 pb-4">
                    <div class="pro-layout-box">
                        <h5>Project Name</h5>

                        <div>
                            <img class="test-popup-link"  src="{{ asset('web-assets') }}/images/photos/project-layout.png" alt="image">
                        </div>
                    </div>
                </div>
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
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-4">
                    <div class="certificate-box">
                        <img src="{{ asset('web-assets') }}/images/photos/certificate.png" alt="certificate">

                        <h5>Certificate Name</h5>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-4">
                    <div class="certificate-box">
                        <img src="{{ asset('web-assets') }}/images/photos/certificate.png" alt="certificate">

                        <h5>Certificate Name</h5>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-4">
                    <div class="certificate-box">
                        <img src="{{ asset('web-assets') }}/images/photos/certificate.png" alt="certificate">

                        <h5>Certificate Name</h5>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-4">
                    <div class="certificate-box">
                        <img src="{{ asset('web-assets') }}/images/photos/certificate.png" alt="certificate">

                        <h5>Certificate Name</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    CERTIFICATE SECTION END-->




@endsection
