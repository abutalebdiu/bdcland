@extends('welcome')
@section('title', __('menu.gallery'))
@push('meta_tags')
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
@push('css')
    <!--    VENOBOX popup-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/venobox/2.0.4/venobox.min.css"
        integrity="sha512-HFaR9dTfvVVIkca85XvaYOlbZqtyRp5f7cyfb3ycnQU60RM1qjmJKq7qZPLDI+nudOkFDuY5giiwQqfbP7M36g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@section('title', __('menu.gallery'))
@section('content')
    <!--    ABOUT US-->
    <section class="section py-5">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 text-center border-bottom mb-4">
                    <h4>{{ __('menu.gallery') }}</h4>
                </div>

                <div>
                    <div id="gallery">
                        <div class="row">
                            @foreach ($galleries as $gallery)
                                <div class="col-12 col-md-2">
                                    <a href="{{ asset($gallery->image) }}" class="gallery-photo " data-gall="gallery01">
                                        <img src="{{ asset($gallery->image) }}" class="img-responsive w-100">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    @foreach ($galleries as $gallery)
                        <div class="col-12 col-md-2">
                            <div class="gallery-image">
                                <img src="{{ asset($gallery->image) }}" alt="" class="w-100">
                            </div>
                        </div>
                    @endforeach
                </div> --}}
            </div>
        </div>
    </section>
    <!--    ABOUT US-->
@endsection

@push('js')
    <!--    venobox popup-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/2.0.4/venobox.min.js"
        integrity="sha512-KX9LF4BMXOG6qr9aGjFIPK1xysZAHWXpuZW6gnRi6oM+41qa8x4zaLPkckNxz5veoSWzmV5HZqPMMtknU+431g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        new VenoBox({
            selector: '.gallery-photo',
            numeration: true,
            infinigall: true,
            share: true,
            spinner: 'rotating-plane'
        });
    </script>
@endpush
