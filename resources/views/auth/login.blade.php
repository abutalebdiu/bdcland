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


    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4 my-5">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>User Login</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-group py-2">
                                  <label for="">Email address</label>
                                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address" value="{{ old('email') }}">
                                  <div class="text-danger">{{ $errors->first('email') }}</div>
                                </div>
                                <div class="form-group py-2">
                                  <label for="">Password</label>
                                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="{{ old('password') }}">
                                  <div class="text-danger">{{ $errors->first('password') }}</div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
