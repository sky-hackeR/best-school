@extends('admin.layout.dashboard')

@section('content')

{{-- PAGE HEADER --}}
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">About Management</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Vision & Mission</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="row">

    {{-- FORM SECTION --}}
    <div class="col-xl-5">

        <div class="card border shadow-none">
            <div class="card-header bg-transparent border-bottom">
                <h5 class="card-title mb-0">
                    Update Vision & Mission
                </h5>
            </div>

            <div class="card-body">

                <form action="{{ url('/admin/updateVisionMission') }}" method="POST">
                    @csrf

                    <input
                        type="hidden"
                        name="vision_mission_id"
                        value="{{ $visionMission?->id }}"
                    >

                    {{-- Vision --}}
                    <div class="mb-4">
                        <label class="form-label fw-semibold">
                            Vision Statement
                        </label>

                        <textarea
                            name="vision"
                            class="form-control"
                            rows="6"
                            placeholder="Enter School Vision Statement..."
                        >{{ old('vision', $visionMission?->vision) }}</textarea>
                    </div>

                    {{-- Mission --}}
                    <div class="mb-4">
                        <label class="form-label fw-semibold">
                            Mission Statement
                        </label>

                        <textarea
                            name="mission"
                            class="form-control"
                            rows="6"
                            placeholder="Enter School Mission Statement..."
                        >{{ old('mission', $visionMission?->mission) }}</textarea>
                    </div>

                    <button
                        type="submit"
                        class="btn btn-primary w-100"
                    >
                        <i class="bx bx-save me-1"></i>
                        Save Vision & Mission
                    </button>

                </form>

            </div>
        </div>

    </div>

    {{-- DISPLAY SECTION --}}
    <div class="col-xl-7">

        <div class="accordion" id="visionMissionAccordion">

            {{-- VISION CARD --}}
            <div class="card border shadow-none mb-3">

                <div class="card-header bg-transparent">
                    <h5 class="mb-0">
                        <button
                            class="btn btn-link text-decoration-none text-dark fw-bold p-0"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#visionCollapse"
                            aria-expanded="true"
                            aria-controls="visionCollapse"
                        >
                            Vision Statement
                        </button>
                    </h5>
                </div>

                <div
                    id="visionCollapse"
                    class="collapse show"
                    data-bs-parent="#visionMissionAccordion"
                >
                    <div class="card-body">

                        @if(!empty($visionMission?->vision))
                            {!! $visionMission->vision !!}
                        @else
                            <span class="text-muted">
                                No vision statement has been added yet.
                            </span>
                        @endif

                    </div>
                </div>

            </div>

            {{-- MISSION CARD --}}
            <div class="card border shadow-none">

                <div class="card-header bg-transparent">
                    <h5 class="mb-0">
                        <button
                            class="btn btn-link text-decoration-none text-dark fw-bold p-0"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#missionCollapse"
                            aria-expanded="false"
                            aria-controls="missionCollapse"
                        >
                            Mission Statement
                        </button>
                    </h5>
                </div>

                <div
                    id="missionCollapse"
                    class="collapse"
                    data-bs-parent="#visionMissionAccordion"
                >
                    <div class="card-body">

                        @if(!empty($visionMission?->mission))
                            {!! $visionMission->mission !!}
                        @else
                            <span class="text-muted">
                                No mission statement has been added yet.
                            </span>
                        @endif

                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

@endsection