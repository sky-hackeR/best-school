<section class="bt-about-section section-padding">
    <div class="container">
        <div class="bt-about-wrapper">
            <div class="row align-items-center">

                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="bt-about-image">

                        @if(!empty($history?->image))
                            <img
                                src="{{ asset($history->image) }}"
                                alt="{{ $history->title }}"
                                class="img-fluid rounded"
                            >
                        @endif

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="bt-about-content">

                        <div class="section-title mb-0">
                            <h6 class="wow fadeInUp">
                                About Us
                            </h6>

                            <h2 class="wow fadeInUp" data-wow-delay=".2s">
                                {{ $history?->title }}
                            </h2>
                        </div>

                        <p class="about-text wow fadeInUp" data-wow-delay=".3s">
                            {{ \Illuminate\Support\Str::words(strip_tags($history?->content), 60, '...') }}
                        </p>

                        <div class="bt-about-author wow fadeInUp" data-wow-delay=".5s">

                            <div class="bt-about-button">
                                <a href="{{ url('/about') }}" class="theme-btn">
                                    Learn More
                                    <i class="fa-solid fa-arrow-up-right"></i>
                                </a>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>