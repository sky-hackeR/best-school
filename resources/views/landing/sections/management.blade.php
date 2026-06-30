<!-- Team Section Start -->
<section class="bt-team-section section-padding bg-cover" style="background-image: url('frontAssets/img/home-1/team/team-bg.jpg');">
    <div class="container">
        <div class="section-title text-center">
            <h6 class="wow fadeInUp">Management Team</h6>
            <!-- Updated H2 Writeup -->
            <h2 class="wow fadeInUp" data-wow-delay=".2s">The Leadership Driving Our Vision</h2>
        </div>
        <div class="row">
            @foreach($management as $item)
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="bt-team-box-items">
                        <div class="bt-image" style="overflow: hidden;">
                            <img src="{{ asset($item->image) }}" 
                                 alt="{{ $item->name }}" 
                                 class="w-100"
                                 style="height: 400px; object-fit: cover; display: block;">
                            
                            <div class="bt-content">
                                <h4>{{ $item->name }}</h4>
                                <p>{{ $item->role }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
