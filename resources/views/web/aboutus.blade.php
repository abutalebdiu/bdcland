@extends('welcome')
@push('meta_tags')
     @if(app()->getLocale() == "en") @section('title', 'About Us')   @else  @section('title', 'আমাদের সম্পর্কে') @endif
    <link rel="canonical" href="{{ URL::current() }}" />
    <meta name='description' content="মোগলাবাজার নামকরণ হয়েছে মঙ্গলা শব্দ হতে। এই মঙ্গলা শব্দের কথ্যরূপ নিয়েছে মংলা, যার লেখ্যরূপ মগলা বা মোগলা। জনশ্রুতি আছে এই বাজার স্থাপনের প্রথম দিকে হাট বসত মঙ্গলবারে। এই মঙ্গলবারের বাজার হতে মোগলাবাজার শব্দের উৎপত্তি। রেঙ্গা পরগনার জমিদারগন তথা দাউদপুর, তুরুকখলা ও নেগালের জমিদারগন সম্মিলিতভাবে এই বাজার পরগনাবাসীদের জন্য স্থাপন করেছিলেন। আয়তন: ১১ বর্গ কিমি। শিক্ষা প্রতিষ্ঠান: সরকারি প্রাথমিক বিদ্যালয় ৯টি, বেসরকারী প্রাথমিক বিদ্যালয় ২টি, কমিউনিটি প্রাথমিক বিদ্যালয় ১টি, উচ্চ বিদ্যালয় ৩টি, নিম্ন মাধ্যমিক বিদ্যালয় ১টি, মাদ্রাসা ৯টি" />
    <meta name='keywords' content="০৮নং মোগলাবাজার ইউনিয়ন পরিষদ,08 No Moglabazar Union Parishad, Moglabazar Union Parishad, moglabazarup, #moglabazarup, mogla bazar up, Mogla bazar Union Parishad" />
    <meta property="og:url" content="{{ URL::current() }}" />
    <meta property="og:type" content="{{ $setting->site_name }}" />
    <meta property="og:title" content="{{ $setting->site_name }}" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="{{ asset($setting->favicon) }}" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="{{ $setting->site_name }}" />
    <meta name="twitter:site" content="{{ $setting->site_name }}" />
    <meta name="distribution" content="Global">
    <meta name="Developed By" content="SOFTECH BD LTD" />
    <meta name="Developer" content="SOFTECH BD LTD Team" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="{{ $setting->site_name }}" />
@endpush

@section('content')
    <!--    ABOUT US-->
    <section class="about-section py-5">
        <div class="container">
            <div class="about-content row">
                <div class="about-content-box">
                    <h6 class="text-center mb-4">{{ $setting->site_name_bn }}</h6>
                    <img class="about-image" src="{{asset('web-assets/images/photo/about.png')}}" alt="">
                    <p>
                        {{ $setting->description_bn }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--    ABOUT US-->
@endsection
