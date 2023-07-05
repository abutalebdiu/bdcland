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

@push('style')
<link rel="stylesheet" href="{{ asset('web-assets/css/jquery.exzoom.css') }}">
 <style>
    .exzoom_img_box{
        /* width: 100% !important;
        height: 100% !important; */
    }
    .exzoom_img_ul_outer{
        /* width: 100% !important;
        height: 100% !important; */
    }
    .exzoom_img_ul{
        /* width: 100% !important;
        height: 100% !important; */
    }
    .exzoom_img_ul li{
        /* width: 100% !important; */
    }

    .exzoom_img_ul li img{
        /* width: 100% !important;
        margin-top: 0 ; */
    }
 </style>
@endpush

@section('content')


<!--    Project SECTION-->
<section class="p-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9">
                <div class="project-detail-box mx-1 bg-white p-3">
                    <h4 class="mt-2">{{ $project->title }}</h4>

                    <div class="w-50 m-auto">
                        <div class="exzoom hidden text-center" id="exzoom">
                            <div class="exzoom_img_box">
                                <ul class='exzoom_img_ul'>
                                    @foreach ($project->images as $image)
                                    <li><img src="{{ asset($image) }}" /></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="exzoom_nav"></div>
                            <p class="exzoom_btn">
                                <a href="javascript:void(0);" class="exzoom_prev_btn">
                                    < </a>
                                        <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
                            </p>
                        </div>
                    </div>

                    <div class="text-left mt-4 mb-2">
                        <p class="">
                            <span style="margin-right: 20px">Project Type : Land </span>
                            <span style="margin-right: 20px">Status :Ready</span>
                            <span>Plot Size : 2.5, 3.5, 5,7, 10 (কাঠা)</span>
                        </p>
                    </div>
                    <div>
                        <p><i class="fa fa-map-marker"></i> নারায়ণগঞ্জ, ঢাকা</p>
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
                                <div class="text-center">
                                    <img src="{{ asset('web-assets/images/photos/Customer Care.gif') }}" alt=""
                                        class="img-fluid">
                                </div>
                                <div class="d-flex text-center">
                                    <div class="w-50 whatsappchat border border-success bg-success py-2 mx-2 rounded"
                                        style="margin-left:25px !important ">
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
                                    <img src="{{ $projectdata->urlOf('image') }}" alt=""
                                        class="w-100 rounded">
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

@push('js')
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('web-assets/js/jquery.exzoom.js') }}"></script>
    <script type="text/javascript">
        $('.container').imagesLoaded(function() {
            $("#exzoom").exzoom({
                autoPlay: false,
            });
            $("#exzoom").removeClass('hidden')
        });
    </script>
@endpush

@endsection
