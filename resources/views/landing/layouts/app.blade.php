<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>
            {{ !empty($pageGlobalData->setting) ? $pageGlobalData->setting->site_name : 'Welcome | ' . env('APP_NAME')
            }}
        </title>
        <meta content="{{ env('APP_NAME') }} Dashboard" name="description" />
        <meta content="Jolayemi David(skyhackeR)" name="author" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Place favicon.ico in the root directory -->
        <link
            rel="shortcut icon"
            type="image/x-icon"
            href="{{ !empty($pageGlobalData->setting) ? asset($pageGlobalData->setting->favicon) : null }}"
        />

        <!-- CSS Here -->
        <link rel="stylesheet" href="{{ asset('frontAssets/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontAssets/css/font-awesome-pro.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontAssets/css/swiper-bundle.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontAssets/css/slick.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontAssets/css/magnific-popup.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontAssets/css/nice-select.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontAssets/css/custom-animation.css') }}" />

        <!-- Theme / Main CSS -->
        <link rel="stylesheet" href="{{ asset('frontAssets/css/spacing.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontAssets/css/main.css') }}" />
    </head>

    <body id="body" class="it-magic-cursor">
        <!-- preloader -->
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- preloader end  -->

        <div id="magic-cursor">
            <div id="ball"></div>
        </div>

        <!-- back-to-top-start  -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="far fa-angle-double-up"></i>
        </button>
        <!-- back-to-top-end  -->

        <!-- it-offcanvus-area-start -->
        <div class="it-offcanvas-area">
            <div class="itoffcanvas">
                <div class="itoffcanvas__close-btn">
                    <button class="close-btn"><i class="fal fa-times"></i></button>
                </div>
                <div class="itoffcanvas__logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('frontAssets/img/logo/logo-black.png') }}" alt="" />
                    </a>
                </div>
                <div class="itoffcanvas__text">
                    <p>
                        Suspendisse interdum consectetur libero id. Fermentum leo vel orci porta non. Euismod viverra
                        nibh cras pulvinar suspen.
                    </p>
                </div>
                <div class="it-menu-mobile d-xl-none"></div>
                <div class="itoffcanvas__info">
                    <h3 class="offcanva-title">Get In Touch</h3>
                    <div class="it-info-wrapper mb-20 d-flex align-items-center">
                        <div class="itoffcanvas__info-icon">
                            <a href="#"><i class="fal fa-envelope"></i></a>
                        </div>
                        <div class="itoffcanvas__info-address">
                            <span>Email</span>
                            <a href="maito:hello@yourmail.com">hello@yourmail.com</a>
                        </div>
                    </div>
                    <div class="it-info-wrapper mb-20 d-flex align-items-center">
                        <div class="itoffcanvas__info-icon">
                            <a href="#"><i class="fal fa-phone-alt"></i></a>
                        </div>
                        <div class="itoffcanvas__info-address">
                            <span>Phone</span>
                            <a href="tel:(00)45611227890">(00) 456 1122 7890</a>
                        </div>
                    </div>
                    <div class="it-info-wrapper mb-20 d-flex align-items-center">
                        <div class="itoffcanvas__info-icon">
                            <a href="#"><i class="fas fa-map-marker-alt"></i></a>
                        </div>
                        <div class="itoffcanvas__info-address">
                            <span>Location</span>
                            <a href="{{ asset('frontAssets/img/logo/logo-black.png') }}" target="_blank"
                                >Riverside 255, San Francisco, USA
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="body-overlay"></div>
        <!-- it-offcanvus-area-end -->

        {{-- <header class="it-header-height">
            <!-- header-top-area-start -->
            <div class="it-header-top-area black-bg it-header-top-ptb">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-5 col-md-4 col-sm-5">
                            <div
                                class="it-header-top-contact-wrap d-flex justify-content-center justify-content-sm-start align-items-center"
                            >
                                <ul>
                                    <li class="d-none d-lg-inline-block d-lg-inline-block">
                                        <div class="it-header-top-contact d-flex align-items-center">
                                            <span>
                                                <svg
                                                    width="18"
                                                    height="18"
                                                    viewBox="0 0 18 18"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        d="M9.74999 0.749977C9.74999 0.551065 9.82901 0.360299 9.96966 0.219647C10.1103 0.0789947 10.3011 -2.29774e-05 10.5 -2.29774e-05C12.4884 0.00216072 14.3948 0.793038 15.8009 2.19909C17.2069 3.60514 17.9978 5.51152 18 7.49998C18 7.69889 17.921 7.88966 17.7803 8.03031C17.6397 8.17096 17.4489 8.24998 17.25 8.24998C17.0511 8.24998 16.8603 8.17096 16.7197 8.03031C16.579 7.88966 16.5 7.69889 16.5 7.49998C16.4982 5.90923 15.8655 4.38414 14.7407 3.25931C13.6158 2.13448 12.0907 1.50176 10.5 1.49998C10.3011 1.49998 10.1103 1.42096 9.96966 1.28031C9.82901 1.13965 9.74999 0.948889 9.74999 0.749977ZM10.5 4.49998C11.2956 4.49998 12.0587 4.81605 12.6213 5.37866C13.1839 5.94127 13.5 6.70433 13.5 7.49998C13.5 7.69889 13.579 7.88966 13.7197 8.03031C13.8603 8.17096 14.0511 8.24998 14.25 8.24998C14.4489 8.24998 14.6397 8.17096 14.7803 8.03031C14.921 7.88966 15 7.69889 15 7.49998C14.9988 6.30687 14.5243 5.16297 13.6807 4.31931C12.837 3.47566 11.6931 3.00117 10.5 2.99998C10.3011 2.99998 10.1103 3.07899 9.96966 3.21965C9.82901 3.3603 9.74999 3.55106 9.74999 3.74998C9.74999 3.94889 9.82901 4.13965 9.96966 4.28031C10.1103 4.42096 10.3011 4.49998 10.5 4.49998ZM17.3197 12.5542C17.7544 12.9901 17.9984 13.5805 17.9984 14.196C17.9984 14.8115 17.7544 15.4019 17.3197 15.8377L16.6372 16.6245C10.4947 22.5052 -4.45276 7.56148 1.33724 1.39948L2.19974 0.649477C2.63607 0.226985 3.22119 -0.00673617 3.82852 -0.00112185C4.43585 0.00449248 5.01655 0.248991 5.44499 0.679477C5.46824 0.702727 6.85799 2.50798 6.85799 2.50798C7.27036 2.9412 7.49992 3.51667 7.49894 4.11478C7.49796 4.71288 7.26653 5.28761 6.85274 5.71948L5.98424 6.81148C6.46488 7.97931 7.17154 9.04066 8.06362 9.93455C8.9557 10.8284 10.0156 11.5372 11.1825 12.0202L12.2812 11.1465C12.7132 10.733 13.2878 10.5018 13.8857 10.501C14.4836 10.5002 15.0589 10.7297 15.492 11.142C15.492 11.142 17.2965 12.531 17.3197 12.5542ZM16.2877 13.6447C16.2877 13.6447 14.493 12.264 14.4697 12.2407C14.3152 12.0875 14.1065 12.0016 13.8889 12.0016C13.6713 12.0016 13.4625 12.0875 13.308 12.2407C13.2877 12.2617 11.775 13.467 11.775 13.467C11.673 13.5481 11.5517 13.6013 11.423 13.6213C11.2942 13.6413 11.1625 13.6274 11.0407 13.581C9.52908 13.0182 8.15604 12.137 7.01462 10.9973C5.87319 9.85754 4.99004 8.4858 4.42499 6.97498C4.37489 6.85157 4.35855 6.71704 4.37767 6.58523C4.39678 6.45342 4.45065 6.32907 4.53374 6.22498C4.53374 6.22498 5.73899 4.71148 5.75924 4.69198C5.91244 4.53747 5.9984 4.32869 5.9984 4.1111C5.9984 3.89351 5.91244 3.68474 5.75924 3.53023C5.73599 3.50773 4.35524 1.71148 4.35524 1.71148C4.19841 1.57086 3.99374 1.49555 3.78317 1.50099C3.57261 1.50643 3.3721 1.5922 3.22274 1.74073L2.36024 2.49073C-1.87126 7.57873 11.082 19.8135 15.5407 15.6L16.224 14.8125C16.3841 14.6642 16.4803 14.4594 16.4922 14.2415C16.5041 14.0236 16.4308 13.8096 16.2877 13.6447Z"
                                                        fill="#F8C62F"
                                                    />
                                                </svg>
                                            </span>
                                            <a class="border-line" href="tel:7055690123">(705) 569-0123</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="it-header-top-contact d-flex align-items-center">
                                            <span>
                                                <svg
                                                    width="18"
                                                    height="18"
                                                    viewBox="0 0 18 18"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        d="M14.25 0.75H3.75C2.7558 0.751191 1.80267 1.14666 1.09966 1.84966C0.396661 2.55267 0.00119089 3.5058 0 4.5L0 13.5C0.00119089 14.4942 0.396661 15.4473 1.09966 16.1503C1.80267 16.8533 2.7558 17.2488 3.75 17.25H14.25C15.2442 17.2488 16.1973 16.8533 16.9003 16.1503C17.6033 15.4473 17.9988 14.4942 18 13.5V4.5C17.9988 3.5058 17.6033 2.55267 16.9003 1.84966C16.1973 1.14666 15.2442 0.751191 14.25 0.75ZM3.75 2.25H14.25C14.6991 2.25088 15.1376 2.38614 15.5092 2.63835C15.8808 2.89057 16.1684 3.24821 16.335 3.66525L10.5915 9.4095C10.1688 9.83049 9.59656 10.0669 9 10.0669C8.40344 10.0669 7.83118 9.83049 7.4085 9.4095L1.665 3.66525C1.83161 3.24821 2.11921 2.89057 2.49079 2.63835C2.86236 2.38614 3.30091 2.25088 3.75 2.25ZM14.25 15.75H3.75C3.15326 15.75 2.58097 15.5129 2.15901 15.091C1.73705 14.669 1.5 14.0967 1.5 13.5V5.625L6.348 10.47C7.05197 11.1722 8.00569 11.5665 9 11.5665C9.99431 11.5665 10.948 11.1722 11.652 10.47L16.5 5.625V13.5C16.5 14.0967 16.2629 14.669 15.841 15.091C15.419 15.5129 14.8467 15.75 14.25 15.75Z"
                                                        fill="#F8C62F"
                                                    />
                                                </svg>
                                            </span>
                                            <a class="border-line" href="mailto:info@intogmail.com"
                                                >info@ intogmail.com</a
                                            >
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 col-md-8 col-sm-7 d-none d-sm-block">
                            <div class="it-header-top-right-action d-flex align-items-center justify-content-end">
                                <div class="it-header-top-social-box align-items-center d-none d-md-flex">
                                    <span>Keep Up With Us On:</span>
                                    <a href="#">
                                        <svg
                                            width="12"
                                            height="16"
                                            viewBox="0 0 12 16"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M1.82727 6.83333C1.14284 6.83333 1 6.96763 1 7.61111V8.77778C1 9.42126 1.14284 9.55556 1.82727 9.55556H3.48182V14.2222C3.48182 14.8657 3.62466 15 4.30909 15H5.96364C6.64807 15 6.79091 14.8657 6.79091 14.2222V9.55556H8.64871C9.1678 9.55556 9.30155 9.4607 9.44416 8.99145L9.7987 7.82478C10.043 7.02095 9.89246 6.83333 9.00326 6.83333H6.79091V4.88889C6.79091 4.45933 7.16129 4.11111 7.61818 4.11111H9.97273C10.6572 4.11111 10.8 3.97681 10.8 3.33333V1.77778C10.8 1.1343 10.6572 1 9.97273 1H7.61818C5.33373 1 3.48182 2.74111 3.48182 4.88889V6.83333H1.82727Z"
                                                stroke="currentcolor"
                                                stroke-width="1.5"
                                                stroke-linejoin="round"
                                            />
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg
                                            width="14"
                                            height="13"
                                            viewBox="0 0 14 13"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M4.41177 0H0L5.23083 6.87316L0.334618 12.6389H2.59681L6.29998 8.27809L9.58823 12.5988H14L8.6172 5.52593L8.62673 5.53813L13.2614 0.0802914H10.9992L7.55741 4.13336L4.41177 0ZM2.43522 1.20371H3.80866L11.5648 11.395H10.1913L2.43522 1.20371Z"
                                                fill="currentcolor"
                                            />
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg
                                            width="16"
                                            height="16"
                                            viewBox="0 0 16 16"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M11.5 1H4.5C2.567 1 1 2.567 1 4.5V11.5C1 13.433 2.567 15 4.5 15H11.5C13.433 15 15 13.433 15 11.5V4.5C15 2.567 13.433 1 11.5 1Z"
                                                stroke="currentcolor"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path
                                                d="M10.7963 7.55921C10.8827 8.14178 10.7832 8.73676 10.5119 9.25952C10.2407 9.78228 9.81148 10.2062 9.28542 10.471C8.75935 10.7358 8.16319 10.8279 7.58173 10.7344C7.00027 10.6408 6.46311 10.3663 6.04667 9.94982C5.63022 9.53338 5.35569 8.99622 5.26213 8.41476C5.16856 7.8333 5.26073 7.23714 5.52551 6.71107C5.79029 6.18501 6.21421 5.75583 6.73697 5.48458C7.25973 5.21333 7.85471 5.11382 8.43728 5.20021C9.03152 5.28833 9.58167 5.56524 10.0065 5.99003C10.4313 6.41482 10.7082 6.96496 10.7963 7.55921Z"
                                                stroke="currentcolor"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path
                                                d="M11.8477 4.15039H11.8577"
                                                stroke="currentcolor"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg
                                            width="15"
                                            height="15"
                                            viewBox="0 0 15 15"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M10.2579 4.73828C11.5141 4.73828 12.7188 5.2373 13.6071 6.12555C14.4954 7.01381 14.9944 8.21854 14.9944 9.47473V15.0006H11.8367V9.47473C11.8367 9.056 11.6704 8.65442 11.3743 8.35834C11.0782 8.06225 10.6767 7.89591 10.2579 7.89591C9.8392 7.89591 9.43762 8.06225 9.14154 8.35834C8.84545 8.65442 8.67911 9.056 8.67911 9.47473V15.0006H5.52148V9.47473C5.52148 8.21854 6.0205 7.01381 6.90876 6.12555C7.79701 5.2373 9.00174 4.73828 10.2579 4.73828Z"
                                                fill="currentcolor"
                                            />
                                            <path d="M3.15763 5.52734H0V15.0002H3.15763V5.52734Z" fill="currentcolor" />
                                            <path
                                                d="M1.57881 3.15763C2.45077 3.15763 3.15763 2.45077 3.15763 1.57881C3.15763 0.706859 2.45077 0 1.57881 0C0.706859 0 0 0.706859 0 1.57881C0 2.45077 0.706859 3.15763 1.57881 3.15763Z"
                                                fill="currentcolor"
                                            />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-top-area-end -->

            <!-- header-area-start -->
            <div id="header-sticky" class="it-header-area it-header-ptb p-relative">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-5 col-6">
                            <div class="it-header-logo">
                                <a href="{{ url('/') }}">
                                    <img
                                        src="{{ !empty($pageGlobalData->setting) ? asset($pageGlobalData->setting->logo) : null }}"
                                        alt=""
                                    />
                                </a>
                            </div>
                        </div>
                        <div class="col-xxl-10 col-xl-10 col-lg-8 col-md-7 col-6">
                            <div class="it-header-menu it-header-dropdown">
                                <nav class="it-menu-content">
                                    <ul>
                                        <li class="has-dropdown p-static">
                                            <a href="{{ url('/') }}">Home</a>
                                            <div class="it-submenu submenu has-home-img">
                                                <div class="it-homemenu-wrapper">
                                                    <div
                                                        class="row gx-6 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-5"
                                                    >
                                                        <div class="col home-img mb-20">
                                                            <div class="home-img-thumb home-img-overly mb-15">
                                                                <a href="index.html"
                                                                    ><img
                                                                        src="{{ asset('frontAssets/img/menu/home-1.jpg') }}"
                                                                        alt=""
                                                                /></a>
                                                            </div>
                                                            <div class="home-img-content text-center">
                                                                <h4 class="home-img-title">
                                                                    <a href="index.html">General Education</a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="has-dropdown p-static">
                                            <a href="#">Pages</a>
                                            <div class="it-submenu submenu it-megamenu-wrap">
                                                <div class="row gx-50">
                                                    <div class="col-xl-3">
                                                        <div class="it-megamenu-item">
                                                            <h4 class="it-megamenu-title">About</h4>
                                                            <ul>
                                                                <li><a href="about-us-v1.html">Learning Vision</a></li>
                                                                <li>
                                                                    <a href="about-us-v5.html">Fitness Philosophy</a>
                                                                </li>
                                                                <li>
                                                                    <a href="about-us-v4.html">Path of Knowledge</a>
                                                                </li>
                                                                <li><a href="about-us-v3.html">Wellness Journey</a></li>
                                                                <li><a href="about-us-v2.html">Culinary Story</a></li>
                                                                <li><a href="team.html">Instructor</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3">
                                                        <div class="it-megamenu-item">
                                                            <h4 class="it-megamenu-title">Inner Pages</h4>
                                                            <ul>
                                                                <li><a href="career.html">Career</a></li>
                                                                <li>
                                                                    <a href="career-details.html">Career Details</a>
                                                                </li>
                                                                <li><a href="event-grid.html">Event Grid</a></li>
                                                                <li><a href="event-list.html">Event List</a></li>
                                                                <li><a href="event-details.html">Event Details</a></li>
                                                                <li>
                                                                    <a href="team-details.html">Instructor Details</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3">
                                                        <div class="it-megamenu-item">
                                                            <h4 class="it-megamenu-title">Inner Pages</h4>
                                                            <ul>
                                                                <li><a href="price.html">Price</a></li>
                                                                <li><a href="faq.html">Faq</a></li>
                                                                <li>
                                                                    <a href="privacy-policy.html">Privacy Policy</a>
                                                                </li>
                                                                <li><a href="404.html">error</a></li>
                                                                <li><a href="zoom-metting.html">Zoom Metting</a></li>
                                                                <li><a href="sign-in.html">Sign In</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3">
                                                        <div class="it-megamenu-item">
                                                            <h4 class="it-megamenu-title">Shop Pages</h4>
                                                            <ul>
                                                                <li><a href="shop.html">Shop</a></li>
                                                                <li><a href="shop-list.html">Shop List</a></li>
                                                                <li><a href="shop-details.html">Shop Details</a></li>
                                                                <li><a href="cart.html">Cart</a></li>
                                                                <li><a href="checkout.html">Checkout</a></li>
                                                                <li><a href="sign-up.html">Sign Up</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="has-dropdown p-static">
                                            <a href="courses-v1.html">Courses</a>
                                            <div class="it-submenu submenu it-megamenu-wrap">
                                                <div class="row gx-50">
                                                    <div class="col-xl-3">
                                                        <div class="it-megamenu-item">
                                                            <h4 class="it-megamenu-title">Course Style</h4>
                                                            <ul>
                                                                <li><a href="courses-v1.html">Courses Style 01</a></li>
                                                                <li><a href="courses-v2.html">Courses Style 02</a></li>
                                                                <li><a href="courses-v3.html">Courses Style 03</a></li>
                                                                <li><a href="courses-v4.html">Courses Style 04</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3">
                                                        <div class="it-megamenu-item">
                                                            <h4 class="it-megamenu-title">Course Style</h4>
                                                            <ul>
                                                                <li><a href="courses-v5.html">Courses Style 05</a></li>
                                                                <li><a href="courses-v6.html">Courses Style 06</a></li>
                                                                <li><a href="courses-v7.html">Courses Style 06</a></li>
                                                                <li><a href="courses-v8.html">Courses Style 08</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3">
                                                        <div class="it-megamenu-item">
                                                            <h4 class="it-megamenu-title">Course Sidebar</h4>
                                                            <ul>
                                                                <li>
                                                                    <a href="courses-list-sidebar.html"
                                                                        >Courses List Sidebar</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a href="courses-open-filter.html"
                                                                        >Courses Open Filter</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a href="courses-with-filter.html"
                                                                        >Courses With Filter</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a href="courses-grid-sidebar.html"
                                                                        >Courses Grid Sidebar</a
                                                                    >
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3">
                                                        <div class="it-megamenu-item">
                                                            <h4 class="it-megamenu-title">Course Details</h4>
                                                            <ul>
                                                                <li>
                                                                    <a href="courses-details-v1.html"
                                                                        >Courses Details 01</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a href="courses-details-v2.html"
                                                                        >Courses Details 02</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a href="courses-details-v3.html"
                                                                        >Courses Details 03</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a href="courses-details-v4.html"
                                                                        >Courses Details 04</a
                                                                    >
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="blog-grid.html">Blog</a>
                                            <ul class="it-submenu submenu">
                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                <li><a href="blog-sidebar.html">Blog Standard</a></li>
                                                <li>
                                                    <a href="blog-details-left-sidebar.html"
                                                        >Blog Details Left Sidebar</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="blog-details-right-sidebar.html"
                                                        >Blog Details Right Sidebar</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="blog-details-without-sidebar.html"
                                                        >Blog Details No Sidebar</a
                                                    >
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="contact-me.html">Contact</a>
                                            <ul class="it-submenu submenu">
                                                <li><a href="contact-us.html">Contact Us</a></li>
                                                <li><a href="contact-me.html">Contact Me</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        
                        <div class="col-xxl-5 col-xl-5 col-lg-8 col-md-7 col-6">
                            <div class="it-header-right-action d-flex justify-content-end align-items-center">
                                <div class="it-header-search-wrap d-none d-lg-flex align-items-center">
                                    <div class="it-header-categorie p-relative d-flex align-items-center">
                                        <span>
                                            <svg
                                                width="19"
                                                height="19"
                                                viewBox="0 0 19 19"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <g clip-path="url(#clip0_432_179)">
                                                    <path
                                                        d="M16.4172 18.4062H12.3797C11.2813 18.4062 10.3906 17.5156 10.3906 16.4172V10.9844C10.3906 10.6578 10.6578 10.3906 10.9844 10.3906H16.4172C17.5156 10.3906 18.4062 11.2813 18.4062 12.3797V16.4172C18.4062 17.5156 17.5156 18.4062 16.4172 18.4062ZM11.5781 11.5781V16.4172C11.5781 16.8625 11.9344 17.2188 12.3797 17.2188H16.4172C16.8625 17.2188 17.2188 16.8625 17.2188 16.4172V12.3797C17.2188 11.9344 16.8625 11.5781 16.4172 11.5781H11.5781Z"
                                                        fill="#1F2432"
                                                    />
                                                    <path
                                                        d="M6.62031 18.4062H2.58281C1.48437 18.4062 0.59375 17.5156 0.59375 16.4172V12.3797C0.59375 11.2813 1.48437 10.3906 2.58281 10.3906H8.01562C8.34219 10.3906 8.60938 10.6578 8.60938 10.9844V16.4172C8.60938 17.5156 7.71875 18.4062 6.62031 18.4062ZM2.58281 11.5781C2.1375 11.5781 1.78125 11.9344 1.78125 12.3797V16.4172C1.78125 16.8625 2.1375 17.2188 2.58281 17.2188H6.62031C7.06562 17.2188 7.42188 16.8625 7.42188 16.4172V11.5781H2.58281Z"
                                                        fill="#1F2432"
                                                    />
                                                    <path
                                                        d="M16.4172 8.60938H10.9844C10.6578 8.60938 10.3906 8.34219 10.3906 8.01562V2.58281C10.3906 1.48437 11.2813 0.59375 12.3797 0.59375H16.4172C17.5156 0.59375 18.4062 1.48437 18.4062 2.58281V6.62031C18.4062 7.71875 17.5156 8.60938 16.4172 8.60938ZM11.5781 7.42188H16.4172C16.8625 7.42188 17.2188 7.06562 17.2188 6.62031V2.58281C17.2188 2.1375 16.8625 1.78125 16.4172 1.78125H12.3797C11.9344 1.78125 11.5781 2.1375 11.5781 2.58281V7.42188Z"
                                                        fill="#1F2432"
                                                    />
                                                    <path
                                                        d="M8.01562 8.60938H2.58281C1.48437 8.60938 0.59375 7.71875 0.59375 6.62031V2.58281C0.59375 1.48437 1.48437 0.59375 2.58281 0.59375H6.62031C7.71875 0.59375 8.60938 1.48437 8.60938 2.58281V8.01562C8.60938 8.34219 8.34219 8.60938 8.01562 8.60938ZM2.58281 1.78125C2.1375 1.78125 1.78125 2.1375 1.78125 2.58281V6.62031C1.78125 7.06562 2.1375 7.42188 2.58281 7.42188H7.42188V2.58281C7.42188 2.1375 7.06562 1.78125 6.62031 1.78125H2.58281Z"
                                                        fill="#1F2432"
                                                    />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_432_179">
                                                        <rect width="19" height="19" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                        <div class="contact__select">
                                            <select>
                                                <option>Categories</option>
                                                <option value="design">Design</option>
                                                <option value="development">Development</option>
                                                <option value="business">Business</option>
                                                <option value="data-science">Data Science</option>
                                                <option value="personal-development">Personal Development</option>
                                                <option value="photography">Photography</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="it-header-search">
                                        <input type="text" placeholder="Search Course.." />
                                        <span class="icon">
                                            <svg
                                                width="16"
                                                height="16"
                                                viewBox="0 0 16 16"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M0 7.27835C0 5.34801 0.766786 3.49673 2.13167 2.13178C3.49656 0.766824 5.34775 0 7.27799 0C9.20823 0 11.0594 0.766824 12.4243 2.13178C13.7892 3.49673 14.556 5.34801 14.556 7.27835C14.556 9.20868 13.7892 11.06 12.4243 12.4249C11.0594 13.7899 9.20823 14.5567 7.27799 14.5567C5.34775 14.5567 3.49656 13.7899 2.13167 12.4249C0.766786 11.06 0 9.20868 0 7.27835ZM7.27799 1.18027C5.66076 1.18027 4.10976 1.82275 2.96621 2.96636C1.82266 4.10997 1.18021 5.66104 1.18021 7.27835C1.18021 8.89565 1.82266 10.4467 2.96621 11.5903C4.10976 12.7339 5.66076 13.3764 7.27799 13.3764C8.89522 13.3764 10.4462 12.7339 11.5898 11.5903C12.7333 10.4467 13.3758 8.89565 13.3758 7.27835C13.3758 5.66104 12.7333 4.10997 11.5898 2.96636C10.4462 1.82275 8.89522 1.18027 7.27799 1.18027Z"
                                                    fill="#6C757D"
                                                />
                                                <path
                                                    d="M4.63509 4.2419C4.98187 3.89443 5.39385 3.61887 5.84739 3.43105C6.30093 3.24322 6.7871 3.14683 7.27799 3.14739C8.30949 3.14739 9.24501 3.566 9.92088 4.2419C10.0251 4.35377 10.0819 4.50173 10.0792 4.65462C10.0765 4.8075 10.0145 4.95337 9.90642 5.0615C9.7983 5.16962 9.65244 5.23155 9.49956 5.23425C9.34668 5.23695 9.19873 5.1802 9.08686 5.07596C8.84958 4.83812 8.5676 4.64956 8.25716 4.52114C7.94672 4.39271 7.61394 4.32696 7.27799 4.32766C6.57143 4.32766 5.93254 4.61329 5.4699 5.07674C5.35803 5.18099 5.21008 5.23774 5.0572 5.23504C4.90432 5.23234 4.75846 5.17041 4.65034 5.06228C4.54222 4.95416 4.48029 4.80829 4.4776 4.6554C4.4749 4.50252 4.53164 4.35456 4.63588 4.24269L4.63509 4.2419ZM11.6684 11.669C11.7232 11.6141 11.7883 11.5706 11.8599 11.5409C11.9315 11.5113 12.0083 11.496 12.0858 11.496C12.1633 11.496 12.2401 11.5113 12.3117 11.5409C12.3833 11.5706 12.4484 11.6141 12.5032 11.669L15.8416 15.0076C15.9459 15.1194 16.0026 15.2674 15.9999 15.4203C15.9972 15.5732 15.9353 15.719 15.8272 15.8272C15.719 15.9353 15.5732 15.9972 15.4203 15.9999C15.2674 16.0026 15.1195 15.9459 15.0076 15.8416L11.6692 12.5038C11.5587 12.3932 11.4966 12.2432 11.4966 12.0868C11.4966 11.9304 11.5587 11.7804 11.6692 11.6697L11.6684 11.669Z"
                                                    fill="#6C757D"
                                                />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <a class="it-header-cart d-none d-xxl-block" href="cart.html">
                                    <svg
                                        width="26"
                                        height="26"
                                        viewBox="0 0 26 26"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M20.0571 26H5.57143C2.50714 26 0 23.4929 0 20.4286V20.2429L0.557143 5.38571C0.65 2.32143 3.15714 0 6.12857 0H19.5C22.4714 0 24.9786 2.32143 25.0714 5.38571L25.6286 20.2429C25.7214 21.7286 25.1643 23.1214 24.1429 24.2357C23.1214 25.35 21.7286 26 20.2429 26C20.2429 26 20.15 26 20.0571 26ZM6.12857 1.85714C4.08571 1.85714 2.50714 3.43571 2.41429 5.38571L1.85714 20.4286C1.85714 22.4714 3.52857 24.1429 5.57143 24.1429H20.2429C21.2643 24.1429 22.1929 23.6786 22.8429 22.9357C23.4929 22.1929 23.8643 21.2643 23.8643 20.2429L23.3071 5.38571C23.2143 3.34286 21.6357 1.85714 19.5929 1.85714H6.12857Z"
                                            fill="#6C757D"
                                        />
                                        <path
                                            d="M12.8125 11.1428C9.19107 11.1428 6.3125 8.26423 6.3125 4.6428C6.3125 4.08566 6.68393 3.71423 7.24107 3.71423C7.79821 3.71423 8.16964 4.08566 8.16964 4.6428C8.16964 7.2428 10.2125 9.28566 12.8125 9.28566C15.4125 9.28566 17.4554 7.2428 17.4554 4.6428C17.4554 4.08566 17.8268 3.71423 18.3839 3.71423C18.9411 3.71423 19.3125 4.08566 19.3125 4.6428C19.3125 8.26423 16.4339 11.1428 12.8125 11.1428Z"
                                            fill="#6C757D"
                                        />
                                    </svg>
                                    <span>02</span>
                                </a>
                                <a
                                    href="courses-with-filter.html"
                                    class="it-btn-yellow border-radius-100 d-none d-md-flex"
                                >
                                    <span>
                                        <span class="text-1">Apply Now</span>
                                        <span class="text-2">Apply Now</span>
                                    </span>
                                    <i>
                                        <svg
                                            width="16"
                                            height="15"
                                            viewBox="0 0 16 15"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M15.0544 8.1364C15.4058 7.78492 15.4058 7.21508 15.0544 6.8636L9.3268 1.13604C8.97533 0.784567 8.40548 0.784567 8.05401 1.13604C7.70254 1.48751 7.70254 2.05736 8.05401 2.40883L13.1452 7.5L8.05401 12.5912C7.70254 12.9426 7.70254 13.5125 8.05401 13.864C8.40548 14.2154 8.97533 14.2154 9.3268 13.864L15.0544 8.1364ZM0.417969 7.5V8.4H14.418V7.5V6.6H0.417969V7.5Z"
                                                fill="currentcolor"
                                            />
                                        </svg>
                                    </i>
                                </a>
                                <div class="it-header-bar d-xl-none">
                                    <button class="it-menu-bar">
                                        <span>
                                            <i class="fa-light fa-bars-staggered"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <!-- header-area-end -->
        </header> --}}

        <header class="it-header-height">
            <!-- header-top-area-start -->
            <div class="it-header-top-area black-bg it-header-top-ptb">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-5 col-md-4 col-sm-5">
                            <div class="it-header-top-contact-wrap d-flex justify-content-center justify-content-sm-start align-items-center">
                                <ul>
                                    <li class="d-none d-lg-inline-block">
                                        <div class="it-header-top-contact d-flex align-items-center">
                                            <span>
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.74999 0.749977C9.74999 0.551065 9.82901 0.360299 9.96966 0.219647C10.1103 0.0789947 10.3011 -2.29774e-05 10.5 -2.29774e-05C12.4884 0.00216072 14.3948 0.793038 15.8009 2.19909C17.2069 3.60514 17.9978 5.51152 18 7.49998C18 7.69889 17.921 7.88966 17.7803 8.03031C17.6397 8.17096 17.4489 8.24998 17.25 8.24998C17.0511 8.24998 16.8603 8.17096 16.7197 8.03031C16.579 7.88966 16.5 7.69889 16.5 7.49998C16.4982 5.90923 15.8655 4.38414 14.7407 3.25931C13.6158 2.13448 12.0907 1.50176 10.5 1.49998C10.3011 1.49998 10.1103 1.42096 9.96966 1.28031C9.82901 1.13965 9.74999 0.948889 9.74999 0.749977ZM10.5 4.49998C11.2956 4.49998 12.0587 4.81605 12.6213 5.37866C13.1839 5.94127 13.5 6.70433 13.5 7.49998C13.5 7.69889 13.579 7.88966 13.7197 8.03031C13.8603 8.17096 14.0511 8.24998 14.25 8.24998C14.4489 8.24998 14.6397 8.17096 14.7803 8.03031C14.921 7.88966 15 7.69889 15 7.49998C14.9988 6.30687 14.5243 5.16297 13.6807 4.31931C12.837 3.47566 11.6931 3.00117 10.5 2.99998C10.3011 2.99998 10.1103 3.07899 9.96966 3.21965C9.82901 3.3603 9.74999 3.55106 9.74999 3.74998C9.74999 3.94889 9.82901 4.13965 9.96966 4.28031C10.1103 4.42096 10.3011 4.49998 10.5 4.49998ZM17.3197 12.5542C17.7544 12.9901 17.9984 13.5805 17.9984 14.196C17.9984 14.8115 17.7544 15.4019 17.3197 15.8377L16.6372 16.6245C10.4947 22.5052 -4.45276 7.56148 1.33724 1.39948L2.19974 0.649477C2.63607 0.226985 3.22119 -0.00673617 3.82852 -0.00112185C4.43585 0.00449248 5.01655 0.248991 5.44499 0.679477C5.46824 0.702727 6.85799 2.50798 6.85799 2.50798C7.27036 2.9412 7.49992 3.51667 7.49894 4.11478C7.49796 4.71288 7.26653 5.28761 6.85274 5.71948L5.98424 6.81148C6.46488 7.97931 7.17154 9.04066 8.06362 9.93455C8.9557 10.8284 10.0156 11.5372 11.1825 12.0202L12.2812 11.1465C12.7132 10.733 13.2878 10.5018 13.8857 10.501C14.4836 10.5002 15.0589 10.7297 15.492 11.142C15.492 11.142 17.2965 12.531 17.3197 12.5542ZM16.2877 13.6447C16.2877 13.6447 14.493 12.264 14.4697 12.2407C14.3152 12.0875 14.1065 12.0016 13.8889 12.0016C13.6713 12.0016 13.4625 12.0875 13.308 12.2407C13.2877 12.2617 11.775 13.467 11.775 13.467C11.673 13.5481 11.5517 13.6013 11.423 13.6213C11.2942 13.6413 11.1625 13.6274 11.0407 13.581C9.52908 13.0182 8.15604 12.137 7.01462 10.9973C5.87319 9.85754 4.99004 8.4858 4.42499 6.97498C4.37489 6.85157 4.35855 6.71704 4.37767 6.58523C4.39678 6.45342 4.45065 6.32907 4.53374 6.22498C4.53374 6.22498 5.73899 4.71148 5.75924 4.69198C5.91244 4.53747 5.9984 4.32869 5.9984 4.1111C5.9984 3.89351 5.91244 3.68474 5.75924 3.53023C5.73599 3.50773 4.35524 1.71148 4.35524 1.71148C4.19841 1.57086 3.99374 1.49555 3.78317 1.50099C3.57261 1.50643 3.3721 1.5922 3.22274 1.74073L2.36024 2.49073C-1.87126 7.57873 11.082 19.8135 15.5407 15.6L16.224 14.8125C16.3841 14.6642 16.4803 14.4594 16.4922 14.2415C16.5041 14.0236 16.4308 13.8096 16.2877 13.6447Z" fill="#F8C62F"/>
                                                </svg>
                                            </span>
                                            <a class="border-line" href="tel:7055690123">(705) 569-0123</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="it-header-top-contact d-flex align-items-center">
                                            <span>
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.25 0.75H3.75C2.7558 0.751191 1.80267 1.14666 1.09966 1.84966C0.396661 2.55267 0.00119089 3.5058 0 4.5L0 13.5C0.00119089 14.4942 0.396661 15.4473 1.09966 16.1503C1.80267 16.8533 2.7558 17.2488 3.75 17.25H14.25C15.2442 17.2488 16.1973 16.8533 16.9003 16.1503C17.6033 15.4473 17.9988 14.4942 18 13.5V4.5C17.9988 3.5058 17.6033 2.55267 16.9003 1.84966C16.1973 1.14666 15.2442 0.751191 14.25 0.75ZM3.75 2.25H14.25C14.6991 2.25088 15.1376 2.38614 15.5092 2.63835C15.8808 2.89057 16.1684 3.24821 16.335 3.66525L10.5915 9.4095C10.1688 9.83049 9.59656 10.0669 9 10.0669C8.40344 10.0669 7.83118 9.83049 7.4085 9.4095L1.665 3.66525C1.83161 3.24821 2.11921 2.89057 2.49079 2.63835C2.86236 2.38614 3.30091 2.25088 3.75 2.25ZM14.25 15.75H3.75C3.15326 15.75 2.58097 15.5129 2.15901 15.091C1.73705 14.669 1.5 14.0967 1.5 13.5V5.625L6.348 10.47C7.05197 11.1722 8.00569 11.5665 9 11.5665C9.99431 11.5665 10.948 11.1722 11.652 10.47L16.5 5.625V13.5C16.5 14.0967 16.2629 14.669 15.841 15.091C15.419 15.5129 14.8467 15.75 14.25 15.75Z" fill="#F8C62F"/>
                                                </svg>
                                            </span>
                                            <a class="border-line" href="mailto:info@intogmail.com">info@intogmail.com</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 col-md-8 col-sm-7 d-none d-sm-block">
                            <div class="it-header-top-right-action d-flex align-items-center justify-content-end">
                                <div class="it-header-top-social-box align-items-center d-none d-md-flex">
                                    <span>Keep Up With Us On:</span>
                                    <a href="#">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.82727 6.83333C1.14284 6.83333 1 6.96763 1 7.61111V8.77778C1 9.42126 1.14284 9.55556 1.82727 9.55556H3.48182V14.2222C3.48182 14.8657 3.62466 15 4.30909 15H5.96364C6.64807 15 6.79091 14.8657 6.79091 14.2222V9.55556H8.64871C9.1678 9.55556 9.30155 9.4607 9.44416 8.99145L9.7987 7.82478C10.043 7.02095 9.89246 6.83333 9.00326 6.83333H6.79091V4.88889C6.79091 4.45933 7.16129 4.11111 7.61818 4.11111H9.97273C10.6572 4.11111 10.8 3.97681 10.8 3.33333V1.77778C10.8 1.1343 10.6572 1 9.97273 1H7.61818C5.33373 1 3.48182 2.74111 3.48182 4.88889V6.83333H1.82727Z" stroke="currentcolor" stroke-width="1.5" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.41177 0H0L5.23083 6.87316L0.334618 12.6389H2.59681L6.29998 8.27809L9.58823 12.5988H14L8.6172 5.52593L8.62673 5.53813L13.2614 0.0802914H10.9992L7.55741 4.13336L4.41177 0ZM2.43522 1.20371H3.80866L11.5648 11.395H10.1913L2.43522 1.20371Z" fill="currentcolor"/>
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.5 1H4.5C2.567 1 1 2.567 1 4.5V11.5C1 13.433 2.567 15 4.5 15H11.5C13.433 15 15 13.433 15 11.5V4.5C15 2.567 13.433 1 11.5 1Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M10.7963 7.55921C10.8827 8.14178 10.7832 8.73676 10.5119 9.25952C10.2407 9.78228 9.81148 10.2062 9.28542 10.471C8.75935 10.7358 8.16319 10.8279 7.58173 10.7344C7.00027 10.6408 6.46311 10.3663 6.04667 9.94982C5.63022 9.53338 5.35569 8.99622 5.26213 8.41476C5.16856 7.8333 5.26073 7.23714 5.52551 6.71107C5.79029 6.18501 6.21421 5.75583 6.73697 5.48458C7.25973 5.21333 7.85471 5.11382 8.43728 5.20021C9.03152 5.28833 9.58167 5.56524 10.0065 5.99003C10.4313 6.41482 10.7082 6.96496 10.7963 7.55921Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M11.8477 4.15039H11.8577" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.2579 4.73828C11.5141 4.73828 12.7188 5.2373 13.6071 6.12555C14.4954 7.01381 14.9944 8.21854 14.9944 9.47473V15.0006H11.8367V9.47473C11.8367 9.056 11.6704 8.65442 11.3743 8.35834C11.0782 8.06225 10.6767 7.89591 10.2579 7.89591C9.8392 7.89591 9.43762 8.06225 9.14154 8.35834C8.84545 8.65442 8.67911 9.056 8.67911 9.47473V15.0006H5.52148V9.47473C5.52148 8.21854 6.0205 7.01381 6.90876 6.12555C7.79701 5.2373 9.00174 4.73828 10.2579 4.73828Z" fill="currentcolor"/>
                                            <path d="M3.15763 5.52734H0V15.0002H3.15763V5.52734Z" fill="currentcolor"/>
                                            <path d="M1.57881 3.15763C2.45077 3.15763 3.15763 2.45077 3.15763 1.57881C3.15763 0.706859 2.45077 0 1.57881 0C0.706859 0 0 0.706859 0 1.57881C0 2.45077 0.706859 3.15763 1.57881 3.15763Z" fill="currentcolor"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-top-area-end -->

            <!-- header-area-start -->
            <div id="header-sticky" class="it-header-area it-header-ptb p-relative">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                            <div class="it-header-logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{ !empty($pageGlobalData->setting) ? asset($pageGlobalData->setting->logo) : null }}" alt="Logo" />
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-8 col-6">
                            <div class="it-header-right-action d-flex justify-content-end align-items-center">
                                <div class="it-header-menu">
                                    <nav class="it-menu-content">
                                        <ul>
                                            <li><a href="{{ url('/') }}">Home</a></li>
                                            <li><a href="about-us-v1.html">Pages</a></li>
                                            <li><a href="courses-v1.html">Courses</a></li>
                                            <li><a href="blog-grid.html">Blog</a></li>
                                            <li><a href="contact-me.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="it-header-bar d-xl-none">
                                    <button class="it-menu-bar">
                                        <span>
                                            <i class="fa-light fa-bars-staggered"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-area-end -->
        </header>

        <main>
            @yield('content')

            <!-- feature-area-start -->
            <section class="it-feature-area">
                <div class="container">
                    <div class="it-feature-wrap z-index-2">
                        <div class="row gx-0">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="it-feature-item d-flex justify-content-center">
                                    <div class="it-feature-icon">
                                        <span>
                                            <svg
                                                width="30"
                                                height="30"
                                                viewBox="0 0 30 30"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M28.6625 19.5288C27.8162 18.8688 26.735 18.64 25.6938 18.9C23.12 19.545 18.31 20.625 15 20.625C11.69 20.625 6.88 19.5438 4.3075 18.9C3.26625 18.6413 2.18375 18.87 1.3375 19.5288C0.4875 20.1925 0 21.1913 0 22.2713V26.4788C0 27.5588 0.4875 28.5575 1.3375 29.2213C2.18375 29.8813 3.265 30.11 4.30625 29.85C6.88 29.205 11.69 28.125 15 28.125C18.31 28.125 23.12 29.2063 25.6925 29.85C25.975 29.92 26.2587 29.955 26.5413 29.955C27.3025 29.955 28.045 29.7025 28.6625 29.2213C29.5125 28.5575 30 27.5588 30 26.4788V22.2713C30 21.1913 29.5125 20.1925 28.6625 19.5288ZM13.75 25.6663C10.5288 25.8563 6.5925 26.7013 3.69875 27.425C3.30375 27.5238 3.0125 27.3575 2.875 27.25C2.63625 27.0638 2.5 26.7825 2.5 26.4788V22.2713C2.5 21.9675 2.63625 21.6863 2.875 21.5C3.0125 21.3913 3.30125 21.225 3.7 21.325C6.59375 22.0488 10.5288 22.8938 13.75 23.0838V25.6663ZM27.5 26.4788C27.5 26.7825 27.3638 27.0638 27.125 27.25C26.9863 27.3575 26.695 27.5238 26.3 27.425C23.4063 26.7013 19.4713 25.8563 16.25 25.6663V23.0838C19.4713 22.8938 23.4075 22.0488 26.3013 21.325C26.695 21.2238 26.9863 21.3913 27.125 21.5C27.3638 21.6863 27.5 21.9675 27.5 22.2713V26.4788ZM28.1538 4.19875L18.2763 0.573752C16.205 -0.184998 13.9262 -0.189998 11.8562 0.565002L1.8575 4.2025C0.73 4.61375 0.00125 5.67 0.0025 6.8925C0.0025 8.11625 0.7325 9.17125 1.86 9.58L6.25 11.1725V16.2488C6.25 16.9388 6.81 17.4988 7.5 17.4988C8.19 17.4988 8.75 16.9388 8.75 16.2488V12.0788L11.8025 13.1863C12.8313 13.56 13.9125 13.7463 14.9925 13.7463C16.0725 13.7463 17.1525 13.56 18.18 13.1863L21.25 12.0725V16.2475C21.25 16.9375 21.81 17.4975 22.5 17.4975C23.19 17.4975 23.75 16.9375 23.75 16.2475V11.165L27.5 9.805V14.9975C27.5 15.6875 28.06 16.2475 28.75 16.2475C29.44 16.2475 30 15.6875 30 14.9975V6.90375C30 6.90375 30.0025 6.89375 30.0025 6.8875C30.0038 5.665 29.2788 4.60875 28.1538 4.19625V4.19875ZM27.2913 7.22375L17.3275 10.8388C15.8188 11.3838 14.16 11.385 12.6538 10.8388L2.71125 7.23125C2.52875 7.165 2.50125 6.99 2.50125 6.8925C2.50125 6.795 2.5275 6.62 2.71 6.55375L12.71 2.915C13.465 2.64 14.2575 2.5025 15.0513 2.5025C15.8513 2.5025 16.6513 2.6425 17.4125 2.92125L27.2913 6.54625C27.4675 6.61125 27.4963 6.775 27.4988 6.875C27.4963 6.975 27.4688 7.16 27.2913 7.22375Z"
                                                    fill="#03594E"
                                                />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="it-feature-content">
                                        <h5 class="it-feature-title">Education Services</h5>
                                        <p>
                                            Learn strategic planning, leadership, and operations for business success.
                                        </p>
                                        <a href="about-us-v3.html"
                                            >Read More
                                            <svg
                                                width="15"
                                                height="14"
                                                viewBox="0 0 15 14"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M14.6364 7.6364C14.9879 7.28492 14.9879 6.71508 14.6364 6.3636L8.90883 0.636039C8.55736 0.284567 7.98751 0.284567 7.63604 0.636039C7.28457 0.987511 7.28457 1.55736 7.63604 1.90883L12.7272 7L7.63604 12.0912C7.28457 12.4426 7.28457 13.0125 7.63604 13.364C7.98751 13.7154 8.55736 13.7154 8.90883 13.364L14.6364 7.6364ZM0 7V7.9H14V7V6.1H0V7Z"
                                                    fill="currentcolor"
                                                />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="it-feature-item d-flex justify-content-center">
                                    <div class="it-feature-icon">
                                        <span>
                                            <svg
                                                width="30"
                                                height="31"
                                                viewBox="0 0 30 31"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M16.2118 19.6191C20.3927 19.6191 25.9509 18.6154 25.9509 9.93453C25.9509 1.25362 20.3927 0.251343 16.2118 0.251343C12.0308 0.251343 6.47266 1.25498 6.47266 9.93453C6.47266 18.6141 12.0308 19.6191 16.2118 19.6191ZM16.2118 2.97862C20.5399 2.97862 23.2236 4.14316 23.2236 9.93453C23.2236 15.7259 20.5399 16.8918 16.2118 16.8918C11.8836 16.8918 9.19993 15.7273 9.19993 9.93453C9.19993 4.1418 11.8822 2.97862 16.2118 2.97862Z"
                                                    fill="#03594E"
                                                />
                                                <path
                                                    d="M28.9789 17.0582C28.3312 16.6709 27.4953 16.8809 27.108 17.5259C25.1021 20.8668 21.4366 22.5618 16.2125 22.5618C5.70161 22.5618 3.49388 15.6959 3.49388 9.93589C3.49388 7.84953 3.81297 4.83316 5.33342 2.31998C5.72342 1.67498 5.51615 0.836339 4.87115 0.446338C4.22888 0.0577016 3.38888 0.263611 2.99888 0.908611C1.15387 3.96043 0.766602 7.5018 0.766602 9.93589C0.766602 14.3963 2.17251 24.5732 14.8489 25.2523V27.5227H8.97297C8.22024 27.5227 7.60933 28.1336 7.60933 28.8864C7.60933 29.6391 8.22024 30.25 8.97297 30.25H23.4507C24.2048 30.25 24.8144 29.6391 24.8144 28.8864C24.8144 28.1336 24.2048 27.5227 23.4507 27.5227H17.5762V25.2523C23.1112 24.9577 27.1012 22.8345 29.4453 18.9291C29.8325 18.2827 29.6253 17.4454 28.9789 17.0582Z"
                                                    fill="#03594E"
                                                />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="it-feature-content">
                                        <h5 class="it-feature-title">International Hubs</h5>
                                        <p>
                                            Learn strategic planning, leadership, and operations for business success.
                                        </p>
                                        <a href="about-us-v3.html"
                                            >Read More
                                            <svg
                                                width="15"
                                                height="14"
                                                viewBox="0 0 15 14"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M14.6364 7.6364C14.9879 7.28492 14.9879 6.71508 14.6364 6.3636L8.90883 0.636039C8.55736 0.284567 7.98751 0.284567 7.63604 0.636039C7.28457 0.987511 7.28457 1.55736 7.63604 1.90883L12.7272 7L7.63604 12.0912C7.28457 12.4426 7.28457 13.0125 7.63604 13.364C7.98751 13.7154 8.55736 13.7154 8.90883 13.364L14.6364 7.6364ZM0 7V7.9H14V7V6.1H0V7Z"
                                                    fill="currentcolor"
                                                />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="it-feature-item d-flex justify-content-center">
                                    <div class="it-feature-icon">
                                        <span>
                                            <svg
                                                width="30"
                                                height="30"
                                                viewBox="0 0 30 30"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M28.6625 19.5288C27.8162 18.8688 26.735 18.64 25.6938 18.9C23.12 19.545 18.31 20.625 15 20.625C11.69 20.625 6.88 19.5438 4.3075 18.9C3.26625 18.6413 2.18375 18.87 1.3375 19.5288C0.4875 20.1925 0 21.1913 0 22.2713V26.4788C0 27.5588 0.4875 28.5575 1.3375 29.2213C2.18375 29.8813 3.265 30.11 4.30625 29.85C6.88 29.205 11.69 28.125 15 28.125C18.31 28.125 23.12 29.2063 25.6925 29.85C25.975 29.92 26.2587 29.955 26.5413 29.955C27.3025 29.955 28.045 29.7025 28.6625 29.2213C29.5125 28.5575 30 27.5588 30 26.4788V22.2713C30 21.1913 29.5125 20.1925 28.6625 19.5288ZM13.75 25.6663C10.5288 25.8563 6.5925 26.7013 3.69875 27.425C3.30375 27.5238 3.0125 27.3575 2.875 27.25C2.63625 27.0638 2.5 26.7825 2.5 26.4788V22.2713C2.5 21.9675 2.63625 21.6863 2.875 21.5C3.0125 21.3913 3.30125 21.225 3.7 21.325C6.59375 22.0488 10.5288 22.8938 13.75 23.0838V25.6663ZM27.5 26.4788C27.5 26.7825 27.3638 27.0638 27.125 27.25C26.9863 27.3575 26.695 27.5238 26.3 27.425C23.4063 26.7013 19.4713 25.8563 16.25 25.6663V23.0838C19.4713 22.8938 23.4075 22.0488 26.3013 21.325C26.695 21.2238 26.9863 21.3913 27.125 21.5C27.3638 21.6863 27.5 21.9675 27.5 22.2713V26.4788ZM28.1538 4.19875L18.2763 0.573752C16.205 -0.184998 13.9262 -0.189998 11.8562 0.565002L1.8575 4.2025C0.73 4.61375 0.00125 5.67 0.0025 6.8925C0.0025 8.11625 0.7325 9.17125 1.86 9.58L6.25 11.1725V16.2488C6.25 16.9388 6.81 17.4988 7.5 17.4988C8.19 17.4988 8.75 16.9388 8.75 16.2488V12.0788L11.8025 13.1863C12.8313 13.56 13.9125 13.7463 14.9925 13.7463C16.0725 13.7463 17.1525 13.56 18.18 13.1863L21.25 12.0725V16.2475C21.25 16.9375 21.81 17.4975 22.5 17.4975C23.19 17.4975 23.75 16.9375 23.75 16.2475V11.165L27.5 9.805V14.9975C27.5 15.6875 28.06 16.2475 28.75 16.2475C29.44 16.2475 30 15.6875 30 14.9975V6.90375C30 6.90375 30.0025 6.89375 30.0025 6.8875C30.0038 5.665 29.2788 4.60875 28.1538 4.19625V4.19875ZM27.2913 7.22375L17.3275 10.8388C15.8188 11.3838 14.16 11.385 12.6538 10.8388L2.71125 7.23125C2.52875 7.165 2.50125 6.99 2.50125 6.8925C2.50125 6.795 2.5275 6.62 2.71 6.55375L12.71 2.915C13.465 2.64 14.2575 2.5025 15.0513 2.5025C15.8513 2.5025 16.6513 2.6425 17.4125 2.92125L27.2913 6.54625C27.4675 6.61125 27.4963 6.775 27.4988 6.875C27.4963 6.975 27.4688 7.16 27.2913 7.22375Z"
                                                    fill="#03594E"
                                                />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="it-feature-content">
                                        <h5 class="it-feature-title">Bachelor’s & Master’s</h5>
                                        <p>
                                            Learn strategic planning, leadership, and operations for business success.
                                        </p>
                                        <a href="about-us-v3.html"
                                            >Read More
                                            <svg
                                                width="15"
                                                height="14"
                                                viewBox="0 0 15 14"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M14.6364 7.6364C14.9879 7.28492 14.9879 6.71508 14.6364 6.3636L8.90883 0.636039C8.55736 0.284567 7.98751 0.284567 7.63604 0.636039C7.28457 0.987511 7.28457 1.55736 7.63604 1.90883L12.7272 7L7.63604 12.0912C7.28457 12.4426 7.28457 13.0125 7.63604 13.364C7.98751 13.7154 8.55736 13.7154 8.90883 13.364L14.6364 7.6364ZM0 7V7.9H14V7V6.1H0V7Z"
                                                    fill="currentcolor"
                                                />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- feature-area-end -->

            <!-- about-area-start -->
            <section class="it-about-2-area z-index-1 pt-130 pb-130">
                <img class="it-about-2-shape-3" src="{{ asset('frontAssets/img/shape/about-3-3.png') }}" alt="" />
                <img class="it-about-2-shape-4" src="{{ asset('frontAssets/img/shape/about-3-4.png') }}" alt="" />
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6 wow itfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">
                            <div class="it-about-2-left p-relative">
                                <div class="it-about-2-thumb border-radius-20">
                                    <img src="{{ asset('frontAssets/img/about/about-2-1.jpg') }}" alt="" />
                                </div>
                                <div class="it-about-2-thumb-sm thumb-overlay border-radius-20 z-index-1">
                                    <img src="{{ asset('frontAssets/img/about/about-2-2.jpg') }}" alt="" />
                                    <a
                                        class="it-about-thumb-icon pulse-white popup-video"
                                        href="https://www.youtube.com/watch?v=LlCwHnp3kL4"
                                    >
                                        <svg
                                            width="11"
                                            height="14"
                                            viewBox="0 0 11 14"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M10.5 7.93782C11.1667 7.55292 11.1667 6.59067 10.5 6.20577L1.5 1.00962C0.833333 0.624718 0 1.10584 0 1.87564V12.2679C0 13.0378 0.833333 13.5189 1.5 13.134L10.5 7.93782Z"
                                                fill="#F8C62F"
                                            />
                                        </svg>
                                    </a>
                                </div>
                                <div class="it-about-experience-box d-flex align-items-center">
                                    <div class="it-about-experience-icon mr-20">
                                        <span>
                                            <svg
                                                width="48"
                                                height="48"
                                                viewBox="0 0 48 48"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M44 3.19995H4C1.79196 3.2026 0.0026449 4.99191 0 7.19995V36C0.0026449 38.208 1.79196 39.9973 4 40H28V44C28.0001 44.3235 28.195 44.6151 28.4939 44.7389C28.7928 44.8627 29.1368 44.7943 29.3656 44.5656L32 41.9312L34.6344 44.5656C34.8632 44.7943 35.2072 44.8627 35.5061 44.7389C35.805 44.6151 35.9999 44.3235 36 44V40H44C46.208 39.9973 47.9974 38.208 48 36V7.19995C47.9974 4.99191 46.208 3.2026 44 3.19995ZM25.848 18.852C25.7243 18.7949 25.6355 18.6821 25.6089 18.5486C25.5823 18.415 25.6212 18.2768 25.7136 18.1768C26.4294 17.3988 26.4294 16.2019 25.7136 15.424C25.6209 15.3238 25.5819 15.1853 25.6087 15.0514C25.6354 14.9176 25.7247 14.8048 25.8488 14.748C26.8071 14.302 27.2645 13.1967 26.9016 12.204C26.8544 12.0761 26.8712 11.9334 26.9468 11.8201C27.0225 11.7068 27.1478 11.6365 27.284 11.6312C28.3405 11.5868 29.1868 10.7404 29.2312 9.68395C29.2365 9.54759 29.3069 9.42204 29.4204 9.34635C29.5339 9.27066 29.6769 9.254 29.8048 9.30155C30.7977 9.66233 31.9017 9.20509 32.3488 8.24795C32.4054 8.12405 32.518 8.03487 32.6516 8.00825C32.7852 7.98163 32.9234 8.0208 33.0232 8.11355C33.8015 8.82949 34.9985 8.82949 35.7768 8.11355C35.8768 8.02086 36.0152 7.98182 36.149 8.0086C36.2827 8.03537 36.3954 8.1247 36.452 8.24875C36.8982 9.20635 38.0027 9.66358 38.9952 9.30155C39.1231 9.254 39.2661 9.27066 39.3796 9.34635C39.4931 9.42204 39.5635 9.54759 39.5688 9.68395C39.6137 10.7419 40.462 11.5888 41.52 11.632C41.6561 11.6371 41.7815 11.7071 41.8572 11.8204C41.9329 11.9336 41.9497 12.0762 41.9024 12.204C41.5392 13.1969 41.9971 14.3026 42.956 14.748C43.0797 14.805 43.1686 14.9178 43.1951 15.0513C43.2217 15.1849 43.1828 15.3231 43.0904 15.4232C42.3746 16.2011 42.3746 17.398 43.0904 18.176C43.1831 18.2761 43.2221 18.4146 43.1953 18.5485C43.1686 18.6823 43.0793 18.7951 42.9552 18.852C41.9969 19.2979 41.5395 20.4032 41.9024 21.396C41.9496 21.5238 41.9328 21.6665 41.8572 21.7798C41.7815 21.8931 41.6562 21.9634 41.52 21.9688C40.4605 22.0113 39.6113 22.8604 39.5688 23.92C39.5635 24.0563 39.4931 24.1819 39.3796 24.2576C39.2661 24.3333 39.1231 24.3499 38.9952 24.3024C38.0023 23.9412 36.898 24.3985 36.4512 25.356C36.3967 25.481 36.2837 25.5709 36.1496 25.596C36.0157 25.624 35.8765 25.5848 35.7768 25.4912C34.9984 24.7756 33.8016 24.7756 33.0232 25.4912C32.9234 25.5847 32.7843 25.6238 32.6504 25.596C32.5161 25.5709 32.4029 25.4811 32.348 25.356C31.9021 24.3981 30.7973 23.9407 29.8048 24.3032C29.6769 24.3507 29.5339 24.334 29.4204 24.2584C29.3069 24.1827 29.2365 24.0571 29.2312 23.9208C29.1887 22.8609 28.3398 22.0113 27.28 21.968C27.1439 21.9628 27.0185 21.8928 26.9428 21.7795C26.8671 21.6663 26.8503 21.5237 26.8976 21.396C27.2614 20.4041 26.8054 19.2988 25.848 18.852ZM34.6352 33.8336L34.4 34.0688V26.5488C34.5071 26.5485 34.6103 26.5888 34.6888 26.6616C35.0595 27.0091 35.5487 27.2024 36.0568 27.2024C36.1927 27.2021 36.3283 27.1887 36.4616 27.1624C37.0982 27.0381 37.635 26.6128 37.9016 26.0216C37.9953 25.8199 38.2281 25.7238 38.4368 25.8008C38.6802 25.887 38.938 25.9258 39.196 25.9152V34.0688L37.3616 32.2344C37.0492 31.922 36.5428 31.922 36.2304 32.2344L34.6352 33.8336ZM34.4 42.0688L32.5656 40.2344C32.2532 39.922 31.7468 39.922 31.4344 40.2344L29.6 42.0688V25.9136C29.8581 25.9243 30.1158 25.8855 30.3592 25.7992C30.5675 25.7218 30.8002 25.8176 30.8936 26.0192C31.161 26.6119 31.6998 27.0377 32.3384 27.1608C32.4903 27.1908 32.6452 27.204 32.8 27.2V36C32.8001 36.3235 32.995 36.6151 33.2939 36.7389C33.5928 36.8627 33.9368 36.7943 34.1656 36.5656L34.4 36.3312V42.0688ZM46.4 36C46.4 37.3254 45.3255 38.4 44 38.4H36V34.7312L36.8 33.9312L39.4344 36.5656C39.6632 36.7943 40.0072 36.8627 40.3061 36.7389C40.605 36.6151 40.7999 36.3235 40.8 36V25.0456C41.0233 24.732 41.1508 24.3605 41.1672 23.976C41.177 23.754 41.3549 23.5765 41.5768 23.5672C42.2254 23.5421 42.8227 23.2079 43.1832 22.6681C43.5437 22.1284 43.6237 21.4486 43.3984 20.84C43.322 20.6317 43.418 20.3997 43.6192 20.3064C44.2093 20.0353 44.6336 19.4977 44.7603 18.8609C44.8869 18.224 44.7006 17.565 44.2592 17.0888C44.1088 16.9253 44.1088 16.6738 44.2592 16.5104C44.7006 16.0343 44.887 15.3754 44.7603 14.7386C44.6336 14.1018 44.2092 13.5644 43.6192 13.2936C43.4174 13.2008 43.3209 12.9684 43.3976 12.76C43.6229 12.1513 43.5429 11.4715 43.1824 10.9318C42.8219 10.392 42.2246 10.0578 41.576 10.0328C41.3541 10.0234 41.1762 9.84586 41.1664 9.62395C41.1421 8.97516 40.8083 8.37735 40.2686 8.01645C39.7289 7.65555 39.0489 7.57533 38.44 7.80075C38.2317 7.87939 37.9981 7.78323 37.9056 7.58075C37.6345 6.99069 37.097 6.56637 36.4601 6.43969C35.8232 6.31301 35.1642 6.49934 34.688 6.94075C34.5248 7.09101 34.2736 7.09101 34.1104 6.94075C33.6343 6.49933 32.9754 6.31299 32.3386 6.43967C31.7019 6.56636 31.1645 6.99072 30.8936 7.58075C30.8007 7.78335 30.5671 7.87974 30.3584 7.80155C29.7495 7.57613 29.0695 7.65635 28.5298 8.01725C27.9901 8.37815 27.6563 8.97596 27.632 9.62475C27.6222 9.84666 27.4443 10.0242 27.2224 10.0336C26.5738 10.0586 25.9765 10.3928 25.616 10.9326C25.2555 11.4723 25.1755 12.1521 25.4008 12.7608C25.4772 12.969 25.3812 13.201 25.18 13.2944C24.5899 13.5654 24.1656 14.103 24.0389 14.7398C23.9123 15.3767 24.0986 16.0357 24.54 16.512C24.6904 16.6754 24.6904 16.9269 24.54 17.0904C24.0986 17.5664 23.9122 18.2253 24.0389 18.8621C24.1656 19.4989 24.59 20.0363 25.18 20.3072C25.3818 20.4 25.4783 20.6323 25.4016 20.8408C25.1763 21.4494 25.2563 22.1292 25.6168 22.6689C25.9773 23.2087 26.5746 23.5429 27.2232 23.568C27.4451 23.5773 27.623 23.7548 27.6328 23.9768C27.6493 24.361 27.7769 24.7323 28 25.0456V38.4H4C2.67452 38.4 1.6 37.3254 1.6 36V7.19995C1.6 5.87447 2.67452 4.79995 4 4.79995H44C45.3255 4.79995 46.4 5.87447 46.4 7.19995V36Z"
                                                    fill="white"
                                                />
                                                <path
                                                    d="M8.7998 32C7.47432 32 6.3998 30.9255 6.3998 29.6V13.6C6.3998 12.2745 7.47432 11.2 8.7998 11.2H23.1998C23.6416 11.2 23.9998 10.8418 23.9998 10.4C23.9998 9.95815 23.6416 9.59998 23.1998 9.59998H8.7998C6.59176 9.60262 4.80245 11.3919 4.7998 13.6V29.6C4.80245 31.808 6.59176 33.5973 8.7998 33.6H23.9998C24.4416 33.6 24.7998 33.2418 24.7998 32.8C24.7998 32.3581 24.4416 32 23.9998 32H8.7998Z"
                                                    fill="white"
                                                />
                                                <path
                                                    d="M9.5998 22.3999H20.7998C21.2416 22.3999 21.5998 22.0418 21.5998 21.5999C21.5998 21.1581 21.2416 20.7999 20.7998 20.7999H9.5998C9.15798 20.7999 8.7998 21.1581 8.7998 21.5999C8.7998 22.0418 9.15798 22.3999 9.5998 22.3999Z"
                                                    fill="white"
                                                />
                                                <path
                                                    d="M9.5998 19.2H20.7998C21.2416 19.2 21.5998 18.8418 21.5998 18.4C21.5998 17.9581 21.2416 17.6 20.7998 17.6H9.5998C9.15798 17.6 8.7998 17.9581 8.7998 18.4C8.7998 18.8418 9.15798 19.2 9.5998 19.2Z"
                                                    fill="white"
                                                />
                                                <path
                                                    d="M9.5998 15.9999H20.7998C21.2416 15.9999 21.5998 15.6417 21.5998 15.1999C21.5998 14.7581 21.2416 14.3999 20.7998 14.3999H9.5998C9.15798 14.3999 8.7998 14.7581 8.7998 15.1999C8.7998 15.6417 9.15798 15.9999 9.5998 15.9999Z"
                                                    fill="white"
                                                />
                                                <path
                                                    d="M8.86618 29.92C8.99348 30.2117 9.28155 30.4002 9.59978 30.4C9.70992 30.4005 9.81894 30.3779 9.91978 30.3336C10.6604 30.0584 11.3411 29.6431 11.9246 29.1104C12.1412 28.8942 12.3306 28.6525 12.4886 28.3904C12.7941 28.7338 13.1531 29.0256 13.5518 29.2544C14.1078 29.6179 14.7998 29.7064 15.4294 29.4944C15.6707 29.4007 15.889 29.2561 16.0694 29.0704C16.4314 29.2966 16.8302 29.4577 17.2478 29.5464L17.8526 29.6896C19.0871 30.0512 20.3697 30.2212 21.6558 30.1936C21.9409 30.173 22.1933 30.0019 22.3181 29.7447C22.4428 29.4875 22.4208 29.1833 22.2605 28.9467C22.1001 28.7101 21.8257 28.577 21.5406 28.5976C20.4184 28.6123 19.3005 28.4558 18.2254 28.1336L17.607 27.9872C16.8606 27.8152 16.6686 27.5144 16.5894 27.3024C16.45 26.9302 16.0584 26.7168 15.67 26.8013C15.2817 26.8858 15.0143 27.2427 15.0422 27.6392C15.0511 27.7826 14.9832 27.92 14.8638 28C14.6769 28.0238 14.488 27.9751 14.3358 27.864C13.6888 27.4612 13.2023 26.8457 12.9598 26.1232C12.8221 25.7512 12.4327 25.5362 12.0445 25.618C11.6564 25.6998 11.3868 26.0537 11.411 26.4496C11.4245 27.0219 11.2003 27.5742 10.7918 27.9752C10.3476 28.3637 9.8348 28.6659 9.27978 28.8664C9.08516 28.9512 8.93222 29.1099 8.85464 29.3075C8.77706 29.5051 8.78122 29.7254 8.86618 29.92Z"
                                                    fill="white"
                                                />
                                                <path
                                                    d="M34.4 23.1999C37.9346 23.1999 40.8 20.3345 40.8 16.7999C40.8 13.2653 37.9346 10.3999 34.4 10.3999C30.8654 10.3999 28 13.2653 28 16.7999C28.004 20.3329 30.867 23.1959 34.4 23.1999ZM34.4 11.9999C37.051 11.9999 39.2 14.1489 39.2 16.7999C39.2 19.4509 37.051 21.5999 34.4 21.5999C31.749 21.5999 29.6 19.4509 29.6 16.7999C29.6026 14.15 31.7501 12.0025 34.4 11.9999Z"
                                                    fill="white"
                                                />
                                            </svg>
                                        </span>
                                    </div>
                                    <div>
                                        <h5>30 +</h5>
                                        <span>wonderful Awards</span>
                                    </div>
                                </div>
                                <img
                                    class="it-about-2-shape-1 d-none d-xl-block"
                                    src="{{ asset('frontAssets/img/shape/about-3-1.png') }}"
                                    alt=""
                                />
                                <img
                                    class="it-about-2-shape-2 d-none d-xl-block"
                                    src="{{ asset('frontAssets/img/shape/about-3-2.png') }}"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 wow itfadeRight" data-wow-duration=".9s" data-wow-delay=".7s">
                            <div class="it-about-2-right">
                                <div class="it-about-2-section-title-box mb-20">
                                    <span class="it-section-subtitle">
                                        <svg
                                            width="19"
                                            height="14"
                                            viewBox="0 0 19 14"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M17.5 1.66667H16.6667V0.833333C16.6667 0.61232 16.5789 0.400358 16.4226 0.244078C16.2663 0.0877975 16.0543 0 15.8333 0C13.3333 0 10.5708 0.133334 9.16667 1.46667C7.7625 0.133334 5 0 2.5 0C2.27899 0 2.06702 0.0877975 1.91074 0.244078C1.75446 0.400358 1.66667 0.61232 1.66667 0.833333V1.66667H0.833333C0.61232 1.66667 0.400358 1.75446 0.244078 1.91074C0.0877973 2.06702 0 2.27899 0 2.5V12.5C0 12.721 0.0877973 12.933 0.244078 13.0893C0.400358 13.2455 0.61232 13.3333 0.833333 13.3333H17.5C17.721 13.3333 17.933 13.2455 18.0893 13.0893C18.2455 12.933 18.3333 12.721 18.3333 12.5V2.5C18.3333 2.27899 18.2455 2.06702 18.0893 1.91074C17.933 1.75446 17.721 1.66667 17.5 1.66667ZM15.8333 0.833333V10.8333C13.5542 10.8333 11.0708 10.9417 9.58333 11.9583V2.22917C10.675 0.954167 13.375 0.833333 15.8333 0.833333ZM8.75 2.22917V11.9583C7.2625 10.9417 4.77917 10.8333 2.5 10.8333V0.833333C4.95833 0.833333 7.65833 0.954167 8.75 2.22917ZM0.833333 2.5H1.66667V10.8333C1.66667 11.0543 1.75446 11.2663 1.91074 11.4226C2.06702 11.5789 2.27899 11.6667 2.5 11.6667C4.53333 11.6667 6.72917 11.75 8.04583 12.5H0.833333V2.5ZM17.5 12.5H10.2875C11.6042 11.75 13.8 11.6667 15.8333 11.6667C16.0543 11.6667 16.2663 11.5789 16.4226 11.4226C16.5789 11.2663 16.6667 11.0543 16.6667 10.8333V2.5H17.5V12.5Z"
                                                fill="#03594E"
                                            />
                                        </svg>
                                        About us
                                    </span>
                                    <h4 class="it-section-title">
                                        Our Educeet System Truly <br />Inspires You to Learn More
                                    </h4>
                                </div>
                                <div class="it-about-2-text">
                                    <p class="mb-30">
                                        Enhance your knowledge and grow professionally by learning new skills anytime,
                                        anywhere. Access expert-led courses designed to help you succeed in your career,
                                        all from the comfort of your home.
                                    </p>
                                </div>
                                <div
                                    class="it-about-2-more-wrap d-flex align-items-center justify-content-between mb-50"
                                >
                                    <div class="it-about-2-more-info d-flex">
                                        <span class="it-about-2-more-icon">
                                            <svg
                                                width="30"
                                                height="31"
                                                viewBox="0 0 30 31"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <g clip-path="url(#clip0_596_18747)">
                                                    <path
                                                        d="M13.5797 4.05226C13.5333 3.8671 13.38 3.72835 13.1911 3.70117L6.62862 2.76367C6.50766 2.74632 6.38484 2.77679 6.28686 2.84898L1.13063 6.59898C0.976402 6.71101 0.905626 6.90555 0.951094 7.09119C0.997498 7.27635 1.15078 7.41507 1.33968 7.44225L3.63891 7.77087L4.70718 11.3315C4.76625 11.5293 4.94906 11.6652 5.15578 11.6652H7.31064C9.36138 11.6652 11.272 10.7469 12.5536 9.14571C12.653 9.02103 12.682 8.85555 12.6319 8.70459L11.6653 5.80585L13.4002 4.54398C13.5544 4.43195 13.6252 4.23742 13.5797 4.05226ZM11.6597 8.75289C10.5614 10.0115 8.99064 10.7277 7.31064 10.7277H5.50453L4.66125 7.91667L7.90218 8.37975C7.92378 8.38257 7.94628 8.38401 7.9683 8.38401C8.0667 8.38401 8.1633 8.35305 8.24388 8.29443L10.8703 6.38429L11.6597 8.75289ZM7.84638 7.42443L2.61609 6.67679L6.68388 3.71804L11.9142 4.4657L7.84638 7.42443Z"
                                                        fill="#03594E"
                                                    />
                                                    <path
                                                        d="M18.75 6.50878C18.75 9.35174 21.0633 11.665 23.9063 11.665C24.031 11.665 24.15 11.6158 24.2377 11.5277L25.8075 9.95786L28.3973 11.1531C28.4602 11.1822 28.5272 11.1963 28.5937 11.1963C28.7156 11.1963 28.8356 11.1484 28.9252 11.0589C29.0639 10.9202 29.1019 10.7092 29.0194 10.5311L26.2069 4.43737C26.16 4.33612 26.0789 4.25456 25.9777 4.20815L19.8839 1.39565C19.7062 1.31362 19.4948 1.35112 19.3561 1.48987C19.2173 1.62862 19.1794 1.83956 19.2619 2.01768L20.4572 4.60753L18.8873 6.17737C18.7992 6.26503 18.75 6.38409 18.75 6.50878ZM25.4278 4.98721L27.6352 9.76893L22.8535 7.56158L20.6461 2.77987L25.4278 4.98721ZM20.8758 5.51456L22.0744 8.11142C22.1212 8.2127 22.2023 8.29424 22.3036 8.34062L24.9005 9.53925L23.7164 10.7233C21.5405 10.6263 19.7887 8.87457 19.6917 6.69862L20.8758 5.51456Z"
                                                        fill="#03594E"
                                                    />
                                                    <path
                                                        d="M6.24301 23.8773L5.94629 24.7661C6.67423 25.0093 7.21939 25.5976 7.40551 26.342L7.51471 26.7793L8.42365 26.5515L8.31439 26.1147C8.05099 25.0581 7.27657 24.2214 6.24301 23.8773Z"
                                                        fill="#03594E"
                                                    />
                                                    <path
                                                        d="M28.2727 21.5088C27.255 21.5088 26.236 21.7333 25.3125 22.1603V21.0864L26.1202 17.0496C26.206 16.6183 26.25 16.1767 26.25 15.7361C26.25 15.0419 25.6856 14.4775 24.9914 14.4775C24.413 14.4775 23.9105 14.8694 23.7708 15.4309L23.4375 16.7631V14.9463C23.4375 14.1709 22.8065 13.54 22.0313 13.54C21.9675 13.54 21.9056 13.5508 21.8437 13.5592C21.781 13.5499 21.7181 13.54 21.6525 13.54C21.1252 13.54 20.6503 13.8531 20.4427 14.3378L20.422 14.3856L20.6194 12.2139C20.6231 12.1741 20.625 12.1333 20.625 12.093C20.625 11.3401 20.0123 10.7275 19.2595 10.7275C18.8269 10.7275 18.449 10.983 18.2813 11.3626V11.1963C18.2813 10.4209 17.6503 9.79004 16.875 9.79004C16.0997 9.79004 15.4687 10.4209 15.4687 11.1963V13.0131L15.1355 11.6809C14.9953 11.1194 14.4933 10.7275 13.9148 10.7275C13.2206 10.7275 12.6563 11.2919 12.6563 11.9861C12.6563 12.4267 12.7003 12.8688 12.7861 13.2996L13.5937 17.3364V18.4103C12.9722 18.1234 12.3065 17.9364 11.6283 17.8389L11.7136 16.9014C11.7169 16.8616 11.7187 16.8208 11.7187 16.7805C11.7187 16.0276 11.1061 15.415 10.3533 15.415C9.92064 15.415 9.54282 15.6705 9.375 16.0501V15.8838C9.375 15.1084 8.74404 14.4775 7.96872 14.4775C7.19346 14.4775 6.5625 15.1084 6.5625 15.8838V17.7006L6.2292 16.3684C6.08904 15.8069 5.58703 15.415 5.0086 15.415C4.31438 15.415 3.75 15.9794 3.75 16.6736C3.75 17.1142 3.79406 17.5563 3.87985 17.9871L4.6875 22.0239V23.0978C3.7636 22.6708 2.74453 22.4463 1.72735 22.4463C1.03313 22.4463 0.46875 23.0106 0.46875 23.7049C0.46875 24.2833 0.860622 24.7858 1.42219 24.9259C2.13235 25.1026 2.7464 25.5358 3.15235 26.1451C3.31969 26.3969 3.52735 26.6158 3.76781 26.7958L4.59375 27.415C4.94625 27.6794 5.15625 28.0999 5.15625 28.54V30.415H6.09372V28.54C6.09372 27.8069 5.7436 27.1051 5.15625 26.665L4.32985 26.0453C4.17469 25.9291 4.0411 25.7875 3.93235 25.6253C3.39656 24.8214 2.58563 24.25 1.64906 24.0166C1.50656 23.98 1.40625 23.8521 1.40625 23.7049C1.40625 23.5276 1.55015 23.3838 1.72735 23.3838C2.67187 23.3838 3.61687 23.6074 4.46156 24.0292L4.94672 24.2721C5.0925 24.3442 5.26453 24.3376 5.40281 24.2514C5.54063 24.1656 5.625 24.0151 5.625 23.8525V21.9775C5.625 21.9471 5.62172 21.9156 5.61563 21.8856L4.79906 17.8028C4.725 17.4325 4.6875 17.0524 4.6875 16.6736C4.6875 16.4964 4.8314 16.3525 5.0086 16.3525C5.15578 16.3525 5.28422 16.4528 5.32031 16.5958L6.57702 21.6226C6.6342 21.8524 6.85686 22.0061 7.08888 21.9742C7.3233 21.9451 7.5 21.7455 7.5 21.5088V15.8838C7.5 15.625 7.71 15.415 7.96872 15.415C8.2275 15.415 8.4375 15.625 8.4375 15.8838V21.5088C8.4375 21.753 8.62452 21.9559 8.86782 21.9761C9.10782 21.993 9.32814 21.8266 9.36846 21.5856L9.6633 19.8166C9.83016 20.0191 10.0589 20.1714 10.3285 20.2384C10.3753 20.2501 10.418 20.2722 10.4644 20.2858L10.3144 21.9349C10.2937 22.1646 10.4428 22.375 10.6664 22.4322C10.7048 22.4416 10.7433 22.4463 10.7813 22.4463C10.9655 22.4463 11.137 22.338 11.212 22.1622L11.701 21.0213C11.8327 21.1544 11.9536 21.2992 12.059 21.4576C12.1205 21.5496 12.1922 21.6321 12.2639 21.715L11.2997 23.643C11.2669 23.7076 11.25 23.7799 11.25 23.8525V26.4709C11.25 26.7733 11.1323 27.0574 10.9186 27.2711C10.5277 27.6621 10.3125 28.1814 10.3125 28.7341V30.415H11.25V28.7341C11.25 28.4317 11.3677 28.1476 11.5814 27.9339C11.9723 27.543 12.1875 27.0236 12.1875 26.4709V23.9631L12.9952 22.3483L13.5 22.7275C13.8525 22.9919 14.0625 23.4124 14.0625 23.8525L14.062 24.79H13.125C12.8658 24.79 12.6563 24.9996 12.6563 25.2588V27.6025C12.6563 27.8617 12.8658 28.0713 13.125 28.0713V30.415H14.0625V28.0713H20.1563V30.415H21.0937V28.0713C21.353 28.0713 21.5625 27.8617 21.5625 27.6025V25.2588C21.5625 24.9996 21.353 24.79 21.0937 24.79H20.1563V24.0466C20.1563 23.7442 20.2739 23.4601 20.4877 23.2464C20.8786 22.8555 21.0937 22.3361 21.0937 21.7834V19.2756L22.5 16.4631V20.5713C22.5 20.808 22.6767 21.0076 22.9115 21.0363C23.1422 21.0686 23.3658 20.9144 23.4235 20.6847L24.6802 15.6578C24.7163 15.5153 24.8437 15.415 24.9914 15.415C25.1686 15.415 25.3125 15.5589 25.3125 15.7361C25.3125 16.1153 25.275 16.495 25.201 16.8653L24.3844 20.9481C24.3783 20.9781 24.375 21.0096 24.375 21.04V22.915C24.375 23.0776 24.4594 23.2281 24.5977 23.3139C24.7355 23.3997 24.9075 23.4063 25.0538 23.3346L25.5389 23.0917C26.3836 22.6699 27.3286 22.4463 28.2731 22.4463C28.4498 22.4463 28.5937 22.5901 28.5937 22.7674C28.5937 22.9146 28.4935 23.043 28.3505 23.0786C27.4139 23.3125 26.6025 23.8839 26.0672 24.6878C25.9589 24.8505 25.8248 24.9916 25.6692 25.1083L24.8433 25.7275C24.2564 26.1676 23.9063 26.8694 23.9063 27.6025V30.415H24.8437V27.6025C24.8437 27.1624 25.0538 26.7419 25.4058 26.4775L26.2313 25.8588C26.4727 25.6783 26.6798 25.4594 26.8472 25.2076C27.2531 24.5983 27.8681 24.1651 28.5773 23.988C29.1394 23.8478 29.5313 23.3458 29.5313 22.7674C29.5313 22.0731 28.9669 21.5088 28.2727 21.5088ZM10.2225 16.4636C10.2333 16.3994 10.2881 16.3525 10.3533 16.3525C10.5895 16.3525 10.7813 16.5442 10.7794 16.8194L10.6936 17.7621C10.6735 17.7621 10.6533 17.7588 10.6331 17.7588C10.3908 17.7588 10.1667 17.8309 9.97452 17.95L10.2225 16.4636ZM20.625 27.1338H13.5937V25.7275H20.625V27.1338ZM21.8306 15.7051L20.2055 18.9555C20.1731 19.0201 20.1563 19.0924 20.1563 19.165V21.7834C20.1563 22.0858 20.0386 22.3699 19.8248 22.5836C19.4339 22.9746 19.2187 23.4939 19.2187 24.0466V24.79H14.9995L15 23.8525C15 23.1194 14.6498 22.4176 14.0625 21.9775L13.2361 21.3578C13.081 21.2416 12.9473 21.1 12.8386 20.9378C12.3028 20.1339 11.4919 19.5625 10.5553 19.3291C10.4128 19.2925 10.3125 19.1646 10.3125 19.0174C10.3125 18.8401 10.4564 18.6963 10.6336 18.6963C11.5781 18.6963 12.5231 18.9199 13.3678 19.3417L13.853 19.5846C13.9983 19.6563 14.1708 19.6501 14.309 19.5639C14.4469 19.4781 14.5313 19.3276 14.5313 19.165V17.29C14.5313 17.2596 14.528 17.2281 14.5219 17.1981L13.7053 13.1153C13.6313 12.745 13.5937 12.3649 13.5937 11.9861C13.5937 11.8089 13.7377 11.665 13.9148 11.665C14.062 11.665 14.1905 11.7653 14.2265 11.9083L15.4833 16.9351C15.541 17.1653 15.7631 17.3186 15.9952 17.2867C16.2295 17.2576 16.4063 17.058 16.4063 16.8213V11.1963C16.4063 10.9375 16.6163 10.7275 16.875 10.7275C17.1337 10.7275 17.3437 10.9375 17.3437 11.1963V16.8213C17.3437 17.0655 17.5308 17.2684 17.774 17.2886C18.0173 17.3069 18.2348 17.1391 18.2747 16.8981L19.1283 11.7761C19.1395 11.7119 19.1944 11.665 19.2595 11.665C19.4958 11.665 19.6875 11.8567 19.6856 12.1319L19.2206 17.2474C19.2 17.4771 19.349 17.6875 19.5727 17.7447C19.7967 17.7996 20.0278 17.6866 20.1183 17.4747L21.3042 14.7076C21.3642 14.568 21.5006 14.478 21.6525 14.478C21.8615 14.4775 22.0313 14.6472 22.0313 14.8563C22.0313 15.1497 21.9623 15.4431 21.8306 15.7051Z"
                                                        fill="#03594E"
                                                    />
                                                    <path
                                                        d="M23.7578 22.9398C22.7246 23.2839 21.9503 24.1211 21.6859 25.1767L21.5767 25.614L22.4856 25.8418L22.5948 25.404C22.7809 24.6601 23.3265 24.0714 24.054 23.8286L23.7578 22.9398Z"
                                                        fill="#03594E"
                                                    />
                                                    <path
                                                        d="M15.1492 19.1898L14.8525 20.0786C15.5805 20.3218 16.1257 20.9101 16.3117 21.6545L16.421 22.0918L17.3299 21.864L17.2207 21.4272C16.9572 20.3706 16.1829 19.5339 15.1492 19.1898Z"
                                                        fill="#03594E"
                                                    />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_596_18747">
                                                        <rect
                                                            width="30"
                                                            height="30"
                                                            fill="white"
                                                            transform="translate(0 0.883789)"
                                                        />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                        <h6>University Mission <br />Statement</h6>
                                    </div>
                                    <div class="it-about-2-more-info d-flex">
                                        <span class="it-about-2-more-icon">
                                            <svg
                                                width="30"
                                                height="31"
                                                viewBox="0 0 30 31"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <g clip-path="url(#clip0_596_18758)">
                                                    <path
                                                        d="M15 16.3818C14.0308 16.3818 13.2422 17.1704 13.2422 18.1397C13.2422 19.1089 14.0308 19.8975 15 19.8975C15.9692 19.8975 16.7578 19.1089 16.7578 18.1397C16.7578 17.1704 15.9692 16.3818 15 16.3818ZM15 19.0185C14.5154 19.0185 14.1211 18.6243 14.1211 18.1397C14.1211 17.655 14.5154 17.2607 15 17.2607C15.4846 17.2607 15.8789 17.655 15.8789 18.1397C15.8789 18.6243 15.4846 19.0185 15 19.0185Z"
                                                        fill="#03594E"
                                                    />
                                                    <path
                                                        d="M29.0625 29.126V20.337H30V17.7002H28.2422V14.4915L23.2045 6.90503H16.4339L15.4394 5.3951V3.52051H18.9551V0.883789H14.5606V5.39504L13.5661 6.90503H6.79554L1.75781 14.4915V17.7003H0V20.337H0.93756V29.1261H1.81646V20.337H9.72654V30.0049H0V30.8838H30V30.0049H20.2735V20.337H28.1836V29.126H29.0625ZM15.4394 1.76269H18.0762V2.6416H15.4394V1.76269ZM20.2735 17.7002V15.0635H27.3633V17.7002H20.2735ZM22.7332 7.78397L26.9834 14.1847H21.1523V12.4269H20.0708L17.0128 7.78397H22.7332ZM19.0184 12.4269H10.9816L15 6.32574L19.0184 12.4269ZM7.26684 7.78397H12.9871L9.92916 12.4269H8.84766V14.1847H3.01658L7.26684 7.78397ZM2.63672 15.0636H9.72654V17.7003H2.63672V15.0636ZM0.878904 19.458V18.5792H9.72654V19.458H0.878904ZM15.8789 30.0049H14.1211V22.9736C14.1211 22.489 14.5154 22.0947 15 22.0947C15.4846 22.0947 15.8789 22.489 15.8789 22.9736V30.0049ZM16.7578 30.0049V22.9736C16.7578 22.0044 15.9692 21.2158 15 21.2158C14.0308 21.2158 13.2422 22.0044 13.2422 22.9736V30.0049H10.6055V15.0636H14.5606V14.1847H9.72654V13.3058H20.2735V14.1847H15.4394V15.0636H19.3945V30.0049H16.7578ZM20.2735 18.5792H29.1211V19.458H20.2735V18.5792Z"
                                                        fill="#03594E"
                                                    />
                                                    <path
                                                        d="M7.52926 21.2158C6.80236 21.2158 6.21094 21.8073 6.21094 22.5342V29.126H8.84764V22.5342C8.84764 21.8072 8.25622 21.2158 7.52926 21.2158ZM7.9687 28.2471H7.08982V22.5342C7.08982 22.2919 7.28692 22.0948 7.52926 22.0948C7.7716 22.0948 7.9687 22.2919 7.9687 22.5342V28.2471Z"
                                                        fill="#03594E"
                                                    />
                                                    <path
                                                        d="M21.1523 22.5342V29.126H23.789V22.5342C23.789 21.8073 23.1976 21.2158 22.4707 21.2158C21.7438 21.2158 21.1523 21.8072 21.1523 22.5342ZM22.9102 22.5342V28.2471H22.0313V22.5342C22.0313 22.2919 22.2284 22.0948 22.4707 22.0948C22.7131 22.0948 22.9102 22.2919 22.9102 22.5342Z"
                                                        fill="#03594E"
                                                    />
                                                    <path
                                                        d="M4.01367 21.2158C3.28676 21.2158 2.69531 21.8073 2.69531 22.5342V29.126H5.33209V22.5342C5.33209 21.8072 4.74064 21.2158 4.01367 21.2158ZM4.45318 28.2471H3.57422V22.5342C3.57422 22.2919 3.77133 22.0948 4.01367 22.0948C4.25601 22.0948 4.45318 22.2919 4.45318 22.5342V28.2471Z"
                                                        fill="#03594E"
                                                    />
                                                    <path
                                                        d="M24.668 22.5342V29.126H27.3047V22.5342C27.3047 21.8073 26.7132 21.2158 25.9863 21.2158C25.2594 21.2158 24.668 21.8072 24.668 22.5342ZM26.4258 22.5342V28.2471H25.5468V22.5342C25.5468 22.2919 25.7439 22.0948 25.9863 22.0948C26.2287 22.0948 26.4258 22.2919 26.4258 22.5342Z"
                                                        fill="#03594E"
                                                    />
                                                    <path
                                                        d="M13.6826 10.6689H14.5615V11.5478H13.6826V10.6689Z"
                                                        fill="#03594E"
                                                    />
                                                    <path
                                                        d="M15.4404 10.6689H16.3193V11.5478H15.4404V10.6689Z"
                                                        fill="#03594E"
                                                    />
                                                    <path
                                                        d="M17.6367 15.9424H18.5157V16.8213H17.6367V15.9424Z"
                                                        fill="#03594E"
                                                    />
                                                    <path
                                                        d="M22.0898 10.4207H22.9687V9.54172H22.0898V8.66284H21.2109V9.54172H22.0898V10.4207Z"
                                                        fill="#03594E"
                                                    />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_596_18758">
                                                        <rect
                                                            width="30"
                                                            height="30"
                                                            fill="white"
                                                            transform="translate(0 0.883789)"
                                                        />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                        <h6>University Mission <br />Statement</h6>
                                    </div>
                                </div>
                                <a href="event-grid.html" class="it-btn-yellow theme-bg border-radius-100">
                                    <span>
                                        <span class="text-1">View Our Program</span>
                                        <span class="text-2">View Our Program</span>
                                    </span>
                                    <i>
                                        <svg
                                            width="16"
                                            height="15"
                                            viewBox="0 0 16 15"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M15.0544 8.1364C15.4058 7.78492 15.4058 7.21508 15.0544 6.8636L9.3268 1.13604C8.97533 0.784567 8.40548 0.784567 8.05401 1.13604C7.70254 1.48751 7.70254 2.05736 8.05401 2.40883L13.1452 7.5L8.05401 12.5912C7.70254 12.9426 7.70254 13.5125 8.05401 13.864C8.40548 14.2154 8.97533 14.2154 9.3268 13.864L15.0544 8.1364ZM0.417969 7.5V8.4H14.418V7.5V6.6H0.417969V7.5Z"
                                                fill="currentcolor"
                                            />
                                        </svg>
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- stats-area-start -->
            <section class="it-stats-area z-index-1 pb-120 wow itfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                <div class="container container-1130">
                    <div class="it-stats-wrap">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="it-stats-item">
                                    <div>
                                        <h4 class="it-stats-title">90%</h4>
                                        <span>post-graduation <br />success rate</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="it-stats-item">
                                    <div>
                                        <h4 class="it-stats-title">Top 10</h4>
                                        <span>Colleges Committed <br />to Your Future</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="it-stats-item d-flex justify-content-end">
                                    <div>
                                        <h4 class="it-stats-title">No. 1</h4>
                                        <span>in the nation for <br />materials R&D</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- stats-area-end -->

            <!-- course-area-start -->
            <section class="it-course-area it-course-style-3 z-index-1 gray-bg pt-130 pb-130">
                <img
                    class="it-course-shape-10"
                    data-parallax='{"y": -200, "smoothness": 30}'
                    src="{{ asset('frontAssets/img/shape/course-3-2.png') }}"
                    alt=""
                />
                <img class="it-course-shape-12" src="{{ asset('frontAssets/img/shape/course-3-1.png') }}" alt="" />
                <img class="it-course-shape-13" src="{{ asset('frontAssets/img/shape/course-3-3.png') }}" alt="" />
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="it-course-section-title-box text-center mb-65">
                                <span class="it-section-subtitle">
                                    <svg
                                        width="19"
                                        height="14"
                                        viewBox="0 0 19 14"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M17.5 1.66667H16.6667V0.833333C16.6667 0.61232 16.5789 0.400358 16.4226 0.244078C16.2663 0.0877975 16.0543 0 15.8333 0C13.3333 0 10.5708 0.133334 9.16667 1.46667C7.7625 0.133334 5 0 2.5 0C2.27899 0 2.06702 0.0877975 1.91074 0.244078C1.75446 0.400358 1.66667 0.61232 1.66667 0.833333V1.66667H0.833333C0.61232 1.66667 0.400358 1.75446 0.244078 1.91074C0.0877973 2.06702 0 2.27899 0 2.5V12.5C0 12.721 0.0877973 12.933 0.244078 13.0893C0.400358 13.2455 0.61232 13.3333 0.833333 13.3333H17.5C17.721 13.3333 17.933 13.2455 18.0893 13.0893C18.2455 12.933 18.3333 12.721 18.3333 12.5V2.5C18.3333 2.27899 18.2455 2.06702 18.0893 1.91074C17.933 1.75446 17.721 1.66667 17.5 1.66667ZM15.8333 0.833333V10.8333C13.5542 10.8333 11.0708 10.9417 9.58333 11.9583V2.22917C10.675 0.954167 13.375 0.833333 15.8333 0.833333ZM8.75 2.22917V11.9583C7.2625 10.9417 4.77917 10.8333 2.5 10.8333V0.833333C4.95833 0.833333 7.65833 0.954167 8.75 2.22917ZM0.833333 2.5H1.66667V10.8333C1.66667 11.0543 1.75446 11.2663 1.91074 11.4226C2.06702 11.5789 2.27899 11.6667 2.5 11.6667C4.53333 11.6667 6.72917 11.75 8.04583 12.5H0.833333V2.5ZM17.5 12.5H10.2875C11.6042 11.75 13.8 11.6667 15.8333 11.6667C16.0543 11.6667 16.2663 11.5789 16.4226 11.4226C16.5789 11.2663 16.6667 11.0543 16.6667 10.8333V2.5H17.5V12.5Z"
                                            fill="#03594E"
                                        />
                                    </svg>
                                    Popular Courses
                                </span>
                                <h4 class="it-section-title">Highly Rated Learning <br />Programs Today</h4>
                                <div class="it-course-tab-btn mt-45">
                                    <ul class="nav nav-tab justify-content-center" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button
                                                class="nav-link active"
                                                id="all-tab"
                                                data-bs-toggle="tab"
                                                data-bs-target="#all"
                                                type="button"
                                                role="tab"
                                                aria-controls="all"
                                                aria-selected="true"
                                            >
                                                All Courses
                                                <span>
                                                    <svg
                                                        width="123"
                                                        height="9"
                                                        viewBox="0 0 123 9"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <path
                                                            d="M2.09002 0.500314C2.7682 0.384879 3.66028 0.481577 4.34058 0.623294C4.55365 0.667213 4.44966 0.880993 4.5969 0.920856C4.88485 0.998549 5.15009 0.890162 5.43482 0.983677C5.5292 1.01571 5.41796 1.35345 5.51679 1.37935C6.05851 1.51885 6.56613 1.4249 7.11434 1.48724C9.80953 1.79499 12.4593 1.87731 15.1823 1.98539C16.0834 2.02069 17.179 2.30745 18.1031 2.15888C18.2114 2.14123 18.1418 1.84754 18.1621 1.8229C18.4797 1.44564 18.3819 2.04248 18.5945 2.11805C19.4391 2.41636 20.366 2.42822 21.172 2.30114C21.5147 2.24621 21.1607 1.66643 21.5118 1.98934C21.5362 2.01115 21.4543 2.3256 21.549 2.35743C21.7638 2.429 22.1675 2.36637 22.333 2.38845C22.6521 2.43258 22.7046 2.42857 23.0053 2.42718C23.4154 2.42802 23.9093 2.57551 24.3507 2.49729C24.4449 2.47967 24.3146 2.16085 24.4643 2.10377C24.6142 2.04677 25.0129 2.06741 25.1483 2.14084C25.2837 2.21431 25.2307 2.46745 25.2554 2.52487C25.4589 3.00957 25.9073 2.32623 25.9661 2.30854C27.0416 2.00599 27.979 2.37561 28.9882 2.3579C29.7609 2.34353 30.5836 2.20287 31.3139 2.20829C32.1836 2.21599 32.9343 2.37757 33.7782 2.33381C33.8674 2.32956 33.7566 1.954 33.8655 1.94804C35.023 1.88511 36.1829 1.9072 37.3394 2.14298C37.4563 2.16694 37.3116 2.50065 37.4287 2.5444C38.1467 2.80491 39.2773 3.44049 39.6716 1.99143C40.1553 2.03983 40.7421 2.08842 41.176 2.37211C41.4559 2.55469 41.1931 2.91994 41.5303 2.7604C41.6063 2.72484 41.5016 2.41045 41.6159 2.38102C42.0957 2.25744 42.6286 2.35147 43.1077 2.18031C43.2049 2.14475 43.1736 1.86202 43.2004 1.81058C43.4266 1.39381 43.8243 2.07013 43.9091 2.11836C44.5551 2.4778 45.0192 2.32461 45.6215 2.3238C45.7607 2.32379 45.59 1.94612 45.7237 1.93244C46.4197 1.86654 47.1239 1.88774 47.8129 2.04532C47.9651 2.08131 47.831 2.40758 47.904 2.44135C48.2257 2.58632 48.2864 1.97323 48.5936 2.10047C48.6583 2.12651 48.6266 2.40447 48.6388 2.43474C48.8301 2.90993 48.978 2.22979 49.0248 2.21406C49.6154 1.99999 50.0074 2.70112 50.5865 2.59151C50.6555 2.57769 50.4937 2.22928 50.6881 2.21188C51.9738 2.09404 53.3546 2.16804 54.6248 2.42822C54.8255 2.46815 54.687 2.7341 54.7 2.7664C54.9143 3.27086 55.0361 2.58831 55.1009 2.56163C55.6129 2.36884 56.0991 2.9317 56.4314 2.11571C58.6105 2.36174 60.7404 1.87217 62.9129 2.5635C62.9402 2.57148 62.8968 2.90735 62.9513 2.92182C63.608 3.09948 63.4656 2.58083 63.897 1.9368C64.0052 1.77508 64.3524 2.53873 64.3827 2.59462C64.4937 2.80062 64.39 3.30094 64.4267 3.34059C64.7297 3.65172 64.6553 2.0038 65.0547 1.99688C65.0672 1.99943 65.0197 2.30373 65.0536 2.33336C65.1592 2.42643 65.2602 2.3042 65.3632 2.40704C65.5999 2.64503 65.6901 3.4449 66.0468 2.97284C66.0914 2.9116 66.0073 1.9775 66.3685 2.01593C66.5132 2.03203 67.1441 2.00593 67.3198 2.06375C67.496 2.1215 67.3805 2.42478 67.3932 2.43763C67.8715 2.82862 67.6911 2.9967 67.943 3.58283C68.1942 4.16674 68.1047 2.76594 68.2006 2.60791C68.2968 2.45031 68.6532 2.77353 68.7406 2.88647C68.8283 2.99946 68.7243 3.19266 68.8016 3.25615C69.3131 3.67092 69.012 2.5568 69.1744 2.33166C69.5555 1.79865 69.8745 2.83349 70.2421 2.92956C70.3408 2.95552 70.2569 2.72001 70.3439 2.69648C70.688 2.60645 70.8997 2.92758 71.2819 2.62403C71.3464 2.57453 71.6399 1.94469 71.8598 2.40005C71.8902 2.46573 71.8109 2.72612 71.9602 2.78181C72.1834 2.86541 72.5801 2.91581 72.8123 2.82554C72.9839 2.75875 72.7796 2.33496 72.9985 2.46417C73.0956 2.52188 72.9213 2.77441 73.1033 2.86199C73.2825 2.94958 73.7448 2.93136 73.9256 2.9199C74.1035 2.9083 74.0009 2.58601 74.015 2.56397C74.1003 2.43763 74.4369 2.27619 74.4664 2.27611C75.8836 2.21634 77.2483 2.68771 78.6123 2.55886C78.6848 2.55226 78.7572 2.5441 78.8295 2.53424C78.9465 2.51874 78.8632 2.17846 78.881 2.17257C79.2784 2.02338 78.9778 2.9361 79.26 3.23574C79.2092 2.5434 79.3756 2.66636 79.6496 2.58616C79.7814 2.54696 79.7052 2.27974 79.7169 2.25209C79.9067 1.84156 80.0492 2.36591 80.0856 2.47307C80.2194 2.86724 80.3635 2.3969 80.4571 2.66032C80.5518 2.92173 80.3493 3.31448 80.6189 3.3054C80.6905 3.0562 80.4812 2.41099 80.6836 2.30284C81.4367 1.89392 82.8567 2.38142 83.4848 2.42505C84.1005 2.4688 84.281 2.42041 84.6511 2.5047C85.3005 2.65744 85.0561 2.17992 85.4455 1.95415C85.8477 1.72824 85.6684 2.91442 85.7302 3.16798C85.7915 3.42144 85.8505 3.15879 85.9236 3.29757C85.9963 3.43632 85.8457 3.61146 86.0127 3.66158C86.1809 3.71163 86.618 3.25303 86.6698 2.98627C86.7886 2.42097 86.5742 1.83237 87.0214 2.03403C87.047 2.04601 86.9689 2.35831 87.0665 2.38842C87.827 2.61751 88.616 2.62176 89.3939 2.82372C89.498 2.85202 89.4098 3.19936 89.4703 3.21975C90.0985 3.43325 89.8784 2.85227 90.2165 2.1996C90.1519 3.06341 90.339 3.58903 90.8286 3.58832C91.1223 3.58823 91.0666 3.21197 91.2491 2.94422C91.3036 2.86351 91.5061 3.12002 91.5458 2.94233C91.6634 2.3616 91.4654 1.7151 91.9655 1.96794C91.9872 1.97998 91.922 2.29785 91.9967 2.31626C92.4775 2.43691 92.5418 1.83015 93.0643 1.7518C93.4821 1.69023 94.2128 2.05381 94.6896 2.11119C94.6787 3.08142 95.1365 2.8567 95.3042 2.18718C95.6175 2.21329 95.9471 2.17472 96.2385 2.26723C96.3381 2.29878 96.2727 2.57966 96.2851 2.61002C96.4892 3.08622 96.6177 2.4358 96.6819 2.41046C97.4097 2.16514 97.9799 2.6629 98.6866 2.20214C98.7127 2.18568 98.7706 1.51285 98.9453 2.01187C98.9552 2.04626 98.7158 2.34367 99.0393 2.38022C99.2255 2.4014 99.4976 2.53699 99.7806 2.60261C99.9942 2.65244 100.218 2.65947 100.422 2.53862C100.534 2.47138 100.849 1.94609 101.037 2.38917C101.061 2.44926 101.015 2.63956 101.048 2.75C101.157 3.10202 101.286 2.42881 101.399 3.01807C101.514 3.60745 101.81 4.06542 102.29 3.70323C102.305 3.69279 102.453 3.16303 102.594 3.18288C102.817 3.21482 103.128 3.35252 103.363 3.36767C103.475 3.3747 103.43 3.0348 103.45 3.03023C104.221 2.90282 104.733 3.24268 105.534 3.4312C105.68 3.46642 106.139 3.04084 106.401 3.42084C106.69 3.83679 106.254 5.4579 107.013 5.11424C107.321 4.97669 107.815 2.91549 108.279 4.02494C109.316 3.81394 110.239 4.40934 111.281 4.05793C111.325 4.04322 111.473 3.5251 111.58 3.47818C111.587 3.4755 111.593 3.47437 111.599 3.47497C111.764 3.49258 111.841 3.76802 111.955 3.7905C112.433 3.89204 112.889 3.68838 113.353 3.7677C113.529 3.79769 113.438 4.07146 113.646 4.10895C113.848 4.14638 114.035 3.79414 114.296 4.00948C114.494 4.17395 114.59 4.95393 114.844 5.08556C114.976 4.34996 115.164 4.39497 115.542 4.26646C115.615 4.24152 115.593 3.9723 115.631 3.94744C115.787 3.84108 115.862 4.07624 116.013 3.95878C116.05 3.93062 116.104 3.68107 116.137 3.64405C116.427 3.32056 116.645 3.96028 116.676 4.07062C116.81 4.49242 116.988 4.19439 117.121 4.3811C117.253 4.56763 116.957 4.68708 117.131 4.82369C117.487 5.10321 118.017 5.20102 118.462 5.27787L118.431 5.27202C118.433 5.2725 118.435 5.27299 118.437 5.27348C118.596 5.31496 118.568 4.95758 118.592 4.9558C118.957 4.95526 119.186 5.40001 119.573 4.80891C119.278 6.55728 119.827 4.70569 120.201 5.2088C120.23 5.24953 119.991 6.04545 119.815 6.11235C119.641 6.17981 119.516 5.86359 119.268 5.98544C119.207 6.01228 118.734 6.68302 118.692 6.7205C118.338 7.00322 118.618 5.79647 118.618 5.72573C118.626 5.39059 118.521 5.34714 118.399 5.40833L118.441 5.41647C118.279 5.50377 118.085 5.74468 118.024 5.76538C117.514 5.93265 117.205 5.66981 116.823 5.77163C116.575 5.83665 116.362 6.62114 116.204 6.55753C115.687 6.35143 115.716 5.19808 115.017 6.06667C114.87 6.25357 114.825 7.14545 114.563 6.3932C114.547 6.34562 114.354 5.66837 114.127 6.0454C114.099 6.09292 114.064 6.3494 114.034 6.36718C113.834 6.48211 113.738 6.26213 113.524 6.33738C113.314 6.41318 113.058 6.53606 112.838 6.43033C112.703 6.36651 112.56 5.87328 112.496 5.75093C112.324 5.39888 112.084 5.94516 111.984 5.52858C111.876 5.10981 112.152 4.4916 111.827 4.21118C111.79 4.88277 111.738 5.5716 111.696 6.24688C111.633 6.24254 111.57 6.23674 111.505 6.22986C110.813 6.16041 110.137 5.95843 109.443 5.95369C109.349 5.95369 109.429 6.31931 109.327 6.32858C108.894 6.36582 108.533 6.08915 108.084 6.1668C107.735 6.22817 107.338 6.58779 106.971 6.6611C106.801 5.87938 106.253 6.1051 105.873 6.00776C105.74 5.97406 105.764 5.7697 105.673 5.69601C105.329 5.42279 105.45 6.11316 105.343 6.21276C104.884 6.63715 104.962 5.09954 104.462 5.09965C104.435 5.09917 104.05 5.89239 104.001 5.9398C103.694 6.25 103.977 5.65148 103.805 5.57728C103.491 5.44152 103.285 5.22862 102.888 5.43804C102.774 5.50032 102.469 5.98897 102.287 5.57764C102.263 5.52377 102.301 5.25468 102.279 5.23705C101.893 4.94061 101.816 5.78933 101.56 6.05855C101.307 6.32789 100.995 5.71366 100.935 5.53906C100.779 5.08719 101.095 5.36338 101.11 5.32138C101.271 4.82017 101.001 4.88761 100.807 4.82941C100.84 3.99401 100.558 4.02306 100.603 4.77241C100.608 4.85426 100.769 4.78825 100.807 4.82941C100.568 5.63337 100.261 5.71545 99.9784 4.92752C99.862 4.5977 99.9885 4.23688 99.6696 4.2499C99.6328 4.25155 99.5898 4.25855 99.5391 4.27165C99.3254 4.32789 99.3694 4.90676 99.1832 5.05385C98.7584 5.3896 98.2318 4.83906 97.7791 4.91737C97.6133 4.94576 97.7674 5.26281 97.659 5.2932C97.3668 5.37494 97.1038 5.13677 96.8105 5.25662C96.783 5.26788 96.8489 5.59777 96.7545 5.60162C96.0504 5.63765 95.4394 5.42865 94.6973 5.42711C94.3434 5.42644 93.6876 5.61335 93.3299 5.58008C92.6791 5.52445 91.8913 5.05345 91.3335 5.1763C90.9804 5.2549 91.0601 5.58374 90.9079 5.81019C90.5985 6.24929 90.0884 5.4755 90.007 5.35573C90.0056 5.35175 90.3155 5.27019 90.1476 5.103C90.0467 4.75155 90.0105 5.35416 90.007 5.35573C89.9521 5.27836 89.3438 5.21119 89.2192 5.27586C89.1525 5.31117 89.1941 5.62305 89.1592 5.63555C88.3301 5.92586 87.5177 6.01629 86.6599 5.88219C86.6454 5.87608 86.6622 5.52638 86.6282 5.51638C86.1541 5.36764 85.8336 5.79969 85.4383 6.05915C85.0505 6.3184 84.7277 6.23811 84.4763 5.64184C84.1687 5.72184 83.7475 5.46279 83.4895 5.30566C83.2347 5.14848 83.208 5.82914 83.1859 5.84291C82.5146 6.28328 82.103 5.90006 81.3947 5.85012C81.0674 5.82506 80.3782 5.93417 80.02 6.01401C79.7371 6.07824 79.5614 5.92151 79.2953 6.02751C79.2592 6.04168 79.3005 6.34393 79.2896 6.35576C78.9951 6.72265 79.1278 5.98017 79.0637 5.8489C78.9197 5.55402 78.8092 5.34441 78.6541 5.282C78.5628 5.24331 78.4553 5.26096 78.313 5.34962C78.2273 5.40275 77.9898 6.47256 77.83 6.53737C77.6222 6.61969 77.6955 6.2364 77.4766 6.33235C77.4578 6.34021 77.4656 6.57585 77.3288 6.56757C76.6957 6.5322 76.033 6.4053 75.3652 6.43934C75.2775 6.44303 75.3954 6.81514 75.2697 6.82661C74.6827 6.88009 74.0108 6.87676 73.4218 6.71097C73.2791 6.66895 73.364 6.40578 73.3319 6.32854C73.1352 5.86123 72.8748 6.5488 72.83 6.56253C71.75 6.90795 70.9431 6.30215 69.8338 6.61422C69.7759 6.63242 69.3352 7.37211 69.1211 6.74711C69.1066 6.70554 68.895 6.06599 68.7226 6.5083C68.7119 6.53597 68.8436 6.86485 68.6224 6.83463C68.4025 6.80447 68.0431 7.03121 67.7374 6.67242C67.6411 6.55939 67.4077 5.92179 67.1315 6.43741C67.1139 6.47338 66.6922 7.63606 66.5209 6.84124C66.493 6.7104 66.5071 5.86619 66.1701 6.3043C66.1057 6.38922 66.2282 6.57551 66.0566 6.6958C65.7887 6.88126 65.4485 6.66065 65.1313 7.04169C65.0763 7.10913 64.8465 7.68566 64.6467 7.25406C64.6154 7.18647 64.6683 6.90386 64.566 6.87396C64.0785 6.73051 63.5695 6.92715 63.0826 6.74001C62.9086 6.6743 62.9898 6.21749 62.8072 6.09836C62.6247 5.97926 62.2571 5.86778 62.0694 6.07896C61.8817 6.29022 62.1023 7.01265 61.8166 7.07534C60.5946 7.34729 59.3491 6.9415 58.1256 6.89898C57.9424 6.89263 58.0986 7.14988 57.8283 7.15918C56.8237 7.19474 55.1225 7.46587 54.2507 6.92803C53.5561 6.49719 54.416 6.14664 53.8874 5.97531C53.6322 5.89363 53.3699 6.74191 53.3087 6.76947C52.7113 7.04909 52.2814 6.6822 51.7486 6.80557C51.6379 6.83118 51.7524 7.1714 51.6581 7.18942C51.3358 7.25398 50.9923 7.10688 50.6814 7.13987C50.542 7.15546 50.572 7.41624 50.443 7.39818C50.1341 7.35797 49.8587 7.25262 49.5595 7.01261C49.5321 6.99075 49.7092 6.66284 49.4838 6.65443C49.1188 6.64173 48.6604 6.40763 48.241 6.66394C48.1166 6.74102 48.1215 7.33808 47.8441 6.93021C47.7859 6.84503 47.8469 6.127 47.5411 6.75154C47.4873 6.85537 46.9804 7.6993 46.7132 7.16501C46.6429 7.02438 46.4597 6.44062 46.3108 6.53526C46.2906 6.55031 46.3776 6.86963 46.2534 6.90295C45.8157 7.01478 45.3516 6.98814 44.899 7.096C44.7796 7.12541 44.9635 7.45431 44.7854 7.48755C44.2958 7.57945 43.6781 7.50504 43.1914 7.40912C43.0119 7.37312 43.131 7.09623 43.1175 7.06653C42.9003 6.58342 42.787 7.24216 42.718 7.28159C42.2857 7.51802 41.9604 7.21478 41.5645 7.30292C41.4556 7.3264 41.5382 7.63826 41.5169 7.66654C41.2957 7.94304 41.4546 7.37795 41.3107 7.3183C40.9073 7.14935 40.4598 7.18185 40.0527 7.22855C39.9031 7.24616 40.0774 7.60648 39.9431 7.61809C39.1549 7.69359 38.3354 7.67228 37.5558 7.48486C37.4091 7.44891 37.4965 7.16782 37.465 7.10446C37.2468 6.66116 36.9523 7.27554 36.8832 7.33474C36.5688 7.60502 36.4406 7.35982 36.1591 7.4106C34.7776 7.66311 33.0768 7.52727 31.7643 7.44767C30.0694 7.34531 28.7411 7.10113 27.1228 7.19687C27.0197 7.20261 27.1299 7.57283 27.0411 7.58255C25.892 7.69116 24.7694 7.56429 23.6169 7.69074C23.5231 7.70045 23.6643 8.0508 23.514 8.07823C23.2056 8.13696 22.813 8.12427 22.4975 8.01686C22.3437 7.96513 22.5439 7.6592 22.3891 7.61332C22.0287 7.5058 21.6435 7.48703 21.2752 7.54965C21.1185 7.57706 21.3616 7.93376 21.1574 7.94129C19.7729 7.99991 18.4043 8.08462 16.9985 7.64073C16.9018 7.61025 16.8054 6.87874 16.6033 7.02266C16.5912 7.22632 16.596 7.46556 16.5929 7.68308C14.5715 7.83359 12.5692 7.61252 10.5428 7.60671C10.4573 7.60655 10.6114 7.99243 10.4459 7.9941C9.48671 8.00421 8.56141 8.1271 7.57501 7.75732C7.47718 7.72118 7.51578 7.03719 7.231 7.14525C7.18086 7.16494 6.75054 7.26318 6.64174 7.41332C6.62698 7.43594 6.71087 7.75352 6.57217 7.7651C5.76602 7.82686 4.91855 7.76805 4.10886 7.58655C3.97817 7.55665 4.11117 7.21478 4.01803 7.19054C3.35778 7.02114 2.64729 7.29109 2.01405 6.99316C1.59018 6.79251 1.73614 6.20296 1.50317 5.62886C1.47022 5.54787 1.20965 5.53925 1.19063 5.20331C1.14209 4.35855 1.2529 3.43084 1.18626 2.53066C1.17212 2.33676 0.826889 2.55156 1.02558 2.07915C1.03949 2.04752 1.28971 1.88769 1.34935 1.72756C1.39088 1.61685 1.30711 1.27626 1.39323 1.13398C1.47935 0.991846 1.58127 1.27682 1.72516 1.10896C1.86896 0.939057 1.79809 0.551192 2.09002 0.500314ZM82.355 4.60317C82.1184 4.28001 82.1018 5.47677 82.3485 5.18682C82.3603 5.17139 82.3672 4.61901 82.355 4.60317ZM110.249 5.05497C109.964 4.51566 109.723 5.28164 109.922 5.69802C110.122 6.11387 110.336 5.21843 110.249 5.05497ZM113.348 4.8222C113.04 4.37571 112.851 6.06256 113.23 5.75263C113.251 5.73523 113.365 4.84814 113.348 4.8222ZM2.53651 5.44721C2.53305 5.43138 2.34566 5.41899 2.34145 5.43481C2.24808 5.81637 2.62279 5.84088 2.53651 5.44721ZM116.399 4.90247C116.343 4.65329 115.979 4.84413 116.05 5.15208C116.104 5.39885 116.464 5.21076 116.399 4.90247ZM70.2612 3.51332C70.2573 3.49555 70.1214 3.48165 70.1257 3.58237C70.1402 3.90675 70.3272 3.81218 70.2612 3.51332ZM121.483 6.3383C120.588 6.04304 120.915 4.57941 121.456 4.97894C121.569 5.0481 121.053 5.31036 121.163 5.48413C121.422 5.81857 121.827 5.00239 122.074 5.5249C122.129 5.62357 121.541 6.36164 121.481 6.33988C121.481 6.33935 121.482 6.33882 121.483 6.3383ZM82.2001 3.16831C82.1954 3.15256 82.0078 3.14036 82.0033 3.15611C81.9075 3.53741 82.2855 3.5622 82.2001 3.16831ZM62.4217 2.89858C62.4112 2.86503 61.9777 2.84047 61.9638 2.87176C61.7478 3.49641 62.6245 3.54791 62.4217 2.89858ZM94.697 2.13702C94.8916 1.75374 95.1486 1.70748 95.3033 2.1867C95.1112 2.162 94.8932 2.15936 94.697 2.13702Z"
                                                            fill="currentcolor"
                                                        />
                                                    </svg>
                                                </span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button
                                                class="nav-link"
                                                id="trending-tab"
                                                data-bs-toggle="tab"
                                                data-bs-target="#trending"
                                                type="button"
                                                role="tab"
                                                aria-controls="trending"
                                                aria-selected="false"
                                            >
                                                Trending
                                                <span>
                                                    <svg
                                                        width="123"
                                                        height="9"
                                                        viewBox="0 0 123 9"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <path
                                                            d="M2.09002 0.500314C2.7682 0.384879 3.66028 0.481577 4.34058 0.623294C4.55365 0.667213 4.44966 0.880993 4.5969 0.920856C4.88485 0.998549 5.15009 0.890162 5.43482 0.983677C5.5292 1.01571 5.41796 1.35345 5.51679 1.37935C6.05851 1.51885 6.56613 1.4249 7.11434 1.48724C9.80953 1.79499 12.4593 1.87731 15.1823 1.98539C16.0834 2.02069 17.179 2.30745 18.1031 2.15888C18.2114 2.14123 18.1418 1.84754 18.1621 1.8229C18.4797 1.44564 18.3819 2.04248 18.5945 2.11805C19.4391 2.41636 20.366 2.42822 21.172 2.30114C21.5147 2.24621 21.1607 1.66643 21.5118 1.98934C21.5362 2.01115 21.4543 2.3256 21.549 2.35743C21.7638 2.429 22.1675 2.36637 22.333 2.38845C22.6521 2.43258 22.7046 2.42857 23.0053 2.42718C23.4154 2.42802 23.9093 2.57551 24.3507 2.49729C24.4449 2.47967 24.3146 2.16085 24.4643 2.10377C24.6142 2.04677 25.0129 2.06741 25.1483 2.14084C25.2837 2.21431 25.2307 2.46745 25.2554 2.52487C25.4589 3.00957 25.9073 2.32623 25.9661 2.30854C27.0416 2.00599 27.979 2.37561 28.9882 2.3579C29.7609 2.34353 30.5836 2.20287 31.3139 2.20829C32.1836 2.21599 32.9343 2.37757 33.7782 2.33381C33.8674 2.32956 33.7566 1.954 33.8655 1.94804C35.023 1.88511 36.1829 1.9072 37.3394 2.14298C37.4563 2.16694 37.3116 2.50065 37.4287 2.5444C38.1467 2.80491 39.2773 3.44049 39.6716 1.99143C40.1553 2.03983 40.7421 2.08842 41.176 2.37211C41.4559 2.55469 41.1931 2.91994 41.5303 2.7604C41.6063 2.72484 41.5016 2.41045 41.6159 2.38102C42.0957 2.25744 42.6286 2.35147 43.1077 2.18031C43.2049 2.14475 43.1736 1.86202 43.2004 1.81058C43.4266 1.39381 43.8243 2.07013 43.9091 2.11836C44.5551 2.4778 45.0192 2.32461 45.6215 2.3238C45.7607 2.32379 45.59 1.94612 45.7237 1.93244C46.4197 1.86654 47.1239 1.88774 47.8129 2.04532C47.9651 2.08131 47.831 2.40758 47.904 2.44135C48.2257 2.58632 48.2864 1.97323 48.5936 2.10047C48.6583 2.12651 48.6266 2.40447 48.6388 2.43474C48.8301 2.90993 48.978 2.22979 49.0248 2.21406C49.6154 1.99999 50.0074 2.70112 50.5865 2.59151C50.6555 2.57769 50.4937 2.22928 50.6881 2.21188C51.9738 2.09404 53.3546 2.16804 54.6248 2.42822C54.8255 2.46815 54.687 2.7341 54.7 2.7664C54.9143 3.27086 55.0361 2.58831 55.1009 2.56163C55.6129 2.36884 56.0991 2.9317 56.4314 2.11571C58.6105 2.36174 60.7404 1.87217 62.9129 2.5635C62.9402 2.57148 62.8968 2.90735 62.9513 2.92182C63.608 3.09948 63.4656 2.58083 63.897 1.9368C64.0052 1.77508 64.3524 2.53873 64.3827 2.59462C64.4937 2.80062 64.39 3.30094 64.4267 3.34059C64.7297 3.65172 64.6553 2.0038 65.0547 1.99688C65.0672 1.99943 65.0197 2.30373 65.0536 2.33336C65.1592 2.42643 65.2602 2.3042 65.3632 2.40704C65.5999 2.64503 65.6901 3.4449 66.0468 2.97284C66.0914 2.9116 66.0073 1.9775 66.3685 2.01593C66.5132 2.03203 67.1441 2.00593 67.3198 2.06375C67.496 2.1215 67.3805 2.42478 67.3932 2.43763C67.8715 2.82862 67.6911 2.9967 67.943 3.58283C68.1942 4.16674 68.1047 2.76594 68.2006 2.60791C68.2968 2.45031 68.6532 2.77353 68.7406 2.88647C68.8283 2.99946 68.7243 3.19266 68.8016 3.25615C69.3131 3.67092 69.012 2.5568 69.1744 2.33166C69.5555 1.79865 69.8745 2.83349 70.2421 2.92956C70.3408 2.95552 70.2569 2.72001 70.3439 2.69648C70.688 2.60645 70.8997 2.92758 71.2819 2.62403C71.3464 2.57453 71.6399 1.94469 71.8598 2.40005C71.8902 2.46573 71.8109 2.72612 71.9602 2.78181C72.1834 2.86541 72.5801 2.91581 72.8123 2.82554C72.9839 2.75875 72.7796 2.33496 72.9985 2.46417C73.0956 2.52188 72.9213 2.77441 73.1033 2.86199C73.2825 2.94958 73.7448 2.93136 73.9256 2.9199C74.1035 2.9083 74.0009 2.58601 74.015 2.56397C74.1003 2.43763 74.4369 2.27619 74.4664 2.27611C75.8836 2.21634 77.2483 2.68771 78.6123 2.55886C78.6848 2.55226 78.7572 2.5441 78.8295 2.53424C78.9465 2.51874 78.8632 2.17846 78.881 2.17257C79.2784 2.02338 78.9778 2.9361 79.26 3.23574C79.2092 2.5434 79.3756 2.66636 79.6496 2.58616C79.7814 2.54696 79.7052 2.27974 79.7169 2.25209C79.9067 1.84156 80.0492 2.36591 80.0856 2.47307C80.2194 2.86724 80.3635 2.3969 80.4571 2.66032C80.5518 2.92173 80.3493 3.31448 80.6189 3.3054C80.6905 3.0562 80.4812 2.41099 80.6836 2.30284C81.4367 1.89392 82.8567 2.38142 83.4848 2.42505C84.1005 2.4688 84.281 2.42041 84.6511 2.5047C85.3005 2.65744 85.0561 2.17992 85.4455 1.95415C85.8477 1.72824 85.6684 2.91442 85.7302 3.16798C85.7915 3.42144 85.8505 3.15879 85.9236 3.29757C85.9963 3.43632 85.8457 3.61146 86.0127 3.66158C86.1809 3.71163 86.618 3.25303 86.6698 2.98627C86.7886 2.42097 86.5742 1.83237 87.0214 2.03403C87.047 2.04601 86.9689 2.35831 87.0665 2.38842C87.827 2.61751 88.616 2.62176 89.3939 2.82372C89.498 2.85202 89.4098 3.19936 89.4703 3.21975C90.0985 3.43325 89.8784 2.85227 90.2165 2.1996C90.1519 3.06341 90.339 3.58903 90.8286 3.58832C91.1223 3.58823 91.0666 3.21197 91.2491 2.94422C91.3036 2.86351 91.5061 3.12002 91.5458 2.94233C91.6634 2.3616 91.4654 1.7151 91.9655 1.96794C91.9872 1.97998 91.922 2.29785 91.9967 2.31626C92.4775 2.43691 92.5418 1.83015 93.0643 1.7518C93.4821 1.69023 94.2128 2.05381 94.6896 2.11119C94.6787 3.08142 95.1365 2.8567 95.3042 2.18718C95.6175 2.21329 95.9471 2.17472 96.2385 2.26723C96.3381 2.29878 96.2727 2.57966 96.2851 2.61002C96.4892 3.08622 96.6177 2.4358 96.6819 2.41046C97.4097 2.16514 97.9799 2.6629 98.6866 2.20214C98.7127 2.18568 98.7706 1.51285 98.9453 2.01187C98.9552 2.04626 98.7158 2.34367 99.0393 2.38022C99.2255 2.4014 99.4976 2.53699 99.7806 2.60261C99.9942 2.65244 100.218 2.65947 100.422 2.53862C100.534 2.47138 100.849 1.94609 101.037 2.38917C101.061 2.44926 101.015 2.63956 101.048 2.75C101.157 3.10202 101.286 2.42881 101.399 3.01807C101.514 3.60745 101.81 4.06542 102.29 3.70323C102.305 3.69279 102.453 3.16303 102.594 3.18288C102.817 3.21482 103.128 3.35252 103.363 3.36767C103.475 3.3747 103.43 3.0348 103.45 3.03023C104.221 2.90282 104.733 3.24268 105.534 3.4312C105.68 3.46642 106.139 3.04084 106.401 3.42084C106.69 3.83679 106.254 5.4579 107.013 5.11424C107.321 4.97669 107.815 2.91549 108.279 4.02494C109.316 3.81394 110.239 4.40934 111.281 4.05793C111.325 4.04322 111.473 3.5251 111.58 3.47818C111.587 3.4755 111.593 3.47437 111.599 3.47497C111.764 3.49258 111.841 3.76802 111.955 3.7905C112.433 3.89204 112.889 3.68838 113.353 3.7677C113.529 3.79769 113.438 4.07146 113.646 4.10895C113.848 4.14638 114.035 3.79414 114.296 4.00948C114.494 4.17395 114.59 4.95393 114.844 5.08556C114.976 4.34996 115.164 4.39497 115.542 4.26646C115.615 4.24152 115.593 3.9723 115.631 3.94744C115.787 3.84108 115.862 4.07624 116.013 3.95878C116.05 3.93062 116.104 3.68107 116.137 3.64405C116.427 3.32056 116.645 3.96028 116.676 4.07062C116.81 4.49242 116.988 4.19439 117.121 4.3811C117.253 4.56763 116.957 4.68708 117.131 4.82369C117.487 5.10321 118.017 5.20102 118.462 5.27787L118.431 5.27202C118.433 5.2725 118.435 5.27299 118.437 5.27348C118.596 5.31496 118.568 4.95758 118.592 4.9558C118.957 4.95526 119.186 5.40001 119.573 4.80891C119.278 6.55728 119.827 4.70569 120.201 5.2088C120.23 5.24953 119.991 6.04545 119.815 6.11235C119.641 6.17981 119.516 5.86359 119.268 5.98544C119.207 6.01228 118.734 6.68302 118.692 6.7205C118.338 7.00322 118.618 5.79647 118.618 5.72573C118.626 5.39059 118.521 5.34714 118.399 5.40833L118.441 5.41647C118.279 5.50377 118.085 5.74468 118.024 5.76538C117.514 5.93265 117.205 5.66981 116.823 5.77163C116.575 5.83665 116.362 6.62114 116.204 6.55753C115.687 6.35143 115.716 5.19808 115.017 6.06667C114.87 6.25357 114.825 7.14545 114.563 6.3932C114.547 6.34562 114.354 5.66837 114.127 6.0454C114.099 6.09292 114.064 6.3494 114.034 6.36718C113.834 6.48211 113.738 6.26213 113.524 6.33738C113.314 6.41318 113.058 6.53606 112.838 6.43033C112.703 6.36651 112.56 5.87328 112.496 5.75093C112.324 5.39888 112.084 5.94516 111.984 5.52858C111.876 5.10981 112.152 4.4916 111.827 4.21118C111.79 4.88277 111.738 5.5716 111.696 6.24688C111.633 6.24254 111.57 6.23674 111.505 6.22986C110.813 6.16041 110.137 5.95843 109.443 5.95369C109.349 5.95369 109.429 6.31931 109.327 6.32858C108.894 6.36582 108.533 6.08915 108.084 6.1668C107.735 6.22817 107.338 6.58779 106.971 6.6611C106.801 5.87938 106.253 6.1051 105.873 6.00776C105.74 5.97406 105.764 5.7697 105.673 5.69601C105.329 5.42279 105.45 6.11316 105.343 6.21276C104.884 6.63715 104.962 5.09954 104.462 5.09965C104.435 5.09917 104.05 5.89239 104.001 5.9398C103.694 6.25 103.977 5.65148 103.805 5.57728C103.491 5.44152 103.285 5.22862 102.888 5.43804C102.774 5.50032 102.469 5.98897 102.287 5.57764C102.263 5.52377 102.301 5.25468 102.279 5.23705C101.893 4.94061 101.816 5.78933 101.56 6.05855C101.307 6.32789 100.995 5.71366 100.935 5.53906C100.779 5.08719 101.095 5.36338 101.11 5.32138C101.271 4.82017 101.001 4.88761 100.807 4.82941C100.84 3.99401 100.558 4.02306 100.603 4.77241C100.608 4.85426 100.769 4.78825 100.807 4.82941C100.568 5.63337 100.261 5.71545 99.9784 4.92752C99.862 4.5977 99.9885 4.23688 99.6696 4.2499C99.6328 4.25155 99.5898 4.25855 99.5391 4.27165C99.3254 4.32789 99.3694 4.90676 99.1832 5.05385C98.7584 5.3896 98.2318 4.83906 97.7791 4.91737C97.6133 4.94576 97.7674 5.26281 97.659 5.2932C97.3668 5.37494 97.1038 5.13677 96.8105 5.25662C96.783 5.26788 96.8489 5.59777 96.7545 5.60162C96.0504 5.63765 95.4394 5.42865 94.6973 5.42711C94.3434 5.42644 93.6876 5.61335 93.3299 5.58008C92.6791 5.52445 91.8913 5.05345 91.3335 5.1763C90.9804 5.2549 91.0601 5.58374 90.9079 5.81019C90.5985 6.24929 90.0884 5.4755 90.007 5.35573C90.0056 5.35175 90.3155 5.27019 90.1476 5.103C90.0467 4.75155 90.0105 5.35416 90.007 5.35573C89.9521 5.27836 89.3438 5.21119 89.2192 5.27586C89.1525 5.31117 89.1941 5.62305 89.1592 5.63555C88.3301 5.92586 87.5177 6.01629 86.6599 5.88219C86.6454 5.87608 86.6622 5.52638 86.6282 5.51638C86.1541 5.36764 85.8336 5.79969 85.4383 6.05915C85.0505 6.3184 84.7277 6.23811 84.4763 5.64184C84.1687 5.72184 83.7475 5.46279 83.4895 5.30566C83.2347 5.14848 83.208 5.82914 83.1859 5.84291C82.5146 6.28328 82.103 5.90006 81.3947 5.85012C81.0674 5.82506 80.3782 5.93417 80.02 6.01401C79.7371 6.07824 79.5614 5.92151 79.2953 6.02751C79.2592 6.04168 79.3005 6.34393 79.2896 6.35576C78.9951 6.72265 79.1278 5.98017 79.0637 5.8489C78.9197 5.55402 78.8092 5.34441 78.6541 5.282C78.5628 5.24331 78.4553 5.26096 78.313 5.34962C78.2273 5.40275 77.9898 6.47256 77.83 6.53737C77.6222 6.61969 77.6955 6.2364 77.4766 6.33235C77.4578 6.34021 77.4656 6.57585 77.3288 6.56757C76.6957 6.5322 76.033 6.4053 75.3652 6.43934C75.2775 6.44303 75.3954 6.81514 75.2697 6.82661C74.6827 6.88009 74.0108 6.87676 73.4218 6.71097C73.2791 6.66895 73.364 6.40578 73.3319 6.32854C73.1352 5.86123 72.8748 6.5488 72.83 6.56253C71.75 6.90795 70.9431 6.30215 69.8338 6.61422C69.7759 6.63242 69.3352 7.37211 69.1211 6.74711C69.1066 6.70554 68.895 6.06599 68.7226 6.5083C68.7119 6.53597 68.8436 6.86485 68.6224 6.83463C68.4025 6.80447 68.0431 7.03121 67.7374 6.67242C67.6411 6.55939 67.4077 5.92179 67.1315 6.43741C67.1139 6.47338 66.6922 7.63606 66.5209 6.84124C66.493 6.7104 66.5071 5.86619 66.1701 6.3043C66.1057 6.38922 66.2282 6.57551 66.0566 6.6958C65.7887 6.88126 65.4485 6.66065 65.1313 7.04169C65.0763 7.10913 64.8465 7.68566 64.6467 7.25406C64.6154 7.18647 64.6683 6.90386 64.566 6.87396C64.0785 6.73051 63.5695 6.92715 63.0826 6.74001C62.9086 6.6743 62.9898 6.21749 62.8072 6.09836C62.6247 5.97926 62.2571 5.86778 62.0694 6.07896C61.8817 6.29022 62.1023 7.01265 61.8166 7.07534C60.5946 7.34729 59.3491 6.9415 58.1256 6.89898C57.9424 6.89263 58.0986 7.14988 57.8283 7.15918C56.8237 7.19474 55.1225 7.46587 54.2507 6.92803C53.5561 6.49719 54.416 6.14664 53.8874 5.97531C53.6322 5.89363 53.3699 6.74191 53.3087 6.76947C52.7113 7.04909 52.2814 6.6822 51.7486 6.80557C51.6379 6.83118 51.7524 7.1714 51.6581 7.18942C51.3358 7.25398 50.9923 7.10688 50.6814 7.13987C50.542 7.15546 50.572 7.41624 50.443 7.39818C50.1341 7.35797 49.8587 7.25262 49.5595 7.01261C49.5321 6.99075 49.7092 6.66284 49.4838 6.65443C49.1188 6.64173 48.6604 6.40763 48.241 6.66394C48.1166 6.74102 48.1215 7.33808 47.8441 6.93021C47.7859 6.84503 47.8469 6.127 47.5411 6.75154C47.4873 6.85537 46.9804 7.6993 46.7132 7.16501C46.6429 7.02438 46.4597 6.44062 46.3108 6.53526C46.2906 6.55031 46.3776 6.86963 46.2534 6.90295C45.8157 7.01478 45.3516 6.98814 44.899 7.096C44.7796 7.12541 44.9635 7.45431 44.7854 7.48755C44.2958 7.57945 43.6781 7.50504 43.1914 7.40912C43.0119 7.37312 43.131 7.09623 43.1175 7.06653C42.9003 6.58342 42.787 7.24216 42.718 7.28159C42.2857 7.51802 41.9604 7.21478 41.5645 7.30292C41.4556 7.3264 41.5382 7.63826 41.5169 7.66654C41.2957 7.94304 41.4546 7.37795 41.3107 7.3183C40.9073 7.14935 40.4598 7.18185 40.0527 7.22855C39.9031 7.24616 40.0774 7.60648 39.9431 7.61809C39.1549 7.69359 38.3354 7.67228 37.5558 7.48486C37.4091 7.44891 37.4965 7.16782 37.465 7.10446C37.2468 6.66116 36.9523 7.27554 36.8832 7.33474C36.5688 7.60502 36.4406 7.35982 36.1591 7.4106C34.7776 7.66311 33.0768 7.52727 31.7643 7.44767C30.0694 7.34531 28.7411 7.10113 27.1228 7.19687C27.0197 7.20261 27.1299 7.57283 27.0411 7.58255C25.892 7.69116 24.7694 7.56429 23.6169 7.69074C23.5231 7.70045 23.6643 8.0508 23.514 8.07823C23.2056 8.13696 22.813 8.12427 22.4975 8.01686C22.3437 7.96513 22.5439 7.6592 22.3891 7.61332C22.0287 7.5058 21.6435 7.48703 21.2752 7.54965C21.1185 7.57706 21.3616 7.93376 21.1574 7.94129C19.7729 7.99991 18.4043 8.08462 16.9985 7.64073C16.9018 7.61025 16.8054 6.87874 16.6033 7.02266C16.5912 7.22632 16.596 7.46556 16.5929 7.68308C14.5715 7.83359 12.5692 7.61252 10.5428 7.60671C10.4573 7.60655 10.6114 7.99243 10.4459 7.9941C9.48671 8.00421 8.56141 8.1271 7.57501 7.75732C7.47718 7.72118 7.51578 7.03719 7.231 7.14525C7.18086 7.16494 6.75054 7.26318 6.64174 7.41332C6.62698 7.43594 6.71087 7.75352 6.57217 7.7651C5.76602 7.82686 4.91855 7.76805 4.10886 7.58655C3.97817 7.55665 4.11117 7.21478 4.01803 7.19054C3.35778 7.02114 2.64729 7.29109 2.01405 6.99316C1.59018 6.79251 1.73614 6.20296 1.50317 5.62886C1.47022 5.54787 1.20965 5.53925 1.19063 5.20331C1.14209 4.35855 1.2529 3.43084 1.18626 2.53066C1.17212 2.33676 0.826889 2.55156 1.02558 2.07915C1.03949 2.04752 1.28971 1.88769 1.34935 1.72756C1.39088 1.61685 1.30711 1.27626 1.39323 1.13398C1.47935 0.991846 1.58127 1.27682 1.72516 1.10896C1.86896 0.939057 1.79809 0.551192 2.09002 0.500314ZM82.355 4.60317C82.1184 4.28001 82.1018 5.47677 82.3485 5.18682C82.3603 5.17139 82.3672 4.61901 82.355 4.60317ZM110.249 5.05497C109.964 4.51566 109.723 5.28164 109.922 5.69802C110.122 6.11387 110.336 5.21843 110.249 5.05497ZM113.348 4.8222C113.04 4.37571 112.851 6.06256 113.23 5.75263C113.251 5.73523 113.365 4.84814 113.348 4.8222ZM2.53651 5.44721C2.53305 5.43138 2.34566 5.41899 2.34145 5.43481C2.24808 5.81637 2.62279 5.84088 2.53651 5.44721ZM116.399 4.90247C116.343 4.65329 115.979 4.84413 116.05 5.15208C116.104 5.39885 116.464 5.21076 116.399 4.90247ZM70.2612 3.51332C70.2573 3.49555 70.1214 3.48165 70.1257 3.58237C70.1402 3.90675 70.3272 3.81218 70.2612 3.51332ZM121.483 6.3383C120.588 6.04304 120.915 4.57941 121.456 4.97894C121.569 5.0481 121.053 5.31036 121.163 5.48413C121.422 5.81857 121.827 5.00239 122.074 5.5249C122.129 5.62357 121.541 6.36164 121.481 6.33988C121.481 6.33935 121.482 6.33882 121.483 6.3383ZM82.2001 3.16831C82.1954 3.15256 82.0078 3.14036 82.0033 3.15611C81.9075 3.53741 82.2855 3.5622 82.2001 3.16831ZM62.4217 2.89858C62.4112 2.86503 61.9777 2.84047 61.9638 2.87176C61.7478 3.49641 62.6245 3.54791 62.4217 2.89858ZM94.697 2.13702C94.8916 1.75374 95.1486 1.70748 95.3033 2.1867C95.1112 2.162 94.8932 2.15936 94.697 2.13702Z"
                                                            fill="currentcolor"
                                                        />
                                                    </svg>
                                                </span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button
                                                class="nav-link"
                                                id="popularity-tab"
                                                data-bs-toggle="tab"
                                                data-bs-target="#popularity"
                                                type="button"
                                                role="tab"
                                                aria-controls="popularity"
                                                aria-selected="false"
                                            >
                                                Popularity
                                                <span>
                                                    <svg
                                                        width="123"
                                                        height="9"
                                                        viewBox="0 0 123 9"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <path
                                                            d="M2.09002 0.500314C2.7682 0.384879 3.66028 0.481577 4.34058 0.623294C4.55365 0.667213 4.44966 0.880993 4.5969 0.920856C4.88485 0.998549 5.15009 0.890162 5.43482 0.983677C5.5292 1.01571 5.41796 1.35345 5.51679 1.37935C6.05851 1.51885 6.56613 1.4249 7.11434 1.48724C9.80953 1.79499 12.4593 1.87731 15.1823 1.98539C16.0834 2.02069 17.179 2.30745 18.1031 2.15888C18.2114 2.14123 18.1418 1.84754 18.1621 1.8229C18.4797 1.44564 18.3819 2.04248 18.5945 2.11805C19.4391 2.41636 20.366 2.42822 21.172 2.30114C21.5147 2.24621 21.1607 1.66643 21.5118 1.98934C21.5362 2.01115 21.4543 2.3256 21.549 2.35743C21.7638 2.429 22.1675 2.36637 22.333 2.38845C22.6521 2.43258 22.7046 2.42857 23.0053 2.42718C23.4154 2.42802 23.9093 2.57551 24.3507 2.49729C24.4449 2.47967 24.3146 2.16085 24.4643 2.10377C24.6142 2.04677 25.0129 2.06741 25.1483 2.14084C25.2837 2.21431 25.2307 2.46745 25.2554 2.52487C25.4589 3.00957 25.9073 2.32623 25.9661 2.30854C27.0416 2.00599 27.979 2.37561 28.9882 2.3579C29.7609 2.34353 30.5836 2.20287 31.3139 2.20829C32.1836 2.21599 32.9343 2.37757 33.7782 2.33381C33.8674 2.32956 33.7566 1.954 33.8655 1.94804C35.023 1.88511 36.1829 1.9072 37.3394 2.14298C37.4563 2.16694 37.3116 2.50065 37.4287 2.5444C38.1467 2.80491 39.2773 3.44049 39.6716 1.99143C40.1553 2.03983 40.7421 2.08842 41.176 2.37211C41.4559 2.55469 41.1931 2.91994 41.5303 2.7604C41.6063 2.72484 41.5016 2.41045 41.6159 2.38102C42.0957 2.25744 42.6286 2.35147 43.1077 2.18031C43.2049 2.14475 43.1736 1.86202 43.2004 1.81058C43.4266 1.39381 43.8243 2.07013 43.9091 2.11836C44.5551 2.4778 45.0192 2.32461 45.6215 2.3238C45.7607 2.32379 45.59 1.94612 45.7237 1.93244C46.4197 1.86654 47.1239 1.88774 47.8129 2.04532C47.9651 2.08131 47.831 2.40758 47.904 2.44135C48.2257 2.58632 48.2864 1.97323 48.5936 2.10047C48.6583 2.12651 48.6266 2.40447 48.6388 2.43474C48.8301 2.90993 48.978 2.22979 49.0248 2.21406C49.6154 1.99999 50.0074 2.70112 50.5865 2.59151C50.6555 2.57769 50.4937 2.22928 50.6881 2.21188C51.9738 2.09404 53.3546 2.16804 54.6248 2.42822C54.8255 2.46815 54.687 2.7341 54.7 2.7664C54.9143 3.27086 55.0361 2.58831 55.1009 2.56163C55.6129 2.36884 56.0991 2.9317 56.4314 2.11571C58.6105 2.36174 60.7404 1.87217 62.9129 2.5635C62.9402 2.57148 62.8968 2.90735 62.9513 2.92182C63.608 3.09948 63.4656 2.58083 63.897 1.9368C64.0052 1.77508 64.3524 2.53873 64.3827 2.59462C64.4937 2.80062 64.39 3.30094 64.4267 3.34059C64.7297 3.65172 64.6553 2.0038 65.0547 1.99688C65.0672 1.99943 65.0197 2.30373 65.0536 2.33336C65.1592 2.42643 65.2602 2.3042 65.3632 2.40704C65.5999 2.64503 65.6901 3.4449 66.0468 2.97284C66.0914 2.9116 66.0073 1.9775 66.3685 2.01593C66.5132 2.03203 67.1441 2.00593 67.3198 2.06375C67.496 2.1215 67.3805 2.42478 67.3932 2.43763C67.8715 2.82862 67.6911 2.9967 67.943 3.58283C68.1942 4.16674 68.1047 2.76594 68.2006 2.60791C68.2968 2.45031 68.6532 2.77353 68.7406 2.88647C68.8283 2.99946 68.7243 3.19266 68.8016 3.25615C69.3131 3.67092 69.012 2.5568 69.1744 2.33166C69.5555 1.79865 69.8745 2.83349 70.2421 2.92956C70.3408 2.95552 70.2569 2.72001 70.3439 2.69648C70.688 2.60645 70.8997 2.92758 71.2819 2.62403C71.3464 2.57453 71.6399 1.94469 71.8598 2.40005C71.8902 2.46573 71.8109 2.72612 71.9602 2.78181C72.1834 2.86541 72.5801 2.91581 72.8123 2.82554C72.9839 2.75875 72.7796 2.33496 72.9985 2.46417C73.0956 2.52188 72.9213 2.77441 73.1033 2.86199C73.2825 2.94958 73.7448 2.93136 73.9256 2.9199C74.1035 2.9083 74.0009 2.58601 74.015 2.56397C74.1003 2.43763 74.4369 2.27619 74.4664 2.27611C75.8836 2.21634 77.2483 2.68771 78.6123 2.55886C78.6848 2.55226 78.7572 2.5441 78.8295 2.53424C78.9465 2.51874 78.8632 2.17846 78.881 2.17257C79.2784 2.02338 78.9778 2.9361 79.26 3.23574C79.2092 2.5434 79.3756 2.66636 79.6496 2.58616C79.7814 2.54696 79.7052 2.27974 79.7169 2.25209C79.9067 1.84156 80.0492 2.36591 80.0856 2.47307C80.2194 2.86724 80.3635 2.3969 80.4571 2.66032C80.5518 2.92173 80.3493 3.31448 80.6189 3.3054C80.6905 3.0562 80.4812 2.41099 80.6836 2.30284C81.4367 1.89392 82.8567 2.38142 83.4848 2.42505C84.1005 2.4688 84.281 2.42041 84.6511 2.5047C85.3005 2.65744 85.0561 2.17992 85.4455 1.95415C85.8477 1.72824 85.6684 2.91442 85.7302 3.16798C85.7915 3.42144 85.8505 3.15879 85.9236 3.29757C85.9963 3.43632 85.8457 3.61146 86.0127 3.66158C86.1809 3.71163 86.618 3.25303 86.6698 2.98627C86.7886 2.42097 86.5742 1.83237 87.0214 2.03403C87.047 2.04601 86.9689 2.35831 87.0665 2.38842C87.827 2.61751 88.616 2.62176 89.3939 2.82372C89.498 2.85202 89.4098 3.19936 89.4703 3.21975C90.0985 3.43325 89.8784 2.85227 90.2165 2.1996C90.1519 3.06341 90.339 3.58903 90.8286 3.58832C91.1223 3.58823 91.0666 3.21197 91.2491 2.94422C91.3036 2.86351 91.5061 3.12002 91.5458 2.94233C91.6634 2.3616 91.4654 1.7151 91.9655 1.96794C91.9872 1.97998 91.922 2.29785 91.9967 2.31626C92.4775 2.43691 92.5418 1.83015 93.0643 1.7518C93.4821 1.69023 94.2128 2.05381 94.6896 2.11119C94.6787 3.08142 95.1365 2.8567 95.3042 2.18718C95.6175 2.21329 95.9471 2.17472 96.2385 2.26723C96.3381 2.29878 96.2727 2.57966 96.2851 2.61002C96.4892 3.08622 96.6177 2.4358 96.6819 2.41046C97.4097 2.16514 97.9799 2.6629 98.6866 2.20214C98.7127 2.18568 98.7706 1.51285 98.9453 2.01187C98.9552 2.04626 98.7158 2.34367 99.0393 2.38022C99.2255 2.4014 99.4976 2.53699 99.7806 2.60261C99.9942 2.65244 100.218 2.65947 100.422 2.53862C100.534 2.47138 100.849 1.94609 101.037 2.38917C101.061 2.44926 101.015 2.63956 101.048 2.75C101.157 3.10202 101.286 2.42881 101.399 3.01807C101.514 3.60745 101.81 4.06542 102.29 3.70323C102.305 3.69279 102.453 3.16303 102.594 3.18288C102.817 3.21482 103.128 3.35252 103.363 3.36767C103.475 3.3747 103.43 3.0348 103.45 3.03023C104.221 2.90282 104.733 3.24268 105.534 3.4312C105.68 3.46642 106.139 3.04084 106.401 3.42084C106.69 3.83679 106.254 5.4579 107.013 5.11424C107.321 4.97669 107.815 2.91549 108.279 4.02494C109.316 3.81394 110.239 4.40934 111.281 4.05793C111.325 4.04322 111.473 3.5251 111.58 3.47818C111.587 3.4755 111.593 3.47437 111.599 3.47497C111.764 3.49258 111.841 3.76802 111.955 3.7905C112.433 3.89204 112.889 3.68838 113.353 3.7677C113.529 3.79769 113.438 4.07146 113.646 4.10895C113.848 4.14638 114.035 3.79414 114.296 4.00948C114.494 4.17395 114.59 4.95393 114.844 5.08556C114.976 4.34996 115.164 4.39497 115.542 4.26646C115.615 4.24152 115.593 3.9723 115.631 3.94744C115.787 3.84108 115.862 4.07624 116.013 3.95878C116.05 3.93062 116.104 3.68107 116.137 3.64405C116.427 3.32056 116.645 3.96028 116.676 4.07062C116.81 4.49242 116.988 4.19439 117.121 4.3811C117.253 4.56763 116.957 4.68708 117.131 4.82369C117.487 5.10321 118.017 5.20102 118.462 5.27787L118.431 5.27202C118.433 5.2725 118.435 5.27299 118.437 5.27348C118.596 5.31496 118.568 4.95758 118.592 4.9558C118.957 4.95526 119.186 5.40001 119.573 4.80891C119.278 6.55728 119.827 4.70569 120.201 5.2088C120.23 5.24953 119.991 6.04545 119.815 6.11235C119.641 6.17981 119.516 5.86359 119.268 5.98544C119.207 6.01228 118.734 6.68302 118.692 6.7205C118.338 7.00322 118.618 5.79647 118.618 5.72573C118.626 5.39059 118.521 5.34714 118.399 5.40833L118.441 5.41647C118.279 5.50377 118.085 5.74468 118.024 5.76538C117.514 5.93265 117.205 5.66981 116.823 5.77163C116.575 5.83665 116.362 6.62114 116.204 6.55753C115.687 6.35143 115.716 5.19808 115.017 6.06667C114.87 6.25357 114.825 7.14545 114.563 6.3932C114.547 6.34562 114.354 5.66837 114.127 6.0454C114.099 6.09292 114.064 6.3494 114.034 6.36718C113.834 6.48211 113.738 6.26213 113.524 6.33738C113.314 6.41318 113.058 6.53606 112.838 6.43033C112.703 6.36651 112.56 5.87328 112.496 5.75093C112.324 5.39888 112.084 5.94516 111.984 5.52858C111.876 5.10981 112.152 4.4916 111.827 4.21118C111.79 4.88277 111.738 5.5716 111.696 6.24688C111.633 6.24254 111.57 6.23674 111.505 6.22986C110.813 6.16041 110.137 5.95843 109.443 5.95369C109.349 5.95369 109.429 6.31931 109.327 6.32858C108.894 6.36582 108.533 6.08915 108.084 6.1668C107.735 6.22817 107.338 6.58779 106.971 6.6611C106.801 5.87938 106.253 6.1051 105.873 6.00776C105.74 5.97406 105.764 5.7697 105.673 5.69601C105.329 5.42279 105.45 6.11316 105.343 6.21276C104.884 6.63715 104.962 5.09954 104.462 5.09965C104.435 5.09917 104.05 5.89239 104.001 5.9398C103.694 6.25 103.977 5.65148 103.805 5.57728C103.491 5.44152 103.285 5.22862 102.888 5.43804C102.774 5.50032 102.469 5.98897 102.287 5.57764C102.263 5.52377 102.301 5.25468 102.279 5.23705C101.893 4.94061 101.816 5.78933 101.56 6.05855C101.307 6.32789 100.995 5.71366 100.935 5.53906C100.779 5.08719 101.095 5.36338 101.11 5.32138C101.271 4.82017 101.001 4.88761 100.807 4.82941C100.84 3.99401 100.558 4.02306 100.603 4.77241C100.608 4.85426 100.769 4.78825 100.807 4.82941C100.568 5.63337 100.261 5.71545 99.9784 4.92752C99.862 4.5977 99.9885 4.23688 99.6696 4.2499C99.6328 4.25155 99.5898 4.25855 99.5391 4.27165C99.3254 4.32789 99.3694 4.90676 99.1832 5.05385C98.7584 5.3896 98.2318 4.83906 97.7791 4.91737C97.6133 4.94576 97.7674 5.26281 97.659 5.2932C97.3668 5.37494 97.1038 5.13677 96.8105 5.25662C96.783 5.26788 96.8489 5.59777 96.7545 5.60162C96.0504 5.63765 95.4394 5.42865 94.6973 5.42711C94.3434 5.42644 93.6876 5.61335 93.3299 5.58008C92.6791 5.52445 91.8913 5.05345 91.3335 5.1763C90.9804 5.2549 91.0601 5.58374 90.9079 5.81019C90.5985 6.24929 90.0884 5.4755 90.007 5.35573C90.0056 5.35175 90.3155 5.27019 90.1476 5.103C90.0467 4.75155 90.0105 5.35416 90.007 5.35573C89.9521 5.27836 89.3438 5.21119 89.2192 5.27586C89.1525 5.31117 89.1941 5.62305 89.1592 5.63555C88.3301 5.92586 87.5177 6.01629 86.6599 5.88219C86.6454 5.87608 86.6622 5.52638 86.6282 5.51638C86.1541 5.36764 85.8336 5.79969 85.4383 6.05915C85.0505 6.3184 84.7277 6.23811 84.4763 5.64184C84.1687 5.72184 83.7475 5.46279 83.4895 5.30566C83.2347 5.14848 83.208 5.82914 83.1859 5.84291C82.5146 6.28328 82.103 5.90006 81.3947 5.85012C81.0674 5.82506 80.3782 5.93417 80.02 6.01401C79.7371 6.07824 79.5614 5.92151 79.2953 6.02751C79.2592 6.04168 79.3005 6.34393 79.2896 6.35576C78.9951 6.72265 79.1278 5.98017 79.0637 5.8489C78.9197 5.55402 78.8092 5.34441 78.6541 5.282C78.5628 5.24331 78.4553 5.26096 78.313 5.34962C78.2273 5.40275 77.9898 6.47256 77.83 6.53737C77.6222 6.61969 77.6955 6.2364 77.4766 6.33235C77.4578 6.34021 77.4656 6.57585 77.3288 6.56757C76.6957 6.5322 76.033 6.4053 75.3652 6.43934C75.2775 6.44303 75.3954 6.81514 75.2697 6.82661C74.6827 6.88009 74.0108 6.87676 73.4218 6.71097C73.2791 6.66895 73.364 6.40578 73.3319 6.32854C73.1352 5.86123 72.8748 6.5488 72.83 6.56253C71.75 6.90795 70.9431 6.30215 69.8338 6.61422C69.7759 6.63242 69.3352 7.37211 69.1211 6.74711C69.1066 6.70554 68.895 6.06599 68.7226 6.5083C68.7119 6.53597 68.8436 6.86485 68.6224 6.83463C68.4025 6.80447 68.0431 7.03121 67.7374 6.67242C67.6411 6.55939 67.4077 5.92179 67.1315 6.43741C67.1139 6.47338 66.6922 7.63606 66.5209 6.84124C66.493 6.7104 66.5071 5.86619 66.1701 6.3043C66.1057 6.38922 66.2282 6.57551 66.0566 6.6958C65.7887 6.88126 65.4485 6.66065 65.1313 7.04169C65.0763 7.10913 64.8465 7.68566 64.6467 7.25406C64.6154 7.18647 64.6683 6.90386 64.566 6.87396C64.0785 6.73051 63.5695 6.92715 63.0826 6.74001C62.9086 6.6743 62.9898 6.21749 62.8072 6.09836C62.6247 5.97926 62.2571 5.86778 62.0694 6.07896C61.8817 6.29022 62.1023 7.01265 61.8166 7.07534C60.5946 7.34729 59.3491 6.9415 58.1256 6.89898C57.9424 6.89263 58.0986 7.14988 57.8283 7.15918C56.8237 7.19474 55.1225 7.46587 54.2507 6.92803C53.5561 6.49719 54.416 6.14664 53.8874 5.97531C53.6322 5.89363 53.3699 6.74191 53.3087 6.76947C52.7113 7.04909 52.2814 6.6822 51.7486 6.80557C51.6379 6.83118 51.7524 7.1714 51.6581 7.18942C51.3358 7.25398 50.9923 7.10688 50.6814 7.13987C50.542 7.15546 50.572 7.41624 50.443 7.39818C50.1341 7.35797 49.8587 7.25262 49.5595 7.01261C49.5321 6.99075 49.7092 6.66284 49.4838 6.65443C49.1188 6.64173 48.6604 6.40763 48.241 6.66394C48.1166 6.74102 48.1215 7.33808 47.8441 6.93021C47.7859 6.84503 47.8469 6.127 47.5411 6.75154C47.4873 6.85537 46.9804 7.6993 46.7132 7.16501C46.6429 7.02438 46.4597 6.44062 46.3108 6.53526C46.2906 6.55031 46.3776 6.86963 46.2534 6.90295C45.8157 7.01478 45.3516 6.98814 44.899 7.096C44.7796 7.12541 44.9635 7.45431 44.7854 7.48755C44.2958 7.57945 43.6781 7.50504 43.1914 7.40912C43.0119 7.37312 43.131 7.09623 43.1175 7.06653C42.9003 6.58342 42.787 7.24216 42.718 7.28159C42.2857 7.51802 41.9604 7.21478 41.5645 7.30292C41.4556 7.3264 41.5382 7.63826 41.5169 7.66654C41.2957 7.94304 41.4546 7.37795 41.3107 7.3183C40.9073 7.14935 40.4598 7.18185 40.0527 7.22855C39.9031 7.24616 40.0774 7.60648 39.9431 7.61809C39.1549 7.69359 38.3354 7.67228 37.5558 7.48486C37.4091 7.44891 37.4965 7.16782 37.465 7.10446C37.2468 6.66116 36.9523 7.27554 36.8832 7.33474C36.5688 7.60502 36.4406 7.35982 36.1591 7.4106C34.7776 7.66311 33.0768 7.52727 31.7643 7.44767C30.0694 7.34531 28.7411 7.10113 27.1228 7.19687C27.0197 7.20261 27.1299 7.57283 27.0411 7.58255C25.892 7.69116 24.7694 7.56429 23.6169 7.69074C23.5231 7.70045 23.6643 8.0508 23.514 8.07823C23.2056 8.13696 22.813 8.12427 22.4975 8.01686C22.3437 7.96513 22.5439 7.6592 22.3891 7.61332C22.0287 7.5058 21.6435 7.48703 21.2752 7.54965C21.1185 7.57706 21.3616 7.93376 21.1574 7.94129C19.7729 7.99991 18.4043 8.08462 16.9985 7.64073C16.9018 7.61025 16.8054 6.87874 16.6033 7.02266C16.5912 7.22632 16.596 7.46556 16.5929 7.68308C14.5715 7.83359 12.5692 7.61252 10.5428 7.60671C10.4573 7.60655 10.6114 7.99243 10.4459 7.9941C9.48671 8.00421 8.56141 8.1271 7.57501 7.75732C7.47718 7.72118 7.51578 7.03719 7.231 7.14525C7.18086 7.16494 6.75054 7.26318 6.64174 7.41332C6.62698 7.43594 6.71087 7.75352 6.57217 7.7651C5.76602 7.82686 4.91855 7.76805 4.10886 7.58655C3.97817 7.55665 4.11117 7.21478 4.01803 7.19054C3.35778 7.02114 2.64729 7.29109 2.01405 6.99316C1.59018 6.79251 1.73614 6.20296 1.50317 5.62886C1.47022 5.54787 1.20965 5.53925 1.19063 5.20331C1.14209 4.35855 1.2529 3.43084 1.18626 2.53066C1.17212 2.33676 0.826889 2.55156 1.02558 2.07915C1.03949 2.04752 1.28971 1.88769 1.34935 1.72756C1.39088 1.61685 1.30711 1.27626 1.39323 1.13398C1.47935 0.991846 1.58127 1.27682 1.72516 1.10896C1.86896 0.939057 1.79809 0.551192 2.09002 0.500314ZM82.355 4.60317C82.1184 4.28001 82.1018 5.47677 82.3485 5.18682C82.3603 5.17139 82.3672 4.61901 82.355 4.60317ZM110.249 5.05497C109.964 4.51566 109.723 5.28164 109.922 5.69802C110.122 6.11387 110.336 5.21843 110.249 5.05497ZM113.348 4.8222C113.04 4.37571 112.851 6.06256 113.23 5.75263C113.251 5.73523 113.365 4.84814 113.348 4.8222ZM2.53651 5.44721C2.53305 5.43138 2.34566 5.41899 2.34145 5.43481C2.24808 5.81637 2.62279 5.84088 2.53651 5.44721ZM116.399 4.90247C116.343 4.65329 115.979 4.84413 116.05 5.15208C116.104 5.39885 116.464 5.21076 116.399 4.90247ZM70.2612 3.51332C70.2573 3.49555 70.1214 3.48165 70.1257 3.58237C70.1402 3.90675 70.3272 3.81218 70.2612 3.51332ZM121.483 6.3383C120.588 6.04304 120.915 4.57941 121.456 4.97894C121.569 5.0481 121.053 5.31036 121.163 5.48413C121.422 5.81857 121.827 5.00239 122.074 5.5249C122.129 5.62357 121.541 6.36164 121.481 6.33988C121.481 6.33935 121.482 6.33882 121.483 6.3383ZM82.2001 3.16831C82.1954 3.15256 82.0078 3.14036 82.0033 3.15611C81.9075 3.53741 82.2855 3.5622 82.2001 3.16831ZM62.4217 2.89858C62.4112 2.86503 61.9777 2.84047 61.9638 2.87176C61.7478 3.49641 62.6245 3.54791 62.4217 2.89858ZM94.697 2.13702C94.8916 1.75374 95.1486 1.70748 95.3033 2.1867C95.1112 2.162 94.8932 2.15936 94.697 2.13702Z"
                                                            fill="currentcolor"
                                                        />
                                                    </svg>
                                                </span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button
                                                class="nav-link"
                                                id="featured-tab"
                                                data-bs-toggle="tab"
                                                data-bs-target="#featured"
                                                type="button"
                                                role="tab"
                                                aria-controls="featured"
                                                aria-selected="false"
                                            >
                                                Featured
                                                <span>
                                                    <svg
                                                        width="123"
                                                        height="9"
                                                        viewBox="0 0 123 9"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <path
                                                            d="M2.09002 0.500314C2.7682 0.384879 3.66028 0.481577 4.34058 0.623294C4.55365 0.667213 4.44966 0.880993 4.5969 0.920856C4.88485 0.998549 5.15009 0.890162 5.43482 0.983677C5.5292 1.01571 5.41796 1.35345 5.51679 1.37935C6.05851 1.51885 6.56613 1.4249 7.11434 1.48724C9.80953 1.79499 12.4593 1.87731 15.1823 1.98539C16.0834 2.02069 17.179 2.30745 18.1031 2.15888C18.2114 2.14123 18.1418 1.84754 18.1621 1.8229C18.4797 1.44564 18.3819 2.04248 18.5945 2.11805C19.4391 2.41636 20.366 2.42822 21.172 2.30114C21.5147 2.24621 21.1607 1.66643 21.5118 1.98934C21.5362 2.01115 21.4543 2.3256 21.549 2.35743C21.7638 2.429 22.1675 2.36637 22.333 2.38845C22.6521 2.43258 22.7046 2.42857 23.0053 2.42718C23.4154 2.42802 23.9093 2.57551 24.3507 2.49729C24.4449 2.47967 24.3146 2.16085 24.4643 2.10377C24.6142 2.04677 25.0129 2.06741 25.1483 2.14084C25.2837 2.21431 25.2307 2.46745 25.2554 2.52487C25.4589 3.00957 25.9073 2.32623 25.9661 2.30854C27.0416 2.00599 27.979 2.37561 28.9882 2.3579C29.7609 2.34353 30.5836 2.20287 31.3139 2.20829C32.1836 2.21599 32.9343 2.37757 33.7782 2.33381C33.8674 2.32956 33.7566 1.954 33.8655 1.94804C35.023 1.88511 36.1829 1.9072 37.3394 2.14298C37.4563 2.16694 37.3116 2.50065 37.4287 2.5444C38.1467 2.80491 39.2773 3.44049 39.6716 1.99143C40.1553 2.03983 40.7421 2.08842 41.176 2.37211C41.4559 2.55469 41.1931 2.91994 41.5303 2.7604C41.6063 2.72484 41.5016 2.41045 41.6159 2.38102C42.0957 2.25744 42.6286 2.35147 43.1077 2.18031C43.2049 2.14475 43.1736 1.86202 43.2004 1.81058C43.4266 1.39381 43.8243 2.07013 43.9091 2.11836C44.5551 2.4778 45.0192 2.32461 45.6215 2.3238C45.7607 2.32379 45.59 1.94612 45.7237 1.93244C46.4197 1.86654 47.1239 1.88774 47.8129 2.04532C47.9651 2.08131 47.831 2.40758 47.904 2.44135C48.2257 2.58632 48.2864 1.97323 48.5936 2.10047C48.6583 2.12651 48.6266 2.40447 48.6388 2.43474C48.8301 2.90993 48.978 2.22979 49.0248 2.21406C49.6154 1.99999 50.0074 2.70112 50.5865 2.59151C50.6555 2.57769 50.4937 2.22928 50.6881 2.21188C51.9738 2.09404 53.3546 2.16804 54.6248 2.42822C54.8255 2.46815 54.687 2.7341 54.7 2.7664C54.9143 3.27086 55.0361 2.58831 55.1009 2.56163C55.6129 2.36884 56.0991 2.9317 56.4314 2.11571C58.6105 2.36174 60.7404 1.87217 62.9129 2.5635C62.9402 2.57148 62.8968 2.90735 62.9513 2.92182C63.608 3.09948 63.4656 2.58083 63.897 1.9368C64.0052 1.77508 64.3524 2.53873 64.3827 2.59462C64.4937 2.80062 64.39 3.30094 64.4267 3.34059C64.7297 3.65172 64.6553 2.0038 65.0547 1.99688C65.0672 1.99943 65.0197 2.30373 65.0536 2.33336C65.1592 2.42643 65.2602 2.3042 65.3632 2.40704C65.5999 2.64503 65.6901 3.4449 66.0468 2.97284C66.0914 2.9116 66.0073 1.9775 66.3685 2.01593C66.5132 2.03203 67.1441 2.00593 67.3198 2.06375C67.496 2.1215 67.3805 2.42478 67.3932 2.43763C67.8715 2.82862 67.6911 2.9967 67.943 3.58283C68.1942 4.16674 68.1047 2.76594 68.2006 2.60791C68.2968 2.45031 68.6532 2.77353 68.7406 2.88647C68.8283 2.99946 68.7243 3.19266 68.8016 3.25615C69.3131 3.67092 69.012 2.5568 69.1744 2.33166C69.5555 1.79865 69.8745 2.83349 70.2421 2.92956C70.3408 2.95552 70.2569 2.72001 70.3439 2.69648C70.688 2.60645 70.8997 2.92758 71.2819 2.62403C71.3464 2.57453 71.6399 1.94469 71.8598 2.40005C71.8902 2.46573 71.8109 2.72612 71.9602 2.78181C72.1834 2.86541 72.5801 2.91581 72.8123 2.82554C72.9839 2.75875 72.7796 2.33496 72.9985 2.46417C73.0956 2.52188 72.9213 2.77441 73.1033 2.86199C73.2825 2.94958 73.7448 2.93136 73.9256 2.9199C74.1035 2.9083 74.0009 2.58601 74.015 2.56397C74.1003 2.43763 74.4369 2.27619 74.4664 2.27611C75.8836 2.21634 77.2483 2.68771 78.6123 2.55886C78.6848 2.55226 78.7572 2.5441 78.8295 2.53424C78.9465 2.51874 78.8632 2.17846 78.881 2.17257C79.2784 2.02338 78.9778 2.9361 79.26 3.23574C79.2092 2.5434 79.3756 2.66636 79.6496 2.58616C79.7814 2.54696 79.7052 2.27974 79.7169 2.25209C79.9067 1.84156 80.0492 2.36591 80.0856 2.47307C80.2194 2.86724 80.3635 2.3969 80.4571 2.66032C80.5518 2.92173 80.3493 3.31448 80.6189 3.3054C80.6905 3.0562 80.4812 2.41099 80.6836 2.30284C81.4367 1.89392 82.8567 2.38142 83.4848 2.42505C84.1005 2.4688 84.281 2.42041 84.6511 2.5047C85.3005 2.65744 85.0561 2.17992 85.4455 1.95415C85.8477 1.72824 85.6684 2.91442 85.7302 3.16798C85.7915 3.42144 85.8505 3.15879 85.9236 3.29757C85.9963 3.43632 85.8457 3.61146 86.0127 3.66158C86.1809 3.71163 86.618 3.25303 86.6698 2.98627C86.7886 2.42097 86.5742 1.83237 87.0214 2.03403C87.047 2.04601 86.9689 2.35831 87.0665 2.38842C87.827 2.61751 88.616 2.62176 89.3939 2.82372C89.498 2.85202 89.4098 3.19936 89.4703 3.21975C90.0985 3.43325 89.8784 2.85227 90.2165 2.1996C90.1519 3.06341 90.339 3.58903 90.8286 3.58832C91.1223 3.58823 91.0666 3.21197 91.2491 2.94422C91.3036 2.86351 91.5061 3.12002 91.5458 2.94233C91.6634 2.3616 91.4654 1.7151 91.9655 1.96794C91.9872 1.97998 91.922 2.29785 91.9967 2.31626C92.4775 2.43691 92.5418 1.83015 93.0643 1.7518C93.4821 1.69023 94.2128 2.05381 94.6896 2.11119C94.6787 3.08142 95.1365 2.8567 95.3042 2.18718C95.6175 2.21329 95.9471 2.17472 96.2385 2.26723C96.3381 2.29878 96.2727 2.57966 96.2851 2.61002C96.4892 3.08622 96.6177 2.4358 96.6819 2.41046C97.4097 2.16514 97.9799 2.6629 98.6866 2.20214C98.7127 2.18568 98.7706 1.51285 98.9453 2.01187C98.9552 2.04626 98.7158 2.34367 99.0393 2.38022C99.2255 2.4014 99.4976 2.53699 99.7806 2.60261C99.9942 2.65244 100.218 2.65947 100.422 2.53862C100.534 2.47138 100.849 1.94609 101.037 2.38917C101.061 2.44926 101.015 2.63956 101.048 2.75C101.157 3.10202 101.286 2.42881 101.399 3.01807C101.514 3.60745 101.81 4.06542 102.29 3.70323C102.305 3.69279 102.453 3.16303 102.594 3.18288C102.817 3.21482 103.128 3.35252 103.363 3.36767C103.475 3.3747 103.43 3.0348 103.45 3.03023C104.221 2.90282 104.733 3.24268 105.534 3.4312C105.68 3.46642 106.139 3.04084 106.401 3.42084C106.69 3.83679 106.254 5.4579 107.013 5.11424C107.321 4.97669 107.815 2.91549 108.279 4.02494C109.316 3.81394 110.239 4.40934 111.281 4.05793C111.325 4.04322 111.473 3.5251 111.58 3.47818C111.587 3.4755 111.593 3.47437 111.599 3.47497C111.764 3.49258 111.841 3.76802 111.955 3.7905C112.433 3.89204 112.889 3.68838 113.353 3.7677C113.529 3.79769 113.438 4.07146 113.646 4.10895C113.848 4.14638 114.035 3.79414 114.296 4.00948C114.494 4.17395 114.59 4.95393 114.844 5.08556C114.976 4.34996 115.164 4.39497 115.542 4.26646C115.615 4.24152 115.593 3.9723 115.631 3.94744C115.787 3.84108 115.862 4.07624 116.013 3.95878C116.05 3.93062 116.104 3.68107 116.137 3.64405C116.427 3.32056 116.645 3.96028 116.676 4.07062C116.81 4.49242 116.988 4.19439 117.121 4.3811C117.253 4.56763 116.957 4.68708 117.131 4.82369C117.487 5.10321 118.017 5.20102 118.462 5.27787L118.431 5.27202C118.433 5.2725 118.435 5.27299 118.437 5.27348C118.596 5.31496 118.568 4.95758 118.592 4.9558C118.957 4.95526 119.186 5.40001 119.573 4.80891C119.278 6.55728 119.827 4.70569 120.201 5.2088C120.23 5.24953 119.991 6.04545 119.815 6.11235C119.641 6.17981 119.516 5.86359 119.268 5.98544C119.207 6.01228 118.734 6.68302 118.692 6.7205C118.338 7.00322 118.618 5.79647 118.618 5.72573C118.626 5.39059 118.521 5.34714 118.399 5.40833L118.441 5.41647C118.279 5.50377 118.085 5.74468 118.024 5.76538C117.514 5.93265 117.205 5.66981 116.823 5.77163C116.575 5.83665 116.362 6.62114 116.204 6.55753C115.687 6.35143 115.716 5.19808 115.017 6.06667C114.87 6.25357 114.825 7.14545 114.563 6.3932C114.547 6.34562 114.354 5.66837 114.127 6.0454C114.099 6.09292 114.064 6.3494 114.034 6.36718C113.834 6.48211 113.738 6.26213 113.524 6.33738C113.314 6.41318 113.058 6.53606 112.838 6.43033C112.703 6.36651 112.56 5.87328 112.496 5.75093C112.324 5.39888 112.084 5.94516 111.984 5.52858C111.876 5.10981 112.152 4.4916 111.827 4.21118C111.79 4.88277 111.738 5.5716 111.696 6.24688C111.633 6.24254 111.57 6.23674 111.505 6.22986C110.813 6.16041 110.137 5.95843 109.443 5.95369C109.349 5.95369 109.429 6.31931 109.327 6.32858C108.894 6.36582 108.533 6.08915 108.084 6.1668C107.735 6.22817 107.338 6.58779 106.971 6.6611C106.801 5.87938 106.253 6.1051 105.873 6.00776C105.74 5.97406 105.764 5.7697 105.673 5.69601C105.329 5.42279 105.45 6.11316 105.343 6.21276C104.884 6.63715 104.962 5.09954 104.462 5.09965C104.435 5.09917 104.05 5.89239 104.001 5.9398C103.694 6.25 103.977 5.65148 103.805 5.57728C103.491 5.44152 103.285 5.22862 102.888 5.43804C102.774 5.50032 102.469 5.98897 102.287 5.57764C102.263 5.52377 102.301 5.25468 102.279 5.23705C101.893 4.94061 101.816 5.78933 101.56 6.05855C101.307 6.32789 100.995 5.71366 100.935 5.53906C100.779 5.08719 101.095 5.36338 101.11 5.32138C101.271 4.82017 101.001 4.88761 100.807 4.82941C100.84 3.99401 100.558 4.02306 100.603 4.77241C100.608 4.85426 100.769 4.78825 100.807 4.82941C100.568 5.63337 100.261 5.71545 99.9784 4.92752C99.862 4.5977 99.9885 4.23688 99.6696 4.2499C99.6328 4.25155 99.5898 4.25855 99.5391 4.27165C99.3254 4.32789 99.3694 4.90676 99.1832 5.05385C98.7584 5.3896 98.2318 4.83906 97.7791 4.91737C97.6133 4.94576 97.7674 5.26281 97.659 5.2932C97.3668 5.37494 97.1038 5.13677 96.8105 5.25662C96.783 5.26788 96.8489 5.59777 96.7545 5.60162C96.0504 5.63765 95.4394 5.42865 94.6973 5.42711C94.3434 5.42644 93.6876 5.61335 93.3299 5.58008C92.6791 5.52445 91.8913 5.05345 91.3335 5.1763C90.9804 5.2549 91.0601 5.58374 90.9079 5.81019C90.5985 6.24929 90.0884 5.4755 90.007 5.35573C90.0056 5.35175 90.3155 5.27019 90.1476 5.103C90.0467 4.75155 90.0105 5.35416 90.007 5.35573C89.9521 5.27836 89.3438 5.21119 89.2192 5.27586C89.1525 5.31117 89.1941 5.62305 89.1592 5.63555C88.3301 5.92586 87.5177 6.01629 86.6599 5.88219C86.6454 5.87608 86.6622 5.52638 86.6282 5.51638C86.1541 5.36764 85.8336 5.79969 85.4383 6.05915C85.0505 6.3184 84.7277 6.23811 84.4763 5.64184C84.1687 5.72184 83.7475 5.46279 83.4895 5.30566C83.2347 5.14848 83.208 5.82914 83.1859 5.84291C82.5146 6.28328 82.103 5.90006 81.3947 5.85012C81.0674 5.82506 80.3782 5.93417 80.02 6.01401C79.7371 6.07824 79.5614 5.92151 79.2953 6.02751C79.2592 6.04168 79.3005 6.34393 79.2896 6.35576C78.9951 6.72265 79.1278 5.98017 79.0637 5.8489C78.9197 5.55402 78.8092 5.34441 78.6541 5.282C78.5628 5.24331 78.4553 5.26096 78.313 5.34962C78.2273 5.40275 77.9898 6.47256 77.83 6.53737C77.6222 6.61969 77.6955 6.2364 77.4766 6.33235C77.4578 6.34021 77.4656 6.57585 77.3288 6.56757C76.6957 6.5322 76.033 6.4053 75.3652 6.43934C75.2775 6.44303 75.3954 6.81514 75.2697 6.82661C74.6827 6.88009 74.0108 6.87676 73.4218 6.71097C73.2791 6.66895 73.364 6.40578 73.3319 6.32854C73.1352 5.86123 72.8748 6.5488 72.83 6.56253C71.75 6.90795 70.9431 6.30215 69.8338 6.61422C69.7759 6.63242 69.3352 7.37211 69.1211 6.74711C69.1066 6.70554 68.895 6.06599 68.7226 6.5083C68.7119 6.53597 68.8436 6.86485 68.6224 6.83463C68.4025 6.80447 68.0431 7.03121 67.7374 6.67242C67.6411 6.55939 67.4077 5.92179 67.1315 6.43741C67.1139 6.47338 66.6922 7.63606 66.5209 6.84124C66.493 6.7104 66.5071 5.86619 66.1701 6.3043C66.1057 6.38922 66.2282 6.57551 66.0566 6.6958C65.7887 6.88126 65.4485 6.66065 65.1313 7.04169C65.0763 7.10913 64.8465 7.68566 64.6467 7.25406C64.6154 7.18647 64.6683 6.90386 64.566 6.87396C64.0785 6.73051 63.5695 6.92715 63.0826 6.74001C62.9086 6.6743 62.9898 6.21749 62.8072 6.09836C62.6247 5.97926 62.2571 5.86778 62.0694 6.07896C61.8817 6.29022 62.1023 7.01265 61.8166 7.07534C60.5946 7.34729 59.3491 6.9415 58.1256 6.89898C57.9424 6.89263 58.0986 7.14988 57.8283 7.15918C56.8237 7.19474 55.1225 7.46587 54.2507 6.92803C53.5561 6.49719 54.416 6.14664 53.8874 5.97531C53.6322 5.89363 53.3699 6.74191 53.3087 6.76947C52.7113 7.04909 52.2814 6.6822 51.7486 6.80557C51.6379 6.83118 51.7524 7.1714 51.6581 7.18942C51.3358 7.25398 50.9923 7.10688 50.6814 7.13987C50.542 7.15546 50.572 7.41624 50.443 7.39818C50.1341 7.35797 49.8587 7.25262 49.5595 7.01261C49.5321 6.99075 49.7092 6.66284 49.4838 6.65443C49.1188 6.64173 48.6604 6.40763 48.241 6.66394C48.1166 6.74102 48.1215 7.33808 47.8441 6.93021C47.7859 6.84503 47.8469 6.127 47.5411 6.75154C47.4873 6.85537 46.9804 7.6993 46.7132 7.16501C46.6429 7.02438 46.4597 6.44062 46.3108 6.53526C46.2906 6.55031 46.3776 6.86963 46.2534 6.90295C45.8157 7.01478 45.3516 6.98814 44.899 7.096C44.7796 7.12541 44.9635 7.45431 44.7854 7.48755C44.2958 7.57945 43.6781 7.50504 43.1914 7.40912C43.0119 7.37312 43.131 7.09623 43.1175 7.06653C42.9003 6.58342 42.787 7.24216 42.718 7.28159C42.2857 7.51802 41.9604 7.21478 41.5645 7.30292C41.4556 7.3264 41.5382 7.63826 41.5169 7.66654C41.2957 7.94304 41.4546 7.37795 41.3107 7.3183C40.9073 7.14935 40.4598 7.18185 40.0527 7.22855C39.9031 7.24616 40.0774 7.60648 39.9431 7.61809C39.1549 7.69359 38.3354 7.67228 37.5558 7.48486C37.4091 7.44891 37.4965 7.16782 37.465 7.10446C37.2468 6.66116 36.9523 7.27554 36.8832 7.33474C36.5688 7.60502 36.4406 7.35982 36.1591 7.4106C34.7776 7.66311 33.0768 7.52727 31.7643 7.44767C30.0694 7.34531 28.7411 7.10113 27.1228 7.19687C27.0197 7.20261 27.1299 7.57283 27.0411 7.58255C25.892 7.69116 24.7694 7.56429 23.6169 7.69074C23.5231 7.70045 23.6643 8.0508 23.514 8.07823C23.2056 8.13696 22.813 8.12427 22.4975 8.01686C22.3437 7.96513 22.5439 7.6592 22.3891 7.61332C22.0287 7.5058 21.6435 7.48703 21.2752 7.54965C21.1185 7.57706 21.3616 7.93376 21.1574 7.94129C19.7729 7.99991 18.4043 8.08462 16.9985 7.64073C16.9018 7.61025 16.8054 6.87874 16.6033 7.02266C16.5912 7.22632 16.596 7.46556 16.5929 7.68308C14.5715 7.83359 12.5692 7.61252 10.5428 7.60671C10.4573 7.60655 10.6114 7.99243 10.4459 7.9941C9.48671 8.00421 8.56141 8.1271 7.57501 7.75732C7.47718 7.72118 7.51578 7.03719 7.231 7.14525C7.18086 7.16494 6.75054 7.26318 6.64174 7.41332C6.62698 7.43594 6.71087 7.75352 6.57217 7.7651C5.76602 7.82686 4.91855 7.76805 4.10886 7.58655C3.97817 7.55665 4.11117 7.21478 4.01803 7.19054C3.35778 7.02114 2.64729 7.29109 2.01405 6.99316C1.59018 6.79251 1.73614 6.20296 1.50317 5.62886C1.47022 5.54787 1.20965 5.53925 1.19063 5.20331C1.14209 4.35855 1.2529 3.43084 1.18626 2.53066C1.17212 2.33676 0.826889 2.55156 1.02558 2.07915C1.03949 2.04752 1.28971 1.88769 1.34935 1.72756C1.39088 1.61685 1.30711 1.27626 1.39323 1.13398C1.47935 0.991846 1.58127 1.27682 1.72516 1.10896C1.86896 0.939057 1.79809 0.551192 2.09002 0.500314ZM82.355 4.60317C82.1184 4.28001 82.1018 5.47677 82.3485 5.18682C82.3603 5.17139 82.3672 4.61901 82.355 4.60317ZM110.249 5.05497C109.964 4.51566 109.723 5.28164 109.922 5.69802C110.122 6.11387 110.336 5.21843 110.249 5.05497ZM113.348 4.8222C113.04 4.37571 112.851 6.06256 113.23 5.75263C113.251 5.73523 113.365 4.84814 113.348 4.8222ZM2.53651 5.44721C2.53305 5.43138 2.34566 5.41899 2.34145 5.43481C2.24808 5.81637 2.62279 5.84088 2.53651 5.44721ZM116.399 4.90247C116.343 4.65329 115.979 4.84413 116.05 5.15208C116.104 5.39885 116.464 5.21076 116.399 4.90247ZM70.2612 3.51332C70.2573 3.49555 70.1214 3.48165 70.1257 3.58237C70.1402 3.90675 70.3272 3.81218 70.2612 3.51332ZM121.483 6.3383C120.588 6.04304 120.915 4.57941 121.456 4.97894C121.569 5.0481 121.053 5.31036 121.163 5.48413C121.422 5.81857 121.827 5.00239 122.074 5.5249C122.129 5.62357 121.541 6.36164 121.481 6.33988C121.481 6.33935 121.482 6.33882 121.483 6.3383ZM82.2001 3.16831C82.1954 3.15256 82.0078 3.14036 82.0033 3.15611C81.9075 3.53741 82.2855 3.5622 82.2001 3.16831ZM62.4217 2.89858C62.4112 2.86503 61.9777 2.84047 61.9638 2.87176C61.7478 3.49641 62.6245 3.54791 62.4217 2.89858ZM94.697 2.13702C94.8916 1.75374 95.1486 1.70748 95.3033 2.1867C95.1112 2.162 94.8932 2.15936 94.697 2.13702Z"
                                                            fill="currentcolor"
                                                        />
                                                    </svg>
                                                </span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="it-course-tab-content">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                                <div class="row gx-35">
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="it-course-item mb-35">
                                            <div class="it-course-thumb z-index-1 border-radius-20">
                                                <a href="courses-details-v3.html"
                                                    ><img
                                                        class="w-100"
                                                        src="frontAssets/img/course/course-1-1.jpg"
                                                        alt=""
                                                /></a>
                                                <span class="course-category">Design</span>
                                                <button class="wishlist-btn">
                                                    <svg
                                                        width="14"
                                                        height="16"
                                                        viewBox="0 0 14 16"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <path
                                                            d="M13.6811 4.50134C13.3564 2.47755 11.9261 0.859544 10.0381 0.378868C9.06325 0.130895 8.04117 0.00363597 6.99804 0C5.95853 0.00290878 4.93718 0.130168 3.96232 0.378868C2.07436 0.859544 0.644035 2.47755 0.319325 4.50134C-0.155754 7.46102 -0.101273 10.5952 0.486402 14.0829C0.638224 14.9875 1.28038 15.7103 2.1717 15.9234C3.27005 16.1859 4.09235 15.695 4.53692 15.1395C4.99675 14.565 6.75178 12.3267 6.75178 12.3267C6.83459 12.2212 6.94355 12.2052 7.00021 12.2052C7.05688 12.2052 7.16584 12.2205 7.24865 12.3267C7.24865 12.3267 9.00441 14.5657 9.46351 15.1395C10.0359 15.8536 10.9418 16.1546 11.8287 15.9234C12.7157 15.6929 13.3615 14.9875 13.5133 14.0836C14.101 10.596 14.1562 7.46175 13.6804 4.50206L13.6811 4.50134ZM12.0808 13.8414C11.9973 14.3396 11.5868 14.4835 11.4626 14.5155C11.3399 14.5483 10.9113 14.6224 10.5967 14.229C10.1398 13.6589 9.65601 13.0415 9.16785 12.4176L8.38913 11.425C8.05134 10.9959 7.54503 10.7501 6.99949 10.7501C6.45395 10.7501 5.94836 10.9959 5.60985 11.425L4.83112 12.4176C4.34297 13.0408 3.85917 13.6589 3.40225 14.229C3.08844 14.6224 2.66058 14.5483 2.53636 14.5155C2.41287 14.4835 2.00244 14.3396 1.91818 13.8407C1.35738 10.5123 1.3029 7.53228 1.75255 4.73186C1.98573 3.2811 2.99328 2.12559 4.31972 1.78817C5.17908 1.56929 6.08129 1.4573 6.99731 1.45439C7.91768 1.4573 8.8199 1.56929 9.67925 1.78817C11.0057 2.12559 12.0132 3.2811 12.2464 4.73186C12.6961 7.53228 12.6416 10.5123 12.0808 13.8407V13.8414Z"
                                                            fill="currentcolor"
                                                        />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="it-course-content p-relative">
                                                <div class="it-course-price-box mb-20">
                                                    <del>$20.00</del>
                                                    <span>$9.00</span>
                                                </div>
                                                <h5 class="it-course-title mb-20">
                                                    <a class="border-line" href="courses-details-v3.html"
                                                        >Design Thinking Researching for Better UX</a
                                                    >
                                                </h5>
                                                <div class="it-course-rating mb-10">
                                                    <div>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-regular fa-star"></i>
                                                        <span>(4.7/5 Customer Rating)</span>
                                                    </div>
                                                </div>
                                                <div class="it-course-meta mb-30 d-flex justify-content-between">
                                                    <span>
                                                        <svg
                                                            width="20"
                                                            height="20"
                                                            viewBox="0 0 20 20"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M18.5 1.80239C18.0315 1.41066 17.4826 1.12688 16.8921 0.971189C16.3016 0.815501 15.684 0.791726 15.0833 0.901552L11.8983 1.47989C11.163 1.61492 10.4944 1.99324 10 2.55405C9.5043 1.99227 8.8338 1.61387 8.09667 1.47989L4.91667 0.901552C4.31596 0.79163 3.69844 0.815094 3.10781 0.970282C2.51718 1.12547 1.96789 1.40859 1.4988 1.7996C1.02972 2.19061 0.652322 2.67994 0.393318 3.23297C0.134315 3.78601 4.0677e-05 4.38921 0 4.99989L0 13.9941C4.78799e-05 14.9697 0.342481 15.9144 0.967611 16.6635C1.59274 17.4126 2.46092 17.9186 3.42083 18.0932L8.65917 19.0457C9.5458 19.2068 10.4542 19.2068 11.3408 19.0457L16.5833 18.0932C17.5425 17.9177 18.4097 17.4114 19.034 16.6624C19.6583 15.9134 20.0001 14.9691 20 13.9941V4.99989C20.0004 4.38942 19.8662 3.78638 19.6069 3.23371C19.3476 2.68104 18.9697 2.19233 18.5 1.80239ZM9.16667 17.4399C9.09667 17.4299 9.02667 17.4182 8.95667 17.4057L3.71917 16.4541C3.14314 16.3493 2.62216 16.0456 2.24707 15.596C1.87198 15.1465 1.66658 14.5795 1.66667 13.9941V4.99989C1.66667 4.33684 1.93006 3.70096 2.3989 3.23212C2.86774 2.76328 3.50363 2.49989 4.16667 2.49989C4.31758 2.50025 4.46816 2.51391 4.61667 2.54072L7.8 3.12405C8.18301 3.19414 8.52939 3.39611 8.77904 3.69492C9.02868 3.99373 9.16582 4.37052 9.16667 4.75989V17.4399ZM18.3333 13.9941C18.3334 14.5795 18.128 15.1465 17.7529 15.596C17.3778 16.0456 16.8569 16.3493 16.2808 16.4541L11.0433 17.4057C10.9733 17.4182 10.9033 17.4299 10.8333 17.4399V4.75989C10.8333 4.36956 10.9702 3.9916 11.2203 3.69189C11.4703 3.39219 11.8176 3.18975 12.2017 3.11989L15.3858 2.53655C15.7464 2.47094 16.117 2.48543 16.4714 2.57898C16.8258 2.67253 17.1553 2.84285 17.4365 3.07789C17.7178 3.31293 17.9439 3.60693 18.0988 3.93907C18.2538 4.27121 18.3339 4.63337 18.3333 4.99989V13.9941Z"
                                                                fill="#6C757D"
                                                            />
                                                        </svg>
                                                        20 Lessons
                                                    </span>
                                                    <span>
                                                        <svg
                                                            width="20"
                                                            height="20"
                                                            viewBox="0 0 20 20"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M10 0C4.48583 0 0 4.48583 0 10C0 15.5142 4.48583 20 10 20C15.5142 20 20 15.5142 20 10C20 4.48583 15.5142 0 10 0ZM6.66667 17.6367V17.5C6.66667 15.6617 8.16167 14.1667 10 14.1667C11.8383 14.1667 13.3333 15.6617 13.3333 17.5V17.6367C12.3117 18.0842 11.185 18.3333 10 18.3333C8.815 18.3333 7.68833 18.0842 6.66667 17.6367ZM14.9375 16.7092C14.5575 14.3267 12.4883 12.5 10 12.5C7.51167 12.5 5.44333 14.3267 5.0625 16.7092C3.00417 15.19 1.66667 12.7483 1.66667 10C1.66667 5.405 5.405 1.66667 10 1.66667C14.595 1.66667 18.3333 5.405 18.3333 10C18.3333 12.7483 16.9958 15.19 14.9375 16.7092ZM10 4.16667C8.16167 4.16667 6.66667 5.66167 6.66667 7.5C6.66667 9.33833 8.16167 10.8333 10 10.8333C11.8383 10.8333 13.3333 9.33833 13.3333 7.5C13.3333 5.66167 11.8383 4.16667 10 4.16667ZM10 9.16667C9.08083 9.16667 8.33333 8.41917 8.33333 7.5C8.33333 6.58083 9.08083 5.83333 10 5.83333C10.9192 5.83333 11.6667 6.58083 11.6667 7.5C11.6667 8.41917 10.9192 9.16667 10 9.16667Z"
                                                                fill="#6C757D"
                                                            />
                                                        </svg>
                                                        50 Sutudents
                                                    </span>
                                                </div>
                                                <div class="it-course-btn">
                                                    <a
                                                        href="courses-details-v3.html"
                                                        class="it-btn-yellow w-100 border-radius-100"
                                                    >
                                                        <span>
                                                            <span class="text-1">Preview This Course</span>
                                                            <span class="text-2">Preview This Course</span>
                                                        </span>
                                                        <i>
                                                            <svg
                                                                width="16"
                                                                height="15"
                                                                viewBox="0 0 16 15"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    d="M15.0544 8.1364C15.4058 7.78492 15.4058 7.21508 15.0544 6.8636L9.3268 1.13604C8.97533 0.784567 8.40548 0.784567 8.05401 1.13604C7.70254 1.48751 7.70254 2.05736 8.05401 2.40883L13.1452 7.5L8.05401 12.5912C7.70254 12.9426 7.70254 13.5125 8.05401 13.864C8.40548 14.2154 8.97533 14.2154 9.3268 13.864L15.0544 8.1364ZM0.417969 7.5V8.4H14.418V7.5V6.6H0.417969V7.5Z"
                                                                    fill="currentcolor"
                                                                />
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="it-course-item mb-35">
                                            <div class="it-course-thumb z-index-1 border-radius-20">
                                                <a href="courses-details-v3.html"
                                                    ><img
                                                        class="w-100"
                                                        src="{{ asset('frontAssets/img/course/course-1-2.jpg') }}"
                                                        alt=""
                                                /></a>
                                                <button class="wishlist-btn">
                                                    <svg
                                                        width="14"
                                                        height="16"
                                                        viewBox="0 0 14 16"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <path
                                                            d="M13.6811 4.50134C13.3564 2.47755 11.9261 0.859544 10.0381 0.378868C9.06325 0.130895 8.04117 0.00363597 6.99804 0C5.95853 0.00290878 4.93718 0.130168 3.96232 0.378868C2.07436 0.859544 0.644035 2.47755 0.319325 4.50134C-0.155754 7.46102 -0.101273 10.5952 0.486402 14.0829C0.638224 14.9875 1.28038 15.7103 2.1717 15.9234C3.27005 16.1859 4.09235 15.695 4.53692 15.1395C4.99675 14.565 6.75178 12.3267 6.75178 12.3267C6.83459 12.2212 6.94355 12.2052 7.00021 12.2052C7.05688 12.2052 7.16584 12.2205 7.24865 12.3267C7.24865 12.3267 9.00441 14.5657 9.46351 15.1395C10.0359 15.8536 10.9418 16.1546 11.8287 15.9234C12.7157 15.6929 13.3615 14.9875 13.5133 14.0836C14.101 10.596 14.1562 7.46175 13.6804 4.50206L13.6811 4.50134ZM12.0808 13.8414C11.9973 14.3396 11.5868 14.4835 11.4626 14.5155C11.3399 14.5483 10.9113 14.6224 10.5967 14.229C10.1398 13.6589 9.65601 13.0415 9.16785 12.4176L8.38913 11.425C8.05134 10.9959 7.54503 10.7501 6.99949 10.7501C6.45395 10.7501 5.94836 10.9959 5.60985 11.425L4.83112 12.4176C4.34297 13.0408 3.85917 13.6589 3.40225 14.229C3.08844 14.6224 2.66058 14.5483 2.53636 14.5155C2.41287 14.4835 2.00244 14.3396 1.91818 13.8407C1.35738 10.5123 1.3029 7.53228 1.75255 4.73186C1.98573 3.2811 2.99328 2.12559 4.31972 1.78817C5.17908 1.56929 6.08129 1.4573 6.99731 1.45439C7.91768 1.4573 8.8199 1.56929 9.67925 1.78817C11.0057 2.12559 12.0132 3.2811 12.2464 4.73186C12.6961 7.53228 12.6416 10.5123 12.0808 13.8407V13.8414Z"
                                                            fill="currentcolor"
                                                        />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="it-course-content p-relative">
                                                <div class="it-course-price-box mb-20">
                                                    <del>$20.00</del>
                                                    <span>$9.00</span>
                                                </div>
                                                <h5 class="it-course-title mb-20">
                                                    <a class="border-line" href="courses-details-v3.html"
                                                        >Discover Highly Rated Learning Programs</a
                                                    >
                                                </h5>
                                                <div class="it-course-rating mb-10">
                                                    <div>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-regular fa-star"></i>
                                                        <span>(4.7/5 Customer Rating)</span>
                                                    </div>
                                                </div>
                                                <div class="it-course-meta mb-30 d-flex justify-content-between">
                                                    <span>
                                                        <svg
                                                            width="20"
                                                            height="20"
                                                            viewBox="0 0 20 20"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M18.5 1.80239C18.0315 1.41066 17.4826 1.12688 16.8921 0.971189C16.3016 0.815501 15.684 0.791726 15.0833 0.901552L11.8983 1.47989C11.163 1.61492 10.4944 1.99324 10 2.55405C9.5043 1.99227 8.8338 1.61387 8.09667 1.47989L4.91667 0.901552C4.31596 0.79163 3.69844 0.815094 3.10781 0.970282C2.51718 1.12547 1.96789 1.40859 1.4988 1.7996C1.02972 2.19061 0.652322 2.67994 0.393318 3.23297C0.134315 3.78601 4.0677e-05 4.38921 0 4.99989L0 13.9941C4.78799e-05 14.9697 0.342481 15.9144 0.967611 16.6635C1.59274 17.4126 2.46092 17.9186 3.42083 18.0932L8.65917 19.0457C9.5458 19.2068 10.4542 19.2068 11.3408 19.0457L16.5833 18.0932C17.5425 17.9177 18.4097 17.4114 19.034 16.6624C19.6583 15.9134 20.0001 14.9691 20 13.9941V4.99989C20.0004 4.38942 19.8662 3.78638 19.6069 3.23371C19.3476 2.68104 18.9697 2.19233 18.5 1.80239ZM9.16667 17.4399C9.09667 17.4299 9.02667 17.4182 8.95667 17.4057L3.71917 16.4541C3.14314 16.3493 2.62216 16.0456 2.24707 15.596C1.87198 15.1465 1.66658 14.5795 1.66667 13.9941V4.99989C1.66667 4.33684 1.93006 3.70096 2.3989 3.23212C2.86774 2.76328 3.50363 2.49989 4.16667 2.49989C4.31758 2.50025 4.46816 2.51391 4.61667 2.54072L7.8 3.12405C8.18301 3.19414 8.52939 3.39611 8.77904 3.69492C9.02868 3.99373 9.16582 4.37052 9.16667 4.75989V17.4399ZM18.3333 13.9941C18.3334 14.5795 18.128 15.1465 17.7529 15.596C17.3778 16.0456 16.8569 16.3493 16.2808 16.4541L11.0433 17.4057C10.9733 17.4182 10.9033 17.4299 10.8333 17.4399V4.75989C10.8333 4.36956 10.9702 3.9916 11.2203 3.69189C11.4703 3.39219 11.8176 3.18975 12.2017 3.11989L15.3858 2.53655C15.7464 2.47094 16.117 2.48543 16.4714 2.57898C16.8258 2.67253 17.1553 2.84285 17.4365 3.07789C17.7178 3.31293 17.9439 3.60693 18.0988 3.93907C18.2538 4.27121 18.3339 4.63337 18.3333 4.99989V13.9941Z"
                                                                fill="#6C757D"
                                                            />
                                                        </svg>
                                                        20 Lessons
                                                    </span>
                                                    <span>
                                                        <svg
                                                            width="20"
                                                            height="20"
                                                            viewBox="0 0 20 20"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M10 0C4.48583 0 0 4.48583 0 10C0 15.5142 4.48583 20 10 20C15.5142 20 20 15.5142 20 10C20 4.48583 15.5142 0 10 0ZM6.66667 17.6367V17.5C6.66667 15.6617 8.16167 14.1667 10 14.1667C11.8383 14.1667 13.3333 15.6617 13.3333 17.5V17.6367C12.3117 18.0842 11.185 18.3333 10 18.3333C8.815 18.3333 7.68833 18.0842 6.66667 17.6367ZM14.9375 16.7092C14.5575 14.3267 12.4883 12.5 10 12.5C7.51167 12.5 5.44333 14.3267 5.0625 16.7092C3.00417 15.19 1.66667 12.7483 1.66667 10C1.66667 5.405 5.405 1.66667 10 1.66667C14.595 1.66667 18.3333 5.405 18.3333 10C18.3333 12.7483 16.9958 15.19 14.9375 16.7092ZM10 4.16667C8.16167 4.16667 6.66667 5.66167 6.66667 7.5C6.66667 9.33833 8.16167 10.8333 10 10.8333C11.8383 10.8333 13.3333 9.33833 13.3333 7.5C13.3333 5.66167 11.8383 4.16667 10 4.16667ZM10 9.16667C9.08083 9.16667 8.33333 8.41917 8.33333 7.5C8.33333 6.58083 9.08083 5.83333 10 5.83333C10.9192 5.83333 11.6667 6.58083 11.6667 7.5C11.6667 8.41917 10.9192 9.16667 10 9.16667Z"
                                                                fill="#6C757D"
                                                            />
                                                        </svg>
                                                        50 Sutudents
                                                    </span>
                                                </div>
                                                <div class="it-course-btn">
                                                    <a href="#" class="it-btn-yellow w-100 border-radius-100">
                                                        <span>
                                                            <span class="text-1">Preview This Course</span>
                                                            <span class="text-2">Preview This Course</span>
                                                        </span>
                                                        <i>
                                                            <svg
                                                                width="16"
                                                                height="15"
                                                                viewBox="0 0 16 15"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    d="M15.0544 8.1364C15.4058 7.78492 15.4058 7.21508 15.0544 6.8636L9.3268 1.13604C8.97533 0.784567 8.40548 0.784567 8.05401 1.13604C7.70254 1.48751 7.70254 2.05736 8.05401 2.40883L13.1452 7.5L8.05401 12.5912C7.70254 12.9426 7.70254 13.5125 8.05401 13.864C8.40548 14.2154 8.97533 14.2154 9.3268 13.864L15.0544 8.1364ZM0.417969 7.5V8.4H14.418V7.5V6.6H0.417969V7.5Z"
                                                                    fill="currentcolor"
                                                                />
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="it-course-item mb-35">
                                            <div class="it-course-thumb z-index-1 border-radius-20">
                                                <a href="courses-details-v3.html"
                                                    ><img
                                                        class="w-100"
                                                        src="frontAssets/img/course/course-1-3.jpg"
                                                        alt=""
                                                /></a>
                                                <span class="course-category">Business</span>
                                                <button class="wishlist-btn">
                                                    <svg
                                                        width="14"
                                                        height="16"
                                                        viewBox="0 0 14 16"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <path
                                                            d="M13.6811 4.50134C13.3564 2.47755 11.9261 0.859544 10.0381 0.378868C9.06325 0.130895 8.04117 0.00363597 6.99804 0C5.95853 0.00290878 4.93718 0.130168 3.96232 0.378868C2.07436 0.859544 0.644035 2.47755 0.319325 4.50134C-0.155754 7.46102 -0.101273 10.5952 0.486402 14.0829C0.638224 14.9875 1.28038 15.7103 2.1717 15.9234C3.27005 16.1859 4.09235 15.695 4.53692 15.1395C4.99675 14.565 6.75178 12.3267 6.75178 12.3267C6.83459 12.2212 6.94355 12.2052 7.00021 12.2052C7.05688 12.2052 7.16584 12.2205 7.24865 12.3267C7.24865 12.3267 9.00441 14.5657 9.46351 15.1395C10.0359 15.8536 10.9418 16.1546 11.8287 15.9234C12.7157 15.6929 13.3615 14.9875 13.5133 14.0836C14.101 10.596 14.1562 7.46175 13.6804 4.50206L13.6811 4.50134ZM12.0808 13.8414C11.9973 14.3396 11.5868 14.4835 11.4626 14.5155C11.3399 14.5483 10.9113 14.6224 10.5967 14.229C10.1398 13.6589 9.65601 13.0415 9.16785 12.4176L8.38913 11.425C8.05134 10.9959 7.54503 10.7501 6.99949 10.7501C6.45395 10.7501 5.94836 10.9959 5.60985 11.425L4.83112 12.4176C4.34297 13.0408 3.85917 13.6589 3.40225 14.229C3.08844 14.6224 2.66058 14.5483 2.53636 14.5155C2.41287 14.4835 2.00244 14.3396 1.91818 13.8407C1.35738 10.5123 1.3029 7.53228 1.75255 4.73186C1.98573 3.2811 2.99328 2.12559 4.31972 1.78817C5.17908 1.56929 6.08129 1.4573 6.99731 1.45439C7.91768 1.4573 8.8199 1.56929 9.67925 1.78817C11.0057 2.12559 12.0132 3.2811 12.2464 4.73186C12.6961 7.53228 12.6416 10.5123 12.0808 13.8407V13.8414Z"
                                                            fill="currentcolor"
                                                        />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="it-course-content p-relative">
                                                <div class="it-course-price-box mb-20">
                                                    <del>$20.00</del>
                                                    <span>$9.00</span>
                                                </div>
                                                <h5 class="it-course-title mb-20">
                                                    <a class="border-line" href="courses-details-v3.html"
                                                        >Boost Your Skills with Popular Courses</a
                                                    >
                                                </h5>
                                                <div class="it-course-rating mb-10">
                                                    <div>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-regular fa-star"></i>
                                                        <span>(4.7/5 Customer Rating)</span>
                                                    </div>
                                                </div>
                                                <div class="it-course-meta mb-30 d-flex justify-content-between">
                                                    <span>
                                                        <svg
                                                            width="20"
                                                            height="20"
                                                            viewBox="0 0 20 20"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M18.5 1.80239C18.0315 1.41066 17.4826 1.12688 16.8921 0.971189C16.3016 0.815501 15.684 0.791726 15.0833 0.901552L11.8983 1.47989C11.163 1.61492 10.4944 1.99324 10 2.55405C9.5043 1.99227 8.8338 1.61387 8.09667 1.47989L4.91667 0.901552C4.31596 0.79163 3.69844 0.815094 3.10781 0.970282C2.51718 1.12547 1.96789 1.40859 1.4988 1.7996C1.02972 2.19061 0.652322 2.67994 0.393318 3.23297C0.134315 3.78601 4.0677e-05 4.38921 0 4.99989L0 13.9941C4.78799e-05 14.9697 0.342481 15.9144 0.967611 16.6635C1.59274 17.4126 2.46092 17.9186 3.42083 18.0932L8.65917 19.0457C9.5458 19.2068 10.4542 19.2068 11.3408 19.0457L16.5833 18.0932C17.5425 17.9177 18.4097 17.4114 19.034 16.6624C19.6583 15.9134 20.0001 14.9691 20 13.9941V4.99989C20.0004 4.38942 19.8662 3.78638 19.6069 3.23371C19.3476 2.68104 18.9697 2.19233 18.5 1.80239ZM9.16667 17.4399C9.09667 17.4299 9.02667 17.4182 8.95667 17.4057L3.71917 16.4541C3.14314 16.3493 2.62216 16.0456 2.24707 15.596C1.87198 15.1465 1.66658 14.5795 1.66667 13.9941V4.99989C1.66667 4.33684 1.93006 3.70096 2.3989 3.23212C2.86774 2.76328 3.50363 2.49989 4.16667 2.49989C4.31758 2.50025 4.46816 2.51391 4.61667 2.54072L7.8 3.12405C8.18301 3.19414 8.52939 3.39611 8.77904 3.69492C9.02868 3.99373 9.16582 4.37052 9.16667 4.75989V17.4399ZM18.3333 13.9941C18.3334 14.5795 18.128 15.1465 17.7529 15.596C17.3778 16.0456 16.8569 16.3493 16.2808 16.4541L11.0433 17.4057C10.9733 17.4182 10.9033 17.4299 10.8333 17.4399V4.75989C10.8333 4.36956 10.9702 3.9916 11.2203 3.69189C11.4703 3.39219 11.8176 3.18975 12.2017 3.11989L15.3858 2.53655C15.7464 2.47094 16.117 2.48543 16.4714 2.57898C16.8258 2.67253 17.1553 2.84285 17.4365 3.07789C17.7178 3.31293 17.9439 3.60693 18.0988 3.93907C18.2538 4.27121 18.3339 4.63337 18.3333 4.99989V13.9941Z"
                                                                fill="#6C757D"
                                                            />
                                                        </svg>
                                                        20 Lessons
                                                    </span>
                                                    <span>
                                                        <svg
                                                            width="20"
                                                            height="20"
                                                            viewBox="0 0 20 20"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M10 0C4.48583 0 0 4.48583 0 10C0 15.5142 4.48583 20 10 20C15.5142 20 20 15.5142 20 10C20 4.48583 15.5142 0 10 0ZM6.66667 17.6367V17.5C6.66667 15.6617 8.16167 14.1667 10 14.1667C11.8383 14.1667 13.3333 15.6617 13.3333 17.5V17.6367C12.3117 18.0842 11.185 18.3333 10 18.3333C8.815 18.3333 7.68833 18.0842 6.66667 17.6367ZM14.9375 16.7092C14.5575 14.3267 12.4883 12.5 10 12.5C7.51167 12.5 5.44333 14.3267 5.0625 16.7092C3.00417 15.19 1.66667 12.7483 1.66667 10C1.66667 5.405 5.405 1.66667 10 1.66667C14.595 1.66667 18.3333 5.405 18.3333 10C18.3333 12.7483 16.9958 15.19 14.9375 16.7092ZM10 4.16667C8.16167 4.16667 6.66667 5.66167 6.66667 7.5C6.66667 9.33833 8.16167 10.8333 10 10.8333C11.8383 10.8333 13.3333 9.33833 13.3333 7.5C13.3333 5.66167 11.8383 4.16667 10 4.16667ZM10 9.16667C9.08083 9.16667 8.33333 8.41917 8.33333 7.5C8.33333 6.58083 9.08083 5.83333 10 5.83333C10.9192 5.83333 11.6667 6.58083 11.6667 7.5C11.6667 8.41917 10.9192 9.16667 10 9.16667Z"
                                                                fill="#6C757D"
                                                            />
                                                        </svg>
                                                        50 Sutudents
                                                    </span>
                                                </div>
                                                <div class="it-course-btn">
                                                    <a href="#" class="it-btn-yellow w-100 border-radius-100">
                                                        <span>
                                                            <span class="text-1">Preview This Course</span>
                                                            <span class="text-2">Preview This Course</span>
                                                        </span>
                                                        <i>
                                                            <svg
                                                                width="16"
                                                                height="15"
                                                                viewBox="0 0 16 15"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    d="M15.0544 8.1364C15.4058 7.78492 15.4058 7.21508 15.0544 6.8636L9.3268 1.13604C8.97533 0.784567 8.40548 0.784567 8.05401 1.13604C7.70254 1.48751 7.70254 2.05736 8.05401 2.40883L13.1452 7.5L8.05401 12.5912C7.70254 12.9426 7.70254 13.5125 8.05401 13.864C8.40548 14.2154 8.97533 14.2154 9.3268 13.864L15.0544 8.1364ZM0.417969 7.5V8.4H14.418V7.5V6.6H0.417969V7.5Z"
                                                                    fill="currentcolor"
                                                                />
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="trending" role="tabpanel" aria-labelledby="trending-tab">
                                <div class="row gx-35">
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="it-course-item mb-35">
                                            <div class="it-course-thumb z-index-1 border-radius-20">
                                                <a href="courses-details-v3.html"
                                                    ><img
                                                        class="w-100"
                                                        src="frontAssets/img/course/course-1-3.jpg"
                                                        alt=""
                                                /></a>
                                                <span class="course-category">Business</span>
                                                <button class="wishlist-btn">
                                                    <svg
                                                        width="14"
                                                        height="16"
                                                        viewBox="0 0 14 16"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <path
                                                            d="M13.6811 4.50134C13.3564 2.47755 11.9261 0.859544 10.0381 0.378868C9.06325 0.130895 8.04117 0.00363597 6.99804 0C5.95853 0.00290878 4.93718 0.130168 3.96232 0.378868C2.07436 0.859544 0.644035 2.47755 0.319325 4.50134C-0.155754 7.46102 -0.101273 10.5952 0.486402 14.0829C0.638224 14.9875 1.28038 15.7103 2.1717 15.9234C3.27005 16.1859 4.09235 15.695 4.53692 15.1395C4.99675 14.565 6.75178 12.3267 6.75178 12.3267C6.83459 12.2212 6.94355 12.2052 7.00021 12.2052C7.05688 12.2052 7.16584 12.2205 7.24865 12.3267C7.24865 12.3267 9.00441 14.5657 9.46351 15.1395C10.0359 15.8536 10.9418 16.1546 11.8287 15.9234C12.7157 15.6929 13.3615 14.9875 13.5133 14.0836C14.101 10.596 14.1562 7.46175 13.6804 4.50206L13.6811 4.50134ZM12.0808 13.8414C11.9973 14.3396 11.5868 14.4835 11.4626 14.5155C11.3399 14.5483 10.9113 14.6224 10.5967 14.229C10.1398 13.6589 9.65601 13.0415 9.16785 12.4176L8.38913 11.425C8.05134 10.9959 7.54503 10.7501 6.99949 10.7501C6.45395 10.7501 5.94836 10.9959 5.60985 11.425L4.83112 12.4176C4.34297 13.0408 3.85917 13.6589 3.40225 14.229C3.08844 14.6224 2.66058 14.5483 2.53636 14.5155C2.41287 14.4835 2.00244 14.3396 1.91818 13.8407C1.35738 10.5123 1.3029 7.53228 1.75255 4.73186C1.98573 3.2811 2.99328 2.12559 4.31972 1.78817C5.17908 1.56929 6.08129 1.4573 6.99731 1.45439C7.91768 1.4573 8.8199 1.56929 9.67925 1.78817C11.0057 2.12559 12.0132 3.2811 12.2464 4.73186C12.6961 7.53228 12.6416 10.5123 12.0808 13.8407V13.8414Z"
                                                            fill="currentcolor"
                                                        />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="it-course-content p-relative">
                                                <div class="it-course-price-box mb-20">
                                                    <del>$20.00</del>
                                                    <span>$9.00</span>
                                                </div>
                                                <h5 class="it-course-title mb-20">
                                                    <a class="border-line" href="courses-details-v3.html"
                                                        >Boost Your Skills with Popular Courses</a
                                                    >
                                                </h5>
                                                <div class="it-course-rating mb-10">
                                                    <div>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-regular fa-star"></i>
                                                        <span>(4.7/5 Customer Rating)</span>
                                                    </div>
                                                </div>
                                                <div class="it-course-meta mb-30 d-flex justify-content-between">
                                                    <span>
                                                        <svg
                                                            width="20"
                                                            height="20"
                                                            viewBox="0 0 20 20"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M18.5 1.80239C18.0315 1.41066 17.4826 1.12688 16.8921 0.971189C16.3016 0.815501 15.684 0.791726 15.0833 0.901552L11.8983 1.47989C11.163 1.61492 10.4944 1.99324 10 2.55405C9.5043 1.99227 8.8338 1.61387 8.09667 1.47989L4.91667 0.901552C4.31596 0.79163 3.69844 0.815094 3.10781 0.970282C2.51718 1.12547 1.96789 1.40859 1.4988 1.7996C1.02972 2.19061 0.652322 2.67994 0.393318 3.23297C0.134315 3.78601 4.0677e-05 4.38921 0 4.99989L0 13.9941C4.78799e-05 14.9697 0.342481 15.9144 0.967611 16.6635C1.59274 17.4126 2.46092 17.9186 3.42083 18.0932L8.65917 19.0457C9.5458 19.2068 10.4542 19.2068 11.3408 19.0457L16.5833 18.0932C17.5425 17.9177 18.4097 17.4114 19.034 16.6624C19.6583 15.9134 20.0001 14.9691 20 13.9941V4.99989C20.0004 4.38942 19.8662 3.78638 19.6069 3.23371C19.3476 2.68104 18.9697 2.19233 18.5 1.80239ZM9.16667 17.4399C9.09667 17.4299 9.02667 17.4182 8.95667 17.4057L3.71917 16.4541C3.14314 16.3493 2.62216 16.0456 2.24707 15.596C1.87198 15.1465 1.66658 14.5795 1.66667 13.9941V4.99989C1.66667 4.33684 1.93006 3.70096 2.3989 3.23212C2.86774 2.76328 3.50363 2.49989 4.16667 2.49989C4.31758 2.50025 4.46816 2.51391 4.61667 2.54072L7.8 3.12405C8.18301 3.19414 8.52939 3.39611 8.77904 3.69492C9.02868 3.99373 9.16582 4.37052 9.16667 4.75989V17.4399ZM18.3333 13.9941C18.3334 14.5795 18.128 15.1465 17.7529 15.596C17.3778 16.0456 16.8569 16.3493 16.2808 16.4541L11.0433 17.4057C10.9733 17.4182 10.9033 17.4299 10.8333 17.4399V4.75989C10.8333 4.36956 10.9702 3.9916 11.2203 3.69189C11.4703 3.39219 11.8176 3.18975 12.2017 3.11989L15.3858 2.53655C15.7464 2.47094 16.117 2.48543 16.4714 2.57898C16.8258 2.67253 17.1553 2.84285 17.4365 3.07789C17.7178 3.31293 17.9439 3.60693 18.0988 3.93907C18.2538 4.27121 18.3339 4.63337 18.3333 4.99989V13.9941Z"
                                                                fill="#6C757D"
                                                            />
                                                        </svg>
                                                        20 Lessons
                                                    </span>
                                                    <span>
                                                        <svg
                                                            width="20"
                                                            height="20"
                                                            viewBox="0 0 20 20"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M10 0C4.48583 0 0 4.48583 0 10C0 15.5142 4.48583 20 10 20C15.5142 20 20 15.5142 20 10C20 4.48583 15.5142 0 10 0ZM6.66667 17.6367V17.5C6.66667 15.6617 8.16167 14.1667 10 14.1667C11.8383 14.1667 13.3333 15.6617 13.3333 17.5V17.6367C12.3117 18.0842 11.185 18.3333 10 18.3333C8.815 18.3333 7.68833 18.0842 6.66667 17.6367ZM14.9375 16.7092C14.5575 14.3267 12.4883 12.5 10 12.5C7.51167 12.5 5.44333 14.3267 5.0625 16.7092C3.00417 15.19 1.66667 12.7483 1.66667 10C1.66667 5.405 5.405 1.66667 10 1.66667C14.595 1.66667 18.3333 5.405 18.3333 10C18.3333 12.7483 16.9958 15.19 14.9375 16.7092ZM10 4.16667C8.16167 4.16667 6.66667 5.66167 6.66667 7.5C6.66667 9.33833 8.16167 10.8333 10 10.8333C11.8383 10.8333 13.3333 9.33833 13.3333 7.5C13.3333 5.66167 11.8383 4.16667 10 4.16667ZM10 9.16667C9.08083 9.16667 8.33333 8.41917 8.33333 7.5C8.33333 6.58083 9.08083 5.83333 10 5.83333C10.9192 5.83333 11.6667 6.58083 11.6667 7.5C11.6667 8.41917 10.9192 9.16667 10 9.16667Z"
                                                                fill="#6C757D"
                                                            />
                                                        </svg>
                                                        50 Sutudents
                                                    </span>
                                                </div>
                                                <div class="it-course-btn">
                                                    <a href="#" class="it-btn-yellow w-100 border-radius-100">
                                                        <span>
                                                            <span class="text-1">Preview This Course</span>
                                                            <span class="text-2">Preview This Course</span>
                                                        </span>
                                                        <i>
                                                            <svg
                                                                width="16"
                                                                height="15"
                                                                viewBox="0 0 16 15"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    d="M15.0544 8.1364C15.4058 7.78492 15.4058 7.21508 15.0544 6.8636L9.3268 1.13604C8.97533 0.784567 8.40548 0.784567 8.05401 1.13604C7.70254 1.48751 7.70254 2.05736 8.05401 2.40883L13.1452 7.5L8.05401 12.5912C7.70254 12.9426 7.70254 13.5125 8.05401 13.864C8.40548 14.2154 8.97533 14.2154 9.3268 13.864L15.0544 8.1364ZM0.417969 7.5V8.4H14.418V7.5V6.6H0.417969V7.5Z"
                                                                    fill="currentcolor"
                                                                />
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="it-course-item mb-35">
                                            <div class="it-course-thumb z-index-1 border-radius-20">
                                                <a href="courses-details-v3.html"
                                                    ><img
                                                        class="w-100"
                                                        src="frontAssets/img/course/course-1-4.jpg"
                                                        alt=""
                                                /></a>
                                                <span class="course-category">Technology</span>
                                                <button class="wishlist-btn">
                                                    <svg
                                                        width="14"
                                                        height="16"
                                                        viewBox="0 0 14 16"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <path
                                                            d="M13.6811 4.50134C13.3564 2.47755 11.9261 0.859544 10.0381 0.378868C9.06325 0.130895 8.04117 0.00363597 6.99804 0C5.95853 0.00290878 4.93718 0.130168 3.96232 0.378868C2.07436 0.859544 0.644035 2.47755 0.319325 4.50134C-0.155754 7.46102 -0.101273 10.5952 0.486402 14.0829C0.638224 14.9875 1.28038 15.7103 2.1717 15.9234C3.27005 16.1859 4.09235 15.695 4.53692 15.1395C4.99675 14.565 6.75178 12.3267 6.75178 12.3267C6.83459 12.2212 6.94355 12.2052 7.00021 12.2052C7.05688 12.2052 7.16584 12.2205 7.24865 12.3267C7.24865 12.3267 9.00441 14.5657 9.46351 15.1395C10.0359 15.8536 10.9418 16.1546 11.8287 15.9234C12.7157 15.6929 13.3615 14.9875 13.5133 14.0836C14.101 10.596 14.1562 7.46175 13.6804 4.50206L13.6811 4.50134ZM12.0808 13.8414C11.9973 14.3396 11.5868 14.4835 11.4626 14.5155C11.3399 14.5483 10.9113 14.6224 10.5967 14.229C10.1398 13.6589 9.65601 13.0415 9.16785 12.4176L8.38913 11.425C8.05134 10.9959 7.54503 10.7501 6.99949 10.7501C6.45395 10.7501 5.94836 10.9959 5.60985 11.425L4.83112 12.4176C4.34297 13.0408 3.85917 13.6589 3.40225 14.229C3.08844 14.6224 2.66058 14.5483 2.53636 14.5155C2.41287 14.4835 2.00244 14.3396 1.91818 13.8407C1.35738 10.5123 1.3029 7.53228 1.75255 4.73186C1.98573 3.2811 2.99328 2.12559 4.31972 1.78817C5.17908 1.56929 6.08129 1.4573 6.99731 1.45439C7.91768 1.4573 8.8199 1.56929 9.67925 1.78817C11.0057 2.12559 12.0132 3.2811 12.2464 4.73186C12.6961 7.53228 12.6416 10.5123 12.0808 13.8407V13.8414Z"
                                                            fill="currentcolor"
                                                        />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="it-course-content p-relative">
                                                <div class="it-course-price-box mb-20">
                                                    <del>$20.00</del>
                                                    <span>$9.00</span>
                                                </div>
                                                <h5 class="it-course-title mb-20">
                                                    <a class="border-line" href="courses-details-v3.html"
                                                        >Learn from the Best – Student Favorite Programs</a
                                                    >
                                                </h5>
                                                <div class="it-course-rating mb-10">
                                                    <div>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-regular fa-star"></i>
                                                        <span>(4.7/5 Customer Rating)</span>
                                                    </div>
                                                </div>
                                                <div class="it-course-meta mb-30 d-flex justify-content-between">
                                                    <span>
                                                        <svg
                                                            width="20"
                                                            height="20"
                                                            viewBox="0 0 20 20"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M18.5 1.80239C18.0315 1.41066 17.4826 1.12688 16.8921 0.971189C16.3016 0.815501 15.684 0.791726 15.0833 0.901552L11.8983 1.47989C11.163 1.61492 10.4944 1.99324 10 2.55405C9.5043 1.99227 8.8338 1.61387 8.09667 1.47989L4.91667 0.901552C4.31596 0.79163 3.69844 0.815094 3.10781 0.970282C2.51718 1.12547 1.96789 1.40859 1.4988 1.7996C1.02972 2.19061 0.652322 2.67994 0.393318 3.23297C0.134315 3.78601 4.0677e-05 4.38921 0 4.99989L0 13.9941C4.78799e-05 14.9697 0.342481 15.9144 0.967611 16.6635C1.59274 17.4126 2.46092 17.9186 3.42083 18.0932L8.65917 19.0457C9.5458 19.2068 10.4542 19.2068 11.3408 19.0457L16.5833 18.0932C17.5425 17.9177 18.4097 17.4114 19.034 16.6624C19.6583 15.9134 20.0001 14.9691 20 13.9941V4.99989C20.0004 4.38942 19.8662 3.78638 19.6069 3.23371C19.3476 2.68104 18.9697 2.19233 18.5 1.80239ZM9.16667 17.4399C9.09667 17.4299 9.02667 17.4182 8.95667 17.4057L3.71917 16.4541C3.14314 16.3493 2.62216 16.0456 2.24707 15.596C1.87198 15.1465 1.66658 14.5795 1.66667 13.9941V4.99989C1.66667 4.33684 1.93006 3.70096 2.3989 3.23212C2.86774 2.76328 3.50363 2.49989 4.16667 2.49989C4.31758 2.50025 4.46816 2.51391 4.61667 2.54072L7.8 3.12405C8.18301 3.19414 8.52939 3.39611 8.77904 3.69492C9.02868 3.99373 9.16582 4.37052 9.16667 4.75989V17.4399ZM18.3333 13.9941C18.3334 14.5795 18.128 15.1465 17.7529 15.596C17.3778 16.0456 16.8569 16.3493 16.2808 16.4541L11.0433 17.4057C10.9733 17.4182 10.9033 17.4299 10.8333 17.4399V4.75989C10.8333 4.36956 10.9702 3.9916 11.2203 3.69189C11.4703 3.39219 11.8176 3.18975 12.2017 3.11989L15.3858 2.53655C15.7464 2.47094 16.117 2.48543 16.4714 2.57898C16.8258 2.67253 17.1553 2.84285 17.4365 3.07789C17.7178 3.31293 17.9439 3.60693 18.0988 3.93907C18.2538 4.27121 18.3339 4.63337 18.3333 4.99989V13.9941Z"
                                                                fill="#6C757D"
                                                            />
                                                        </svg>
                                                        20 Lessons
                                                    </span>
                                                    <span>
                                                        <svg
                                                            width="20"
                                                            height="20"
                                                            viewBox="0 0 20 20"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M10 0C4.48583 0 0 4.48583 0 10C0 15.5142 4.48583 20 10 20C15.5142 20 20 15.5142 20 10C20 4.48583 15.5142 0 10 0ZM6.66667 17.6367V17.5C6.66667 15.6617 8.16167 14.1667 10 14.1667C11.8383 14.1667 13.3333 15.6617 13.3333 17.5V17.6367C12.3117 18.0842 11.185 18.3333 10 18.3333C8.815 18.3333 7.68833 18.0842 6.66667 17.6367ZM14.9375 16.7092C14.5575 14.3267 12.4883 12.5 10 12.5C7.51167 12.5 5.44333 14.3267 5.0625 16.7092C3.00417 15.19 1.66667 12.7483 1.66667 10C1.66667 5.405 5.405 1.66667 10 1.66667C14.595 1.66667 18.3333 5.405 18.3333 10C18.3333 12.7483 16.9958 15.19 14.9375 16.7092ZM10 4.16667C8.16167 4.16667 6.66667 5.66167 6.66667 7.5C6.66667 9.33833 8.16167 10.8333 10 10.8333C11.8383 10.8333 13.3333 9.33833 13.3333 7.5C13.3333 5.66167 11.8383 4.16667 10 4.16667ZM10 9.16667C9.08083 9.16667 8.33333 8.41917 8.33333 7.5C8.33333 6.58083 9.08083 5.83333 10 5.83333C10.9192 5.83333 11.6667 6.58083 11.6667 7.5C11.6667 8.41917 10.9192 9.16667 10 9.16667Z"
                                                                fill="#6C757D"
                                                            />
                                                        </svg>
                                                        50 Sutudents
                                                    </span>
                                                </div>
                                                <div class="it-course-btn">
                                                    <a href="#" class="it-btn-yellow w-100 border-radius-100">
                                                        <span>
                                                            <span class="text-1">Preview This Course</span>
                                                            <span class="text-2">Preview This Course</span>
                                                        </span>
                                                        <i>
                                                            <svg
                                                                width="16"
                                                                height="15"
                                                                viewBox="0 0 16 15"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    d="M15.0544 8.1364C15.4058 7.78492 15.4058 7.21508 15.0544 6.8636L9.3268 1.13604C8.97533 0.784567 8.40548 0.784567 8.05401 1.13604C7.70254 1.48751 7.70254 2.05736 8.05401 2.40883L13.1452 7.5L8.05401 12.5912C7.70254 12.9426 7.70254 13.5125 8.05401 13.864C8.40548 14.2154 8.97533 14.2154 9.3268 13.864L15.0544 8.1364ZM0.417969 7.5V8.4H14.418V7.5V6.6H0.417969V7.5Z"
                                                                    fill="currentcolor"
                                                                />
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="it-course-item mb-35">
                                            <div class="it-course-thumb z-index-1 border-radius-20">
                                                <a href="courses-details-v3.html"
                                                    ><img
                                                        class="w-100"
                                                        src="frontAssets/img/course/course-1-5.jpg"
                                                        alt=""
                                                /></a>
                                                <span class="course-category">Cooking</span>
                                                <button class="wishlist-btn">
                                                    <svg
                                                        width="14"
                                                        height="16"
                                                        viewBox="0 0 14 16"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <path
                                                            d="M13.6811 4.50134C13.3564 2.47755 11.9261 0.859544 10.0381 0.378868C9.06325 0.130895 8.04117 0.00363597 6.99804 0C5.95853 0.00290878 4.93718 0.130168 3.96232 0.378868C2.07436 0.859544 0.644035 2.47755 0.319325 4.50134C-0.155754 7.46102 -0.101273 10.5952 0.486402 14.0829C0.638224 14.9875 1.28038 15.7103 2.1717 15.9234C3.27005 16.1859 4.09235 15.695 4.53692 15.1395C4.99675 14.565 6.75178 12.3267 6.75178 12.3267C6.83459 12.2212 6.94355 12.2052 7.00021 12.2052C7.05688 12.2052 7.16584 12.2205 7.24865 12.3267C7.24865 12.3267 9.00441 14.5657 9.46351 15.1395C10.0359 15.8536 10.9418 16.1546 11.8287 15.9234C12.7157 15.6929 13.3615 14.9875 13.5133 14.0836C14.101 10.596 14.1562 7.46175 13.6804 4.50206L13.6811 4.50134ZM12.0808 13.8414C11.9973 14.3396 11.5868 14.4835 11.4626 14.5155C11.3399 14.5483 10.9113 14.6224 10.5967 14.229C10.1398 13.6589 9.65601 13.0415 9.16785 12.4176L8.38913 11.425C8.05134 10.9959 7.54503 10.7501 6.99949 10.7501C6.45395 10.7501 5.94836 10.9959 5.60985 11.425L4.83112 12.4176C4.34297 13.0408 3.85917 13.6589 3.40225 14.229C3.08844 14.6224 2.66058 14.5483 2.53636 14.5155C2.41287 14.4835 2.00244 14.3396 1.91818 13.8407C1.35738 10.5123 1.3029 7.53228 1.75255 4.73186C1.98573 3.2811 2.99328 2.12559 4.31972 1.78817C5.17908 1.56929 6.08129 1.4573 6.99731 1.45439C7.91768 1.4573 8.8199 1.56929 9.67925 1.78817C11.0057 2.12559 12.0132 3.2811 12.2464 4.73186C12.6961 7.53228 12.6416 10.5123 12.0808 13.8407V13.8414Z"
                                                            fill="currentcolor"
                                                        />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="it-course-content p-relative">
                                                <div class="it-course-price-box mb-20">
                                                    <del>$20.00</del>
                                                    <span>$9.00</span>
                                                </div>
                                                <h5 class="it-course-title mb-20">
                                                    <a class="border-line" href="courses-details-v3.html"
                                                        >Upgrade Your Knowledge with Expert Courses</a
                                                    >
                                                </h5>
                                                <div class="it-course-rating mb-10">
                                                    <div>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-regular fa-star"></i>
                                                        <span>(4.7/5 Customer Rating)</span>
                                                    </div>
                                                </div>
                                                <div class="it-course-meta mb-30 d-flex justify-content-between">
                                                    <span>
                                                        <svg
                                                            width="20"
                                                            height="20"
                                                            viewBox="0 0 20 20"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M18.5 1.80239C18.0315 1.41066 17.4826 1.12688 16.8921 0.971189C16.3016 0.815501 15.684 0.791726 15.0833 0.901552L11.8983 1.47989C11.163 1.61492 10.4944 1.99324 10 2.55405C9.5043 1.99227 8.8338 1.61387 8.09667 1.47989L4.91667 0.901552C4.31596 0.79163 3.69844 0.815094 3.10781 0.970282C2.51718 1.12547 1.96789 1.40859 1.4988 1.7996C1.02972 2.19061 0.652322 2.67994 0.393318 3.23297C0.134315 3.78601 4.0677e-05 4.38921 0 4.99989L0 13.9941C4.78799e-05 14.9697 0.342481 15.9144 0.967611 16.6635C1.59274 17.4126 2.46092 17.9186 3.42083 18.0932L8.65917 19.0457C9.5458 19.2068 10.4542 19.2068 11.3408 19.0457L16.5833 18.0932C17.5425 17.9177 18.4097 17.4114 19.034 16.6624C19.6583 15.9134 20.0001 14.9691 20 13.9941V4.99989C20.0004 4.38942 19.8662 3.78638 19.6069 3.23371C19.3476 2.68104 18.9697 2.19233 18.5 1.80239ZM9.16667 17.4399C9.09667 17.4299 9.02667 17.4182 8.95667 17.4057L3.71917 16.4541C3.14314 16.3493 2.62216 16.0456 2.24707 15.596C1.87198 15.1465 1.66658 14.5795 1.66667 13.9941V4.99989C1.66667 4.33684 1.93006 3.70096 2.3989 3.23212C2.86774 2.76328 3.50363 2.49989 4.16667 2.49989C4.31758 2.50025 4.46816 2.51391 4.61667 2.54072L7.8 3.12405C8.18301 3.19414 8.52939 3.39611 8.77904 3.69492C9.02868 3.99373 9.16582 4.37052 9.16667 4.75989V17.4399ZM18.3333 13.9941C18.3334 14.5795 18.128 15.1465 17.7529 15.596C17.3778 16.0456 16.8569 16.3493 16.2808 16.4541L11.0433 17.4057C10.9733 17.4182 10.9033 17.4299 10.8333 17.4399V4.75989C10.8333 4.36956 10.9702 3.9916 11.2203 3.69189C11.4703 3.39219 11.8176 3.18975 12.2017 3.11989L15.3858 2.53655C15.7464 2.47094 16.117 2.48543 16.4714 2.57898C16.8258 2.67253 17.1553 2.84285 17.4365 3.07789C17.7178 3.31293 17.9439 3.60693 18.0988 3.93907C18.2538 4.27121 18.3339 4.63337 18.3333 4.99989V13.9941Z"
                                                                fill="#6C757D"
                                                            />
                                                        </svg>
                                                        20 Lessons
                                                    </span>
                                                    <span>
                                                        <svg
                                                            width="20"
                                                            height="20"
                                                            viewBox="0 0 20 20"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M10 0C4.48583 0 0 4.48583 0 10C0 15.5142 4.48583 20 10 20C15.5142 20 20 15.5142 20 10C20 4.48583 15.5142 0 10 0ZM6.66667 17.6367V17.5C6.66667 15.6617 8.16167 14.1667 10 14.1667C11.8383 14.1667 13.3333 15.6617 13.3333 17.5V17.6367C12.3117 18.0842 11.185 18.3333 10 18.3333C8.815 18.3333 7.68833 18.0842 6.66667 17.6367ZM14.9375 16.7092C14.5575 14.3267 12.4883 12.5 10 12.5C7.51167 12.5 5.44333 14.3267 5.0625 16.7092C3.00417 15.19 1.66667 12.7483 1.66667 10C1.66667 5.405 5.405 1.66667 10 1.66667C14.595 1.66667 18.3333 5.405 18.3333 10C18.3333 12.7483 16.9958 15.19 14.9375 16.7092ZM10 4.16667C8.16167 4.16667 6.66667 5.66167 6.66667 7.5C6.66667 9.33833 8.16167 10.8333 10 10.8333C11.8383 10.8333 13.3333 9.33833 13.3333 7.5C13.3333 5.66167 11.8383 4.16667 10 4.16667ZM10 9.16667C9.08083 9.16667 8.33333 8.41917 8.33333 7.5C8.33333 6.58083 9.08083 5.83333 10 5.83333C10.9192 5.83333 11.6667 6.58083 11.6667 7.5C11.6667 8.41917 10.9192 9.16667 10 9.16667Z"
                                                                fill="#6C757D"
                                                            />
                                                        </svg>
                                                        50 Sutudents
                                                    </span>
                                                </div>
                                                <div class="it-course-btn">
                                                    <a href="#" class="it-btn-yellow w-100 border-radius-100">
                                                        <span>
                                                            <span class="text-1">Preview This Course</span>
                                                            <span class="text-2">Preview This Course</span>
                                                        </span>
                                                        <i>
                                                            <svg
                                                                width="16"
                                                                height="15"
                                                                viewBox="0 0 16 15"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    d="M15.0544 8.1364C15.4058 7.78492 15.4058 7.21508 15.0544 6.8636L9.3268 1.13604C8.97533 0.784567 8.40548 0.784567 8.05401 1.13604C7.70254 1.48751 7.70254 2.05736 8.05401 2.40883L13.1452 7.5L8.05401 12.5912C7.70254 12.9426 7.70254 13.5125 8.05401 13.864C8.40548 14.2154 8.97533 14.2154 9.3268 13.864L15.0544 8.1364ZM0.417969 7.5V8.4H14.418V7.5V6.6H0.417969V7.5Z"
                                                                    fill="currentcolor"
                                                                />
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="it-course-item mb-35">
                                            <div class="it-course-thumb z-index-1 border-radius-20">
                                                <a href="courses-details-v3.html"
                                                    ><img
                                                        class="w-100"
                                                        src="{{ asset('frontAssets/img/course/course-1-6.jpg') }}"
                                                        alt=""
                                                /></a>
                                                <span class="course-category">Design</span>
                                                <button class="wishlist-btn">
                                                    <svg
                                                        width="14"
                                                        height="16"
                                                        viewBox="0 0 14 16"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <path
                                                            d="M13.6811 4.50134C13.3564 2.47755 11.9261 0.859544 10.0381 0.378868C9.06325 0.130895 8.04117 0.00363597 6.99804 0C5.95853 0.00290878 4.93718 0.130168 3.96232 0.378868C2.07436 0.859544 0.644035 2.47755 0.319325 4.50134C-0.155754 7.46102 -0.101273 10.5952 0.486402 14.0829C0.638224 14.9875 1.28038 15.7103 2.1717 15.9234C3.27005 16.1859 4.09235 15.695 4.53692 15.1395C4.99675 14.565 6.75178 12.3267 6.75178 12.3267C6.83459 12.2212 6.94355 12.2052 7.00021 12.2052C7.05688 12.2052 7.16584 12.2205 7.24865 12.3267C7.24865 12.3267 9.00441 14.5657 9.46351 15.1395C10.0359 15.8536 10.9418 16.1546 11.8287 15.9234C12.7157 15.6929 13.3615 14.9875 13.5133 14.0836C14.101 10.596 14.1562 7.46175 13.6804 4.50206L13.6811 4.50134ZM12.0808 13.8414C11.9973 14.3396 11.5868 14.4835 11.4626 14.5155C11.3399 14.5483 10.9113 14.6224 10.5967 14.229C10.1398 13.6589 9.65601 13.0415 9.16785 12.4176L8.38913 11.425C8.05134 10.9959 7.54503 10.7501 6.99949 10.7501C6.45395 10.7501 5.94836 10.9959 5.60985 11.425L4.83112 12.4176C4.34297 13.0408 3.85917 13.6589 3.40225 14.229C3.08844 14.6224 2.66058 14.5483 2.53636 14.5155C2.41287 14.4835 2.00244 14.3396 1.91818 13.8407C1.35738 10.5123 1.3029 7.53228 1.75255 4.73186C1.98573 3.2811 2.99328 2.12559 4.31972 1.78817C5.17908 1.56929 6.08129 1.4573 6.99731 1.45439C7.91768 1.4573 8.8199 1.56929 9.67925 1.78817C11.0057 2.12559 12.0132 3.2811 12.2464 4.73186C12.6961 7.53228 12.6416 10.5123 12.0808 13.8407V13.8414Z"
                                                            fill="currentcolor"
                                                        />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="it-course-content p-relative">
                                                <div class="it-course-price-box mb-20">
                                                    <del>$20.00</del>
                                                    <span>$9.00</span>
                                                </div>
                                                <h5 class="it-course-title mb-20">
                                                    <a class="border-line" href="courses-details-v3.html"
                                                        >Today’s Most Recommended Learning Paths</a
                                                    >
                                                </h5>
                                                <div class="it-course-rating mb-10">
                                                    <div>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-regular fa-star"></i>
                                                        <span>(4.7/5 Customer Rating)</span>
                                                    </div>
                                                </div>
                                                <div class="it-course-meta mb-30 d-flex justify-content-between">
                                                    <span>
                                                        <svg
                                                            width="20"
                                                            height="20"
                                                            viewBox="0 0 20 20"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M18.5 1.80239C18.0315 1.41066 17.4826 1.12688 16.8921 0.971189C16.3016 0.815501 15.684 0.791726 15.0833 0.901552L11.8983 1.47989C11.163 1.61492 10.4944 1.99324 10 2.55405C9.5043 1.99227 8.8338 1.61387 8.09667 1.47989L4.91667 0.901552C4.31596 0.79163 3.69844 0.815094 3.10781 0.970282C2.51718 1.12547 1.96789 1.40859 1.4988 1.7996C1.02972 2.19061 0.652322 2.67994 0.393318 3.23297C0.134315 3.78601 4.0677e-05 4.38921 0 4.99989L0 13.9941C4.78799e-05 14.9697 0.342481 15.9144 0.967611 16.6635C1.59274 17.4126 2.46092 17.9186 3.42083 18.0932L8.65917 19.0457C9.5458 19.2068 10.4542 19.2068 11.3408 19.0457L16.5833 18.0932C17.5425 17.9177 18.4097 17.4114 19.034 16.6624C19.6583 15.9134 20.0001 14.9691 20 13.9941V4.99989C20.0004 4.38942 19.8662 3.78638 19.6069 3.23371C19.3476 2.68104 18.9697 2.19233 18.5 1.80239ZM9.16667 17.4399C9.09667 17.4299 9.02667 17.4182 8.95667 17.4057L3.71917 16.4541C3.14314 16.3493 2.62216 16.0456 2.24707 15.596C1.87198 15.1465 1.66658 14.5795 1.66667 13.9941V4.99989C1.66667 4.33684 1.93006 3.70096 2.3989 3.23212C2.86774 2.76328 3.50363 2.49989 4.16667 2.49989C4.31758 2.50025 4.46816 2.51391 4.61667 2.54072L7.8 3.12405C8.18301 3.19414 8.52939 3.39611 8.77904 3.69492C9.02868 3.99373 9.16582 4.37052 9.16667 4.75989V17.4399ZM18.3333 13.9941C18.3334 14.5795 18.128 15.1465 17.7529 15.596C17.3778 16.0456 16.8569 16.3493 16.2808 16.4541L11.0433 17.4057C10.9733 17.4182 10.9033 17.4299 10.8333 17.4399V4.75989C10.8333 4.36956 10.9702 3.9916 11.2203 3.69189C11.4703 3.39219 11.8176 3.18975 12.2017 3.11989L15.3858 2.53655C15.7464 2.47094 16.117 2.48543 16.4714 2.57898C16.8258 2.67253 17.1553 2.84285 17.4365 3.07789C17.7178 3.31293 17.9439 3.60693 18.0988 3.93907C18.2538 4.27121 18.3339 4.63337 18.3333 4.99989V13.9941Z"
                                                                fill="#6C757D"
                                                            />
                                                        </svg>
                                                        20 Lessons
                                                    </span>
                                                    <span>
                                                        <svg
                                                            width="20"
                                                            height="20"
                                                            viewBox="0 0 20 20"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M10 0C4.48583 0 0 4.48583 0 10C0 15.5142 4.48583 20 10 20C15.5142 20 20 15.5142 20 10C20 4.48583 15.5142 0 10 0ZM6.66667 17.6367V17.5C6.66667 15.6617 8.16167 14.1667 10 14.1667C11.8383 14.1667 13.3333 15.6617 13.3333 17.5V17.6367C12.3117 18.0842 11.185 18.3333 10 18.3333C8.815 18.3333 7.68833 18.0842 6.66667 17.6367ZM14.9375 16.7092C14.5575 14.3267 12.4883 12.5 10 12.5C7.51167 12.5 5.44333 14.3267 5.0625 16.7092C3.00417 15.19 1.66667 12.7483 1.66667 10C1.66667 5.405 5.405 1.66667 10 1.66667C14.595 1.66667 18.3333 5.405 18.3333 10C18.3333 12.7483 16.9958 15.19 14.9375 16.7092ZM10 4.16667C8.16167 4.16667 6.66667 5.66167 6.66667 7.5C6.66667 9.33833 8.16167 10.8333 10 10.8333C11.8383 10.8333 13.3333 9.33833 13.3333 7.5C13.3333 5.66167 11.8383 4.16667 10 4.16667ZM10 9.16667C9.08083 9.16667 8.33333 8.41917 8.33333 7.5C8.33333 6.58083 9.08083 5.83333 10 5.83333C10.9192 5.83333 11.6667 6.58083 11.6667 7.5C11.6667 8.41917 10.9192 9.16667 10 9.16667Z"
                                                                fill="#6C757D"
                                                            />
                                                        </svg>
                                                        50 Sutudents
                                                    </span>
                                                </div>
                                                <div class="it-course-btn">
                                                    <a href="#" class="it-btn-yellow w-100 border-radius-100">
                                                        <span>
                                                            <span class="text-1">Preview This Course</span>
                                                            <span class="text-2">Preview This Course</span>
                                                        </span>
                                                        <i>
                                                            <svg
                                                                width="16"
                                                                height="15"
                                                                viewBox="0 0 16 15"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    d="M15.0544 8.1364C15.4058 7.78492 15.4058 7.21508 15.0544 6.8636L9.3268 1.13604C8.97533 0.784567 8.40548 0.784567 8.05401 1.13604C7.70254 1.48751 7.70254 2.05736 8.05401 2.40883L13.1452 7.5L8.05401 12.5912C7.70254 12.9426 7.70254 13.5125 8.05401 13.864C8.40548 14.2154 8.97533 14.2154 9.3268 13.864L15.0544 8.1364ZM0.417969 7.5V8.4H14.418V7.5V6.6H0.417969V7.5Z"
                                                                    fill="currentcolor"
                                                                />
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="popularity" role="tabpanel" aria-labelledby="popularity-tab">
                                <div class="row gx-35">
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="it-course-item mb-35">
                                            <div class="it-course-thumb z-index-1 border-radius-20">
                                                <a href="courses-details-v3.html"
                                                    ><img
                                                        class="w-100"
                                                        src="{{ asset('frontAssets/img/course/course-1-1.jpg') }}"
                                                        alt=""
                                                /></a>
                                                <span class="course-category">Design</span>
                                                <button class="wishlist-btn">
                                                    <svg
                                                        width="14"
                                                        height="16"
                                                        viewBox="0 0 14 16"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <path
                                                            d="M13.6811 4.50134C13.3564 2.47755 11.9261 0.859544 10.0381 0.378868C9.06325 0.130895 8.04117 0.00363597 6.99804 0C5.95853 0.00290878 4.93718 0.130168 3.96232 0.378868C2.07436 0.859544 0.644035 2.47755 0.319325 4.50134C-0.155754 7.46102 -0.101273 10.5952 0.486402 14.0829C0.638224 14.9875 1.28038 15.7103 2.1717 15.9234C3.27005 16.1859 4.09235 15.695 4.53692 15.1395C4.99675 14.565 6.75178 12.3267 6.75178 12.3267C6.83459 12.2212 6.94355 12.2052 7.00021 12.2052C7.05688 12.2052 7.16584 12.2205 7.24865 12.3267C7.24865 12.3267 9.00441 14.5657 9.46351 15.1395C10.0359 15.8536 10.9418 16.1546 11.8287 15.9234C12.7157 15.6929 13.3615 14.9875 13.5133 14.0836C14.101 10.596 14.1562 7.46175 13.6804 4.50206L13.6811 4.50134ZM12.0808 13.8414C11.9973 14.3396 11.5868 14.4835 11.4626 14.5155C11.3399 14.5483 10.9113 14.6224 10.5967 14.229C10.1398 13.6589 9.65601 13.0415 9.16785 12.4176L8.38913 11.425C8.05134 10.9959 7.54503 10.7501 6.99949 10.7501C6.45395 10.7501 5.94836 10.9959 5.60985 11.425L4.83112 12.4176C4.34297 13.0408 3.85917 13.6589 3.40225 14.229C3.08844 14.6224 2.66058 14.5483 2.53636 14.5155C2.41287 14.4835 2.00244 14.3396 1.91818 13.8407C1.35738 10.5123 1.3029 7.53228 1.75255 4.73186C1.98573 3.2811 2.99328 2.12559 4.31972 1.78817C5.17908 1.56929 6.08129 1.4573 6.99731 1.45439C7.91768 1.4573 8.8199 1.56929 9.67925 1.78817C11.0057 2.12559 12.0132 3.2811 12.2464 4.73186C12.6961 7.53228 12.6416 10.5123 12.0808 13.8407V13.8414Z"
                                                            fill="currentcolor"
                                                        />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="it-course-content p-relative">
                                                <div class="it-course-price-box mb-20">
                                                    <del>$20.00</del>
                                                    <span>$9.00</span>
                                                </div>
                                                <h5 class="it-course-title mb-20">
                                                    <a class="border-line" href="courses-details-v3.html"
                                                        >Design Thinking Researching for Better UX</a
                                                    >
                                                </h5>
                                                <div class="it-course-rating mb-10">
                                                    <div>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-regular fa-star"></i>
                                                        <span>(4.7/5 Customer Rating)</span>
                                                    </div>
                                                </div>
                                                <div class="it-course-meta mb-30 d-flex justify-content-between">
                                                    <span>
                                                        <svg
                                                            width="20"
                                                            height="20"
                                                            viewBox="0 0 20 20"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M18.5 1.80239C18.0315 1.41066 17.4826 1.12688 16.8921 0.971189C16.3016 0.815501 15.684 0.791726 15.0833 0.901552L11.8983 1.47989C11.163 1.61492 10.4944 1.99324 10 2.55405C9.5043 1.99227 8.8338 1.61387 8.09667 1.47989L4.91667 0.901552C4.31596 0.79163 3.69844 0.815094 3.10781 0.970282C2.51718 1.12547 1.96789 1.40859 1.4988 1.7996C1.02972 2.19061 0.652322 2.67994 0.393318 3.23297C0.134315 3.78601 4.0677e-05 4.38921 0 4.99989L0 13.9941C4.78799e-05 14.9697 0.342481 15.9144 0.967611 16.6635C1.59274 17.4126 2.46092 17.9186 3.42083 18.0932L8.65917 19.0457C9.5458 19.2068 10.4542 19.2068 11.3408 19.0457L16.5833 18.0932C17.5425 17.9177 18.4097 17.4114 19.034 16.6624C19.6583 15.9134 20.0001 14.9691 20 13.9941V4.99989C20.0004 4.38942 19.8662 3.78638 19.6069 3.23371C19.3476 2.68104 18.9697 2.19233 18.5 1.80239ZM9.16667 17.4399C9.09667 17.4299 9.02667 17.4182 8.95667 17.4057L3.71917 16.4541C3.14314 16.3493 2.62216 16.0456 2.24707 15.596C1.87198 15.1465 1.66658 14.5795 1.66667 13.9941V4.99989C1.66667 4.33684 1.93006 3.70096 2.3989 3.23212C2.86774 2.76328 3.50363 2.49989 4.16667 2.49989C4.31758 2.50025 4.46816 2.51391 4.61667 2.54072L7.8 3.12405C8.18301 3.19414 8.52939 3.39611 8.77904 3.69492C9.02868 3.99373 9.16582 4.37052 9.16667 4.75989V17.4399ZM18.3333 13.9941C18.3334 14.5795 18.128 15.1465 17.7529 15.596C17.3778 16.0456 16.8569 16.3493 16.2808 16.4541L11.0433 17.4057C10.9733 17.4182 10.9033 17.4299 10.8333 17.4399V4.75989C10.8333 4.36956 10.9702 3.9916 11.2203 3.69189C11.4703 3.39219 11.8176 3.18975 12.2017 3.11989L15.3858 2.53655C15.7464 2.47094 16.117 2.48543 16.4714 2.57898C16.8258 2.67253 17.1553 2.84285 17.4365 3.07789C17.7178 3.31293 17.9439 3.60693 18.0988 3.93907C18.2538 4.27121 18.3339 4.63337 18.3333 4.99989V13.9941Z"
                                                                fill="#6C757D"
                                                            />
                                                        </svg>
                                                        20 Lessons
                                                    </span>
                                                    <span>
                                                        <svg
                                                            width="20"
                                                            height="20"
                                                            viewBox="0 0 20 20"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M10 0C4.48583 0 0 4.48583 0 10C0 15.5142 4.48583 20 10 20C15.5142 20 20 15.5142 20 10C20 4.48583 15.5142 0 10 0ZM6.66667 17.6367V17.5C6.66667 15.6617 8.16167 14.1667 10 14.1667C11.8383 14.1667 13.3333 15.6617 13.3333 17.5V17.6367C12.3117 18.0842 11.185 18.3333 10 18.3333C8.815 18.3333 7.68833 18.0842 6.66667 17.6367ZM14.9375 16.7092C14.5575 14.3267 12.4883 12.5 10 12.5C7.51167 12.5 5.44333 14.3267 5.0625 16.7092C3.00417 15.19 1.66667 12.7483 1.66667 10C1.66667 5.405 5.405 1.66667 10 1.66667C14.595 1.66667 18.3333 5.405 18.3333 10C18.3333 12.7483 16.9958 15.19 14.9375 16.7092ZM10 4.16667C8.16167 4.16667 6.66667 5.66167 6.66667 7.5C6.66667 9.33833 8.16167 10.8333 10 10.8333C11.8383 10.8333 13.3333 9.33833 13.3333 7.5C13.3333 5.66167 11.8383 4.16667 10 4.16667ZM10 9.16667C9.08083 9.16667 8.33333 8.41917 8.33333 7.5C8.33333 6.58083 9.08083 5.83333 10 5.83333C10.9192 5.83333 11.6667 6.58083 11.6667 7.5C11.6667 8.41917 10.9192 9.16667 10 9.16667Z"
                                                                fill="#6C757D"
                                                            />
                                                        </svg>
                                                        50 Sutudents
                                                    </span>
                                                </div>
                                                <div class="it-course-btn">
                                                    <a href="#" class="it-btn-yellow w-100 border-radius-100">
                                                        <span>
                                                            <span class="text-1">Preview This Course</span>
                                                            <span class="text-2">Preview This Course</span>
                                                        </span>
                                                        <i>
                                                            <svg
                                                                width="16"
                                                                height="15"
                                                                viewBox="0 0 16 15"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    d="M15.0544 8.1364C15.4058 7.78492 15.4058 7.21508 15.0544 6.8636L9.3268 1.13604C8.97533 0.784567 8.40548 0.784567 8.05401 1.13604C7.70254 1.48751 7.70254 2.05736 8.05401 2.40883L13.1452 7.5L8.05401 12.5912C7.70254 12.9426 7.70254 13.5125 8.05401 13.864C8.40548 14.2154 8.97533 14.2154 9.3268 13.864L15.0544 8.1364ZM0.417969 7.5V8.4H14.418V7.5V6.6H0.417969V7.5Z"
                                                                    fill="currentcolor"
                                                                />
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="it-course-item mb-35">
                                            <div class="it-course-thumb z-index-1 border-radius-20">
                                                <a href="courses-details-v3.html"
                                                    ><img
                                                        class="w-100"
                                                        src="{{ asset('frontAssets/img/course/course-1-2.jpg') }}"
                                                        alt=""
                                                /></a>
                                                <button class="wishlist-btn">
                                                    <svg
                                                        width="14"
                                                        height="16"
                                                        viewBox="0 0 14 16"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <path
                                                            d="M13.6811 4.50134C13.3564 2.47755 11.9261 0.859544 10.0381 0.378868C9.06325 0.130895 8.04117 0.00363597 6.99804 0C5.95853 0.00290878 4.93718 0.130168 3.96232 0.378868C2.07436 0.859544 0.644035 2.47755 0.319325 4.50134C-0.155754 7.46102 -0.101273 10.5952 0.486402 14.0829C0.638224 14.9875 1.28038 15.7103 2.1717 15.9234C3.27005 16.1859 4.09235 15.695 4.53692 15.1395C4.99675 14.565 6.75178 12.3267 6.75178 12.3267C6.83459 12.2212 6.94355 12.2052 7.00021 12.2052C7.05688 12.2052 7.16584 12.2205 7.24865 12.3267C7.24865 12.3267 9.00441 14.5657 9.46351 15.1395C10.0359 15.8536 10.9418 16.1546 11.8287 15.9234C12.7157 15.6929 13.3615 14.9875 13.5133 14.0836C14.101 10.596 14.1562 7.46175 13.6804 4.50206L13.6811 4.50134ZM12.0808 13.8414C11.9973 14.3396 11.5868 14.4835 11.4626 14.5155C11.3399 14.5483 10.9113 14.6224 10.5967 14.229C10.1398 13.6589 9.65601 13.0415 9.16785 12.4176L8.38913 11.425C8.05134 10.9959 7.54503 10.7501 6.99949 10.7501C6.45395 10.7501 5.94836 10.9959 5.60985 11.425L4.83112 12.4176C4.34297 13.0408 3.85917 13.6589 3.40225 14.229C3.08844 14.6224 2.66058 14.5483 2.53636 14.5155C2.41287 14.4835 2.00244 14.3396 1.91818 13.8407C1.35738 10.5123 1.3029 7.53228 1.75255 4.73186C1.98573 3.2811 2.99328 2.12559 4.31972 1.78817C5.17908 1.56929 6.08129 1.4573 6.99731 1.45439C7.91768 1.4573 8.8199 1.56929 9.67925 1.78817C11.0057 2.12559 12.0132 3.2811 12.2464 4.73186C12.6961 7.53228 12.6416 10.5123 12.0808 13.8407V13.8414Z"
                                                            fill="currentcolor"
                                                        />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="it-course-content p-relative">
                                                <div class="it-course-price-box mb-20">
                                                    <del>$20.00</del>
                                                    <span>$9.00</span>
                                                </div>
                                                <h5 class="it-course-title mb-20">
                                                    <a class="border-line" href="courses-details-v3.html"
                                                        >Discover Highly Rated Learning Programs</a
                                                    >
                                                </h5>
                                                <div class="it-course-rating mb-10">
                                                    <div>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-regular fa-star"></i>
                                                        <span>(4.7/5 Customer Rating)</span>
                                                    </div>
                                                </div>
                                                <div class="it-course-meta mb-30 d-flex justify-content-between">
                                                    <span>
                                                        <svg
                                                            width="20"
                                                            height="20"
                                                            viewBox="0 0 20 20"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M18.5 1.80239C18.0315 1.41066 17.4826 1.12688 16.8921 0.971189C16.3016 0.815501 15.684 0.791726 15.0833 0.901552L11.8983 1.47989C11.163 1.61492 10.4944 1.99324 10 2.55405C9.5043 1.99227 8.8338 1.61387 8.09667 1.47989L4.91667 0.901552C4.31596 0.79163 3.69844 0.815094 3.10781 0.970282C2.51718 1.12547 1.96789 1.40859 1.4988 1.7996C1.02972 2.19061 0.652322 2.67994 0.393318 3.23297C0.134315 3.78601 4.0677e-05 4.38921 0 4.99989L0 13.9941C4.78799e-05 14.9697 0.342481 15.9144 0.967611 16.6635C1.59274 17.4126 2.46092 17.9186 3.42083 18.0932L8.65917 19.0457C9.5458 19.2068 10.4542 19.2068 11.3408 19.0457L16.5833 18.0932C17.5425 17.9177 18.4097 17.4114 19.034 16.6624C19.6583 15.9134 20.0001 14.9691 20 13.9941V4.99989C20.0004 4.38942 19.8662 3.78638 19.6069 3.23371C19.3476 2.68104 18.9697 2.19233 18.5 1.80239ZM9.16667 17.4399C9.09667 17.4299 9.02667 17.4182 8.95667 17.4057L3.71917 16.4541C3.14314 16.3493 2.62216 16.0456 2.24707 15.596C1.87198 15.1465 1.66658 14.5795 1.66667 13.9941V4.99989C1.66667 4.33684 1.93006 3.70096 2.3989 3.23212C2.86774 2.76328 3.50363 2.49989 4.16667 2.49989C4.31758 2.50025 4.46816 2.51391 4.61667 2.54072L7.8 3.12405C8.18301 3.19414 8.52939 3.39611 8.77904 3.69492C9.02868 3.99373 9.16582 4.37052 9.16667 4.75989V17.4399ZM18.3333 13.9941C18.3334 14.5795 18.128 15.1465 17.7529 15.596C17.3778 16.0456 16.8569 16.3493 16.2808 16.4541L11.0433 17.4057C10.9733 17.4182 10.9033 17.4299 10.8333 17.4399V4.75989C10.8333 4.36956 10.9702 3.9916 11.2203 3.69189C11.4703 3.39219 11.8176 3.18975 12.2017 3.11989L15.3858 2.53655C15.7464 2.47094 16.117 2.48543 16.4714 2.57898C16.8258 2.67253 17.1553 2.84285 17.4365 3.07789C17.7178 3.31293 17.9439 3.60693 18.0988 3.93907C18.2538 4.27121 18.3339 4.63337 18.3333 4.99989V13.9941Z"
                                                                fill="#6C757D"
                                                            />
                                                        </svg>
                                                        20 Lessons
                                                    </span>
                                                    <span>
                                                        <svg
                                                            width="20"
                                                            height="20"
                                                            viewBox="0 0 20 20"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M10 0C4.48583 0 0 4.48583 0 10C0 15.5142 4.48583 20 10 20C15.5142 20 20 15.5142 20 10C20 4.48583 15.5142 0 10 0ZM6.66667 17.6367V17.5C6.66667 15.6617 8.16167 14.1667 10 14.1667C11.8383 14.1667 13.3333 15.6617 13.3333 17.5V17.6367C12.3117 18.0842 11.185 18.3333 10 18.3333C8.815 18.3333 7.68833 18.0842 6.66667 17.6367ZM14.9375 16.7092C14.5575 14.3267 12.4883 12.5 10 12.5C7.51167 12.5 5.44333 14.3267 5.0625 16.7092C3.00417 15.19 1.66667 12.7483 1.66667 10C1.66667 5.405 5.405 1.66667 10 1.66667C14.595 1.66667 18.3333 5.405 18.3333 10C18.3333 12.7483 16.9958 15.19 14.9375 16.7092ZM10 4.16667C8.16167 4.16667 6.66667 5.66167 6.66667 7.5C6.66667 9.33833 8.16167 10.8333 10 10.8333C11.8383 10.8333 13.3333 9.33833 13.3333 7.5C13.3333 5.66167 11.8383 4.16667 10 4.16667ZM10 9.16667C9.08083 9.16667 8.33333 8.41917 8.33333 7.5C8.33333 6.58083 9.08083 5.83333 10 5.83333C10.9192 5.83333 11.6667 6.58083 11.6667 7.5C11.6667 8.41917 10.9192 9.16667 10 9.16667Z"
                                                                fill="#6C757D"
                                                            />
                                                        </svg>
                                                        50 Sutudents
                                                    </span>
                                                </div>
                                                <div class="it-course-btn">
                                                    <a href="#" class="it-btn-yellow w-100 border-radius-100">
                                                        <span>
                                                            <span class="text-1">Preview This Course</span>
                                                            <span class="text-2">Preview This Course</span>
                                                        </span>
                                                        <i>
                                                            <svg
                                                                width="16"
                                                                height="15"
                                                                viewBox="0 0 16 15"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    d="M15.0544 8.1364C15.4058 7.78492 15.4058 7.21508 15.0544 6.8636L9.3268 1.13604C8.97533 0.784567 8.40548 0.784567 8.05401 1.13604C7.70254 1.48751 7.70254 2.05736 8.05401 2.40883L13.1452 7.5L8.05401 12.5912C7.70254 12.9426 7.70254 13.5125 8.05401 13.864C8.40548 14.2154 8.97533 14.2154 9.3268 13.864L15.0544 8.1364ZM0.417969 7.5V8.4H14.418V7.5V6.6H0.417969V7.5Z"
                                                                    fill="currentcolor"
                                                                />
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="it-course-item mb-35">
                                            <div class="it-course-thumb z-index-1 border-radius-20">
                                                <a href="courses-details-v3.html"
                                                    ><img
                                                        class="w-100"
                                                        src="{{ asset('frontAssets/img/course/course-1-3.jpg') }}"
                                                        alt=""
                                                /></a>
                                                <span class="course-category">Business</span>
                                                <button class="wishlist-btn">
                                                    <svg
                                                        width="14"
                                                        height="16"
                                                        viewBox="0 0 14 16"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <path
                                                            d="M13.6811 4.50134C13.3564 2.47755 11.9261 0.859544 10.0381 0.378868C9.06325 0.130895 8.04117 0.00363597 6.99804 0C5.95853 0.00290878 4.93718 0.130168 3.96232 0.378868C2.07436 0.859544 0.644035 2.47755 0.319325 4.50134C-0.155754 7.46102 -0.101273 10.5952 0.486402 14.0829C0.638224 14.9875 1.28038 15.7103 2.1717 15.9234C3.27005 16.1859 4.09235 15.695 4.53692 15.1395C4.99675 14.565 6.75178 12.3267 6.75178 12.3267C6.83459 12.2212 6.94355 12.2052 7.00021 12.2052C7.05688 12.2052 7.16584 12.2205 7.24865 12.3267C7.24865 12.3267 9.00441 14.5657 9.46351 15.1395C10.0359 15.8536 10.9418 16.1546 11.8287 15.9234C12.7157 15.6929 13.3615 14.9875 13.5133 14.0836C14.101 10.596 14.1562 7.46175 13.6804 4.50206L13.6811 4.50134ZM12.0808 13.8414C11.9973 14.3396 11.5868 14.4835 11.4626 14.5155C11.3399 14.5483 10.9113 14.6224 10.5967 14.229C10.1398 13.6589 9.65601 13.0415 9.16785 12.4176L8.38913 11.425C8.05134 10.9959 7.54503 10.7501 6.99949 10.7501C6.45395 10.7501 5.94836 10.9959 5.60985 11.425L4.83112 12.4176C4.34297 13.0408 3.85917 13.6589 3.40225 14.229C3.08844 14.6224 2.66058 14.5483 2.53636 14.5155C2.41287 14.4835 2.00244 14.3396 1.91818 13.8407C1.35738 10.5123 1.3029 7.53228 1.75255 4.73186C1.98573 3.2811 2.99328 2.12559 4.31972 1.78817C5.17908 1.56929 6.08129 1.4573 6.99731 1.45439C7.91768 1.4573 8.8199 1.56929 9.67925 1.78817C11.0057 2.12559 12.0132 3.2811 12.2464 4.73186C12.6961 7.53228 12.6416 10.5123 12.0808 13.8407V13.8414Z"
                                                            fill="currentcolor"
                                                        />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="it-course-content p-relative">
                                                <div class="it-course-price-box mb-20">
                                                    <del>$20.00</del>
                                                    <span>$9.00</span>
                                                </div>
                                                <h5 class="it-course-title mb-20">
                                                    <a class="border-line" href="courses-details-v3.html"
                                                        >Boost Your Skills with Popular Courses</a
                                                    >
                                                </h5>
                                                <div class="it-course-rating mb-10">
                                                    <div>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-regular fa-star"></i>
                                                        <span>(4.7/5 Customer Rating)</span>
                                                    </div>
                                                </div>
                                                <div class="it-course-meta mb-30 d-flex justify-content-between">
                                                    <span>
                                                        <svg
                                                            width="20"
                                                            height="20"
                                                            viewBox="0 0 20 20"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M18.5 1.80239C18.0315 1.41066 17.4826 1.12688 16.8921 0.971189C16.3016 0.815501 15.684 0.791726 15.0833 0.901552L11.8983 1.47989C11.163 1.61492 10.4944 1.99324 10 2.55405C9.5043 1.99227 8.8338 1.61387 8.09667 1.47989L4.91667 0.901552C4.31596 0.79163 3.69844 0.815094 3.10781 0.970282C2.51718 1.12547 1.96789 1.40859 1.4988 1.7996C1.02972 2.19061 0.652322 2.67994 0.393318 3.23297C0.134315 3.78601 4.0677e-05 4.38921 0 4.99989L0 13.9941C4.78799e-05 14.9697 0.342481 15.9144 0.967611 16.6635C1.59274 17.4126 2.46092 17.9186 3.42083 18.0932L8.65917 19.0457C9.5458 19.2068 10.4542 19.2068 11.3408 19.0457L16.5833 18.0932C17.5425 17.9177 18.4097 17.4114 19.034 16.6624C19.6583 15.9134 20.0001 14.9691 20 13.9941V4.99989C20.0004 4.38942 19.8662 3.78638 19.6069 3.23371C19.3476 2.68104 18.9697 2.19233 18.5 1.80239ZM9.16667 17.4399C9.09667 17.4299 9.02667 17.4182 8.95667 17.4057L3.71917 16.4541C3.14314 16.3493 2.62216 16.0456 2.24707 15.596C1.87198 15.1465 1.66658 14.5795 1.66667 13.9941V4.99989C1.66667 4.33684 1.93006 3.70096 2.3989 3.23212C2.86774 2.76328 3.50363 2.49989 4.16667 2.49989C4.31758 2.50025 4.46816 2.51391 4.61667 2.54072L7.8 3.12405C8.18301 3.19414 8.52939 3.39611 8.77904 3.69492C9.02868 3.99373 9.16582 4.37052 9.16667 4.75989V17.4399ZM18.3333 13.9941C18.3334 14.5795 18.128 15.1465 17.7529 15.596C17.3778 16.0456 16.8569 16.3493 16.2808 16.4541L11.0433 17.4057C10.9733 17.4182 10.9033 17.4299 10.8333 17.4399V4.75989C10.8333 4.36956 10.9702 3.9916 11.2203 3.69189C11.4703 3.39219 11.8176 3.18975 12.2017 3.11989L15.3858 2.53655C15.7464 2.47094 16.117 2.48543 16.4714 2.57898C16.8258 2.67253 17.1553 2.84285 17.4365 3.07789C17.7178 3.31293 17.9439 3.60693 18.0988 3.93907C18.2538 4.27121 18.3339 4.63337 18.3333 4.99989V13.9941Z"
                                                                fill="#6C757D"
                                                            />
                                                        </svg>
                                                        20 Lessons
                                                    </span>
                                                    <span>
                                                        <svg
                                                            width="20"
                                                            height="20"
                                                            viewBox="0 0 20 20"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M10 0C4.48583 0 0 4.48583 0 10C0 15.5142 4.48583 20 10 20C15.5142 20 20 15.5142 20 10C20 4.48583 15.5142 0 10 0ZM6.66667 17.6367V17.5C6.66667 15.6617 8.16167 14.1667 10 14.1667C11.8383 14.1667 13.3333 15.6617 13.3333 17.5V17.6367C12.3117 18.0842 11.185 18.3333 10 18.3333C8.815 18.3333 7.68833 18.0842 6.66667 17.6367ZM14.9375 16.7092C14.5575 14.3267 12.4883 12.5 10 12.5C7.51167 12.5 5.44333 14.3267 5.0625 16.7092C3.00417 15.19 1.66667 12.7483 1.66667 10C1.66667 5.405 5.405 1.66667 10 1.66667C14.595 1.66667 18.3333 5.405 18.3333 10C18.3333 12.7483 16.9958 15.19 14.9375 16.7092ZM10 4.16667C8.16167 4.16667 6.66667 5.66167 6.66667 7.5C6.66667 9.33833 8.16167 10.8333 10 10.8333C11.8383 10.8333 13.3333 9.33833 13.3333 7.5C13.3333 5.66167 11.8383 4.16667 10 4.16667ZM10 9.16667C9.08083 9.16667 8.33333 8.41917 8.33333 7.5C8.33333 6.58083 9.08083 5.83333 10 5.83333C10.9192 5.83333 11.6667 6.58083 11.6667 7.5C11.6667 8.41917 10.9192 9.16667 10 9.16667Z"
                                                                fill="#6C757D"
                                                            />
                                                        </svg>
                                                        50 Sutudents
                                                    </span>
                                                </div>
                                                <div class="it-course-btn">
                                                    <a href="#" class="it-btn-yellow w-100 border-radius-100">
                                                        <span>
                                                            <span class="text-1">Preview This Course</span>
                                                            <span class="text-2">Preview This Course</span>
                                                        </span>
                                                        <i>
                                                            <svg
                                                                width="16"
                                                                height="15"
                                                                viewBox="0 0 16 15"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    d="M15.0544 8.1364C15.4058 7.78492 15.4058 7.21508 15.0544 6.8636L9.3268 1.13604C8.97533 0.784567 8.40548 0.784567 8.05401 1.13604C7.70254 1.48751 7.70254 2.05736 8.05401 2.40883L13.1452 7.5L8.05401 12.5912C7.70254 12.9426 7.70254 13.5125 8.05401 13.864C8.40548 14.2154 8.97533 14.2154 9.3268 13.864L15.0544 8.1364ZM0.417969 7.5V8.4H14.418V7.5V6.6H0.417969V7.5Z"
                                                                    fill="currentcolor"
                                                                />
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                                <div class="row gx-35">
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="it-course-item mb-35">
                                            <div class="it-course-thumb z-index-1 border-radius-20">
                                                <a href="courses-details-v3.html"
                                                    ><img
                                                        class="w-100"
                                                        src="{{ asset('frontAssets/img/course/course-1-3.jpg') }}"
                                                        alt=""
                                                /></a>
                                                <span class="course-category">Business</span>
                                                <button class="wishlist-btn">
                                                    <svg
                                                        width="14"
                                                        height="16"
                                                        viewBox="0 0 14 16"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <path
                                                            d="M13.6811 4.50134C13.3564 2.47755 11.9261 0.859544 10.0381 0.378868C9.06325 0.130895 8.04117 0.00363597 6.99804 0C5.95853 0.00290878 4.93718 0.130168 3.96232 0.378868C2.07436 0.859544 0.644035 2.47755 0.319325 4.50134C-0.155754 7.46102 -0.101273 10.5952 0.486402 14.0829C0.638224 14.9875 1.28038 15.7103 2.1717 15.9234C3.27005 16.1859 4.09235 15.695 4.53692 15.1395C4.99675 14.565 6.75178 12.3267 6.75178 12.3267C6.83459 12.2212 6.94355 12.2052 7.00021 12.2052C7.05688 12.2052 7.16584 12.2205 7.24865 12.3267C7.24865 12.3267 9.00441 14.5657 9.46351 15.1395C10.0359 15.8536 10.9418 16.1546 11.8287 15.9234C12.7157 15.6929 13.3615 14.9875 13.5133 14.0836C14.101 10.596 14.1562 7.46175 13.6804 4.50206L13.6811 4.50134ZM12.0808 13.8414C11.9973 14.3396 11.5868 14.4835 11.4626 14.5155C11.3399 14.5483 10.9113 14.6224 10.5967 14.229C10.1398 13.6589 9.65601 13.0415 9.16785 12.4176L8.38913 11.425C8.05134 10.9959 7.54503 10.7501 6.99949 10.7501C6.45395 10.7501 5.94836 10.9959 5.60985 11.425L4.83112 12.4176C4.34297 13.0408 3.85917 13.6589 3.40225 14.229C3.08844 14.6224 2.66058 14.5483 2.53636 14.5155C2.41287 14.4835 2.00244 14.3396 1.91818 13.8407C1.35738 10.5123 1.3029 7.53228 1.75255 4.73186C1.98573 3.2811 2.99328 2.12559 4.31972 1.78817C5.17908 1.56929 6.08129 1.4573 6.99731 1.45439C7.91768 1.4573 8.8199 1.56929 9.67925 1.78817C11.0057 2.12559 12.0132 3.2811 12.2464 4.73186C12.6961 7.53228 12.6416 10.5123 12.0808 13.8407V13.8414Z"
                                                            fill="currentcolor"
                                                        />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="it-course-content p-relative">
                                                <div class="it-course-price-box mb-20">
                                                    <del>$20.00</del>
                                                    <span>$9.00</span>
                                                </div>
                                                <h5 class="it-course-title mb-20">
                                                    <a class="border-line" href="courses-details-v3.html"
                                                        >Boost Your Skills with Popular Courses</a
                                                    >
                                                </h5>
                                                <div class="it-course-rating mb-10">
                                                    <div>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-regular fa-star"></i>
                                                        <span>(4.7/5 Customer Rating)</span>
                                                    </div>
                                                </div>
                                                <div class="it-course-meta mb-30 d-flex justify-content-between">
                                                    <span>
                                                        <svg
                                                            width="20"
                                                            height="20"
                                                            viewBox="0 0 20 20"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M18.5 1.80239C18.0315 1.41066 17.4826 1.12688 16.8921 0.971189C16.3016 0.815501 15.684 0.791726 15.0833 0.901552L11.8983 1.47989C11.163 1.61492 10.4944 1.99324 10 2.55405C9.5043 1.99227 8.8338 1.61387 8.09667 1.47989L4.91667 0.901552C4.31596 0.79163 3.69844 0.815094 3.10781 0.970282C2.51718 1.12547 1.96789 1.40859 1.4988 1.7996C1.02972 2.19061 0.652322 2.67994 0.393318 3.23297C0.134315 3.78601 4.0677e-05 4.38921 0 4.99989L0 13.9941C4.78799e-05 14.9697 0.342481 15.9144 0.967611 16.6635C1.59274 17.4126 2.46092 17.9186 3.42083 18.0932L8.65917 19.0457C9.5458 19.2068 10.4542 19.2068 11.3408 19.0457L16.5833 18.0932C17.5425 17.9177 18.4097 17.4114 19.034 16.6624C19.6583 15.9134 20.0001 14.9691 20 13.9941V4.99989C20.0004 4.38942 19.8662 3.78638 19.6069 3.23371C19.3476 2.68104 18.9697 2.19233 18.5 1.80239ZM9.16667 17.4399C9.09667 17.4299 9.02667 17.4182 8.95667 17.4057L3.71917 16.4541C3.14314 16.3493 2.62216 16.0456 2.24707 15.596C1.87198 15.1465 1.66658 14.5795 1.66667 13.9941V4.99989C1.66667 4.33684 1.93006 3.70096 2.3989 3.23212C2.86774 2.76328 3.50363 2.49989 4.16667 2.49989C4.31758 2.50025 4.46816 2.51391 4.61667 2.54072L7.8 3.12405C8.18301 3.19414 8.52939 3.39611 8.77904 3.69492C9.02868 3.99373 9.16582 4.37052 9.16667 4.75989V17.4399ZM18.3333 13.9941C18.3334 14.5795 18.128 15.1465 17.7529 15.596C17.3778 16.0456 16.8569 16.3493 16.2808 16.4541L11.0433 17.4057C10.9733 17.4182 10.9033 17.4299 10.8333 17.4399V4.75989C10.8333 4.36956 10.9702 3.9916 11.2203 3.69189C11.4703 3.39219 11.8176 3.18975 12.2017 3.11989L15.3858 2.53655C15.7464 2.47094 16.117 2.48543 16.4714 2.57898C16.8258 2.67253 17.1553 2.84285 17.4365 3.07789C17.7178 3.31293 17.9439 3.60693 18.0988 3.93907C18.2538 4.27121 18.3339 4.63337 18.3333 4.99989V13.9941Z"
                                                                fill="#6C757D"
                                                            />
                                                        </svg>
                                                        20 Lessons
                                                    </span>
                                                    <span>
                                                        <svg
                                                            width="20"
                                                            height="20"
                                                            viewBox="0 0 20 20"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M10 0C4.48583 0 0 4.48583 0 10C0 15.5142 4.48583 20 10 20C15.5142 20 20 15.5142 20 10C20 4.48583 15.5142 0 10 0ZM6.66667 17.6367V17.5C6.66667 15.6617 8.16167 14.1667 10 14.1667C11.8383 14.1667 13.3333 15.6617 13.3333 17.5V17.6367C12.3117 18.0842 11.185 18.3333 10 18.3333C8.815 18.3333 7.68833 18.0842 6.66667 17.6367ZM14.9375 16.7092C14.5575 14.3267 12.4883 12.5 10 12.5C7.51167 12.5 5.44333 14.3267 5.0625 16.7092C3.00417 15.19 1.66667 12.7483 1.66667 10C1.66667 5.405 5.405 1.66667 10 1.66667C14.595 1.66667 18.3333 5.405 18.3333 10C18.3333 12.7483 16.9958 15.19 14.9375 16.7092ZM10 4.16667C8.16167 4.16667 6.66667 5.66167 6.66667 7.5C6.66667 9.33833 8.16167 10.8333 10 10.8333C11.8383 10.8333 13.3333 9.33833 13.3333 7.5C13.3333 5.66167 11.8383 4.16667 10 4.16667ZM10 9.16667C9.08083 9.16667 8.33333 8.41917 8.33333 7.5C8.33333 6.58083 9.08083 5.83333 10 5.83333C10.9192 5.83333 11.6667 6.58083 11.6667 7.5C11.6667 8.41917 10.9192 9.16667 10 9.16667Z"
                                                                fill="#6C757D"
                                                            />
                                                        </svg>
                                                        50 Sutudents
                                                    </span>
                                                </div>
                                                <div class="it-course-btn">
                                                    <a href="#" class="it-btn-yellow w-100 border-radius-100">
                                                        <span>
                                                            <span class="text-1">Preview This Course</span>
                                                            <span class="text-2">Preview This Course</span>
                                                        </span>
                                                        <i>
                                                            <svg
                                                                width="16"
                                                                height="15"
                                                                viewBox="0 0 16 15"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    d="M15.0544 8.1364C15.4058 7.78492 15.4058 7.21508 15.0544 6.8636L9.3268 1.13604C8.97533 0.784567 8.40548 0.784567 8.05401 1.13604C7.70254 1.48751 7.70254 2.05736 8.05401 2.40883L13.1452 7.5L8.05401 12.5912C7.70254 12.9426 7.70254 13.5125 8.05401 13.864C8.40548 14.2154 8.97533 14.2154 9.3268 13.864L15.0544 8.1364ZM0.417969 7.5V8.4H14.418V7.5V6.6H0.417969V7.5Z"
                                                                    fill="currentcolor"
                                                                />
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="it-course-item mb-35">
                                            <div class="it-course-thumb z-index-1 border-radius-20">
                                                <a href="courses-details-v3.html"
                                                    ><img
                                                        class="w-100"
                                                        src="{{ asset('frontAssets/img/course/course-1-4.jpg') }}"
                                                        alt=""
                                                /></a>
                                                <span class="course-category">Technology</span>
                                                <button class="wishlist-btn">
                                                    <svg
                                                        width="14"
                                                        height="16"
                                                        viewBox="0 0 14 16"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <path
                                                            d="M13.6811 4.50134C13.3564 2.47755 11.9261 0.859544 10.0381 0.378868C9.06325 0.130895 8.04117 0.00363597 6.99804 0C5.95853 0.00290878 4.93718 0.130168 3.96232 0.378868C2.07436 0.859544 0.644035 2.47755 0.319325 4.50134C-0.155754 7.46102 -0.101273 10.5952 0.486402 14.0829C0.638224 14.9875 1.28038 15.7103 2.1717 15.9234C3.27005 16.1859 4.09235 15.695 4.53692 15.1395C4.99675 14.565 6.75178 12.3267 6.75178 12.3267C6.83459 12.2212 6.94355 12.2052 7.00021 12.2052C7.05688 12.2052 7.16584 12.2205 7.24865 12.3267C7.24865 12.3267 9.00441 14.5657 9.46351 15.1395C10.0359 15.8536 10.9418 16.1546 11.8287 15.9234C12.7157 15.6929 13.3615 14.9875 13.5133 14.0836C14.101 10.596 14.1562 7.46175 13.6804 4.50206L13.6811 4.50134ZM12.0808 13.8414C11.9973 14.3396 11.5868 14.4835 11.4626 14.5155C11.3399 14.5483 10.9113 14.6224 10.5967 14.229C10.1398 13.6589 9.65601 13.0415 9.16785 12.4176L8.38913 11.425C8.05134 10.9959 7.54503 10.7501 6.99949 10.7501C6.45395 10.7501 5.94836 10.9959 5.60985 11.425L4.83112 12.4176C4.34297 13.0408 3.85917 13.6589 3.40225 14.229C3.08844 14.6224 2.66058 14.5483 2.53636 14.5155C2.41287 14.4835 2.00244 14.3396 1.91818 13.8407C1.35738 10.5123 1.3029 7.53228 1.75255 4.73186C1.98573 3.2811 2.99328 2.12559 4.31972 1.78817C5.17908 1.56929 6.08129 1.4573 6.99731 1.45439C7.91768 1.4573 8.8199 1.56929 9.67925 1.78817C11.0057 2.12559 12.0132 3.2811 12.2464 4.73186C12.6961 7.53228 12.6416 10.5123 12.0808 13.8407V13.8414Z"
                                                            fill="currentcolor"
                                                        />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="it-course-content p-relative">
                                                <div class="it-course-price-box mb-20">
                                                    <del>$20.00</del>
                                                    <span>$9.00</span>
                                                </div>
                                                <h5 class="it-course-title mb-20">
                                                    <a class="border-line" href="courses-details-v3.html"
                                                        >Learn from the Best – Student Favorite Programs</a
                                                    >
                                                </h5>
                                                <div class="it-course-rating mb-10">
                                                    <div>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-regular fa-star"></i>
                                                        <span>(4.7/5 Customer Rating)</span>
                                                    </div>
                                                </div>
                                                <div class="it-course-meta mb-30 d-flex justify-content-between">
                                                    <span>
                                                        <svg
                                                            width="20"
                                                            height="20"
                                                            viewBox="0 0 20 20"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M18.5 1.80239C18.0315 1.41066 17.4826 1.12688 16.8921 0.971189C16.3016 0.815501 15.684 0.791726 15.0833 0.901552L11.8983 1.47989C11.163 1.61492 10.4944 1.99324 10 2.55405C9.5043 1.99227 8.8338 1.61387 8.09667 1.47989L4.91667 0.901552C4.31596 0.79163 3.69844 0.815094 3.10781 0.970282C2.51718 1.12547 1.96789 1.40859 1.4988 1.7996C1.02972 2.19061 0.652322 2.67994 0.393318 3.23297C0.134315 3.78601 4.0677e-05 4.38921 0 4.99989L0 13.9941C4.78799e-05 14.9697 0.342481 15.9144 0.967611 16.6635C1.59274 17.4126 2.46092 17.9186 3.42083 18.0932L8.65917 19.0457C9.5458 19.2068 10.4542 19.2068 11.3408 19.0457L16.5833 18.0932C17.5425 17.9177 18.4097 17.4114 19.034 16.6624C19.6583 15.9134 20.0001 14.9691 20 13.9941V4.99989C20.0004 4.38942 19.8662 3.78638 19.6069 3.23371C19.3476 2.68104 18.9697 2.19233 18.5 1.80239ZM9.16667 17.4399C9.09667 17.4299 9.02667 17.4182 8.95667 17.4057L3.71917 16.4541C3.14314 16.3493 2.62216 16.0456 2.24707 15.596C1.87198 15.1465 1.66658 14.5795 1.66667 13.9941V4.99989C1.66667 4.33684 1.93006 3.70096 2.3989 3.23212C2.86774 2.76328 3.50363 2.49989 4.16667 2.49989C4.31758 2.50025 4.46816 2.51391 4.61667 2.54072L7.8 3.12405C8.18301 3.19414 8.52939 3.39611 8.77904 3.69492C9.02868 3.99373 9.16582 4.37052 9.16667 4.75989V17.4399ZM18.3333 13.9941C18.3334 14.5795 18.128 15.1465 17.7529 15.596C17.3778 16.0456 16.8569 16.3493 16.2808 16.4541L11.0433 17.4057C10.9733 17.4182 10.9033 17.4299 10.8333 17.4399V4.75989C10.8333 4.36956 10.9702 3.9916 11.2203 3.69189C11.4703 3.39219 11.8176 3.18975 12.2017 3.11989L15.3858 2.53655C15.7464 2.47094 16.117 2.48543 16.4714 2.57898C16.8258 2.67253 17.1553 2.84285 17.4365 3.07789C17.7178 3.31293 17.9439 3.60693 18.0988 3.93907C18.2538 4.27121 18.3339 4.63337 18.3333 4.99989V13.9941Z"
                                                                fill="#6C757D"
                                                            />
                                                        </svg>
                                                        20 Lessons
                                                    </span>
                                                    <span>
                                                        <svg
                                                            width="20"
                                                            height="20"
                                                            viewBox="0 0 20 20"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M10 0C4.48583 0 0 4.48583 0 10C0 15.5142 4.48583 20 10 20C15.5142 20 20 15.5142 20 10C20 4.48583 15.5142 0 10 0ZM6.66667 17.6367V17.5C6.66667 15.6617 8.16167 14.1667 10 14.1667C11.8383 14.1667 13.3333 15.6617 13.3333 17.5V17.6367C12.3117 18.0842 11.185 18.3333 10 18.3333C8.815 18.3333 7.68833 18.0842 6.66667 17.6367ZM14.9375 16.7092C14.5575 14.3267 12.4883 12.5 10 12.5C7.51167 12.5 5.44333 14.3267 5.0625 16.7092C3.00417 15.19 1.66667 12.7483 1.66667 10C1.66667 5.405 5.405 1.66667 10 1.66667C14.595 1.66667 18.3333 5.405 18.3333 10C18.3333 12.7483 16.9958 15.19 14.9375 16.7092ZM10 4.16667C8.16167 4.16667 6.66667 5.66167 6.66667 7.5C6.66667 9.33833 8.16167 10.8333 10 10.8333C11.8383 10.8333 13.3333 9.33833 13.3333 7.5C13.3333 5.66167 11.8383 4.16667 10 4.16667ZM10 9.16667C9.08083 9.16667 8.33333 8.41917 8.33333 7.5C8.33333 6.58083 9.08083 5.83333 10 5.83333C10.9192 5.83333 11.6667 6.58083 11.6667 7.5C11.6667 8.41917 10.9192 9.16667 10 9.16667Z"
                                                                fill="#6C757D"
                                                            />
                                                        </svg>
                                                        50 Sutudents
                                                    </span>
                                                </div>
                                                <div class="it-course-btn">
                                                    <a href="#" class="it-btn-yellow w-100 border-radius-100">
                                                        <span>
                                                            <span class="text-1">Preview This Course</span>
                                                            <span class="text-2">Preview This Course</span>
                                                        </span>
                                                        <i>
                                                            <svg
                                                                width="16"
                                                                height="15"
                                                                viewBox="0 0 16 15"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    d="M15.0544 8.1364C15.4058 7.78492 15.4058 7.21508 15.0544 6.8636L9.3268 1.13604C8.97533 0.784567 8.40548 0.784567 8.05401 1.13604C7.70254 1.48751 7.70254 2.05736 8.05401 2.40883L13.1452 7.5L8.05401 12.5912C7.70254 12.9426 7.70254 13.5125 8.05401 13.864C8.40548 14.2154 8.97533 14.2154 9.3268 13.864L15.0544 8.1364ZM0.417969 7.5V8.4H14.418V7.5V6.6H0.417969V7.5Z"
                                                                    fill="currentcolor"
                                                                />
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="it-course-item mb-35">
                                            <div class="it-course-thumb z-index-1 border-radius-20">
                                                <a href="courses-details-v3.html"
                                                    ><img
                                                        class="w-100"
                                                        src="{{ asset('frontAssets/img/course/course-1-5.jpg') }}"
                                                        alt=""
                                                /></a>
                                                <span class="course-category">Cooking</span>
                                                <button class="wishlist-btn">
                                                    <svg
                                                        width="14"
                                                        height="16"
                                                        viewBox="0 0 14 16"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <path
                                                            d="M13.6811 4.50134C13.3564 2.47755 11.9261 0.859544 10.0381 0.378868C9.06325 0.130895 8.04117 0.00363597 6.99804 0C5.95853 0.00290878 4.93718 0.130168 3.96232 0.378868C2.07436 0.859544 0.644035 2.47755 0.319325 4.50134C-0.155754 7.46102 -0.101273 10.5952 0.486402 14.0829C0.638224 14.9875 1.28038 15.7103 2.1717 15.9234C3.27005 16.1859 4.09235 15.695 4.53692 15.1395C4.99675 14.565 6.75178 12.3267 6.75178 12.3267C6.83459 12.2212 6.94355 12.2052 7.00021 12.2052C7.05688 12.2052 7.16584 12.2205 7.24865 12.3267C7.24865 12.3267 9.00441 14.5657 9.46351 15.1395C10.0359 15.8536 10.9418 16.1546 11.8287 15.9234C12.7157 15.6929 13.3615 14.9875 13.5133 14.0836C14.101 10.596 14.1562 7.46175 13.6804 4.50206L13.6811 4.50134ZM12.0808 13.8414C11.9973 14.3396 11.5868 14.4835 11.4626 14.5155C11.3399 14.5483 10.9113 14.6224 10.5967 14.229C10.1398 13.6589 9.65601 13.0415 9.16785 12.4176L8.38913 11.425C8.05134 10.9959 7.54503 10.7501 6.99949 10.7501C6.45395 10.7501 5.94836 10.9959 5.60985 11.425L4.83112 12.4176C4.34297 13.0408 3.85917 13.6589 3.40225 14.229C3.08844 14.6224 2.66058 14.5483 2.53636 14.5155C2.41287 14.4835 2.00244 14.3396 1.91818 13.8407C1.35738 10.5123 1.3029 7.53228 1.75255 4.73186C1.98573 3.2811 2.99328 2.12559 4.31972 1.78817C5.17908 1.56929 6.08129 1.4573 6.99731 1.45439C7.91768 1.4573 8.8199 1.56929 9.67925 1.78817C11.0057 2.12559 12.0132 3.2811 12.2464 4.73186C12.6961 7.53228 12.6416 10.5123 12.0808 13.8407V13.8414Z"
                                                            fill="currentcolor"
                                                        />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="it-course-content p-relative">
                                                <div class="it-course-price-box mb-20">
                                                    <del>$20.00</del>
                                                    <span>$9.00</span>
                                                </div>
                                                <h5 class="it-course-title mb-20">
                                                    <a class="border-line" href="courses-details-v3.html"
                                                        >Upgrade Your Knowledge with Expert Courses</a
                                                    >
                                                </h5>
                                                <div class="it-course-rating mb-10">
                                                    <div>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-regular fa-star"></i>
                                                        <span>(4.7/5 Customer Rating)</span>
                                                    </div>
                                                </div>
                                                <div class="it-course-meta mb-30 d-flex justify-content-between">
                                                    <span>
                                                        <svg
                                                            width="20"
                                                            height="20"
                                                            viewBox="0 0 20 20"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M18.5 1.80239C18.0315 1.41066 17.4826 1.12688 16.8921 0.971189C16.3016 0.815501 15.684 0.791726 15.0833 0.901552L11.8983 1.47989C11.163 1.61492 10.4944 1.99324 10 2.55405C9.5043 1.99227 8.8338 1.61387 8.09667 1.47989L4.91667 0.901552C4.31596 0.79163 3.69844 0.815094 3.10781 0.970282C2.51718 1.12547 1.96789 1.40859 1.4988 1.7996C1.02972 2.19061 0.652322 2.67994 0.393318 3.23297C0.134315 3.78601 4.0677e-05 4.38921 0 4.99989L0 13.9941C4.78799e-05 14.9697 0.342481 15.9144 0.967611 16.6635C1.59274 17.4126 2.46092 17.9186 3.42083 18.0932L8.65917 19.0457C9.5458 19.2068 10.4542 19.2068 11.3408 19.0457L16.5833 18.0932C17.5425 17.9177 18.4097 17.4114 19.034 16.6624C19.6583 15.9134 20.0001 14.9691 20 13.9941V4.99989C20.0004 4.38942 19.8662 3.78638 19.6069 3.23371C19.3476 2.68104 18.9697 2.19233 18.5 1.80239ZM9.16667 17.4399C9.09667 17.4299 9.02667 17.4182 8.95667 17.4057L3.71917 16.4541C3.14314 16.3493 2.62216 16.0456 2.24707 15.596C1.87198 15.1465 1.66658 14.5795 1.66667 13.9941V4.99989C1.66667 4.33684 1.93006 3.70096 2.3989 3.23212C2.86774 2.76328 3.50363 2.49989 4.16667 2.49989C4.31758 2.50025 4.46816 2.51391 4.61667 2.54072L7.8 3.12405C8.18301 3.19414 8.52939 3.39611 8.77904 3.69492C9.02868 3.99373 9.16582 4.37052 9.16667 4.75989V17.4399ZM18.3333 13.9941C18.3334 14.5795 18.128 15.1465 17.7529 15.596C17.3778 16.0456 16.8569 16.3493 16.2808 16.4541L11.0433 17.4057C10.9733 17.4182 10.9033 17.4299 10.8333 17.4399V4.75989C10.8333 4.36956 10.9702 3.9916 11.2203 3.69189C11.4703 3.39219 11.8176 3.18975 12.2017 3.11989L15.3858 2.53655C15.7464 2.47094 16.117 2.48543 16.4714 2.57898C16.8258 2.67253 17.1553 2.84285 17.4365 3.07789C17.7178 3.31293 17.9439 3.60693 18.0988 3.93907C18.2538 4.27121 18.3339 4.63337 18.3333 4.99989V13.9941Z"
                                                                fill="#6C757D"
                                                            />
                                                        </svg>
                                                        20 Lessons
                                                    </span>
                                                    <span>
                                                        <svg
                                                            width="20"
                                                            height="20"
                                                            viewBox="0 0 20 20"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M10 0C4.48583 0 0 4.48583 0 10C0 15.5142 4.48583 20 10 20C15.5142 20 20 15.5142 20 10C20 4.48583 15.5142 0 10 0ZM6.66667 17.6367V17.5C6.66667 15.6617 8.16167 14.1667 10 14.1667C11.8383 14.1667 13.3333 15.6617 13.3333 17.5V17.6367C12.3117 18.0842 11.185 18.3333 10 18.3333C8.815 18.3333 7.68833 18.0842 6.66667 17.6367ZM14.9375 16.7092C14.5575 14.3267 12.4883 12.5 10 12.5C7.51167 12.5 5.44333 14.3267 5.0625 16.7092C3.00417 15.19 1.66667 12.7483 1.66667 10C1.66667 5.405 5.405 1.66667 10 1.66667C14.595 1.66667 18.3333 5.405 18.3333 10C18.3333 12.7483 16.9958 15.19 14.9375 16.7092ZM10 4.16667C8.16167 4.16667 6.66667 5.66167 6.66667 7.5C6.66667 9.33833 8.16167 10.8333 10 10.8333C11.8383 10.8333 13.3333 9.33833 13.3333 7.5C13.3333 5.66167 11.8383 4.16667 10 4.16667ZM10 9.16667C9.08083 9.16667 8.33333 8.41917 8.33333 7.5C8.33333 6.58083 9.08083 5.83333 10 5.83333C10.9192 5.83333 11.6667 6.58083 11.6667 7.5C11.6667 8.41917 10.9192 9.16667 10 9.16667Z"
                                                                fill="#6C757D"
                                                            />
                                                        </svg>
                                                        50 Sutudents
                                                    </span>
                                                </div>
                                                <div class="it-course-btn">
                                                    <a href="#" class="it-btn-yellow w-100 border-radius-100">
                                                        <span>
                                                            <span class="text-1">Preview This Course</span>
                                                            <span class="text-2">Preview This Course</span>
                                                        </span>
                                                        <i>
                                                            <svg
                                                                width="16"
                                                                height="15"
                                                                viewBox="0 0 16 15"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    d="M15.0544 8.1364C15.4058 7.78492 15.4058 7.21508 15.0544 6.8636L9.3268 1.13604C8.97533 0.784567 8.40548 0.784567 8.05401 1.13604C7.70254 1.48751 7.70254 2.05736 8.05401 2.40883L13.1452 7.5L8.05401 12.5912C7.70254 12.9426 7.70254 13.5125 8.05401 13.864C8.40548 14.2154 8.97533 14.2154 9.3268 13.864L15.0544 8.1364ZM0.417969 7.5V8.4H14.418V7.5V6.6H0.417969V7.5Z"
                                                                    fill="currentcolor"
                                                                />
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="it-team-btn text-center mt-45">
                                <a href="courses-v1.html" class="it-btn-yellow border-radius-100">
                                    <span>
                                        <span class="text-1">View All Courses</span>
                                        <span class="text-2">View All Courses</span>
                                    </span>
                                    <i>
                                        <svg
                                            width="16"
                                            height="15"
                                            viewBox="0 0 16 15"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M15.0544 8.1364C15.4058 7.78492 15.4058 7.21508 15.0544 6.8636L9.3268 1.13604C8.97533 0.784567 8.40548 0.784567 8.05401 1.13604C7.70254 1.48751 7.70254 2.05736 8.05401 2.40883L13.1452 7.5L8.05401 12.5912C7.70254 12.9426 7.70254 13.5125 8.05401 13.864C8.40548 14.2154 8.97533 14.2154 9.3268 13.864L15.0544 8.1364ZM0.417969 7.5V8.4H14.418V7.5V6.6H0.417969V7.5Z"
                                                fill="currentcolor"
                                            />
                                        </svg>
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- course-area-end -->

            <!-- campus-area-start -->
            <section class="it-campus-area it-blog-style-2 white-bg z-index-1 pt-130 pb-95">
                <div class="container">
                    <div class="it-campus-section-title-wrap mb-70">
                        <div class="row align-items-end">
                            <div class="col-xl-8 col-lg-7">
                                <div class="it-campus-section-title-box">
                                    <span class="it-section-subtitle">
                                        <svg
                                            width="19"
                                            height="14"
                                            viewBox="0 0 19 14"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M17.5 1.66667H16.6667V0.833333C16.6667 0.61232 16.5789 0.400358 16.4226 0.244078C16.2663 0.0877975 16.0543 0 15.8333 0C13.3333 0 10.5708 0.133334 9.16667 1.46667C7.7625 0.133334 5 0 2.5 0C2.27899 0 2.06702 0.0877975 1.91074 0.244078C1.75446 0.400358 1.66667 0.61232 1.66667 0.833333V1.66667H0.833333C0.61232 1.66667 0.400358 1.75446 0.244078 1.91074C0.0877973 2.06702 0 2.27899 0 2.5V12.5C0 12.721 0.0877973 12.933 0.244078 13.0893C0.400358 13.2455 0.61232 13.3333 0.833333 13.3333H17.5C17.721 13.3333 17.933 13.2455 18.0893 13.0893C18.2455 12.933 18.3333 12.721 18.3333 12.5V2.5C18.3333 2.27899 18.2455 2.06702 18.0893 1.91074C17.933 1.75446 17.721 1.66667 17.5 1.66667ZM15.8333 0.833333V10.8333C13.5542 10.8333 11.0708 10.9417 9.58333 11.9583V2.22917C10.675 0.954167 13.375 0.833333 15.8333 0.833333ZM8.75 2.22917V11.9583C7.2625 10.9417 4.77917 10.8333 2.5 10.8333V0.833333C4.95833 0.833333 7.65833 0.954167 8.75 2.22917ZM0.833333 2.5H1.66667V10.8333C1.66667 11.0543 1.75446 11.2663 1.91074 11.4226C2.06702 11.5789 2.27899 11.6667 2.5 11.6667C4.53333 11.6667 6.72917 11.75 8.04583 12.5H0.833333V2.5ZM17.5 12.5H10.2875C11.6042 11.75 13.8 11.6667 15.8333 11.6667C16.0543 11.6667 16.2663 11.5789 16.4226 11.4226C16.5789 11.2663 16.6667 11.0543 16.6667 10.8333V2.5H17.5V12.5Z"
                                                fill="#03594E"
                                            />
                                        </svg>
                                        Campus
                                    </span>
                                    <h4 class="it-section-title">
                                        Experience Vibrant and <br />
                                        Engaging Campus Life
                                    </h4>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5">
                                <div class="it-campus-text">
                                    <p class="mb-0">
                                        Enhance your knowledge and grow professionally by <br />
                                        learning new skills anytime, anywhere. Access expert-led <br />
                                        courses designed to help you succeed in your
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div
                            class="col-xl-4 col-lg-4 col-md-6 mb-35 wow itfadeUp"
                            data-wow-duration=".9s"
                            data-wow-delay=".3s"
                        >
                            <div class="it-campus-item p-relative">
                                <h4 class="it-campus-title">
                                    <a class="border-line" href="about-us-v3.html">Student Life</a>
                                </h4>
                                <div class="it-campus-thumb">
                                    <img src="{{ asset('frontAssets/img/blog/blog-1-2.jpg') }}" alt="" />
                                </div>
                                <div class="it-campus-arrow">
                                    <a href="about-us-v3.html">
                                        <svg
                                            width="20"
                                            height="20"
                                            viewBox="0 0 20 20"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M19.0604 2.43985C19.0604 1.61142 18.3888 0.939849 17.5604 0.939849L4.0604 0.939848C3.23197 0.939848 2.5604 1.61142 2.5604 2.43985C2.5604 3.26828 3.23197 3.93985 4.0604 3.93985H16.0604V15.9398C16.0604 16.7683 16.732 17.4398 17.5604 17.4398C18.3888 17.4398 19.0604 16.7683 19.0604 15.9398L19.0604 2.43985ZM1.17285 18.8274L2.23351 19.8881L18.6211 3.50051L17.5604 2.43985L16.4997 1.37919L0.112191 17.7667L1.17285 18.8274Z"
                                                fill="currentcolor"
                                            />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-xl-4 col-lg-4 col-md-6 mb-35 wow itfadeUp"
                            data-wow-duration=".9s"
                            data-wow-delay=".5s"
                        >
                            <div class="it-campus-item p-relative">
                                <h4 class="it-campus-title">
                                    <a class="border-line" href="about-us-v3.html">Arts & Culture</a>
                                </h4>
                                <div class="it-campus-thumb">
                                    <img src="{{ asset('frontAssets/img/campus/campus-3-2.jpg') }}" alt="" />
                                </div>
                                <div class="it-campus-arrow">
                                    <a href="about-us-v3.html">
                                        <svg
                                            width="20"
                                            height="20"
                                            viewBox="0 0 20 20"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M19.0604 2.43985C19.0604 1.61142 18.3888 0.939849 17.5604 0.939849L4.0604 0.939848C3.23197 0.939848 2.5604 1.61142 2.5604 2.43985C2.5604 3.26828 3.23197 3.93985 4.0604 3.93985H16.0604V15.9398C16.0604 16.7683 16.732 17.4398 17.5604 17.4398C18.3888 17.4398 19.0604 16.7683 19.0604 15.9398L19.0604 2.43985ZM1.17285 18.8274L2.23351 19.8881L18.6211 3.50051L17.5604 2.43985L16.4997 1.37919L0.112191 17.7667L1.17285 18.8274Z"
                                                fill="currentcolor"
                                            />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-xl-4 col-lg-4 col-md-6 mb-35 wow itfadeUp"
                            data-wow-duration=".9s"
                            data-wow-delay=".7s"
                        >
                            <div class="it-campus-item p-relative">
                                <h4 class="it-campus-title">
                                    <a class="border-line" href="about-us-v3.html">Sport & Fitness</a>
                                </h4>
                                <div class="it-campus-thumb">
                                    <img src="{{ asset('frontAssets/img/campus/campus-3-3.jpg') }}" alt="" />
                                </div>
                                <div class="it-campus-arrow">
                                    <a href="about-us-v3.html">
                                        <svg
                                            width="20"
                                            height="20"
                                            viewBox="0 0 20 20"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M19.0604 2.43985C19.0604 1.61142 18.3888 0.939849 17.5604 0.939849L4.0604 0.939848C3.23197 0.939848 2.5604 1.61142 2.5604 2.43985C2.5604 3.26828 3.23197 3.93985 4.0604 3.93985H16.0604V15.9398C16.0604 16.7683 16.732 17.4398 17.5604 17.4398C18.3888 17.4398 19.0604 16.7683 19.0604 15.9398L19.0604 2.43985ZM1.17285 18.8274L2.23351 19.8881L18.6211 3.50051L17.5604 2.43985L16.4997 1.37919L0.112191 17.7667L1.17285 18.8274Z"
                                                fill="currentcolor"
                                            />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- campus-area-end -->

            <!-- tuition-area-start -->
            <section
                class="it-tuition-area z-index-2 pt-130 pb-80"
                data-background="{{ asset('frontAssets/img/shape/tution-3-1.png') }}">
                <img
                    class="it-tuition-shape-2 d-none d-md-block"
                    data-parallax='{"x": 200, "smoothness": 30}'
                    src="{{ asset('frontAssets/img/shape/tution-3-2.png') }}"
                    alt=""
                />
                <div class="container">
                    <div class="row gx-35">
                        <div
                            class="col-xl-4 col-lg-6 mb-50 wow itfadeLeft"
                            data-wow-duration=".9s"
                            data-wow-delay=".5s"
                        >
                            <div class="it-tuition-left">
                                <div class="it-categories-section-title-box mb-20">
                                    <span class="it-section-subtitle">
                                        <svg
                                            width="19"
                                            height="14"
                                            viewBox="0 0 19 14"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M17.5 2.24284H16.6667V1.40951C16.6667 1.18849 16.5789 0.97653 16.4226 0.82025C16.2663 0.663969 16.0543 0.576172 15.8333 0.576172C13.3333 0.576172 10.5708 0.709505 9.16667 2.04284C7.7625 0.709505 5 0.576172 2.5 0.576172C2.27899 0.576172 2.06702 0.663969 1.91074 0.82025C1.75446 0.97653 1.66667 1.18849 1.66667 1.40951V2.24284H0.833333C0.61232 2.24284 0.400358 2.33064 0.244078 2.48692C0.0877973 2.6432 0 2.85516 0 3.07617V13.0762C0 13.2972 0.0877973 13.5091 0.244078 13.6654C0.400358 13.8217 0.61232 13.9095 0.833333 13.9095H17.5C17.721 13.9095 17.933 13.8217 18.0893 13.6654C18.2455 13.5091 18.3333 13.2972 18.3333 13.0762V3.07617C18.3333 2.85516 18.2455 2.6432 18.0893 2.48692C17.933 2.33064 17.721 2.24284 17.5 2.24284ZM15.8333 1.40951V11.4095C13.5542 11.4095 11.0708 11.5178 9.58333 12.5345V2.80534C10.675 1.53034 13.375 1.40951 15.8333 1.40951ZM8.75 2.80534V12.5345C7.2625 11.5178 4.77917 11.4095 2.5 11.4095V1.40951C4.95833 1.40951 7.65833 1.53034 8.75 2.80534ZM0.833333 3.07617H1.66667V11.4095C1.66667 11.6305 1.75446 11.8425 1.91074 11.9988C2.06702 12.155 2.27899 12.2428 2.5 12.2428C4.53333 12.2428 6.72917 12.3262 8.04583 13.0762H0.833333V3.07617ZM17.5 13.0762H10.2875C11.6042 12.3262 13.8 12.2428 15.8333 12.2428C16.0543 12.2428 16.2663 12.155 16.4226 11.9988C16.5789 11.8425 16.6667 11.6305 16.6667 11.4095V3.07617H17.5V13.0762Z"
                                                fill="#03594E"
                                            />
                                        </svg>
                                        Tuition Fees</span
                                    >
                                    <h4 class="it-section-title">
                                        Educeet University <br />Offers Affordable <br />Tuition Fees
                                    </h4>
                                </div>
                                <div class="it-tuition-text">
                                    <p>
                                        Enhance your knowledge and grow professionally by learning new skills anytime,
                                        anywhere. Access expert-led courses designed to help you succeed
                                    </p>
                                </div>
                                <div class="it-tuition-btn">
                                    <a href="price.html" class="it-btn-yellow theme-bg border-radius-100">
                                        <span>
                                            <span class="text-1">Plan Details</span>
                                            <span class="text-2">Plan Details</span>
                                        </span>
                                        <i>
                                            <svg
                                                width="16"
                                                height="15"
                                                viewBox="0 0 16 15"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M15.0544 8.1364C15.4058 7.78492 15.4058 7.21508 15.0544 6.8636L9.3268 1.13604C8.97533 0.784567 8.40548 0.784567 8.05401 1.13604C7.70254 1.48751 7.70254 2.05736 8.05401 2.40883L13.1452 7.5L8.05401 12.5912C7.70254 12.9426 7.70254 13.5125 8.05401 13.864C8.40548 14.2154 8.97533 14.2154 9.3268 13.864L15.0544 8.1364ZM0.417969 7.5V8.4H14.418V7.5V6.6H0.417969V7.5Z"
                                                    fill="currentcolor"
                                                />
                                            </svg>
                                        </i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-xl-4 col-lg-6 col-md-6 mb-50 wow itfadeRight"
                            data-wow-duration=".9s"
                            data-wow-delay=".5s"
                        >
                            <div class="it-tuition-item active">
                                <h5 class="it-tuition-title-sm">Undergraduate Programs</h5>
                                <div class="it-tuition-list-box mb-35">
                                    <span>College of Arts and Sciences</span>
                                    <ul>
                                        <li>
                                            <span>
                                                <svg
                                                    width="20"
                                                    height="17"
                                                    viewBox="0 0 20 17"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M5.71195 16.5762C5.58634 16.5762 5.48163 16.4905 5.43976 16.3834C5.41885 16.3406 3.618 11.5862 0.833023 9.7873C0.288584 9.44465 -0.130124 9.08056 0.0373593 8.26673C0.204843 7.47435 0.728376 7.02461 1.67062 6.81044C3.34575 6.44635 5.14655 9.10194 5.81666 10.1942C8.16184 6.70341 12.8523 1.22086 19.6786 0.578388C20.0079 0.538906 20.1297 1.03815 19.8252 1.17804C19.7205 1.22086 9.96258 5.78255 6.00505 16.4049C5.94227 16.5119 5.83756 16.5762 5.71195 16.5762Z"
                                                        fill="currentcolor"
                                                    />
                                                </svg>
                                                Full-Time Tuition (per semester): $241
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <svg
                                                    width="20"
                                                    height="17"
                                                    viewBox="0 0 20 17"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M5.71195 16.5762C5.58634 16.5762 5.48163 16.4905 5.43976 16.3834C5.41885 16.3406 3.618 11.5862 0.833023 9.7873C0.288584 9.44465 -0.130124 9.08056 0.0373593 8.26673C0.204843 7.47435 0.728376 7.02461 1.67062 6.81044C3.34575 6.44635 5.14655 9.10194 5.81666 10.1942C8.16184 6.70341 12.8523 1.22086 19.6786 0.578388C20.0079 0.538906 20.1297 1.03815 19.8252 1.17804C19.7205 1.22086 9.96258 5.78255 6.00505 16.4049C5.94227 16.5119 5.83756 16.5762 5.71195 16.5762Z"
                                                        fill="currentcolor"
                                                    />
                                                </svg>
                                                Part-Time Tuition (per credit): $141
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="it-tuition-list-box">
                                    <span>School of Business</span>
                                    <ul>
                                        <li>
                                            <span>
                                                <svg
                                                    width="20"
                                                    height="17"
                                                    viewBox="0 0 20 17"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M5.71195 16.5762C5.58634 16.5762 5.48163 16.4905 5.43976 16.3834C5.41885 16.3406 3.618 11.5862 0.833023 9.7873C0.288584 9.44465 -0.130124 9.08056 0.0373593 8.26673C0.204843 7.47435 0.728376 7.02461 1.67062 6.81044C3.34575 6.44635 5.14655 9.10194 5.81666 10.1942C8.16184 6.70341 12.8523 1.22086 19.6786 0.578388C20.0079 0.538906 20.1297 1.03815 19.8252 1.17804C19.7205 1.22086 9.96258 5.78255 6.00505 16.4049C5.94227 16.5119 5.83756 16.5762 5.71195 16.5762Z"
                                                        fill="currentcolor"
                                                    />
                                                </svg>
                                                Full-Time Tuition (per semester): $241
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <svg
                                                    width="20"
                                                    height="17"
                                                    viewBox="0 0 20 17"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M5.71195 16.5762C5.58634 16.5762 5.48163 16.4905 5.43976 16.3834C5.41885 16.3406 3.618 11.5862 0.833023 9.7873C0.288584 9.44465 -0.130124 9.08056 0.0373593 8.26673C0.204843 7.47435 0.728376 7.02461 1.67062 6.81044C3.34575 6.44635 5.14655 9.10194 5.81666 10.1942C8.16184 6.70341 12.8523 1.22086 19.6786 0.578388C20.0079 0.538906 20.1297 1.03815 19.8252 1.17804C19.7205 1.22086 9.96258 5.78255 6.00505 16.4049C5.94227 16.5119 5.83756 16.5762 5.71195 16.5762Z"
                                                        fill="currentcolor"
                                                    />
                                                </svg>
                                                Part-Time Tuition (per credit): $141
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-xl-4 col-lg-6 col-md-6 mb-50 wow itfadeRight"
                            data-wow-duration=".9s"
                            data-wow-delay=".7s"
                        >
                            <div class="it-tuition-item">
                                <h5 class="it-tuition-title-sm">Graduate Programs</h5>
                                <div class="it-tuition-list-box mb-35">
                                    <span>Graduate School/Department</span>
                                    <ul>
                                        <li>
                                            <span>
                                                <svg
                                                    width="20"
                                                    height="17"
                                                    viewBox="0 0 20 17"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M5.71195 16.5762C5.58634 16.5762 5.48163 16.4905 5.43976 16.3834C5.41885 16.3406 3.618 11.5862 0.833023 9.7873C0.288584 9.44465 -0.130124 9.08056 0.0373593 8.26673C0.204843 7.47435 0.728376 7.02461 1.67062 6.81044C3.34575 6.44635 5.14655 9.10194 5.81666 10.1942C8.16184 6.70341 12.8523 1.22086 19.6786 0.578388C20.0079 0.538906 20.1297 1.03815 19.8252 1.17804C19.7205 1.22086 9.96258 5.78255 6.00505 16.4049C5.94227 16.5119 5.83756 16.5762 5.71195 16.5762Z"
                                                        fill="currentcolor"
                                                    />
                                                </svg>
                                                Full-Time Tuition (per semester): $241
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <svg
                                                    width="20"
                                                    height="17"
                                                    viewBox="0 0 20 17"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M5.71195 16.5762C5.58634 16.5762 5.48163 16.4905 5.43976 16.3834C5.41885 16.3406 3.618 11.5862 0.833023 9.7873C0.288584 9.44465 -0.130124 9.08056 0.0373593 8.26673C0.204843 7.47435 0.728376 7.02461 1.67062 6.81044C3.34575 6.44635 5.14655 9.10194 5.81666 10.1942C8.16184 6.70341 12.8523 1.22086 19.6786 0.578388C20.0079 0.538906 20.1297 1.03815 19.8252 1.17804C19.7205 1.22086 9.96258 5.78255 6.00505 16.4049C5.94227 16.5119 5.83756 16.5762 5.71195 16.5762Z"
                                                        fill="currentcolor"
                                                    />
                                                </svg>
                                                Part-Time Tuition (per credit): $141
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="it-tuition-list-box">
                                    <span>Additional Fees</span>
                                    <ul>
                                        <li>
                                            <span>
                                                <svg
                                                    width="20"
                                                    height="17"
                                                    viewBox="0 0 20 17"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M5.71195 16.5762C5.58634 16.5762 5.48163 16.4905 5.43976 16.3834C5.41885 16.3406 3.618 11.5862 0.833023 9.7873C0.288584 9.44465 -0.130124 9.08056 0.0373593 8.26673C0.204843 7.47435 0.728376 7.02461 1.67062 6.81044C3.34575 6.44635 5.14655 9.10194 5.81666 10.1942C8.16184 6.70341 12.8523 1.22086 19.6786 0.578388C20.0079 0.538906 20.1297 1.03815 19.8252 1.17804C19.7205 1.22086 9.96258 5.78255 6.00505 16.4049C5.94227 16.5119 5.83756 16.5762 5.71195 16.5762Z"
                                                        fill="currentcolor"
                                                    />
                                                </svg>
                                                Technology Fee: $149 per semester
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <svg
                                                    width="20"
                                                    height="17"
                                                    viewBox="0 0 20 17"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M5.71195 16.5762C5.58634 16.5762 5.48163 16.4905 5.43976 16.3834C5.41885 16.3406 3.618 11.5862 0.833023 9.7873C0.288584 9.44465 -0.130124 9.08056 0.0373593 8.26673C0.204843 7.47435 0.728376 7.02461 1.67062 6.81044C3.34575 6.44635 5.14655 9.10194 5.81666 10.1942C8.16184 6.70341 12.8523 1.22086 19.6786 0.578388C20.0079 0.538906 20.1297 1.03815 19.8252 1.17804C19.7205 1.22086 9.96258 5.78255 6.00505 16.4049C5.94227 16.5119 5.83756 16.5762 5.71195 16.5762Z"
                                                        fill="currentcolor"
                                                    />
                                                </svg>
                                                Student Activity Fee: $99 per semester
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- tuition-area-end -->

            <!-- testimonial-area-start -->
            <section class="it-testimonial-area z-index-1 pt-130 pb-130">
                <img
                    class="it-testimonial-shape-3"
                    src="{{ asset('frontAssets/img/shape/testimonial-1-2.png') }}"
                    alt=""
                />
                <img
                    class="it-testimonial-shape-6"
                    src="{{ asset('frontAssets/img/shape/testimonial-1-3.png') }}"
                    alt=""
                />
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="it-testimonial-section-title-box text-center mb-70">
                                <span class="it-section-subtitle">
                                    <svg
                                        width="19"
                                        height="14"
                                        viewBox="0 0 19 14"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M17.5 2.24284H16.6667V1.40951C16.6667 1.18849 16.5789 0.97653 16.4226 0.82025C16.2663 0.663969 16.0543 0.576172 15.8333 0.576172C13.3333 0.576172 10.5708 0.709505 9.16667 2.04284C7.7625 0.709505 5 0.576172 2.5 0.576172C2.27899 0.576172 2.06702 0.663969 1.91074 0.82025C1.75446 0.97653 1.66667 1.18849 1.66667 1.40951V2.24284H0.833333C0.61232 2.24284 0.400358 2.33064 0.244078 2.48692C0.0877973 2.6432 0 2.85516 0 3.07617V13.0762C0 13.2972 0.0877973 13.5091 0.244078 13.6654C0.400358 13.8217 0.61232 13.9095 0.833333 13.9095H17.5C17.721 13.9095 17.933 13.8217 18.0893 13.6654C18.2455 13.5091 18.3333 13.2972 18.3333 13.0762V3.07617C18.3333 2.85516 18.2455 2.6432 18.0893 2.48692C17.933 2.33064 17.721 2.24284 17.5 2.24284ZM15.8333 1.40951V11.4095C13.5542 11.4095 11.0708 11.5178 9.58333 12.5345V2.80534C10.675 1.53034 13.375 1.40951 15.8333 1.40951ZM8.75 2.80534V12.5345C7.2625 11.5178 4.77917 11.4095 2.5 11.4095V1.40951C4.95833 1.40951 7.65833 1.53034 8.75 2.80534ZM0.833333 3.07617H1.66667V11.4095C1.66667 11.6305 1.75446 11.8425 1.91074 11.9988C2.06702 12.155 2.27899 12.2428 2.5 12.2428C4.53333 12.2428 6.72917 12.3262 8.04583 13.0762H0.833333V3.07617ZM17.5 13.0762H10.2875C11.6042 12.3262 13.8 12.2428 15.8333 12.2428C16.0543 12.2428 16.2663 12.155 16.4226 11.9988C16.5789 11.8425 16.6667 11.6305 16.6667 11.4095V3.07617H17.5V13.0762Z"
                                            fill="#03594E"
                                        />
                                    </svg>
                                    Testimonial</span
                                >
                                <h4 class="it-section-title">
                                    What Our Learners Say About<br />
                                    Educeet’s Impact and Value
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="it-testimonial-wrapper p-relative">
                                <div class="swiper it-testimonial-active">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="it-testimonial-item">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-5 col-md-5">
                                                        <div class="it-testimonial-thumb border-radius-20">
                                                            <img
                                                                src="{{ asset('frontAssets/img/testimonial/thumb-1-4.jpg') }}"
                                                                alt=""
                                                            />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7 col-md-7">
                                                        <div class="it-testimonial-content">
                                                            <div class="it-testimonial-quote mb-35">
                                                                <svg
                                                                    width="30"
                                                                    height="22"
                                                                    viewBox="0 0 30 22"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                >
                                                                    <path
                                                                        d="M10 0.0849609H5C3.67392 0.0849609 2.40215 0.611745 1.46447 1.54943C0.526784 2.48711 0 3.75888 0 5.08496L0 10.085C0 10.748 0.263392 11.3839 0.732233 11.8527C1.20107 12.3216 1.83696 12.585 2.5 12.585H9.8875C9.59091 14.3306 8.68685 15.9153 7.33504 17.059C5.98323 18.2026 4.27069 18.8317 2.5 18.835C2.16848 18.835 1.85054 18.9667 1.61612 19.2011C1.3817 19.4355 1.25 19.7534 1.25 20.085C1.25 20.4165 1.3817 20.7344 1.61612 20.9688C1.85054 21.2033 2.16848 21.335 2.5 21.335C5.15125 21.332 7.69306 20.2775 9.56778 18.4027C11.4425 16.528 12.497 13.9862 12.5 11.335V2.58496C12.5 1.92192 12.2366 1.28603 11.7678 0.817194C11.2989 0.348353 10.663 0.0849609 10 0.0849609Z"
                                                                        fill="#4C505B"
                                                                    />
                                                                    <path
                                                                        d="M27.5 0.0849609H22.5C21.1739 0.0849609 19.9021 0.611745 18.9645 1.54943C18.0268 2.48711 17.5 3.75888 17.5 5.08496V10.085C17.5 10.748 17.7634 11.3839 18.2322 11.8527C18.7011 12.3216 19.337 12.585 20 12.585H27.3875C27.0909 14.3306 26.1868 15.9153 24.835 17.059C23.4832 18.2026 21.7707 18.8317 20 18.835C19.6685 18.835 19.3505 18.9667 19.1161 19.2011C18.8817 19.4355 18.75 19.7534 18.75 20.085C18.75 20.4165 18.8817 20.7344 19.1161 20.9688C19.3505 21.2033 19.6685 21.335 20 21.335C22.6513 21.332 25.1931 20.2775 27.0678 18.4027C28.9425 16.528 29.997 13.9862 30 11.335V2.58496C30 1.92192 29.7366 1.28603 29.2678 0.817194C28.7989 0.348353 28.163 0.0849609 27.5 0.0849609Z"
                                                                        fill="#4C505B"
                                                                    />
                                                                </svg>
                                                            </div>
                                                            <div class="it-testimonial-text">
                                                                <h5 class="mb-30">
                                                                    Educeet transformed my learning journey! The
                                                                    platform is intuitive, the courses are top-notch,
                                                                    and the support is exceptional. I’ve gained real
                                                                    skills and confidence. Highly recommended for anyone
                                                                    serious about education.
                                                                </h5>
                                                            </div>
                                                            <div
                                                                class="it-testimonial-bottom d-flex align-items-center justify-content-between"
                                                            >
                                                                <div class="it-testimonial-avatar-info">
                                                                    <h5 class="it-testimonial-avatar-name">
                                                                        Michelle Logan
                                                                    </h5>
                                                                    <span>Foundr & CEO UIPainter</span>
                                                                </div>
                                                                <img
                                                                    src="{{ asset('frontAssets/img/testimonial/icon.png') }}"
                                                                    alt=""
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="it-testimonial-item">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-5 col-md-5">
                                                        <div class="it-testimonial-thumb border-radius-20">
                                                            <img
                                                                src="{{ asset('frontAssets/img/testimonial/thumb-1-3.jpg') }}"
                                                                alt=""
                                                            />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7 col-md-7">
                                                        <div class="it-testimonial-content">
                                                            <div class="it-testimonial-quote mb-35">
                                                                <svg
                                                                    width="30"
                                                                    height="22"
                                                                    viewBox="0 0 30 22"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                >
                                                                    <path
                                                                        d="M10 0.0849609H5C3.67392 0.0849609 2.40215 0.611745 1.46447 1.54943C0.526784 2.48711 0 3.75888 0 5.08496L0 10.085C0 10.748 0.263392 11.3839 0.732233 11.8527C1.20107 12.3216 1.83696 12.585 2.5 12.585H9.8875C9.59091 14.3306 8.68685 15.9153 7.33504 17.059C5.98323 18.2026 4.27069 18.8317 2.5 18.835C2.16848 18.835 1.85054 18.9667 1.61612 19.2011C1.3817 19.4355 1.25 19.7534 1.25 20.085C1.25 20.4165 1.3817 20.7344 1.61612 20.9688C1.85054 21.2033 2.16848 21.335 2.5 21.335C5.15125 21.332 7.69306 20.2775 9.56778 18.4027C11.4425 16.528 12.497 13.9862 12.5 11.335V2.58496C12.5 1.92192 12.2366 1.28603 11.7678 0.817194C11.2989 0.348353 10.663 0.0849609 10 0.0849609Z"
                                                                        fill="#4C505B"
                                                                    />
                                                                    <path
                                                                        d="M27.5 0.0849609H22.5C21.1739 0.0849609 19.9021 0.611745 18.9645 1.54943C18.0268 2.48711 17.5 3.75888 17.5 5.08496V10.085C17.5 10.748 17.7634 11.3839 18.2322 11.8527C18.7011 12.3216 19.337 12.585 20 12.585H27.3875C27.0909 14.3306 26.1868 15.9153 24.835 17.059C23.4832 18.2026 21.7707 18.8317 20 18.835C19.6685 18.835 19.3505 18.9667 19.1161 19.2011C18.8817 19.4355 18.75 19.7534 18.75 20.085C18.75 20.4165 18.8817 20.7344 19.1161 20.9688C19.3505 21.2033 19.6685 21.335 20 21.335C22.6513 21.332 25.1931 20.2775 27.0678 18.4027C28.9425 16.528 29.997 13.9862 30 11.335V2.58496C30 1.92192 29.7366 1.28603 29.2678 0.817194C28.7989 0.348353 28.163 0.0849609 27.5 0.0849609Z"
                                                                        fill="#4C505B"
                                                                    />
                                                                </svg>
                                                            </div>
                                                            <div class="it-testimonial-text">
                                                                <h5 class="mb-30">
                                                                    Educeet transformed my learning journey! The
                                                                    platform is intuitive, the courses are top-notch,
                                                                    and the support is exceptional. I’ve gained real
                                                                    skills and confidence. Highly recommended for anyone
                                                                    serious about education.
                                                                </h5>
                                                            </div>
                                                            <div
                                                                class="it-testimonial-bottom d-flex align-items-center justify-content-between"
                                                            >
                                                                <div class="it-testimonial-avatar-info">
                                                                    <h5 class="it-testimonial-avatar-name">
                                                                        Christopher Story
                                                                    </h5>
                                                                    <span>Foundr & CEO UIPainter</span>
                                                                </div>
                                                                <img
                                                                    src="{{ asset('frontAssets/img/testimonial/icon.png') }}"
                                                                    alt=""
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="it-testimonial-item">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-5 col-md-5">
                                                        <div class="it-testimonial-thumb border-radius-20">
                                                            <img
                                                                src="{{ asset('frontAssets/img/testimonial/thumb-1-2.jpg') }}"
                                                                alt=""
                                                            />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7 col-md-7">
                                                        <div class="it-testimonial-content">
                                                            <div class="it-testimonial-quote mb-35">
                                                                <svg
                                                                    width="30"
                                                                    height="22"
                                                                    viewBox="0 0 30 22"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                >
                                                                    <path
                                                                        d="M10 0.0849609H5C3.67392 0.0849609 2.40215 0.611745 1.46447 1.54943C0.526784 2.48711 0 3.75888 0 5.08496L0 10.085C0 10.748 0.263392 11.3839 0.732233 11.8527C1.20107 12.3216 1.83696 12.585 2.5 12.585H9.8875C9.59091 14.3306 8.68685 15.9153 7.33504 17.059C5.98323 18.2026 4.27069 18.8317 2.5 18.835C2.16848 18.835 1.85054 18.9667 1.61612 19.2011C1.3817 19.4355 1.25 19.7534 1.25 20.085C1.25 20.4165 1.3817 20.7344 1.61612 20.9688C1.85054 21.2033 2.16848 21.335 2.5 21.335C5.15125 21.332 7.69306 20.2775 9.56778 18.4027C11.4425 16.528 12.497 13.9862 12.5 11.335V2.58496C12.5 1.92192 12.2366 1.28603 11.7678 0.817194C11.2989 0.348353 10.663 0.0849609 10 0.0849609Z"
                                                                        fill="#4C505B"
                                                                    />
                                                                    <path
                                                                        d="M27.5 0.0849609H22.5C21.1739 0.0849609 19.9021 0.611745 18.9645 1.54943C18.0268 2.48711 17.5 3.75888 17.5 5.08496V10.085C17.5 10.748 17.7634 11.3839 18.2322 11.8527C18.7011 12.3216 19.337 12.585 20 12.585H27.3875C27.0909 14.3306 26.1868 15.9153 24.835 17.059C23.4832 18.2026 21.7707 18.8317 20 18.835C19.6685 18.835 19.3505 18.9667 19.1161 19.2011C18.8817 19.4355 18.75 19.7534 18.75 20.085C18.75 20.4165 18.8817 20.7344 19.1161 20.9688C19.3505 21.2033 19.6685 21.335 20 21.335C22.6513 21.332 25.1931 20.2775 27.0678 18.4027C28.9425 16.528 29.997 13.9862 30 11.335V2.58496C30 1.92192 29.7366 1.28603 29.2678 0.817194C28.7989 0.348353 28.163 0.0849609 27.5 0.0849609Z"
                                                                        fill="#4C505B"
                                                                    />
                                                                </svg>
                                                            </div>
                                                            <div class="it-testimonial-text">
                                                                <h5 class="mb-30">
                                                                    Educeet transformed my learning journey! The
                                                                    platform is intuitive, the courses are top-notch,
                                                                    and the support is exceptional. I’ve gained real
                                                                    skills and confidence. Highly recommended for anyone
                                                                    serious about education.
                                                                </h5>
                                                            </div>
                                                            <div
                                                                class="it-testimonial-bottom d-flex align-items-center justify-content-between"
                                                            >
                                                                <div class="it-testimonial-avatar-info">
                                                                    <h5 class="it-testimonial-avatar-name">
                                                                        Denise Germany
                                                                    </h5>
                                                                    <span>Foundr & CEO UIPainter</span>
                                                                </div>
                                                                <img
                                                                    src="{{ asset('frontAssets/img/testimonial/icon.png') }}"
                                                                    alt=""
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="it-testimonial-item">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-5 col-md-5">
                                                        <div class="it-testimonial-thumb border-radius-20">
                                                            <img
                                                                src="{{ asset('frontAssets/img/testimonial/thumb-1-1.jpg') }}"
                                                                alt=""
                                                            />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7 col-md-7">
                                                        <div class="it-testimonial-content">
                                                            <div class="it-testimonial-quote mb-35">
                                                                <svg
                                                                    width="30"
                                                                    height="22"
                                                                    viewBox="0 0 30 22"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                >
                                                                    <path
                                                                        d="M10 0.0849609H5C3.67392 0.0849609 2.40215 0.611745 1.46447 1.54943C0.526784 2.48711 0 3.75888 0 5.08496L0 10.085C0 10.748 0.263392 11.3839 0.732233 11.8527C1.20107 12.3216 1.83696 12.585 2.5 12.585H9.8875C9.59091 14.3306 8.68685 15.9153 7.33504 17.059C5.98323 18.2026 4.27069 18.8317 2.5 18.835C2.16848 18.835 1.85054 18.9667 1.61612 19.2011C1.3817 19.4355 1.25 19.7534 1.25 20.085C1.25 20.4165 1.3817 20.7344 1.61612 20.9688C1.85054 21.2033 2.16848 21.335 2.5 21.335C5.15125 21.332 7.69306 20.2775 9.56778 18.4027C11.4425 16.528 12.497 13.9862 12.5 11.335V2.58496C12.5 1.92192 12.2366 1.28603 11.7678 0.817194C11.2989 0.348353 10.663 0.0849609 10 0.0849609Z"
                                                                        fill="#4C505B"
                                                                    />
                                                                    <path
                                                                        d="M27.5 0.0849609H22.5C21.1739 0.0849609 19.9021 0.611745 18.9645 1.54943C18.0268 2.48711 17.5 3.75888 17.5 5.08496V10.085C17.5 10.748 17.7634 11.3839 18.2322 11.8527C18.7011 12.3216 19.337 12.585 20 12.585H27.3875C27.0909 14.3306 26.1868 15.9153 24.835 17.059C23.4832 18.2026 21.7707 18.8317 20 18.835C19.6685 18.835 19.3505 18.9667 19.1161 19.2011C18.8817 19.4355 18.75 19.7534 18.75 20.085C18.75 20.4165 18.8817 20.7344 19.1161 20.9688C19.3505 21.2033 19.6685 21.335 20 21.335C22.6513 21.332 25.1931 20.2775 27.0678 18.4027C28.9425 16.528 29.997 13.9862 30 11.335V2.58496C30 1.92192 29.7366 1.28603 29.2678 0.817194C28.7989 0.348353 28.163 0.0849609 27.5 0.0849609Z"
                                                                        fill="#4C505B"
                                                                    />
                                                                </svg>
                                                            </div>
                                                            <div class="it-testimonial-text">
                                                                <h5 class="mb-30">
                                                                    Educeet transformed my learning journey! The
                                                                    platform is intuitive, the courses are top-notch,
                                                                    and the support is exceptional. I’ve gained real
                                                                    skills and confidence. Highly recommended for anyone
                                                                    serious about education.
                                                                </h5>
                                                            </div>
                                                            <div
                                                                class="it-testimonial-bottom d-flex align-items-center justify-content-between"
                                                            >
                                                                <div class="it-testimonial-avatar-info">
                                                                    <h5 class="it-testimonial-avatar-name">
                                                                        Michelle Logan
                                                                    </h5>
                                                                    <span>Foundr & CEO UIPainter</span>
                                                                </div>
                                                                <img
                                                                    src="{{ asset('frontAssets/img/testimonial/icon.png') }}"
                                                                    alt=""
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="it-testimonial-item">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-5 col-md-5">
                                                        <div class="it-testimonial-thumb border-radius-20">
                                                            <img
                                                                src="{{ asset('frontAssets/img/testimonial/thumb-1-3.jpg') }}"
                                                                alt=""
                                                            />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7 col-md-7">
                                                        <div class="it-testimonial-content">
                                                            <div class="it-testimonial-quote mb-35">
                                                                <svg
                                                                    width="30"
                                                                    height="22"
                                                                    viewBox="0 0 30 22"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                >
                                                                    <path
                                                                        d="M10 0.0849609H5C3.67392 0.0849609 2.40215 0.611745 1.46447 1.54943C0.526784 2.48711 0 3.75888 0 5.08496L0 10.085C0 10.748 0.263392 11.3839 0.732233 11.8527C1.20107 12.3216 1.83696 12.585 2.5 12.585H9.8875C9.59091 14.3306 8.68685 15.9153 7.33504 17.059C5.98323 18.2026 4.27069 18.8317 2.5 18.835C2.16848 18.835 1.85054 18.9667 1.61612 19.2011C1.3817 19.4355 1.25 19.7534 1.25 20.085C1.25 20.4165 1.3817 20.7344 1.61612 20.9688C1.85054 21.2033 2.16848 21.335 2.5 21.335C5.15125 21.332 7.69306 20.2775 9.56778 18.4027C11.4425 16.528 12.497 13.9862 12.5 11.335V2.58496C12.5 1.92192 12.2366 1.28603 11.7678 0.817194C11.2989 0.348353 10.663 0.0849609 10 0.0849609Z"
                                                                        fill="#4C505B"
                                                                    />
                                                                    <path
                                                                        d="M27.5 0.0849609H22.5C21.1739 0.0849609 19.9021 0.611745 18.9645 1.54943C18.0268 2.48711 17.5 3.75888 17.5 5.08496V10.085C17.5 10.748 17.7634 11.3839 18.2322 11.8527C18.7011 12.3216 19.337 12.585 20 12.585H27.3875C27.0909 14.3306 26.1868 15.9153 24.835 17.059C23.4832 18.2026 21.7707 18.8317 20 18.835C19.6685 18.835 19.3505 18.9667 19.1161 19.2011C18.8817 19.4355 18.75 19.7534 18.75 20.085C18.75 20.4165 18.8817 20.7344 19.1161 20.9688C19.3505 21.2033 19.6685 21.335 20 21.335C22.6513 21.332 25.1931 20.2775 27.0678 18.4027C28.9425 16.528 29.997 13.9862 30 11.335V2.58496C30 1.92192 29.7366 1.28603 29.2678 0.817194C28.7989 0.348353 28.163 0.0849609 27.5 0.0849609Z"
                                                                        fill="#4C505B"
                                                                    />
                                                                </svg>
                                                            </div>
                                                            <div class="it-testimonial-text">
                                                                <h5 class="mb-30">
                                                                    Educeet transformed my learning journey! The
                                                                    platform is intuitive, the courses are top-notch,
                                                                    and the support is exceptional. I’ve gained real
                                                                    skills and confidence. Highly recommended for anyone
                                                                    serious about education.
                                                                </h5>
                                                            </div>
                                                            <div
                                                                class="it-testimonial-bottom d-flex align-items-center justify-content-between"
                                                            >
                                                                <div class="it-testimonial-avatar-info">
                                                                    <h5 class="it-testimonial-avatar-name">
                                                                        Christopher Story
                                                                    </h5>
                                                                    <span>Foundr & CEO UIPainter</span>
                                                                </div>
                                                                <img
                                                                    src="{{ asset('frontAssets/img/testimonial/icon.png') }}"
                                                                    alt=""
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="it-testimonial-item">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-5 col-md-5">
                                                        <div class="it-testimonial-thumb border-radius-20">
                                                            <img
                                                                src="{{ asset('frontAssets/img/testimonial/thumb-1-4.jpg') }}"
                                                                alt=""
                                                            />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7 col-md-7">
                                                        <div class="it-testimonial-content">
                                                            <div class="it-testimonial-quote mb-35">
                                                                <svg
                                                                    width="30"
                                                                    height="22"
                                                                    viewBox="0 0 30 22"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                >
                                                                    <path
                                                                        d="M10 0.0849609H5C3.67392 0.0849609 2.40215 0.611745 1.46447 1.54943C0.526784 2.48711 0 3.75888 0 5.08496L0 10.085C0 10.748 0.263392 11.3839 0.732233 11.8527C1.20107 12.3216 1.83696 12.585 2.5 12.585H9.8875C9.59091 14.3306 8.68685 15.9153 7.33504 17.059C5.98323 18.2026 4.27069 18.8317 2.5 18.835C2.16848 18.835 1.85054 18.9667 1.61612 19.2011C1.3817 19.4355 1.25 19.7534 1.25 20.085C1.25 20.4165 1.3817 20.7344 1.61612 20.9688C1.85054 21.2033 2.16848 21.335 2.5 21.335C5.15125 21.332 7.69306 20.2775 9.56778 18.4027C11.4425 16.528 12.497 13.9862 12.5 11.335V2.58496C12.5 1.92192 12.2366 1.28603 11.7678 0.817194C11.2989 0.348353 10.663 0.0849609 10 0.0849609Z"
                                                                        fill="#4C505B"
                                                                    />
                                                                    <path
                                                                        d="M27.5 0.0849609H22.5C21.1739 0.0849609 19.9021 0.611745 18.9645 1.54943C18.0268 2.48711 17.5 3.75888 17.5 5.08496V10.085C17.5 10.748 17.7634 11.3839 18.2322 11.8527C18.7011 12.3216 19.337 12.585 20 12.585H27.3875C27.0909 14.3306 26.1868 15.9153 24.835 17.059C23.4832 18.2026 21.7707 18.8317 20 18.835C19.6685 18.835 19.3505 18.9667 19.1161 19.2011C18.8817 19.4355 18.75 19.7534 18.75 20.085C18.75 20.4165 18.8817 20.7344 19.1161 20.9688C19.3505 21.2033 19.6685 21.335 20 21.335C22.6513 21.332 25.1931 20.2775 27.0678 18.4027C28.9425 16.528 29.997 13.9862 30 11.335V2.58496C30 1.92192 29.7366 1.28603 29.2678 0.817194C28.7989 0.348353 28.163 0.0849609 27.5 0.0849609Z"
                                                                        fill="#4C505B"
                                                                    />
                                                                </svg>
                                                            </div>
                                                            <div class="it-testimonial-text">
                                                                <h5 class="mb-30">
                                                                    Educeet transformed my learning journey! The
                                                                    platform is intuitive, the courses are top-notch,
                                                                    and the support is exceptional. I’ve gained real
                                                                    skills and confidence. Highly recommended for anyone
                                                                    serious about education.
                                                                </h5>
                                                            </div>
                                                            <div
                                                                class="it-testimonial-bottom d-flex align-items-center justify-content-between"
                                                            >
                                                                <div class="it-testimonial-avatar-info">
                                                                    <h5 class="it-testimonial-avatar-name">
                                                                        Douglas Taylor
                                                                    </h5>
                                                                    <span>Foundr & CEO UIPainter</span>
                                                                </div>
                                                                <img
                                                                    src="{{ asset('frontAssets/img/testimonial/icon.png') }}"
                                                                    alt=""
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="it-testimonial-arrow-wrap">
                                    <button class="arrow-prev">
                                        <svg
                                            width="21"
                                            height="21"
                                            viewBox="0 0 21 21"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M8.81934 0.0849609C8.5201 0.0849894 8.32582 0.116974 8.23633 0.180664C8.14697 0.244474 8.07504 0.390586 8.02246 0.619141C7.94886 1.12972 7.813 1.65424 7.61328 2.19141C7.05586 3.90448 6.13205 5.43175 4.84375 6.77246C3.55528 8.11319 2.0533 9.07686 0.338867 9.66211C0.113122 9.74189 0.000144992 9.8831 0 10.085C8.0099e-05 10.2869 0.11313 10.428 0.338867 10.5078C2.05323 11.093 3.55532 12.0568 4.84375 13.3975C6.13205 14.7382 7.05586 16.2654 7.61328 17.9785C7.78677 18.5157 7.92256 19.0267 8.02246 19.5107C8.07505 19.7661 8.14694 19.9264 8.23633 19.9902C8.32595 20.0538 8.52042 20.0849 8.81934 20.085C9.35038 20.085 9.61705 19.944 9.61719 19.6621C9.6169 19.5869 9.53985 19.2677 9.3877 18.7051C8.6041 15.5128 6.85008 12.8947 4.12598 10.8516H21V9.31934H4.12598C5.91933 7.9679 7.30756 6.33338 8.29102 4.41797C8.92196 3.1891 9.33728 1.97626 9.53711 0.779297C9.53712 0.726125 9.54576 0.672313 9.56152 0.619141C9.57193 0.57166 9.57712 0.534295 9.57715 0.507812C9.57693 0.226057 9.324 0.0849609 8.81934 0.0849609Z"
                                                fill="currentcolor"
                                            />
                                            <path
                                                d="M8.81934 0.0849609C8.5201 0.0849894 8.32582 0.116974 8.23633 0.180664C8.14697 0.244474 8.07504 0.390586 8.02246 0.619141C7.94886 1.12972 7.813 1.65424 7.61328 2.19141C7.05586 3.90448 6.13205 5.43175 4.84375 6.77246C3.55528 8.11319 2.0533 9.07686 0.338867 9.66211C0.113122 9.74189 0.000144992 9.8831 0 10.085C8.0099e-05 10.2869 0.11313 10.428 0.338867 10.5078C2.05323 11.093 3.55532 12.0568 4.84375 13.3975C6.13205 14.7382 7.05586 16.2654 7.61328 17.9785C7.78677 18.5157 7.92256 19.0267 8.02246 19.5107C8.07505 19.7661 8.14694 19.9264 8.23633 19.9902C8.32595 20.0538 8.52042 20.0849 8.81934 20.085C9.35038 20.085 9.61705 19.944 9.61719 19.6621C9.6169 19.5869 9.53985 19.2677 9.3877 18.7051C8.6041 15.5128 6.85008 12.8947 4.12598 10.8516H21V9.31934H4.12598C5.91933 7.9679 7.30756 6.33338 8.29102 4.41797C8.92196 3.1891 9.33728 1.97626 9.53711 0.779297C9.53712 0.726125 9.54576 0.672313 9.56152 0.619141C9.57193 0.57166 9.57712 0.534295 9.57715 0.507812C9.57693 0.226057 9.324 0.0849609 8.81934 0.0849609Z"
                                                stroke="#03594E"
                                            />
                                        </svg>
                                    </button>
                                    <button class="arrow-next">
                                        <svg
                                            width="21"
                                            height="21"
                                            viewBox="0 0 21 21"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M12.1807 0.0849609C12.4799 0.0849894 12.6742 0.116974 12.7637 0.180664C12.853 0.244474 12.925 0.390586 12.9775 0.619141C13.0511 1.12972 13.187 1.65424 13.3867 2.19141C13.9441 3.90448 14.868 5.43175 16.1562 6.77246C17.4447 8.11319 18.9467 9.07686 20.6611 9.66211C20.8869 9.74189 20.9999 9.8831 21 10.085C20.9999 10.2869 20.8869 10.428 20.6611 10.5078C18.9468 11.093 17.4447 12.0568 16.1562 13.3975C14.868 14.7382 13.9441 16.2654 13.3867 17.9785C13.2132 18.5157 13.0774 19.0267 12.9775 19.5107C12.925 19.7661 12.8531 19.9264 12.7637 19.9902C12.6741 20.0538 12.4796 20.0849 12.1807 20.085C11.6496 20.085 11.3829 19.944 11.3828 19.6621C11.3831 19.5869 11.4602 19.2677 11.6123 18.7051C12.3959 15.5128 14.1499 12.8947 16.874 10.8516H0V9.31934H16.874C15.0807 7.9679 13.6924 6.33338 12.709 4.41797C12.078 3.1891 11.6627 1.97626 11.4629 0.779297C11.4629 0.726125 11.4542 0.672313 11.4385 0.619141C11.4281 0.57166 11.4229 0.534295 11.4229 0.507812C11.4231 0.226057 11.676 0.0849609 12.1807 0.0849609Z"
                                                fill="currentcolor"
                                            />
                                            <path
                                                d="M12.1807 0.0849609C12.4799 0.0849894 12.6742 0.116974 12.7637 0.180664C12.853 0.244474 12.925 0.390586 12.9775 0.619141C13.0511 1.12972 13.187 1.65424 13.3867 2.19141C13.9441 3.90448 14.868 5.43175 16.1562 6.77246C17.4447 8.11319 18.9467 9.07686 20.6611 9.66211C20.8869 9.74189 20.9999 9.8831 21 10.085C20.9999 10.2869 20.8869 10.428 20.6611 10.5078C18.9468 11.093 17.4447 12.0568 16.1562 13.3975C14.868 14.7382 13.9441 16.2654 13.3867 17.9785C13.2132 18.5157 13.0774 19.0267 12.9775 19.5107C12.925 19.7661 12.8531 19.9264 12.7637 19.9902C12.6741 20.0538 12.4796 20.0849 12.1807 20.085C11.6496 20.085 11.3829 19.944 11.3828 19.6621C11.3831 19.5869 11.4602 19.2677 11.6123 18.7051C12.3959 15.5128 14.1499 12.8947 16.874 10.8516H0V9.31934H16.874C15.0807 7.9679 13.6924 6.33338 12.709 4.41797C12.078 3.1891 11.6627 1.97626 11.4629 0.779297C11.4629 0.726125 11.4542 0.672313 11.4385 0.619141C11.4281 0.57166 11.4229 0.534295 11.4229 0.507812C11.4231 0.226057 11.676 0.0849609 12.1807 0.0849609Z"
                                                stroke="#03594E"
                                            />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- brand-area-start -->
            <div class="it-brand-3-area gray-bg z-index-1 pt-130 pb-180">
                <img
                    class="it-brand-3-shape-1 d-none d-xl-block"
                    src="{{ asset('frontAssets/img/shape/brand-3-1.png') }}"
                    alt=""
                />
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 wow itfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">
                            <div class="it-brand-3-left">
                                <div class="it-brand-section-title-box mb-35">
                                    <span class="it-section-subtitle">
                                        <svg
                                            width="19"
                                            height="14"
                                            viewBox="0 0 19 14"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M17.5 2.24284H16.6667V1.40951C16.6667 1.18849 16.5789 0.97653 16.4226 0.82025C16.2663 0.663969 16.0543 0.576172 15.8333 0.576172C13.3333 0.576172 10.5708 0.709505 9.16667 2.04284C7.7625 0.709505 5 0.576172 2.5 0.576172C2.27899 0.576172 2.06702 0.663969 1.91074 0.82025C1.75446 0.97653 1.66667 1.18849 1.66667 1.40951V2.24284H0.833333C0.61232 2.24284 0.400358 2.33064 0.244078 2.48692C0.0877973 2.6432 0 2.85516 0 3.07617V13.0762C0 13.2972 0.0877973 13.5091 0.244078 13.6654C0.400358 13.8217 0.61232 13.9095 0.833333 13.9095H17.5C17.721 13.9095 17.933 13.8217 18.0893 13.6654C18.2455 13.5091 18.3333 13.2972 18.3333 13.0762V3.07617C18.3333 2.85516 18.2455 2.6432 18.0893 2.48692C17.933 2.33064 17.721 2.24284 17.5 2.24284ZM15.8333 1.40951V11.4095C13.5542 11.4095 11.0708 11.5178 9.58333 12.5345V2.80534C10.675 1.53034 13.375 1.40951 15.8333 1.40951ZM8.75 2.80534V12.5345C7.2625 11.5178 4.77917 11.4095 2.5 11.4095V1.40951C4.95833 1.40951 7.65833 1.53034 8.75 2.80534ZM0.833333 3.07617H1.66667V11.4095C1.66667 11.6305 1.75446 11.8425 1.91074 11.9988C2.06702 12.155 2.27899 12.2428 2.5 12.2428C4.53333 12.2428 6.72917 12.3262 8.04583 13.0762H0.833333V3.07617ZM17.5 13.0762H10.2875C11.6042 12.3262 13.8 12.2428 15.8333 12.2428C16.0543 12.2428 16.2663 12.155 16.4226 11.9988C16.5789 11.8425 16.6667 11.6305 16.6667 11.4095V3.07617H17.5V13.0762Z"
                                                fill="#03594E"
                                            />
                                        </svg>
                                        Our Partner</span
                                    >
                                    <h4 class="it-section-title">
                                        The trusted market leader <br />in talent transformation <br />through education
                                    </h4>
                                </div>
                                <div class="it-brand-btn">
                                    <a href="#" class="it-btn-yellow theme-bg border-radius-100">
                                        <span>
                                            <span class="text-1">Start Learning Now</span>
                                            <span class="text-2">Start Learning Now</span>
                                        </span>
                                        <i>
                                            <svg
                                                width="16"
                                                height="15"
                                                viewBox="0 0 16 15"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M15.0544 8.1364C15.4058 7.78492 15.4058 7.21508 15.0544 6.8636L9.3268 1.13604C8.97533 0.784567 8.40548 0.784567 8.05401 1.13604C7.70254 1.48751 7.70254 2.05736 8.05401 2.40883L13.1452 7.5L8.05401 12.5912C7.70254 12.9426 7.70254 13.5125 8.05401 13.864C8.40548 14.2154 8.97533 14.2154 9.3268 13.864L15.0544 8.1364ZM0.417969 7.5V8.4H14.418V7.5V6.6H0.417969V7.5Z"
                                                    fill="currentcolor"
                                                />
                                            </svg>
                                        </i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 wow itfadeRight" data-wow-duration=".9s" data-wow-delay=".7s">
                            <div class="it-brand-3-wrap">
                                <div class="row gx-0 row-cols-xl-3">
                                    <div class="col">
                                        <div class="it-brand-3-item style-1">
                                            <img src="{{ asset('frontAssets/img/brand/brand-1-1.png') }}" alt="" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="it-brand-3-item style-2 text-center">
                                            <img src="{{ asset('frontAssets/img/brand/brand-1-2.png') }}" alt="" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="it-brand-3-item style-3 text-end">
                                            <img src="{{ asset('frontAssets/img/brand/brand-1-4.png') }}" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row gx-0 row-cols-xl-3">
                                    <div class="col">
                                        <div class="it-brand-3-item style-1">
                                            <img src="{{ asset('frontAssets/img/brand/brand-1-3.png') }}" alt="" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="it-brand-3-item style-2 text-center">
                                            <img src="{{ asset('frontAssets/img/brand/brand-1-5.png') }}" alt="" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="it-brand-3-item style-3 text-end">
                                            <img src="{{ asset('frontAssets/img/brand/brand-1-6.png') }}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- blog-area-start -->
            <section class="it-blog-2-area z-index-1 pt-130 pb-130 fix">
                <img class="it-blog-shape-1" src="{{ asset('frontAssets/img/shape/blog-3-1.png') }}" alt="" />
                <img
                    class="it-blog-shape-2 d-none d-lg-block"
                    data-parallax='{"x": 200, "smoothness": 30}'
                    src="{{ asset('frontAssets/img/shape/blog-1-2.png') }}"
                    alt=""
                />
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="it-blog-section-title-box text-center mb-65">
                                <span class="it-section-subtitle">
                                    <svg
                                        width="19"
                                        height="14"
                                        viewBox="0 0 19 14"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M17.5 2.24284H16.6667V1.40951C16.6667 1.18849 16.5789 0.97653 16.4226 0.82025C16.2663 0.663969 16.0543 0.576172 15.8333 0.576172C13.3333 0.576172 10.5708 0.709505 9.16667 2.04284C7.7625 0.709505 5 0.576172 2.5 0.576172C2.27899 0.576172 2.06702 0.663969 1.91074 0.82025C1.75446 0.97653 1.66667 1.18849 1.66667 1.40951V2.24284H0.833333C0.61232 2.24284 0.400358 2.33064 0.244078 2.48692C0.0877973 2.6432 0 2.85516 0 3.07617V13.0762C0 13.2972 0.0877973 13.5091 0.244078 13.6654C0.400358 13.8217 0.61232 13.9095 0.833333 13.9095H17.5C17.721 13.9095 17.933 13.8217 18.0893 13.6654C18.2455 13.5091 18.3333 13.2972 18.3333 13.0762V3.07617C18.3333 2.85516 18.2455 2.6432 18.0893 2.48692C17.933 2.33064 17.721 2.24284 17.5 2.24284ZM15.8333 1.40951V11.4095C13.5542 11.4095 11.0708 11.5178 9.58333 12.5345V2.80534C10.675 1.53034 13.375 1.40951 15.8333 1.40951ZM8.75 2.80534V12.5345C7.2625 11.5178 4.77917 11.4095 2.5 11.4095V1.40951C4.95833 1.40951 7.65833 1.53034 8.75 2.80534ZM0.833333 3.07617H1.66667V11.4095C1.66667 11.6305 1.75446 11.8425 1.91074 11.9988C2.06702 12.155 2.27899 12.2428 2.5 12.2428C4.53333 12.2428 6.72917 12.3262 8.04583 13.0762H0.833333V3.07617ZM17.5 13.0762H10.2875C11.6042 12.3262 13.8 12.2428 15.8333 12.2428C16.0543 12.2428 16.2663 12.155 16.4226 11.9988C16.5789 11.8425 16.6667 11.6305 16.6667 11.4095V3.07617H17.5V13.0762Z"
                                            fill="#03594E"
                                        />
                                    </svg>
                                    News Post</span
                                >
                                <h4 class="it-section-title">Latest Insights, Tips, and <br />Updates from Educeet</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-35">
                        <div
                            class="col-xl-4 col-lg-6 col-md-6 wow itfadeUp"
                            data-wow-duration=".9s"
                            data-wow-delay=".3s"
                        >
                            <div class="it-blog-2-item mb-35">
                                <div class="it-blog-thumb p-relative">
                                    <img class="w-100" src="{{ asset('frontAssets/img/blog/blog-3-1.jpg') }}" alt="" />
                                </div>
                                <div class="it-blog-2-content z-index-2">
                                    <div class="it-blog-meta mb-25">
                                        <span>
                                            <svg
                                                width="18"
                                                height="19"
                                                viewBox="0 0 18 19"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <g clip-path="url(#clip0_432_973)">
                                                    <path
                                                        d="M14.25 1.60596H13.5V0.855957C13.5 0.657045 13.421 0.466279 13.2803 0.325627C13.1397 0.184975 12.9489 0.105957 12.75 0.105957C12.5511 0.105957 12.3603 0.184975 12.2197 0.325627C12.079 0.466279 12 0.657045 12 0.855957V1.60596H6V0.855957C6 0.657045 5.92098 0.466279 5.78033 0.325627C5.63968 0.184975 5.44891 0.105957 5.25 0.105957C5.05109 0.105957 4.86032 0.184975 4.71967 0.325627C4.57902 0.466279 4.5 0.657045 4.5 0.855957V1.60596H3.75C2.7558 1.60715 1.80267 2.00262 1.09966 2.70562C0.396661 3.40863 0.00119089 4.36176 0 5.35596L0 14.356C0.00119089 15.3502 0.396661 16.3033 1.09966 17.0063C1.80267 17.7093 2.7558 18.1048 3.75 18.106H14.25C15.2442 18.1048 16.1973 17.7093 16.9003 17.0063C17.6033 16.3033 17.9988 15.3502 18 14.356V5.35596C17.9988 4.36176 17.6033 3.40863 16.9003 2.70562C16.1973 2.00262 15.2442 1.60715 14.25 1.60596ZM1.5 5.35596C1.5 4.75922 1.73705 4.18692 2.15901 3.76497C2.58097 3.34301 3.15326 3.10596 3.75 3.10596H14.25C14.8467 3.10596 15.419 3.34301 15.841 3.76497C16.2629 4.18692 16.5 4.75922 16.5 5.35596V6.10596H1.5V5.35596ZM14.25 16.606H3.75C3.15326 16.606 2.58097 16.3689 2.15901 15.9469C1.73705 15.525 1.5 14.9527 1.5 14.356V7.60596H16.5V14.356C16.5 14.9527 16.2629 15.525 15.841 15.9469C15.419 16.3689 14.8467 16.606 14.25 16.606Z"
                                                        fill="currentcolor"
                                                    />
                                                    <path
                                                        d="M9 12.481C9.62132 12.481 10.125 11.9773 10.125 11.356C10.125 10.7346 9.62132 10.231 9 10.231C8.37868 10.231 7.875 10.7346 7.875 11.356C7.875 11.9773 8.37868 12.481 9 12.481Z"
                                                        fill="currentcolor"
                                                    />
                                                    <path
                                                        d="M5.25 12.481C5.87132 12.481 6.375 11.9773 6.375 11.356C6.375 10.7346 5.87132 10.231 5.25 10.231C4.62868 10.231 4.125 10.7346 4.125 11.356C4.125 11.9773 4.62868 12.481 5.25 12.481Z"
                                                        fill="currentcolor"
                                                    />
                                                    <path
                                                        d="M12.75 12.481C13.3713 12.481 13.875 11.9773 13.875 11.356C13.875 10.7346 13.3713 10.231 12.75 10.231C12.1287 10.231 11.625 10.7346 11.625 11.356C11.625 11.9773 12.1287 12.481 12.75 12.481Z"
                                                        fill="currentcolor"
                                                    />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_432_9732">
                                                        <rect
                                                            width="18"
                                                            height="18"
                                                            fill="white"
                                                            transform="translate(0 0.105957)"
                                                        />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            Oct, 23, 2025
                                        </span>
                                        <span>
                                            <svg
                                                width="20"
                                                height="21"
                                                viewBox="0 0 20 21"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M10 0.105957C4.48583 0.105957 0 4.59179 0 10.106C0 15.6201 4.48583 20.106 10 20.106C15.5142 20.106 20 15.6201 20 10.106C20 4.59179 15.5142 0.105957 10 0.105957ZM6.66667 17.7426V17.606C6.66667 15.7676 8.16167 14.2726 10 14.2726C11.8383 14.2726 13.3333 15.7676 13.3333 17.606V17.7426C12.3117 18.1901 11.185 18.4393 10 18.4393C8.815 18.4393 7.68833 18.1901 6.66667 17.7426ZM14.9375 16.8151C14.5575 14.4326 12.4883 12.606 10 12.606C7.51167 12.606 5.44333 14.4326 5.0625 16.8151C3.00417 15.296 1.66667 12.8543 1.66667 10.106C1.66667 5.51096 5.405 1.77262 10 1.77262C14.595 1.77262 18.3333 5.51096 18.3333 10.106C18.3333 12.8543 16.9958 15.296 14.9375 16.8151ZM10 4.27262C8.16167 4.27262 6.66667 5.76762 6.66667 7.60596C6.66667 9.44429 8.16167 10.9393 10 10.9393C11.8383 10.9393 13.3333 9.44429 13.3333 7.60596C13.3333 5.76762 11.8383 4.27262 10 4.27262ZM10 9.27262C9.08083 9.27262 8.33333 8.52512 8.33333 7.60596C8.33333 6.68679 9.08083 5.93929 10 5.93929C10.9192 5.93929 11.6667 6.68679 11.6667 7.60596C11.6667 8.52512 10.9192 9.27262 10 9.27262Z"
                                                    fill="currentcolor"
                                                />
                                            </svg>
                                            Roboth smith
                                        </span>
                                    </div>
                                    <h5 class="it-blog-title mb-15">
                                        <a class="border-line" href="blog-details-left-sidebar.html"
                                            >How to Avoid the Biggest College Admission Mistakes</a
                                        >
                                    </h5>
                                    <div class="it-blog-btn">
                                        <a href="blog-details-left-sidebar.html" class="it-btn-yellow">
                                            <span>
                                                <span class="text-1">More Details</span>
                                                <span class="text-2">More Details</span>
                                            </span>
                                            <i>
                                                <svg
                                                    width="15"
                                                    height="15"
                                                    viewBox="0 0 15 15"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        d="M14.6364 8.24235C14.9879 7.89088 14.9879 7.32103 14.6364 6.96956L8.90883 1.242C8.55736 0.890524 7.98751 0.890524 7.63604 1.242C7.28457 1.59347 7.28457 2.16332 7.63604 2.51479L12.7272 7.60596L7.63604 12.6971C7.28457 13.0486 7.28457 13.6184 7.63604 13.9699C7.98751 14.3214 8.55736 14.3214 8.90883 13.9699L14.6364 8.24235ZM0 7.60596V8.50596H14V7.60596V6.70596H0V7.60596Z"
                                                        fill="currentcolor"
                                                    />
                                                </svg>
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-xl-4 col-lg-6 col-md-6 wow itfadeUp"
                            data-wow-duration=".9s"
                            data-wow-delay=".5s"
                        >
                            <div class="it-blog-2-item mb-35">
                                <div class="it-blog-thumb p-relative">
                                    <img class="w-100" src="{{ asset('frontAssets/img/blog/blog-3-2.jpg') }}" alt="" />
                                </div>
                                <div class="it-blog-2-content z-index-2">
                                    <div class="it-blog-meta mb-25">
                                        <span>
                                            <svg
                                                width="18"
                                                height="19"
                                                viewBox="0 0 18 19"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <g clip-path="url(#clip0_432_973)">
                                                    <path
                                                        d="M14.25 1.60596H13.5V0.855957C13.5 0.657045 13.421 0.466279 13.2803 0.325627C13.1397 0.184975 12.9489 0.105957 12.75 0.105957C12.5511 0.105957 12.3603 0.184975 12.2197 0.325627C12.079 0.466279 12 0.657045 12 0.855957V1.60596H6V0.855957C6 0.657045 5.92098 0.466279 5.78033 0.325627C5.63968 0.184975 5.44891 0.105957 5.25 0.105957C5.05109 0.105957 4.86032 0.184975 4.71967 0.325627C4.57902 0.466279 4.5 0.657045 4.5 0.855957V1.60596H3.75C2.7558 1.60715 1.80267 2.00262 1.09966 2.70562C0.396661 3.40863 0.00119089 4.36176 0 5.35596L0 14.356C0.00119089 15.3502 0.396661 16.3033 1.09966 17.0063C1.80267 17.7093 2.7558 18.1048 3.75 18.106H14.25C15.2442 18.1048 16.1973 17.7093 16.9003 17.0063C17.6033 16.3033 17.9988 15.3502 18 14.356V5.35596C17.9988 4.36176 17.6033 3.40863 16.9003 2.70562C16.1973 2.00262 15.2442 1.60715 14.25 1.60596ZM1.5 5.35596C1.5 4.75922 1.73705 4.18692 2.15901 3.76497C2.58097 3.34301 3.15326 3.10596 3.75 3.10596H14.25C14.8467 3.10596 15.419 3.34301 15.841 3.76497C16.2629 4.18692 16.5 4.75922 16.5 5.35596V6.10596H1.5V5.35596ZM14.25 16.606H3.75C3.15326 16.606 2.58097 16.3689 2.15901 15.9469C1.73705 15.525 1.5 14.9527 1.5 14.356V7.60596H16.5V14.356C16.5 14.9527 16.2629 15.525 15.841 15.9469C15.419 16.3689 14.8467 16.606 14.25 16.606Z"
                                                        fill="currentcolor"
                                                    />
                                                    <path
                                                        d="M9 12.481C9.62132 12.481 10.125 11.9773 10.125 11.356C10.125 10.7346 9.62132 10.231 9 10.231C8.37868 10.231 7.875 10.7346 7.875 11.356C7.875 11.9773 8.37868 12.481 9 12.481Z"
                                                        fill="currentcolor"
                                                    />
                                                    <path
                                                        d="M5.25 12.481C5.87132 12.481 6.375 11.9773 6.375 11.356C6.375 10.7346 5.87132 10.231 5.25 10.231C4.62868 10.231 4.125 10.7346 4.125 11.356C4.125 11.9773 4.62868 12.481 5.25 12.481Z"
                                                        fill="currentcolor"
                                                    />
                                                    <path
                                                        d="M12.75 12.481C13.3713 12.481 13.875 11.9773 13.875 11.356C13.875 10.7346 13.3713 10.231 12.75 10.231C12.1287 10.231 11.625 10.7346 11.625 11.356C11.625 11.9773 12.1287 12.481 12.75 12.481Z"
                                                        fill="currentcolor"
                                                    />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_432_9731">
                                                        <rect
                                                            width="18"
                                                            height="18"
                                                            fill="white"
                                                            transform="translate(0 0.105957)"
                                                        />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            Oct, 23, 2025
                                        </span>
                                        <span>
                                            <svg
                                                width="20"
                                                height="21"
                                                viewBox="0 0 20 21"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M10 0.105957C4.48583 0.105957 0 4.59179 0 10.106C0 15.6201 4.48583 20.106 10 20.106C15.5142 20.106 20 15.6201 20 10.106C20 4.59179 15.5142 0.105957 10 0.105957ZM6.66667 17.7426V17.606C6.66667 15.7676 8.16167 14.2726 10 14.2726C11.8383 14.2726 13.3333 15.7676 13.3333 17.606V17.7426C12.3117 18.1901 11.185 18.4393 10 18.4393C8.815 18.4393 7.68833 18.1901 6.66667 17.7426ZM14.9375 16.8151C14.5575 14.4326 12.4883 12.606 10 12.606C7.51167 12.606 5.44333 14.4326 5.0625 16.8151C3.00417 15.296 1.66667 12.8543 1.66667 10.106C1.66667 5.51096 5.405 1.77262 10 1.77262C14.595 1.77262 18.3333 5.51096 18.3333 10.106C18.3333 12.8543 16.9958 15.296 14.9375 16.8151ZM10 4.27262C8.16167 4.27262 6.66667 5.76762 6.66667 7.60596C6.66667 9.44429 8.16167 10.9393 10 10.9393C11.8383 10.9393 13.3333 9.44429 13.3333 7.60596C13.3333 5.76762 11.8383 4.27262 10 4.27262ZM10 9.27262C9.08083 9.27262 8.33333 8.52512 8.33333 7.60596C8.33333 6.68679 9.08083 5.93929 10 5.93929C10.9192 5.93929 11.6667 6.68679 11.6667 7.60596C11.6667 8.52512 10.9192 9.27262 10 9.27262Z"
                                                    fill="currentcolor"
                                                />
                                            </svg>
                                            Roboth smith
                                        </span>
                                    </div>
                                    <h5 class="it-blog-title mb-15">
                                        <a class="border-line" href="blog-details-left-sidebar.html"
                                            >How Digital Platforms Are Shaping Business Schools</a
                                        >
                                    </h5>
                                    <div class="it-blog-btn">
                                        <a href="blog-details-left-sidebar.html" class="it-btn-yellow">
                                            <span>
                                                <span class="text-1">More Details</span>
                                                <span class="text-2">More Details</span>
                                            </span>
                                            <i>
                                                <svg
                                                    width="15"
                                                    height="15"
                                                    viewBox="0 0 15 15"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        d="M14.6364 8.24235C14.9879 7.89088 14.9879 7.32103 14.6364 6.96956L8.90883 1.242C8.55736 0.890524 7.98751 0.890524 7.63604 1.242C7.28457 1.59347 7.28457 2.16332 7.63604 2.51479L12.7272 7.60596L7.63604 12.6971C7.28457 13.0486 7.28457 13.6184 7.63604 13.9699C7.98751 14.3214 8.55736 14.3214 8.90883 13.9699L14.6364 8.24235ZM0 7.60596V8.50596H14V7.60596V6.70596H0V7.60596Z"
                                                        fill="currentcolor"
                                                    />
                                                </svg>
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-xl-4 col-lg-6 col-md-6 wow itfadeUp"
                            data-wow-duration=".9s"
                            data-wow-delay=".7s"
                        >
                            <div class="it-blog-2-item mb-35">
                                <div class="it-blog-thumb p-relative">
                                    <img class="w-100" src="{{ asset('frontAssets/img/blog/blog-3-3.jpg') }}" alt="" />
                                </div>
                                <div class="it-blog-2-content z-index-2">
                                    <div class="it-blog-meta mb-25">
                                        <span>
                                            <svg
                                                width="18"
                                                height="19"
                                                viewBox="0 0 18 19"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <g clip-path="url(#clip0_432_973)">
                                                    <path
                                                        d="M14.25 1.60596H13.5V0.855957C13.5 0.657045 13.421 0.466279 13.2803 0.325627C13.1397 0.184975 12.9489 0.105957 12.75 0.105957C12.5511 0.105957 12.3603 0.184975 12.2197 0.325627C12.079 0.466279 12 0.657045 12 0.855957V1.60596H6V0.855957C6 0.657045 5.92098 0.466279 5.78033 0.325627C5.63968 0.184975 5.44891 0.105957 5.25 0.105957C5.05109 0.105957 4.86032 0.184975 4.71967 0.325627C4.57902 0.466279 4.5 0.657045 4.5 0.855957V1.60596H3.75C2.7558 1.60715 1.80267 2.00262 1.09966 2.70562C0.396661 3.40863 0.00119089 4.36176 0 5.35596L0 14.356C0.00119089 15.3502 0.396661 16.3033 1.09966 17.0063C1.80267 17.7093 2.7558 18.1048 3.75 18.106H14.25C15.2442 18.1048 16.1973 17.7093 16.9003 17.0063C17.6033 16.3033 17.9988 15.3502 18 14.356V5.35596C17.9988 4.36176 17.6033 3.40863 16.9003 2.70562C16.1973 2.00262 15.2442 1.60715 14.25 1.60596ZM1.5 5.35596C1.5 4.75922 1.73705 4.18692 2.15901 3.76497C2.58097 3.34301 3.15326 3.10596 3.75 3.10596H14.25C14.8467 3.10596 15.419 3.34301 15.841 3.76497C16.2629 4.18692 16.5 4.75922 16.5 5.35596V6.10596H1.5V5.35596ZM14.25 16.606H3.75C3.15326 16.606 2.58097 16.3689 2.15901 15.9469C1.73705 15.525 1.5 14.9527 1.5 14.356V7.60596H16.5V14.356C16.5 14.9527 16.2629 15.525 15.841 15.9469C15.419 16.3689 14.8467 16.606 14.25 16.606Z"
                                                        fill="currentcolor"
                                                    />
                                                    <path
                                                        d="M9 12.481C9.62132 12.481 10.125 11.9773 10.125 11.356C10.125 10.7346 9.62132 10.231 9 10.231C8.37868 10.231 7.875 10.7346 7.875 11.356C7.875 11.9773 8.37868 12.481 9 12.481Z"
                                                        fill="currentcolor"
                                                    />
                                                    <path
                                                        d="M5.25 12.481C5.87132 12.481 6.375 11.9773 6.375 11.356C6.375 10.7346 5.87132 10.231 5.25 10.231C4.62868 10.231 4.125 10.7346 4.125 11.356C4.125 11.9773 4.62868 12.481 5.25 12.481Z"
                                                        fill="currentcolor"
                                                    />
                                                    <path
                                                        d="M12.75 12.481C13.3713 12.481 13.875 11.9773 13.875 11.356C13.875 10.7346 13.3713 10.231 12.75 10.231C12.1287 10.231 11.625 10.7346 11.625 11.356C11.625 11.9773 12.1287 12.481 12.75 12.481Z"
                                                        fill="currentcolor"
                                                    />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_432_973">
                                                        <rect
                                                            width="18"
                                                            height="18"
                                                            fill="white"
                                                            transform="translate(0 0.105957)"
                                                        />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            Oct, 23, 2025
                                        </span>
                                        <span>
                                            <svg
                                                width="20"
                                                height="21"
                                                viewBox="0 0 20 21"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M10 0.105957C4.48583 0.105957 0 4.59179 0 10.106C0 15.6201 4.48583 20.106 10 20.106C15.5142 20.106 20 15.6201 20 10.106C20 4.59179 15.5142 0.105957 10 0.105957ZM6.66667 17.7426V17.606C6.66667 15.7676 8.16167 14.2726 10 14.2726C11.8383 14.2726 13.3333 15.7676 13.3333 17.606V17.7426C12.3117 18.1901 11.185 18.4393 10 18.4393C8.815 18.4393 7.68833 18.1901 6.66667 17.7426ZM14.9375 16.8151C14.5575 14.4326 12.4883 12.606 10 12.606C7.51167 12.606 5.44333 14.4326 5.0625 16.8151C3.00417 15.296 1.66667 12.8543 1.66667 10.106C1.66667 5.51096 5.405 1.77262 10 1.77262C14.595 1.77262 18.3333 5.51096 18.3333 10.106C18.3333 12.8543 16.9958 15.296 14.9375 16.8151ZM10 4.27262C8.16167 4.27262 6.66667 5.76762 6.66667 7.60596C6.66667 9.44429 8.16167 10.9393 10 10.9393C11.8383 10.9393 13.3333 9.44429 13.3333 7.60596C13.3333 5.76762 11.8383 4.27262 10 4.27262ZM10 9.27262C9.08083 9.27262 8.33333 8.52512 8.33333 7.60596C8.33333 6.68679 9.08083 5.93929 10 5.93929C10.9192 5.93929 11.6667 6.68679 11.6667 7.60596C11.6667 8.52512 10.9192 9.27262 10 9.27262Z"
                                                    fill="currentcolor"
                                                />
                                            </svg>
                                            Roboth smith
                                        </span>
                                    </div>
                                    <h5 class="it-blog-title mb-15">
                                        <a class="border-line" href="blog-details-left-sidebar.html"
                                            >Why Business Students Need Tech Skills for the Future</a
                                        >
                                    </h5>
                                    <div class="it-blog-btn">
                                        <a href="blog-details-left-sidebar.html" class="it-btn-yellow">
                                            <span>
                                                <span class="text-1">More Details</span>
                                                <span class="text-2">More Details</span>
                                            </span>
                                            <i>
                                                <svg
                                                    width="15"
                                                    height="15"
                                                    viewBox="0 0 15 15"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        d="M14.6364 8.24235C14.9879 7.89088 14.9879 7.32103 14.6364 6.96956L8.90883 1.242C8.55736 0.890524 7.98751 0.890524 7.63604 1.242C7.28457 1.59347 7.28457 2.16332 7.63604 2.51479L12.7272 7.60596L7.63604 12.6971C7.28457 13.0486 7.28457 13.6184 7.63604 13.9699C7.98751 14.3214 8.55736 14.3214 8.90883 13.9699L14.6364 8.24235ZM0 7.60596V8.50596H14V7.60596V6.70596H0V7.60596Z"
                                                        fill="currentcolor"
                                                    />
                                                </svg>
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="it-blog-button text-center mt-30">
                                <a href="blog-grid.html" class="it-btn-yellow theme-bg border-radius-100">
                                    <span>
                                        <span class="text-1">See All Articles</span>
                                        <span class="text-2">See All Articles</span>
                                    </span>
                                    <i>
                                        <svg
                                            width="16"
                                            height="15"
                                            viewBox="0 0 16 15"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M15.0544 8.1364C15.4058 7.78492 15.4058 7.21508 15.0544 6.8636L9.3268 1.13604C8.97533 0.784567 8.40548 0.784567 8.05401 1.13604C7.70254 1.48751 7.70254 2.05736 8.05401 2.40883L13.1452 7.5L8.05401 12.5912C7.70254 12.9426 7.70254 13.5125 8.05401 13.864C8.40548 14.2154 8.97533 14.2154 9.3268 13.864L15.0544 8.1364ZM0.417969 7.5V8.4H14.418V7.5V6.6H0.417969V7.5Z"
                                                fill="currentcolor"
                                            />
                                        </svg>
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog-area-end -->

            <!-- newsletter-area-start -->
            <div class="it-newsletter-area it-newsletter-style-2">
                <div class="container">
                    <div
                        class="it-newsletter-wrap theme-bg z-index-2 wow itfadeUp"
                        data-wow-duration=".9s"
                        data-wow-delay=".3s"
                    >
                        <img
                            class="it-newsletter-shape-1"
                            src="{{ asset('frontAssets/img/shape/newsletter-2-1.png') }}"
                            alt=""
                        />
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="it-newsletter-2-left">
                                    <h4 class="it-newsletter-2-title text-white mb-0">
                                        Sign Up today to get the <br />
                                        latest inspiration & insights
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="it-newsletter-input-box">
                                    <form class="input-wrap p-relative" action="#">
                                        <input type="email" placeholder="Enter your Email Address" />
                                        <button type="submit">
                                            <svg
                                                width="26"
                                                height="27"
                                                viewBox="0 0 26 27"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M24.7282 1.82586C24.3517 1.44485 23.8834 1.16736 23.3684 1.02022C22.8534 0.873071 22.3091 0.861239 21.7882 0.985864L4.9882 4.52436C4.0207 4.65705 3.10947 5.05722 2.35711 5.6798C1.60475 6.30238 1.04115 7.12265 0.729789 8.04823C0.418424 8.97381 0.371658 9.96795 0.594756 10.9187C0.817855 11.8694 1.30196 12.739 1.99255 13.4294L3.79645 15.2323C3.89408 15.3299 3.97151 15.4458 4.0243 15.5733C4.07709 15.7009 4.1042 15.8376 4.1041 15.9757V19.3021C4.10641 19.7698 4.21408 20.2309 4.4191 20.6513L4.4107 20.6587L4.438 20.686C4.74566 21.3045 5.24816 21.8048 5.8681 22.1098L5.8954 22.1371L5.90275 22.1287C6.32312 22.3337 6.78429 22.4413 7.252 22.4437H10.5784C10.8567 22.4434 11.1237 22.5537 11.3207 22.7503L13.1236 24.5531C13.6071 25.042 14.1827 25.4304 14.817 25.6958C15.4514 25.9613 16.132 26.0986 16.8196 26.0998C17.3926 26.0991 17.9618 26.0054 18.5048 25.8226C19.422 25.5214 20.2367 24.97 20.8571 24.2305C21.4775 23.4909 21.8789 22.5928 22.016 21.6373L25.5598 4.80051C25.6909 4.27514 25.6832 3.72471 25.5374 3.20322C25.3916 2.68173 25.1127 2.20709 24.7282 1.82586ZM5.28325 13.7497L3.4783 11.9468C3.058 11.5366 2.76343 11.0151 2.62915 10.4434C2.49487 9.87166 2.52645 9.27351 2.7202 8.71911C2.90804 8.15035 3.25528 7.64751 3.72063 7.27039C4.18598 6.89327 4.74986 6.65774 5.3452 6.59181L21.9782 3.09006L6.202 18.8684V15.9757C6.20359 15.5623 6.12321 15.1528 5.96551 14.7707C5.80781 14.3886 5.57591 14.0416 5.28325 13.7497ZM19.9528 21.2782C19.8722 21.8581 19.6315 22.4041 19.2578 22.8549C18.8841 23.3056 18.3921 23.6433 17.8372 23.83C17.2822 24.0167 16.6862 24.045 16.116 23.9118C15.5459 23.7786 15.0241 23.4891 14.6093 23.0758L12.8033 21.2698C12.5118 20.9767 12.1651 20.7443 11.7832 20.586C11.4013 20.4278 10.9918 20.3468 10.5784 20.3479H7.68565L23.464 4.57476L19.9528 21.2782Z"
                                                    fill="currentcolor"
                                                />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- newsletter-area-end -->
        </main>

        <footer>
            <!-- footer-area-start -->
            <section class="it-footer-wrap it-footer-style-2 fix">
                <div
                    class="it-footer-area z-index-1 pt-200 pb-80"
                    data-background="{{ asset('frontAssets/img/shape/footer-bg-3-1') }}.jpg"
                >
                    <img
                        class="it-footer-shape-1 d-none d-xxl-block"
                        src="{{ asset('frontAssets/img/shape/footer-3-1.png') }}"
                        alt=""
                    />
                    <img
                        class="it-footer-shape-2"
                        data-parallax='{"y": -200, "smoothness": 30}'
                        src="{{ asset('frontAssets/img/shape/footer-3-2.png') }}"
                        alt=""
                    />
                    <div class="it-footer-border"><span></span></div>
                    <div class="container">
                        <div class="row">
                            <div
                                class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-50 wow itfadeUp"
                                data-wow-duration=".9s"
                                data-wow-delay=".3s"
                            >
                                <div class="it-footer-widget it-footer-col-1-1">
                                    <div class="it-footer-widget-logo mb-30">
                                        <a href="{{ url('/') }}">
                                            <img src="{{ !empty($pageGlobalData->setting) ? asset($pageGlobalData->setting->logo) : null }}" alt=""  width="180"/>
                                        </a>
                                    </div>
                                    <div class="it-footer-widget-text">
                                        <p>
                                            Access expert-led courses designed to help you succeed in your career, all
                                            from the comfort of your home.
                                        </p>
                                    </div>
                                    <div class="it-footer-widget-btn">
                                        <a href="contact-us.html" class="it-btn-yellow theme-bg border-radius-100">
                                            <span>
                                                <span class="text-1">Contact Us</span>
                                                <span class="text-2">Contact Us</span>
                                            </span>
                                            <i>
                                                <svg
                                                    width="16"
                                                    height="15"
                                                    viewBox="0 0 16 15"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        d="M15.0544 8.1364C15.4058 7.78492 15.4058 7.21508 15.0544 6.8636L9.3268 1.13604C8.97533 0.784567 8.40548 0.784567 8.05401 1.13604C7.70254 1.48751 7.70254 2.05736 8.05401 2.40883L13.1452 7.5L8.05401 12.5912C7.70254 12.9426 7.70254 13.5125 8.05401 13.864C8.40548 14.2154 8.97533 14.2154 9.3268 13.864L15.0544 8.1364ZM0.417969 7.5V8.4H14.418V7.5V6.6H0.417969V7.5Z"
                                                        fill="currentcolor"
                                                    />
                                                </svg>
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-50 wow itfadeUp"
                                data-wow-duration=".9s"
                                data-wow-delay=".5s"
                            >
                                <div class="it-footer-widget it-footer-col-1-2">
                                    <h4 class="it-footer-widget-title">Useful Links</h4>
                                    <div class="it-footer-widget-menu">
                                        <ul>
                                            <li><a href="#">Marketplace</a></li>
                                            <li><a href="#">kindergarten</a></li>
                                            <li><a href="#">University</a></li>
                                            <li><a href="#">GYM Coaching</a></li>
                                            <li><a href="#">Cooking</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-50 wow itfadeUp"
                                data-wow-duration=".9s"
                                data-wow-delay=".7s"
                            >
                                <div class="it-footer-widget it-footer-col-1-3">
                                    <h4 class="it-footer-widget-title">Our Company</h4>
                                    <div class="it-footer-widget-menu">
                                        <ul>
                                            <li><a href="#">Contact Us</a></li>
                                            <li><a href="#">Become Teacher</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Instructor</a></li>
                                            <li><a href="#">Events</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-50 wow itfadeUp"
                                data-wow-duration=".9s"
                                data-wow-delay=".9s"
                            >
                                <div class="it-footer-widget it-footer-col-1-4 d-flex justify-content-lg-end">
                                    <div>
                                        <h4 class="it-footer-widget-title">Get Contact</h4>
                                        <div class="it-footer-widget-contact mb-25">
                                            <ul>
                                                <li>
                                                    <span>Phone:</span><a href="tel:+91123456789">(+91) 123-456-789</a>
                                                </li>
                                                <li>
                                                    <span>Email:</span
                                                    ><a href="mailto:educeet@gmail.com">educeet@gmail.com</a>
                                                </li>
                                                <li>
                                                    <span>Location:</span
                                                    ><a
                                                        target="_blank"
                                                        href="https://www.google.com/maps/dir///@24.4503253,17.1644279,4.17z?entry=ttu&amp;g_ep=EgoyMDI0MTAwOS4wIKXMDSoASAFQAw%3D%3D"
                                                        >North America, USA</a
                                                    >
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="it-footer-widget-social">
                                            <a href="#">
                                                <svg
                                                    width="20"
                                                    height="19"
                                                    viewBox="0 0 20 19"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        d="M15.5654 0.183594H18.5978L11.9747 7.75136L19.7656 18.0509H13.6671L8.88712 11.8058L3.42357 18.0509H0.386253L7.46894 9.9544L0 0.183594H6.25335L10.5697 5.89174L15.5654 0.183594ZM14.5006 16.2382H16.1798L5.33837 1.90156H3.53475L14.5006 16.2382Z"
                                                        fill="#1F2432"
                                                    />
                                                </svg>
                                            </a>
                                            <a href="#">
                                                <svg
                                                    width="22"
                                                    height="21"
                                                    viewBox="0 0 22 21"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        d="M10.7373 0C11.8245 4.94765e-05 12.8731 0.164898 13.8594 0.47168C14.0236 0.522763 14.186 0.5779 14.3467 0.636719C15.1509 0.931161 15.9091 1.32115 16.6074 1.79297C16.7472 1.88741 16.8846 1.98505 17.0195 2.08594C17.8277 2.69042 18.5459 3.4086 19.1504 4.2168C19.2513 4.35169 19.3489 4.48911 19.4434 4.62891C19.9152 5.32727 20.3052 6.08541 20.5996 6.88965C20.6584 7.05031 20.7136 7.21273 20.7646 7.37695C20.867 7.70592 20.9535 8.04183 21.0234 8.38379C21.1633 9.06723 21.2373 9.77522 21.2373 10.5C21.2373 10.9911 21.2029 11.4741 21.1377 11.9473C20.8765 13.8408 20.1102 15.573 18.9795 17.0039C18.8852 17.1232 18.7887 17.2405 18.6895 17.3555C18.491 17.5854 18.2828 17.8067 18.0654 18.0186C17.9567 18.1245 17.8456 18.2279 17.7324 18.3291C17.0534 18.9362 16.2951 19.4565 15.4746 19.8721C14.9275 20.1492 14.3529 20.3797 13.7559 20.5586C13.4575 20.648 13.1536 20.7251 12.8447 20.7881C12.6903 20.8196 12.5347 20.8475 12.3779 20.8721V13.5352H14.8242L15.29 10.5L15.2891 10.499H12.3779V8.53027C12.3779 8.4782 12.3795 8.42574 12.3828 8.37402C12.406 8.01348 12.5127 7.66609 12.7441 7.39844C12.8103 7.32194 12.8871 7.25242 12.9746 7.19043C13.1058 7.09747 13.2618 7.0224 13.4463 6.9707C13.631 6.91895 13.8442 6.89062 14.0889 6.89062H15.4131V4.30566C15.4131 4.30566 15.4123 4.30489 15.4111 4.30469H15.4092C15.4069 4.30431 15.4037 4.30344 15.3994 4.30273C15.3904 4.30124 15.3767 4.29965 15.3594 4.29688C15.3243 4.29127 15.2723 4.28305 15.207 4.27344C15.0764 4.25421 14.8899 4.22875 14.668 4.20312C14.335 4.16469 13.9214 4.12619 13.4932 4.10938L13.0625 4.10059C12.9125 4.10059 12.7654 4.10588 12.6221 4.11719C11.6196 4.19628 10.785 4.55048 10.1797 5.15625C10.05 5.28609 9.93029 5.42733 9.82227 5.58008C9.75029 5.68185 9.68299 5.78861 9.62109 5.90039C9.4972 6.12413 9.39385 6.36787 9.3125 6.63086C9.1702 7.0909 9.0957 7.61087 9.0957 8.18652V10.499H6.42969V13.5352H9.0957V20.8721C8.93893 20.8475 8.78329 20.8196 8.62891 20.7881C8.32 20.7251 8.01617 20.648 7.71777 20.5586C7.12076 20.3797 6.54616 20.1492 5.99902 19.8721C5.17857 19.4565 4.42027 18.9362 3.74121 18.3291C3.62802 18.2279 3.51689 18.1245 3.4082 18.0186C3.19082 17.8067 2.9826 17.5854 2.78418 17.3555C2.68495 17.2405 2.58839 17.1232 2.49414 17.0039C1.36339 15.573 0.597092 13.8408 0.335938 11.9473C0.270687 11.4741 0.237327 10.9911 0.237305 10.5C0.237305 9.41262 0.402157 8.36337 0.708984 7.37695C0.760067 7.21273 0.815204 7.05031 0.874023 6.88965C1.16847 6.08541 1.55846 5.32727 2.03027 4.62891C2.12472 4.48911 2.22235 4.35169 2.32324 4.2168C2.92773 3.4086 3.6459 2.69042 4.4541 2.08594C4.58899 1.98505 4.72642 1.88741 4.86621 1.79297C5.56458 1.32115 6.32271 0.931161 7.12695 0.636719C7.28761 0.5779 7.45003 0.522763 7.61426 0.47168C8.60067 0.164852 9.64992 0 10.7373 0ZM15.3477 4.2959C15.2526 4.28082 15.0588 4.25307 14.8037 4.22168C14.9662 4.24168 15.104 4.25925 15.207 4.27441C15.2657 4.28305 15.3132 4.29043 15.3477 4.2959Z"
                                                        fill="currentcolor"
                                                        stroke="#1F2432"
                                                        stroke-width="0.000976562"
                                                    />
                                                    <path
                                                        d="M15.2881 10.5L14.8232 13.5342H12.377V20.8721C12.1097 20.914 11.839 20.9454 11.5654 20.9668C11.2919 20.9882 11.0153 20.999 10.7363 20.999C10.4573 20.999 10.1808 20.9882 9.90723 20.9668C9.77039 20.9561 9.63433 20.9427 9.49902 20.9268L9.0957 20.8721H9.09668V13.5342H6.43066V10.5H9.0957L9.09668 10.499V8.18555C9.09673 7.28126 9.2817 6.5162 9.62207 5.90137C9.68399 5.78953 9.75124 5.68288 9.82324 5.58105C9.93127 5.42828 10.05 5.28611 10.1797 5.15625C10.2227 5.1132 10.2672 5.07175 10.3125 5.03125C10.3582 4.99045 10.4052 4.95128 10.4531 4.91309C10.9314 4.53205 11.5221 4.28117 12.2031 4.16895C12.4755 4.12406 12.7627 4.10156 13.0625 4.10156C13.2061 4.10157 13.3504 4.10474 13.4932 4.11035C13.7786 4.12157 14.0576 4.14199 14.3105 4.16602C14.8815 4.22025 15.3195 4.29048 15.3994 4.30371C15.4036 4.30441 15.407 4.3053 15.4092 4.30566H15.4121V6.88965H14.0889C14.0074 6.88965 13.929 6.89232 13.8545 6.89844C13.3318 6.94132 12.975 7.13039 12.7432 7.39844C12.5117 7.66631 12.405 8.0134 12.3818 8.37402C12.3785 8.42556 12.377 8.4774 12.377 8.5293V10.5H15.2881Z"
                                                        fill="white"
                                                        stroke="#1F2432"
                                                        stroke-width="0.000976562"
                                                    />
                                                </svg>
                                            </a>
                                            <a href="#">
                                                <svg
                                                    width="20"
                                                    height="20"
                                                    viewBox="0 0 20 20"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        d="M14.6802 1.23535H6.03271C3.64478 1.23535 1.70898 3.17115 1.70898 5.55908V14.2065C1.70898 16.5945 3.64478 18.5303 6.03271 18.5303H14.6802C17.0681 18.5303 19.0039 16.5945 19.0039 14.2065V5.55908C19.0039 3.17115 17.0681 1.23535 14.6802 1.23535Z"
                                                        stroke="#1F2432"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    />
                                                    <path
                                                        d="M13.8122 9.33833C13.9189 10.058 13.796 10.793 13.4609 11.4388C13.1258 12.0846 12.5956 12.6083 11.9458 12.9354C11.2959 13.2625 10.5594 13.3763 9.8411 13.2608C9.12279 13.1452 8.45921 12.806 7.94476 12.2916C7.4303 11.7771 7.09116 11.1135 6.97557 10.3952C6.85999 9.67692 6.97384 8.94046 7.30094 8.29058C7.62804 7.64071 8.15173 7.11052 8.79752 6.77543C9.44331 6.44034 10.1783 6.31742 10.898 6.42414C11.6321 6.53299 12.3117 6.87507 12.8365 7.39984C13.3613 7.9246 13.7033 8.60423 13.8122 9.33833Z"
                                                        stroke="#1F2432"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    />
                                                    <path
                                                        d="M15.1094 5.12695H15.1221"
                                                        stroke="#1F2432"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    />
                                                </svg>
                                            </a>
                                            <a href="#">
                                                <svg
                                                    width="21"
                                                    height="21"
                                                    viewBox="0 0 21 21"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        d="M14.148 7.08887C15.6999 7.08887 17.1881 7.70533 18.2855 8.80264C19.3828 9.89994 19.9992 11.3882 19.9992 12.94V19.7664H16.0984V12.94C16.0984 12.4228 15.893 11.9267 15.5272 11.5609C15.1614 11.1951 14.6653 10.9896 14.148 10.9896C13.6308 10.9896 13.1347 11.1951 12.7689 11.5609C12.4031 11.9267 12.1977 12.4228 12.1977 12.94V19.7664H8.29688V12.94C8.29688 11.3882 8.91334 9.89994 10.0106 8.80264C11.108 7.70533 12.5962 7.08887 14.148 7.08887Z"
                                                        fill="white"
                                                        stroke="#1F2432"
                                                        stroke-width="2"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    />
                                                    <path
                                                        d="M5.37734 8.0625H1.47656V19.7648H5.37734V8.0625Z"
                                                        fill="white"
                                                        stroke="#1F2432"
                                                        stroke-width="2"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    />
                                                    <path
                                                        d="M3.42695 5.13613C4.50412 5.13613 5.37734 4.26291 5.37734 3.18574C5.37734 2.10857 4.50412 1.23535 3.42695 1.23535C2.34978 1.23535 1.47656 2.10857 1.47656 3.18574C1.47656 4.26291 2.34978 5.13613 3.42695 5.13613Z"
                                                        fill="white"
                                                        stroke="#1F2432"
                                                        stroke-width="2"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- copyright-area-start -->
                <div class="it-copyright-area it-copyright-ptb it-copyright-bg z-index-1 theme-bg">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div class="it-copyright-left style-2 text-center">
                                    <p class="mb-0">Copyright © 2025 <a href="#">Ordianit</a> All Rights Reserved</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- copyright-area-end -->
            </section>
            <!-- footer-area-end -->
        </footer>

        <!-- JS  Libraries -->
        <script src="{{ asset('frontAssets/js/jquery.js') }}"></script>
        <script src="{{ asset('frontAssets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('frontAssets/js/purecounter.js') }}"></script>
        <script src="{{ asset('frontAssets/js/range-slider.js') }}"></script>
        <script src="{{ asset('frontAssets/js/nice-select.js') }}"></script>
        <script src="{{ asset('frontAssets/js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('frontAssets/js/isotope-pkgd.js') }}"></script>
        <script src="{{ asset('frontAssets/js/slick.min.js') }}"></script>
        <script src="{{ asset('frontAssets/js/wow.js') }}"></script>
        <script src="{{ asset('frontAssets/js/countdown.js') }}"></script>
        <script src="{{ asset('frontAssets/js/magnific-popup.js') }}"></script>
        <script src="{{ asset('frontAssets/js/imagesloaded-pkgd.js') }}"></script>
        <script src="{{ asset('frontAssets/js/parallax.js') }}"></script>

        <!-- Custom JS -->
        <script src="{{ asset('frontAssets/js/slider.js') }}"></script>
        <script src="{{ asset('frontAssets/js/main.js') }}"></script>
    </body>
</html>
