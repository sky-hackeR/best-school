@extends('landing.layouts.app')

@section('content')

<div class="breadcrumb-wrapper bg-cover" style="background-image: url('frontAssets/img/inner/breadcrumb.jpg');">
    <div class="container">
        <div class="page-heading">
            <div class="breadcrumb-sub-title">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">
                    Gallery
                </h1>
            </div>

            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                <li>
                    <a href="{{ url('/home') }}">
                        Home
                    </a>
                </li>

                <li>
                    <i class="fa-solid fa-chevron-right"></i>
                </li>

                <li>
                    Gallery
                </li>
            </ul>
        </div>
    </div>
</div>

<section class="gallery-section section-padding">

    <div class="container">

        {{-- FILTER BUTTONS --}}
        <div class="text-center mb-5">

            <button class="gallery-filter-btn active" data-filter="all">
                All
            </button>

            @foreach($galleries->pluck('category')->unique() as $category)

                <button
                    class="gallery-filter-btn"
                    data-filter="{{ Str::slug($category) }}"
                >
                    {{ $category }}
                </button>

            @endforeach

        </div>

        {{-- GALLERY GRID --}}
        <div class="row g-4 gallery-container">

            @foreach($galleries->where('status','active') as $gallery)

                <div
                    class="col-lg-4 col-md-6 gallery-item"
                    data-category="{{ Str::slug($gallery->category) }}"
                >

                    <a
                        href="{{ asset($gallery->image) }}"
                        class="gallery-popup"
                    >

                        <div class="gallery-card">

                            <img
                                src="{{ asset($gallery->image) }}"
                                alt="{{ $gallery->category }}"
                            >

                            <div class="gallery-overlay">

                                <div class="gallery-content">

                                    <span class="gallery-category">
                                        {{ $gallery->category }}
                                    </span>

                                    <div class="gallery-icon">
                                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </a>

                </div>

            @endforeach

        </div>

    </div>

</section>

@endsection