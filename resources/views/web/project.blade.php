@extends('welcome')
@section('title', 'Projects')
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
  <!--    Magnific popup-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .project-box{
            position: relative;
            border-radius: 5px;
            overflow: hidden;
        }
        .project-box img{
            width: 100%;
        }
        .project-overlay{
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: #124b65c9;
            opacity: 0;
            transition: .3s;
        }
        .project-box:hover .project-overlay{
            opacity: 1;
        }
        .project-overlay h6{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            width: 80%;
            color: #ffffff;
            font-weight: 500;
            font-size: 16px;
            line-height: 24px;
            text-align: center;
        }
        .project-title{
            background: #ffffff;
            padding: 10px;
            width: 100%;
            display: block;
        }
        .project-title p{
            font-size: 18px;
            color: #000000;
            margin: 0;
            padding: 5px 0;

        }
        .mfp-title{
            padding-right: 0;
        }
        .project-section .section-title h4{
            color: #242424;
            font-size: 30px;
        }
    </style>
@endpush
@section('content')



    <!--    ABOUT US-->
    <section class="project-section py-5">
        <div class="container">
            <div class="section-title text-center">
                <h4>
                    @if(app()->getLocale() == "en")
                     {{ $projectype->name }}
                     @else
                    {{$projectype->name_bn}}
                    @endif   প্রকল্পের ফটো গ্যালারী  </h4>
            </div>
            <div class="project mt-5">
                <div class="row">
                    @foreach ($projects as $item)
                    <div class="col-12 col-sm-6 col-md-4 pb-4">
                        <div class="project-box">
                            <img src="{{asset($item->image)}}" alt="">

                            <a href="{{asset($item->image)}}" class="project-overlay test-popup-link"
                                title="
                                <div class='project-title'>
                                    <p>{{$item->title}} -</p>
                                    <p>অর্থবছর- <b> {{$item->year ? $item->year->name : ''}} </b>, বরাদ্ধ- <b> {{$item->budget}} </b>, খাত - <b> {{$item->project_type ? $item->project_type->name : ''}} </b> -</p>
                                    <p>{{$item->description}}</p>
                                </div>
                                ">
                                <h6>{{$item->title}}</h6>
                            </a>
                        </div>

                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!--    ABOUT US-->
@endsection

@push('js')

     <!--    Magnific popup-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <!--    BOOSTRAP-->

    <script>
         $('.test-popup-link').magnificPopup({
            type: 'image'
            // other options
        });
    </script>
@endpush
