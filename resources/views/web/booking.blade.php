@extends('layouts.webapp')
@section('title','Booking')
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


    <!--    INQUERY SECTION-->
    <section class="query-section py-5">
        <div class="container">
            <div class="section-title text-center">
                <h3 class="after">Booking</h3>
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
                                        <label for="">Your Name</label>
                                        <input type="text" name="name"  value="{{ old('name') }}" class="form-control"  placeholder="">
                                    </div>
                                    <div class="py-2">
                                        <label for="">Company Name</label>
                                        <input type="text" name="companyname"  value="{{ old('companyname') }}" class="form-control"  placeholder="">
                                    </div>
                                    <div class="py-2">
                                        <label for="">Designation</label>
                                        <input type="text" name="designation"  value="{{ old('designation') }}" class="form-control"  placeholder="">
                                    </div>
                                    <div class="py-2">
                                        <label for="">Mobile Number</label>
                                        <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="">
                                    </div>
                                    <div class="py-2">
                                        <label for="">Email</label>
                                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="">
                                    </div>
                                    <div class="py-2">
                                        <label for="">Address</label>
                                        <input type="text" name="address" value="{{ old('address') }}" class="form-control" placeholder="">
                                    </div>
                                    <div class="py-2">
                                        <label for="">Comment</label>
                                        <textarea name="comments" id="comments" rows="5" class="form-control" placeholder="message">{{ old('comments') }}</textarea>
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
                                     <img src="{{ asset('web-assets/images/photos/Customer Care.gif') }}" alt=""
                                     class="img-fluid">
                                     <p>Phone Number :      <i class="bi bi-telephone"></i> 01322-910430 </p>
                                     <p>Whatsapp Number :   <a href="https://wa.me/+8801322910431"> <i class="bi bi-whatsapp text-green"></i> Whatsapp Chat</a></p>
                                 </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    INQUERY SECTION END-->



@endsection
