@extends('layouts.webapp')
@section('title', 'Blog Details')
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
@section('content')



    <!--    BLOG DETAILS-->
    <section class="blog-section py-5" style="background: none;">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="after">{{$blog->title}}</h2>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8">
                      <div class="blog-left py-5">
                        <div class="blog-image">
                            <img src="{{asset($blog->image)}}" alt="Blog Photo">
                        </div>
                        <span class="blog-date"> {{$blog->created_at->format('d M Y')}} </span>
                        <h4 class="blog-details-head">
                            {{$blog->title}}
                        </h4>


                        <div class="blog-ditails py-3">
                            {!! $blog->description !!}
                        </div>


                        <div class="posted-blog d-sm-flex py-3 align-items-center">
                            <div>
                                <span>Posted by Admin</span>|
                            </div>
                            <div class="social-icons mt-4 mt-sm-0">
                                <span>Share :</span>
                                <a href="#">
                                   <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                   <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="blog-right sticky-blog-right my-5">
                        <div class="blog-search">
                            <form action="#">
                                <input type="search" placeholder="Search">
                            </form>
                        </div>
                        {{-- <div class="blog-category-box py-3 mt-4">
                            <h4 class="border-bottom">Category</h4>
                            <div class="py-2">
                                <a href="#">Ac Repair Tips
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                                <a href="#">Electrical Product Price
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                                <a href="#">Plumbing Material
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                                <a href="#">Plumbing Material
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                            </div>
                        </div> --}}

                        <div class="blog-sidbar-post mt-4">
                            <h3 class="border-bottom">Recent Post</h3>

                            @foreach ($recent_blogs as $item)
                                <div class="sidbar-blog-box d-flex py-2">
                                    <div>
                                        <img src="{{asset($item->image)}}" alt="Blog Photo">
                                    </div>
                                    <div class="content">
                                        <h6>
                                            {{$item->title}}
                                        </h6>
                                        <p>
                                            <span>Posted by Admin</span>
                                            <span>{{$item->created_at->diffForHumans()}}</span>
                                        </p>
                                    </div>
                                </div>
                            @endforeach


                        </div>

                        <div>
                            <div class="hr-icon pt-5">
                                <span>Follow Us:</span>
                                <a href="#">
                                    <img src="{{asset('web-assets')}}/images/icons/facebook-dark.png" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{asset('web-assets')}}/images/icons/twitter-dark.png" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{asset('web-assets')}}/images/icons/linkdin-dark.png" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{asset(asset('web-assets'))}}/images/icons/instragram-dark.png" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{asset('web-assets')}}/images/icons/youtube-dark.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    BLOG DETAILS END-->

@endsection
