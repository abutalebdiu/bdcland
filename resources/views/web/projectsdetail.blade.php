@extends('layouts.webapp')
@section('title',$project->title)
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


    <!--    Project SECTION-->
    <section class="p-5">
        <div class="container">
            <div class="row bg-white">
                <div class="col-12 col-md-9 p-5">
                    <h4>{{ $project->title }}</h4>
                    <img src="{{ $project->urlOf('image') }}" alt="" class="w-75">

                    {!! $project->long_description !!}
                </div>
                <div class="col-12 col-md-3">
                    <div class="row">
                        <div class="col-12 pt-4">
                            <h4>Other Projects</h4>
                        </div>
                        @foreach ($projects as $projectdata)
                            <div class="col-12 m-2 py-4">
                                <img src="{{ $projectdata->urlOf('image') }}" alt="" class="w-100 py-3">
                                <h5>{{  $projectdata->title }}</h5>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--    Project SECTION END-->


@endsection
