@extends('landing.layouts.app')

@section('content')

<div class="breadcrumb-wrapper bg-cover" style="background-image:url('{{ asset('frontAssets/img/inner/breadcrumb.jpg') }}');">
    <div class="container">
        <div class="page-heading">
            <div class="breadcrumb-sub-title">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Academic Programmes</h1>
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
                    Academic Programmes
                </li>
            </ul>
        </div>
    </div>
</div>

<section class="section-padding">

    <div class="container">

        <div class="section-title text-center">

            <h6 class="wow fadeInUp">
                Academic Excellence
            </h6>

            <h2 class="wow fadeInUp" data-wow-delay=".2s">
                Discover Our Academic Programmes
            </h2>

            <p class="mt-3 mx-auto" style="max-width:750px;">
                Our academic programmes are designed to provide students with a strong educational foundation, critical thinking abilities, and the knowledge required to excel academically and beyond.
            </p>

        </div>

        <div class="row g-4 mt-5">

            <div class="col-lg-4">

                <div class="card border-0 shadow-sm text-center h-100">

                    <div class="card-body p-4">

                        <div class="mb-3">
                            <i class="fa-solid fa-graduation-cap fa-3x text-success"></i>
                        </div>

                        <h2>
                            {{ $programmes->count() }}
                        </h2>

                        <p class="mb-0">
                            Academic Programmes
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="card border-0 shadow-sm text-center h-100">

                    <div class="card-body p-4">

                        <div class="mb-3">
                            <i class="fa-solid fa-book-open fa-3x text-success"></i>
                        </div>

                        <h2>
                            {{ collect($programmes)->sum(function($programme){ return count($programme->subjects ?? []); }) }}
                        </h2>

                        <p class="mb-0">
                            Subjects Offered
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="card border-0 shadow-sm text-center h-100">

                    <div class="card-body p-4">

                        <div class="mb-3">
                            <i class="fa-solid fa-lightbulb fa-3x text-success"></i>
                        </div>

                        <h2>
                            100%
                        </h2>

                        <p class="mb-0">
                            Student Focused Learning
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="pb-120">

    <div class="container">

        <div class="section-title text-center mb-5">

            <h6>
                Programme Explorer
            </h6>

            <h2>
                Explore Subjects By Programme
            </h2>

        </div>

        <div class="accordion" id="programmeAccordion">

            @foreach($programmes as $programme)

                @php
                    $subjects = is_array($programme->subjects)
                        ? $programme->subjects
                        : json_decode($programme->subjects, true);

                    $subjects = $subjects ?? [];
                @endphp

                <div class="accordion-item border-0 shadow-sm mb-4 rounded overflow-hidden">

                    <h2 class="accordion-header">

                        <button
                            class="accordion-button collapsed fw-bold"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#programme{{ $programme->id }}"
                        >

                            <div class="d-flex align-items-center justify-content-between w-100 me-3">

                                <span>
                                    {{ $programme->programme_name }}
                                </span>

                                <span class="badge bg-success">
                                    {{ count($subjects) }} Subjects
                                </span>

                            </div>

                        </button>

                    </h2>

                    <div
                        id="programme{{ $programme->id }}"
                        class="accordion-collapse collapse"
                        data-bs-parent="#programmeAccordion"
                    >

                        <div class="accordion-body">

                            <div class="row g-3">

                                @foreach($subjects as $subject)

                                    <div class="col-lg-3 col-md-4 col-sm-6">

                                        <div class="card border-0 bg-light h-100">

                                            <div class="card-body text-center">

                                                <i class="fa-solid fa-book text-success mb-2"></i>

                                                <div>
                                                    {{ $subject }}
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                @endforeach

                            </div>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>

<section class="bt-top-category-section section-padding bg-cover" style="background-image:url('{{ asset('frontAssets/img/home-1/category/category-bg.jpg') }}');">

    <div class="container">

        <div class="text-center text-white">

            <h2 class="text-white">
                Ready To Join Our Academic Community?
            </h2>

            <p class="mt-3 mb-4">
                Begin your journey towards academic excellence and personal growth.
            </p>

            <a href="{{ url('/admission') }}" class="theme-btn">

                Apply For Admission

                <i class="fa-solid fa-arrow-up-right"></i>

            </a>

        </div>

    </div>

</section>

@endsection