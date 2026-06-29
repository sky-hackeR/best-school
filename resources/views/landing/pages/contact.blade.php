@extends('landing.layouts.app')

@section('content')

    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('frontAssets/img/inner/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <div class="breadcrumb-sub-title">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Contact Us</h1>
                </div>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="{{ url('/home') }}">Home</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li>
                        Contact Us
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Contact Section Start -->
    <section class="bt-contact-section section-padding fix">
        <div class="container">
            <div class="contact-wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="bt-contact-content">
                            <div class="section-title mb-0">
                                <h6 class="wow fadeInUp">Need Any Help</h6>
                                <h2 class="wow fadeInUp" data-wow-delay=".2s">Get in touch with us</h2>
                            </div>
                            <p class="contact-text wow fadeInUp">
                                Use both direct conversations and indirect observations to get visibility into employees’ challenges and concerns. Use every opportunity to make clear to employees that you support and care them. To facilitate regular conversations between managers and employees.
                            </p>
                            <ul class="wow fadeInUp" data-wow-delay=".4s">
                                @if(!empty($pageGlobalData->setting?->contact_phone))
                                    <li>
                                        <div class="icon">
                                            <i class="fa-light fa-phone"></i>
                                        </div>
                                        <div class="content">
                                            <h5>Have any question?</h5>
                                            <a href="tel:{{ preg_replace('/[^0-9+]/', '', $pageGlobalData->setting->contact_phone) }}">
                                                {{ $pageGlobalData->setting->contact_phone }}
                                            </a>
                                        </div>
                                    </li>
                                @endif
                                @if(!empty($pageGlobalData->setting?->contact_email))
                                    <li>
                                        <div class="icon">
                                            <i class="fa-light fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <h5>Write email</h5>
                                            <a href="mailto:{{ $pageGlobalData->setting->contact_email }}">
                                                {{ $pageGlobalData->setting->contact_email }}
                                            </a>
                                        </div>
                                    </li>
                                @endif
                                @if(!empty($pageGlobalData->setting?->contact_address))
                                    <li>
                                        <div class="icon">
                                            <i class="fa-light fa-location-dot"></i>
                                        </div>
                                        <div class="content">
                                            <h5>Visit anytime</h5>
                                            {!! $pageGlobalData->setting->contact_address !!}

                                        </div>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bt-contact-items">
                            <form action="" id="contact-form" class="contact-form-box">
                                <div class="row g-4 align-items-center">
                                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="form-clt">
                                            <input type="text" name="name" id="name" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="form-clt">
                                            <input type="text" name="email" id="email2" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="form-clt">
                                            <input type="text" name="phone" id="phone" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                                        <div class="form-clt">
                                            <input type="text" name="subject" id="subject" placeholder="Subjects">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="form-clt">
                                            <textarea name="message" id="message" placeholder="Message Here"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".9s">
                                        <button type="submit" class="theme-btn float-end">
                                        Send Message
                                        <i class="far fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4937.617377857155!2d2.9903941999999994!3d6.711536899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b735aa3ebcaf9%3A0x91851a5e3361155c!2sThe%20Gem%20International%20School!5e1!3m2!1sen!2sng!4v1782734142824!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
    </div>
@endsection