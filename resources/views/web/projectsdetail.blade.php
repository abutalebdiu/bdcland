@extends('layouts.webapp')
@section('title', $project->title)
@push('meta_tags')
    @if (app()->getLocale() == 'en')
        @section('title', 'Home')
    @else
    @section('title', 'হোমপেজ')
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


<!--    Project SECTION-->
<section class="p-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9">
                <div class="project-detail-box mx-1 bg-white p-3">

                  {{-- <div id="view" class="">
                        <img src="{{ $project->urlOf('image') }}" alt="" class="bg-white p-2 rounded" />
                    </div>
                    <div id="thumbs">
                        <div id="nav-left-thumbs"> <i class="fa fa-angle-left"></i> </div>
                        <div id="pics-thumbs">
                            @foreach ($project->images as $image)
                                <img src="{{ asset($image) }}" alt="Nature1" />
                            @endforeach
                        </div>
                        <div id="nav-right-thumbs"><i class="fa fa-angle-right"></i></div>
                    </div> --}}

                    <h4 class="mt-2">{{ $project->title }}</h4>
                    <div class="text-center">
                        <img src="{{ $project->urlOf('image') }}" alt="" class="w-75">
                    </div>
                    <div class="text-left mt-4 mb-2">
                        <p class="">
                            <span style="margin-right: 20px">Project Type : Land </span>
                            <span style="margin-right: 20px">Status :Ready</span>
                            <span>Plot Size : 2.5, 3.5, 5,7, 10 (কাঠা)</span>
                        </p>
                    </div>
                    <div>
                        <p><i class="fa fa-map-marker"></i>  নারায়ণগঞ্জ, ঢাকা</p>
                    </div>

                    {!! $project->long_description !!}
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="project-detail-sidebar bg-white">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="project-contact py-2  border">
                                <div class="border-bottom  text-center">
                                    <h4>Contact Agent</h4>
                                </div>
                                <div class="d-flex text-center">
                                    <div class="w-50 whatsappchat border border-success bg-success py-2 mx-2 rounded" style="margin-left:25px !important ">
                                        <a href="https://wa.me/+8801322910431" class="text-white"> <i
                                                class="bi bi-whatsapp"></i>
                                            WhatsApp Chat
                                        </a>
                                    </div>
                                    <div class="callus bg-dark py-2 rounded text-dark">
                                        <a href="" class="propertyphone rounded-circle py-1 px-2 text-white"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="+8801322-910430">
                                            <i class="bi bi-telephone"></i> Call Us </a>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="{{ route('web.booking') }}" class="btn btn-primary mt-2 w-100"> <i
                                        class="fa fa-send"></i> Send Request</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="bg-secondary">
                                <h4 class="p-2 text-white">Other Projects</h4>
                            </div>
                        </div>
                        @foreach ($projects as $projectdata)
                            <div class="col-12">
                                <div class="otherproject border-bottom p-2">
                                    <img src="{{ $projectdata->urlOf('image') }}" alt="" class="w-100 rounded">
                                    <h5 class="p-2">{{ $projectdata->title }}</h5>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--    Project SECTION END-->


@endsection
