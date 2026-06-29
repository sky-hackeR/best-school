@extends('landing.layouts.app')

@section('content')

    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('frontAssets/img/inner/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <div class="breadcrumb-sub-title">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">About Us</h1>
                </div>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="{{ url('/home') }}">Home</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li>
                        About Us
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class="history-section section-padding">

        <div class="container">

            <div class="row align-items-start g-5">

                <div class="col-lg-5">

                    <div class="history-card wow fadeInLeft">

                        <img
                            src="{{ asset($history->image) }}"
                            alt="{{ $history->title }}"
                        >

                    </div>

                </div>

                <div class="col-lg-7">

                    <div class="history-content">

                        <div class="section-title">

                            <h6 class="wow fadeInUp">
                                School History
                            </h6>

                            <h2 class="wow fadeInUp">
                                {{ $history->title }}
                            </h2>

                        </div>

                        <div id="historyBox"
                            class="history-scroll-box wow fadeInUp"
                            data-wow-delay=".2s">

                            {!! $history->content !!}

                        </div>

                        <div class="history-readmore">

                            <button type="button" id="historyToggle">

                                Continue Reading

                                <i class="fa-solid fa-chevron-down ms-2"></i>

                            </button>

                            <div class="history-guide">

                                Scroll to explore the complete history

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <section class="bt-choose-us-section-2 section-padding section-bg">

        <div class="container">

            <div class="section-title text-center mb-5">

                <h6 class="wow fadeInUp">
                    Our Direction
                </h6>

                <h2 class="wow fadeInUp">
                    Vision & Mission
                </h2>

            </div>

            <div class="row g-4">

                <div class="col-lg-6">

                    <div class="vision-card wow fadeInUp">

                        <div class="vision-icon">
                            <i class="fa-solid fa-eye"></i>
                        </div>

                        <h3>
                            Vision Statement
                        </h3>

                        <div class="mt-3">
                            {!! $visionMission->vision !!}
                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="vision-card wow fadeInUp" data-wow-delay=".2s">

                        <div class="vision-icon">
                            <i class="fa-solid fa-bullseye"></i>
                        </div>

                        <h3>
                            Mission Statement
                        </h3>

                        <div class="mt-3">
                            {!! $visionMission->mission !!}
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <section class="anthem-section section-padding">

        <div class="container">

            <div class="section-title text-center mb-5">

                <h6 class="wow fadeInUp">
                    School Anthem
                </h6>
            </div>

        </div>

        <div class="anthem-slider">

            <div class="anthem-track">

                @for($i = 0; $i < 2; $i++)

                    @foreach($anthem->stanzas as $index => $stanza)

                        <div class="anthem-card">

                            <h4>
                                Stanza {{ $index + 1 }}
                            </h4>

                            <div class="anthem-body">

                                {!! $stanza !!}

                            </div>

                        </div>

                    @endforeach

                    @if(!empty($anthem->chorus))

                        <div class="anthem-card">

                            <h4>
                                Chorus
                            </h4>

                            <div class="anthem-body">

                                {!! $anthem->chorus !!}

                            </div>

                        </div>

                    @endif

                @endfor

            </div>

        </div>

    </section>

@endsection