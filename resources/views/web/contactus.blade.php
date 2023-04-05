@extends('welcome')
@section('title', __('menu.contactus'))
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
    <style>
        .contact-section{
            background: #eeeeee;
        }
        .certificate-data {
                box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
                border-radius: 10px;
                padding: 20px;
                background: #ffffff;
                color: #000000;
                max-width: 500px;
                margin: 0 auto;
            }
            .certificate-data .form-control{
                box-shadow: none;
            }
            .certificate-data label{
                font-weight: 500;
                margin-bottom: 4px;
            }

    </style>
@endpush
@section('content')
    <!--    Contact US-->
    <section class="contact-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h4>{{ __('menu.contactus') }}</h4>
                </div>
                <div class="col-12 col-md-12 mt-4">
                    <div class="certificate-data">
                        <form action="{{ route('contactstore') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="py-3">
                                <div class="form-group ">
                                    <label for="">{{__('form.name')}}</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                </div>
                            </div>
                            <div class="py-3">
                                <div class="form-group ">
                                    <label for="">{{__('form.mobile')}}</label>
                                    <input type="text" name="mobile" class="form-control" value="{{ old('mobile') }}">
                                    <div class="text-danger">{{ $errors->first('mobile') }}</div>
                                </div>
                            </div>
                            <div class="py-3">
                                <div class="form-group ">
                                    <label for="">{{__('form.email')}}</label>
                                    <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                                    <div class="text-danger">{{ $errors->first('email') }}</div>
                                </div>
                            </div>
                            <div class="py-3">
                                <div class="form-group ">
                                    <label for="">{{__('form.subject')}}</label>
                                    <input type="text" name="subject" class="form-control" value="{{ old('subject') }}">
                                    <div class="text-danger">{{ $errors->first('subject') }}</div>
                                </div>
                            </div>
                            <div class="py-3">
                                <div class="form-group ">
                                    <label for="">{{__('form.message')}}</label>
                                    <textarea name="message" id="" class="form-control" rows="4"></textarea>
                                    <div class="text-danger">{{ $errors->first('message') }}</div>
                                </div>
                            </div>
                            <div class="py-3">
                                <div class="form-group text-center">
                                    <input type="submit" name="submit" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    Contact US-->
@endsection
