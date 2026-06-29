<!doctype html>
<html lang="en">
    <!--<< Header Area >>-->
    <meta
        http-equiv="content-type"
        content="text/html;charset=utf-8"
    />
    <head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta content="{{ !empty($pageGlobalData->setting) ? $pageGlobalData->setting->site_name: 'Landing Page' }}" name="description" />
        <meta content="Jolayemi David(skyhackeR)" name="author" />
        <!-- ======== Page title ============ -->
        <title>
            {{ !empty($pageGlobalData->setting) ? $pageGlobalData->setting->site_name : 'Welcome | ' . env('APP_NAME')
            }}
        </title>
        <!--<< Favcion >>-->
        <link
            rel="shortcut icon"
            type="image/x-icon"
            href="{{ !empty($pageGlobalData->setting) ? asset($pageGlobalData->setting->favicon) : null }}"
        />
        <!--<< Bootstrap min.css >>-->
        <link rel="stylesheet" href="{{ asset('frontAssets/css/bootstrap.min.css') }}" />
        <!--<< All Min Css >>-->
        <link rel="stylesheet" href="{{ asset('frontAssets/css/all.min.css') }}" />
        <!--<< Animate.css >>-->
        <link rel="stylesheet" href="{{ asset('frontAssets/css/animate.css') }}" />
        <!--<< Magnific Popup.css >>-->
        <link rel="stylesheet" href="{{ asset('frontAssets/css/magnific-popup.css') }}" />
        <!--<< MeanMenu.css >>-->
        <link rel="stylesheet" href="{{ asset('frontAssets/css/meanmenu.css') }}" />
        <!--<< Swiper Bundle.css >>-->
        <link rel="stylesheet" href="{{ asset('frontAssets/css/swiper-bundle.min.css') }}" />
        <!--<< Nice Select.css >>-->
        <link rel="stylesheet" href="{{ asset('frontAssets/css/nice-select.css') }}" />
        <!--<< Main.css >>-->
        <link rel="stylesheet" href="{{ asset('frontAssets/css/main.css') }}" />

        <!--<< Custom CSS >>-->
        <link href="{{ asset('frontAssets/css/sky.css') }}" rel="stylesheet" />


    </head>
    <body>
        <!-- Preloader Start -->
        {{-- <div id="preloader" class="preloader">
            <div class="animation-preloader">
                <div class="edu-preloader-icon">
                    <img src="frontAssets/img/preloader.gif" alt="img" />
                </div>
                <div class="txt-loading">
                    <span data-text-preloader="E" class="letters-loading"> E </span>
                    <span data-text-preloader="D" class="letters-loading"> D </span>
                    <span data-text-preloader="U" class="letters-loading"> U </span>
                    <span data-text-preloader="E" class="letters-loading"> E </span>
                    <span data-text-preloader="X" class="letters-loading"> X </span>
                </div>
                <p class="text-center">Loading</p>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- GT Back To Top Start -->
        <button id="back-top" class="back-to-top show">
            <i class="fa-regular fa-arrow-up"></i>
        </button>

        <!-- GT MouseCursor Start -->
        <div class="mouseCursor cursor-outer"></div>
        <div class="mouseCursor cursor-inner"></div>

        <!-- Offcanvas Area Start -->
        <div class="fix-area">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">

                        <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a href="{{ url('/') }}">
                                    @if(!empty($pageGlobalData->setting?->logo))
                                        <img
                                            src="{{ asset($pageGlobalData->setting->logo) }}"
                                            alt="{{ $pageGlobalData->setting?->site_name }}"
                                            class="offcanvas-logo"
                                        />
                                    @endif
                                </a>
                            </div>

                            <div class="offcanvas__close">
                                <button>
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>

                        <h3 class="offcanvas-title">
                            {{ $pageGlobalData->setting?->site_name }}
                        </h3>

                        <p>
                            {!! Str::limit(strip_tags($pageGlobalData->setting?->description), 120) !!}
                        </p>

                        {{-- Mobile menu generated automatically from desktop menu --}}
                        <div class="mobile-menu fix mt-3"></div>

                        <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>

                        <div class="offcanvas__contact">
                            <h3>Contact Information</h3>

                            <ul class="contact-list">

                                @if(!empty($pageGlobalData->setting?->contact_address))
                                    <li>
                                        <span>Address:</span>
                                        {!! $pageGlobalData->setting->contact_address !!}
                                    </li>
                                @endif

                                @if(!empty($pageGlobalData->setting?->contact_phone))
                                    <li>
                                        <span>Call Us:</span>
                                        <a href="tel:{{ preg_replace('/[^0-9+]/', '', $pageGlobalData->setting->contact_phone) }}">
                                            {{ $pageGlobalData->setting->contact_phone }}
                                        </a>
                                    </li>
                                @endif

                                @if(!empty($pageGlobalData->setting?->contact_email))
                                    <li>
                                        <span>Email:</span>
                                        <a href="mailto:{{ $pageGlobalData->setting->contact_email }}">
                                            {{ $pageGlobalData->setting->contact_email }}
                                        </a>
                                    </li>
                                @endif

                            </ul>
                        </div>

                        <a href="#" class="theme-btn">
                            Apply Now
                            <i class="fa-solid fa-arrow-up-right"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="offcanvas__overlay"></div>


        <!-- Header Top Section Start -->
        <div class="header-top-section">
            <div class="container-fluid">
                <div class="header-top-wrapper">

                    <ul>

                        @if(!empty($pageGlobalData->setting?->contact_phone))
                            <li>
                                <i class="fa-solid fa-phone-plus"></i>
                                <a href="tel:{{ preg_replace('/[^0-9+]/', '', $pageGlobalData->setting->contact_phone) }}">
                                    {{ $pageGlobalData->setting->contact_phone }}
                                </a>
                            </li>
                        @endif

                        @if(!empty($pageGlobalData->setting?->contact_email))
                            <li>
                                <i class="fa-solid fa-envelope"></i>
                                <a href="mailto:{{ $pageGlobalData->setting->contact_email }}">
                                    {{ $pageGlobalData->setting->contact_email }}
                                </a>
                            </li>
                        @endif

                        @if(!empty($pageGlobalData->setting?->contact_address))
                            <li>
                                <i class="fa-solid fa-location-dot"></i>
                                {{ strip_tags( $pageGlobalData->setting->contact_address) }}
                            </li>
                        @endif

                    </ul>

                    <div class="social-icon">

                        <a href="#" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <a href="#" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>

                        <a href="#" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>

                        <a href="#" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>

                    </div>

                </div>
            </div>
        </div>


        <!-- Header Section Start -->
        <header id="header-sticky" class="header-1">
    
            <div class="logo-shape">
                <img src="{{ asset('frontAssets/img/inner/logo-shape.png') }}" alt="shape">
            </div>

            <div class="container-fluid">
                <div class="mega-menu-wrapper">

                    <div class="header-main">

                        <div class="logo">
                            <a href="{{ url('/') }}">
                                @if(!empty($pageGlobalData->setting?->logo))
                                    <img
                                        src="{{ asset($pageGlobalData->setting->logo) }}"
                                        alt="{{ $pageGlobalData->setting?->site_name }}"
                                        class="site-logo"
                                    >
                                @endif
                            </a>
                        </div>

                        <div class="header-right-items">

                            <div class="mean__menu-wrapper">
                                <div class="main-menu">

                                    <nav id="mobile-menu">
                                        <ul>

                                            <li>
                                                <a href="{{ url('/') }}">Home</a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/about') }}">About Us</a>
                                            </li>

                                            <li class="has-dropdown">
                                                <a href="#">
                                                    Academics
                                                    <i class="fa-solid fa-chevron-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="#">Junior Secondary</a></li>
                                                    <li><a href="#">Senior Secondary</a></li>
                                                    <li><a href="#">Subjects Offered</a></li>
                                                    <li><a href="#">Facilities</a></li>
                                                </ul>
                                            </li>

                                            <li class="has-dropdown">
                                                <a href="#">
                                                    Admissions
                                                    <i class="fa-solid fa-chevron-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="#">Admission Process</a></li>
                                                    <li><a href="#">Requirements</a></li>
                                                    <li><a href="#">Apply Now</a></li>
                                                </ul>
                                            </li>

                                            <li class="has-dropdown">
                                                <a href="#">
                                                    Student Life
                                                    <i class="fa-solid fa-chevron-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="#">Boarding School</a></li>
                                                    <li><a href="#">Skill Acquisition</a></li>
                                                    <li><a href="#">Clubs & Societies</a></li>
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="{{ url('/gallery') }}">Gallery</a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/contact') }}">Contact Us</a>
                                            </li>

                                        </ul>
                                    </nav>

                                </div>
                            </div>

                            <div class="header-right d-flex justify-content-end align-items-center">

                                <a href="#" class="theme-btn">
                                    Apply Now
                                    <i class="fa-solid fa-arrow-up-right"></i>
                                </a>

                                <div class="header__hamburger d-xl-none my-auto">
                                    <div class="sidebar__toggle">
                                        <i class="fas fa-bars"></i>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </header>

        @yield('content')

        <footer class="bt-footer-section fix footer-bg-2 mt-0">
            <div class="container">
                <div class="bt-footer-wrapper style-2">
                    <div class="row justify-content-between">

                        {{-- About School --}}
                        <div class="col-xl-3 col-lg-4 col-md-8 wow fadeInUp" data-wow-delay=".2s">
                            <div class="bt-footer-widget-items">
                                <div class="bt-widget-head">
                                    <a href="{{ url('/home') }}" class="footer-logo">
                                        @if(!empty($pageGlobalData->setting?->logo))
                                            <img
                                                src="{{ asset($pageGlobalData->setting->logo) }}"
                                                alt="{{ $pageGlobalData->setting->site_name }}"
                                            />
                                        @else
                                            <h4>{{ $pageGlobalData->setting?->site_name }}</h4>
                                        @endif
                                    </a>
                                </div>

                                <div class="bt-footer-content">
                                    <p>
                                        {!! $pageGlobalData->setting?->description !!}
                                    </p>

                                    <div class="social-icon">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Useful Links --}}
                        <div class="col-xl-3 col-lg-4 col-md-4 wow fadeInUp" data-wow-delay=".4s">
                            <div class="bt-footer-widget-items ml-40">
                                <div class="bt-widget-head">
                                    <h3>Useful Links</h3>
                                </div>

                                <ul class="list-items">
                                    <li><a href="">About Us</a></li>
                                    <li><a href="">Admissions</a></li>
                                    <li><a href="">Academics</a></li>
                                    <li><a href="">Gallery</a></li>
                                    <li><a href="">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>

                        {{-- Quick Links --}}
                        <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".6s">
                            <div class="bt-footer-widget-items">
                                <div class="bt-widget-head">
                                    <h3>Quick Links</h3>
                                </div>

                                <ul class="list-items">
                                    <li><a href="">Home</a></li>
                                    <li><a href="">Our History</a></li>
                                    <li><a href="">Contact</a></li>
                                    <li><a href="#">School Life</a></li>
                                    <li><a href="#">News & Events</a></li>
                                </ul>
                            </div>
                        </div>

                        {{-- Contact Information --}}
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                            <div class="bt-footer-widget-items">
                                <div class="bt-widget-head">
                                    <h3>Contact Us</h3>
                                </div>

                                <ul class="contact-info">

                                    @if(!empty($pageGlobalData->setting?->contact_address))
                                        <li>
                                            {!! $pageGlobalData->setting->contact_address !!}
                                        </li>
                                    @endif

                                    @if(!empty($pageGlobalData->setting?->contact_email))
                                        <li>
                                            <a
                                                href="mailto:{{ $pageGlobalData->setting->contact_email }}"
                                                class="link"
                                            >
                                                {{ $pageGlobalData->setting->contact_email }}
                                            </a>
                                        </li>
                                    @endif

                                    @if(!empty($pageGlobalData->setting?->contact_phone))
                                        <li>
                                            <a href="tel:{{ preg_replace('/[^0-9+]/', '', $pageGlobalData->setting->contact_phone) }}">
                                                {{ $pageGlobalData->setting->contact_phone }}
                                            </a>
                                        </li>
                                    @endif

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="bt-footer-bottom style-2 footer-bg-2 wow fadeInUp" data-wow-delay=".9s">
                <div class="container">
                    <div class="bt-footer-bottom-wrapper justify-content-end">
                        <p class="text-color-2">
                            Copyright © {{ date('Y') }}
                            {{ $pageGlobalData->setting?->site_name }}
                            . All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>

            {{-- <div class="footer-name wow img-custom-anim-left">
                <h2>{{ $pageGlobalData->setting?->site_name }}</h2>
            </div> --}}
        </footer>

        <!--<< All JS Plugins >>-->
        <script src="{{ asset('frontAssets/js/jquery-3.7.1.min.js') }}"></script>
        <!--<< Viewport Js >>-->
        <script src="{{ asset('frontAssets/js/viewport.jquery.js') }}"></script>
        <!--<< Bootstrap Js >>-->
        <script src="{{ asset('frontAssets/js/bootstrap.bundle.min.js') }}"></script>
        <!--<< Nice Select Js >>-->
        <script src="{{ asset('frontAssets/js/jquery.nice-select.min.js') }}"></script>
        <!--<< Waypoints Js >>-->
        <script src="{{ asset('frontAssets/js/jquery.waypoints.js') }}"></script>
        <!--<< Counterup Js >>-->
        <script src="{{ asset('frontAssets/js/jquery.counterup.min.js') }}"></script>
        <!--<< Swiper Slider Js >>-->
        <script src="{{ asset('frontAssets/js/swiper-bundle.min.js') }}"></script>
        <!--<< MeanMenu Js >>-->
        <script src="{{ asset('frontAssets/js/jquery.meanmenu.min.js') }}"></script>
        <!--<< Parallaxie Js >>-->
        <script src="{{ asset('frontAssets/js/parallaxie.js') }}"></script>
        <!--<< Magnific Popup Js >>-->
        <script src="{{ asset('frontAssets/js/jquery.magnific-popup.min.js') }}"></script>
        <!--<< Wow Animation Js >>-->
        <script src="{{ asset('frontAssets/js/wow.min.js') }}"></script>
        <!--<< Main.js >>-->
        <script src="{{ asset('frontAssets/js/main.js') }}"></script>

        <script>

            document.addEventListener('DOMContentLoaded', function(){

                const toggleBtn = document.getElementById('historyToggle');
                const historyBox = document.getElementById('historyBox');

                toggleBtn.addEventListener('click', function(){

                    historyBox.classList.toggle('expanded');

                    if(historyBox.classList.contains('expanded')){
                        toggleBtn.innerHTML = 'Show Less <i class="fa-solid fa-chevron-up ms-2"></i>';
                    }else{
                        toggleBtn.innerHTML = 'Continue Reading <i class="fa-solid fa-chevron-down ms-2"></i>';
                    }

                });

            });

        </script>

        <script>
            new Swiper(".gemHeroSlider", {

                loop: true,

                effect: "fade",

                fadeEffect: {
                    crossFade: true
                },

                speed: 2000,

                autoplay: {
                    delay: 6000,
                    disableOnInteraction: false
                },

                pagination: {
                    el: ".swiper-pagination",
                    clickable: true
                }

            });
        </script>
    </body>

</html>
