<!DOCTYPE html>
<html lang="en" dir="auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')  -  {{ $setting->site_name }} </title>
    <link rel="icon" href="{{ $setting->urlOf('favicon') }}" type="image/gif" sizes="16x16">
    <!--    BOOSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <!--    BOOSTRAP ICONS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">
    <!--    NICE SELECT-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" />
    <!--    megnify popup-->
    <link rel="stylesheet" href="{{ asset('web-assets/css/magnific-popup.min.css') }}">
    <!--    GOOGLE FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!--    FONT AWSOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous">

    @stack('style')
    <!--    SLICK SLIDER-->
    <link rel="stylesheet" href="{{ asset('web-assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('web-assets/css/slick.css') }}">
    <!--    MAIN STYLE-->
    <link rel="stylesheet" href="{{ asset('web-assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('web-assets/css/responsive.css') }}">
</head>
<body>

    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "109962938498560");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v17.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

    <!--    HEADER SECTION-->
    <header class="header-section py-xl-2 d-flex align-items-center">
        <div class="container">
            <div class="head-content">
                <div class="d-flex align-items-end">
                    <div class="flex-shrink-1 mobile-head">
                        <div class="main-logo d-xl-block d-flex align-items-center justify-content-between d-block">
                            <a href="{{ route('website') }}">
                                <img src="{{ $setting->urlOf('logo') }}" alt="logo">
                            </a>
                            <span class="mobile-btn d-block d-xl-none" id="mobile-btn">
                                <i onclick="mobilemenu()" class="fa fa-bars"></i>
                            </span>
                        </div>
                    </div>
                    <div class="w-100 d-none d-xl-block">
                        <div class="heder-top-content d-flex align-items-center justify-content-between mb-2">
                            <span>স্বপ্ন বড় প্রাপ্তি বিশাল</span>
                            <span>A SISTER CONCERN OF BDG</span>
                        </div>
                        <div class="menubar">

                            <ul>
                                <li><a href="{{ route('website') }}"> HOME </a>
                                <li class="sub-btn">
                                    <a href="{{ route('projects') }}"> PROJECTS <i class="bi bi-chevron-down"></i></a>
                                    <div class="sub-menu">
                                        <ul>
                                            @foreach ($projecttypes as $type)
                                            <li class="child-btn">
                                                <a href="">
                                                    {{ $type->name }}
                                                    <i class="bi bi-chevron-right"></i>
                                                </a>
                                                <div class="child-menu">
                                                    @foreach ($type->subcategories as $subtype)
                                                    <a href="{{ route('projects') }}?project_type_id={{ $subtype->id }}">
                                                        {{  $subtype->name }}
                                                    </a>
                                                    @endforeach
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>

                                <li><a href="{{ route('web.booking') }}">BOOKING</a></li>
                                <li><a href="{{ route('aboutus') }}">ABOUT US</a></li>
                                <li><a href="{{ route('blogs') }}">BLOG</a></li>
                                <li class="menu-phone"><a href="#">{{ $setting->phone }}</a></li>
                                <li class="menu-search"><a href="javascript:void(0)">
                                        <i class="bi bi-search"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <!--        MOBILE MENU-->
    <div id="mobile-menu" class="mobile-menu">
        <!-- accordion-->
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="mobile-logo">
                <a href="#">
                    <img src="{{ $setting->urlOf('logo') }}" alt="mobile-logo">
                </a>

                <i class="bi bi-x-circle" onClick="mobilemenu()"></i>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="#">
                        <button class="accordion-button custom collapsed none" type="button">
                            HOME
                        </button>
                    </a>
                </h2>
            </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button custom collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#two" aria-expanded="false" aria-controls="flush-collapseTwo">

                        LAND PROJECT
                    </button>
                </h2>
                <div id="two" class="accordion-collapse collapse" aria-labelledby="two" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body custom">
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-chevron-right"></i>SOUTH TOWN</a>
                            </li>

                            <li><a href="#"><i class="fa fa-chevron-right"></i>EAST TOWN</a></li>
                            <li>
                                <a href="#"><i class="fa fa-chevron-right"></i> WEST TOWN </a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-chevron-right"></i> NORTH TOWN </a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-chevron-right"></i> NEW TOWN </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingAPARTMENT">
                    <button class="accordion-button custom collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#APARTMENT" aria-expanded="false" aria-controls="flush-collapseAPARTMENT">

                        APARTMENT
                    </button>
                </h2>
                <div id="APARTMENT" class="accordion-collapse collapse" aria-labelledby="APARTMENT" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body custom">
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-chevron-right"></i>SOUTH TOWN</a>
                            </li>

                            <li><a href="#"><i class="fa fa-chevron-right"></i>EAST TOWN</a></li>
                            <li>
                                <a href="#"><i class="fa fa-chevron-right"></i> WEST TOWN </a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-chevron-right"></i> NORTH TOWN </a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-chevron-right"></i> NEW TOWN </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
               <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="#">
                        <button class="accordion-button custom collapsed none" type="button">
                            BOOKING
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="#">
                        <button class="accordion-button custom collapsed none" type="button">
                            NEWS & EVENTS
                        </button>
                    </a>
                </h2>
            </div>
             <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="#">
                        <button class="accordion-button custom collapsed none" type="button">
                            PAYMENTS
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="#">
                        <button class="accordion-button custom collapsed none" type="button">
                            ABOUT US
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="#">
                        <button class="accordion-button custom collapsed none" type="button">
                            BLOG
                        </button>
                    </a>
                </h2>
            </div>




        </div>

    </div>
    <div class="mobile-screen mobile-click" onClick="mobilemenu()"></div>
    <!--   END MOBILE MENU-->

    <div class="social-box">
        <span>Share</span>
        <div class="social-box-social">
            <div>
                <a href="https://www.facebook.com/BangladeshDevelopmentCompany/" target="_blank">
                    <i class="fa fa-facebook" aria-hidden="true"></i>

                </a>
            </div>
            <div>
                <a href="#" target="_blank">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </div>
            <div>
                <a href="#" target="_blank">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
            </div>
            <div>
                <a href="#" target="_blank">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
            </div>
            <div>
                <a href="https://www.youtube.com/@bangladeshdevelopmentcompa982" target="_blank">
                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
            </div>
            <div>
                <a href="#" target="_blank">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>

    @yield('content')


    <!--    FOOTER-->
    <footer class="py-4">
        <div class="container pt-5">
            <div class="footer-main">

                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="footer-head">
                            <div class="logo">
                                <a href="#">
                                    <img src="{{ $setting->urlOf('logo') }}" alt="">
                                </a>
                            </div>

                            <p class="mt-4">
                                Lorem ipsum dolor sit amet consectetur. Iaculis lacus convallis tortor lorem nisl sit nunc volutpat quam.
                            </p>

                            <div class="footer-social mt-4">
                                <p>
                                    <b>Connect With Social Media</b>
                                </p>
                                <a href="#" target="_blank">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>

                                </a>
                                <a href="#" target="_blank">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </a>
                            </div>



                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mt-4 mt-sm-0">
                        <div class="footer-head">
                            <h6 class="bottom-border">CONTACT Us</h6>


                            <div class="footer-location">
                                <p>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                     {{ $setting->phone}}
                                </p>
                                @if($setting->altphone)
                                <p>
                                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                    {{ $setting->altphone }}
                                </p>
                                @endif
                                <p>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    {{ $setting->email}}
                                </p>
                                <p>
                                    <i class="bi bi-geo-alt"></i>
                                    {{ $setting->address}}
                                </p>
                            </div>
                        </div>


                    </div>

                    <div class="col-12 col-lg-5 mt-4 mt-lg-0">
                        <div class="footer-head">
                            <h6 class="bottom-border">IMPORTANT LINKS</h6>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <ul>
                                        <li>
                                            <a href="#">Privacy Policy</a>
                                        </li>
                                        <li>

                                            <a href="#">Trams & Condition</a>
                                        </li>
                                        <li>
                                            <a href="#">Faq</a>
                                        </li>
                                        <li>
                                            <a href="#">Projects</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('web.booking') }}">Booking</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <ul>
                                        <li>
                                            <a href="#">News & Events</a>
                                        </li>
                                        <li>

                                            <a href="#">Payments</a>
                                        </li>
                                        <li>
                                            <a href="#">About Us</a>
                                        </li>
                                        <li>
                                            <a href="#">Blogs</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
            <div class="copyright mt-5 pt-4 text-center">

                <p>
                    &copy; 2023 All Right Reserved BDG | MAGURA GROUP
                </p>

            </div>
        </div>
    </footer>
    <!--    FOOTER END-->



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--    BOOSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--    slick slider-->
    <script src="{{ asset('web-assets/js/main.js') }}"></script>
    <script src="{{ asset('web-assets/js/slick.min.js') }}"></script>


    <!--    Magnific popup-->
    <script src="{{ asset('web-assets/js/jquery.magnific-popup.min.js') }}"></script>


    <script>
        //        MOBILE MENU
        function mobileClick() {
            $("#mobile-menu").toggleClass('mobileAdd');
            $("#mobileOverlay").toggleClass('mobile-overlay');
        }
        //        MOBILE MENU END


            $('.slider-slide').slick({
                dots: true,
                infinite: true,
                speed: 300,
                autoplay: true,
                slidesToShow: 1,
                arrows: true,
                slidesToScroll: 1,
                nextArrow: $('.next-btn'),
                prevArrow: $('.prev-btn'),
            });


         $('.test-popup-link').magnificPopup({
            type: 'image'
            // other options
        });

    </script>

    @stack('js')

</body>

</html>
