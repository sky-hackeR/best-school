<!-- Academic Programmes Section Start -->
<section class="bt-top-category-section section-padding bg-cover" style="background-image: url('{{ asset('frontAssets/img/home-1/category/category-bg.jpg') }}');">

    <div class="category-shape-1 float-bob-x">
        <img src="{{ asset('frontAssets/img/home-1/category/shape-01.png') }}" alt="shape">
    </div>

    <div class="container">

        <div class="section-title text-center">

            <h6 class="wow fadeInUp style-2">
                Academic Programmes
            </h6>

            <h2 class="wow fadeInUp text-white" data-wow-delay=".2s">
                Quality Education Designed <br> For Every Learner
            </h2>

            <p class="text-white mt-3 wow fadeInUp" data-wow-delay=".4s" style="max-width:700px;margin:auto;">
                Explore our academic programmes carefully structured to build strong foundations,
                develop critical thinking skills, and prepare students for future success.
            </p>

        </div>

        <div class="row g-4 mt-4">

            @foreach($programmes as $programme)

                @php
                    $subjects = is_array($programme->subjects)
                        ? $programme->subjects
                        : json_decode($programme->subjects, true);

                    $subjects = $subjects ?? [];
                @endphp

                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">

                    <div class="bt-category-box-items h-100">

                        <div class="bt-content text-center">

                            <div class="mb-4">

                                <i class="fa-solid fa-graduation-cap"
                                   style="font-size:50px;color:var(--theme);"></i>

                            </div>

                            <h3>
                                {{ $programme->programme_name }}
                            </h3>

                            <p>
                                {{ count($subjects) }}
                                {{ count($subjects) == 1 ? 'Subject' : 'Subjects' }}
                                Available
                            </p>

                            <button
                                type="button"
                                class="theme-btn mt-3"
                                data-bs-toggle="modal"
                                data-bs-target="#programmeModal{{ $programme->id }}"
                            >
                                View Subjects
                                <i class="fa-solid fa-arrow-up-right"></i>
                            </button>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>

<!-- Programme Modals -->
@foreach($programmes as $programme)

    @php
        $subjects = is_array($programme->subjects)
            ? $programme->subjects
            : json_decode($programme->subjects, true);

        $subjects = $subjects ?? [];
    @endphp

    <div class="modal fade" id="programmeModal{{ $programme->id }}" tabindex="-1" aria-hidden="true">

        <div class="modal-dialog modal-lg modal-dialog-centered">

            <div class="modal-content border-0 shadow-lg">

                <div class="modal-header">

                    <h4 class="modal-title fw-bold">
                        {{ $programme->programme_name }}
                    </h4>

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close">
                    </button>

                </div>

                <div class="modal-body p-4">

                    <div class="row mb-4">

                        <div class="col-12 text-center">

                            <div
                                style="
                                    width:90px;
                                    height:90px;
                                    margin:auto;
                                    background:rgba(31,122,77,.08);
                                    border-radius:50%;
                                    display:flex;
                                    align-items:center;
                                    justify-content:center;
                                "
                            >
                                <i class="fa-solid fa-book-open"
                                   style="font-size:38px;color:var(--theme);"></i>
                            </div>

                            <h4 class="mt-3">
                                {{ $programme->programme_name }}
                            </h4>

                            <p class="text-muted">
                                Subjects offered under this programme
                            </p>

                        </div>

                    </div>

                    <div class="row g-3">

                        @foreach($subjects as $subject)

                            <div class="col-md-6">

                                <div
                                    class="border rounded p-3 h-100"
                                    style="
                                        background:#fff;
                                        transition:.3s;
                                    "
                                >

                                    <div class="d-flex align-items-center">

                                        <i class="fa-solid fa-check-circle text-success me-2"></i>

                                        <span>
                                            {{ $subject }}
                                        </span>

                                    </div>

                                </div>

                            </div>

                        @endforeach

                    </div>

                </div>

                <div class="modal-footer">

                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                    >
                        Close
                    </button>

                </div>

            </div>

        </div>

    </div>

@endforeach