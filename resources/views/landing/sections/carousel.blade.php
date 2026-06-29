<section class="bt-hero-section gem-hero-slider-area">

    <div class="swiper gemHeroSlider">

        <div class="swiper-wrapper">

            @foreach($carousels as $carousel)

                <div class="swiper-slide">

                    <div
                        class="gem-slide-bg"
                        style="background-image:url('{{ asset($carousel->image) }}')"
                    >

                        <div class="gem-overlay"></div>

                        <div class="container">

                            <div class="row justify-content-center">

                                <div class="col-xl-9 col-lg-10">

                                    <div class="gem-hero-content text-center">

                                        @if($carousel->tagline)
                                            <span class="gem-hero_heading">
                                                {{ $carousel->tagline }}
                                            </span>
                                        @endif

                                        <h1>
                                            {!! $carousel->hero_heading !!}
                                        </h1>

                                        @if($carousel->button_text)
                                            <a
                                                href="{{ $carousel->button_link ?? '#' }}"
                                                class="theme-btn"
                                            >
                                                {{ $carousel->button_text }}
                                                <i class="fa-solid fa-arrow-up-right"></i>
                                            </a>
                                        @endif

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>