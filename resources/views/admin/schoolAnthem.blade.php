@extends('admin.layout.dashboard')

@section('content')

{{-- PAGE HEADER --}}
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">About Management</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">School Anthem</li>
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
                    Update School Anthem
                </h5>
            </div>

            <div class="card-body">

                <form action="{{ url('/admin/updateSchoolAnthem') }}" method="POST">
                    @csrf

                    <input
                        type="hidden"
                        name="school_anthem_id"
                        value="{{ $anthem?->id }}"
                    >

                    {{-- TITLE --}}
                    <div class="mb-3">
                        <label class="form-label">
                            Anthem Title
                        </label>

                        <input
                            type="text"
                            name="title"
                            class="form-control"
                            value="{{ old('title', $anthem?->title) }}"
                            placeholder="Enter anthem title"
                        >
                    </div>

                    {{-- STANZAS --}}
                    <div id="stanzaContainer">

                        @if(!empty($anthem?->stanzas))

                            @foreach($anthem->stanzas as $index => $stanza)

                                <div class="stanza-item mb-3">

                                    <label class="form-label">
                                        Stanza {{ $index + 1 }}
                                    </label>

                                    <textarea
                                        name="stanzas[]"
                                        rows="5"
                                        class="form-control"
                                    >{{ $stanza }}</textarea>

                                </div>

                            @endforeach

                        @else

                            <div class="stanza-item mb-3">

                                <label class="form-label">
                                    Stanza 1
                                </label>

                                <textarea
                                    name="stanzas[]"
                                    rows="5"
                                    class="form-control"
                                    placeholder="Enter first stanza"
                                ></textarea>

                            </div>

                        @endif

                    </div>

                    {{-- ADD STANZA BUTTON --}}
                    <div class="mb-3">
                        <button
                            type="button"
                            class="btn btn-outline-primary"
                            id="addStanza"
                        >
                            <i class="bx bx-plus"></i>
                            Add Stanza
                        </button>
                    </div>

                    {{-- CHORUS --}}
                    <div class="mb-4">

                        <label class="form-label">
                            Chorus
                        </label>

                        <textarea
                            name="chorus"
                            rows="5"
                            class="form-control"
                            placeholder="Enter chorus"
                        >{{ old('chorus', $anthem?->chorus) }}</textarea>

                    </div>

                    <button
                        type="submit"
                        class="btn btn-primary w-100"
                    >
                        <i class="bx bx-save me-1"></i>
                        Save Anthem
                    </button>

                </form>

            </div>
        </div>

    </div>

    {{-- DISPLAY SECTION --}}
    <div class="col-xl-7">

        <div class="accordion" id="anthemAccordion">

            {{-- ANTHEM PREVIEW --}}
            <div class="card border shadow-none">

                <div class="card-header bg-transparent">
                    <h5 class="mb-0">
                        <button
                            class="btn btn-link text-decoration-none text-dark fw-bold p-0"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#anthemPreview"
                            aria-expanded="true"
                        >
                            Current School Anthem
                        </button>
                    </h5>
                </div>

                <div
                    id="anthemPreview"
                    class="collapse show"
                    data-bs-parent="#anthemAccordion"
                >

                    <div class="card-body">

                        @if(!empty($anthem))

                            <h4 class="mb-4">
                                {{ $anthem->title }}
                            </h4>

                            @foreach(($anthem->stanzas ?? []) as $index => $stanza)

                                <div class="mb-4">

                                    <h6 class="fw-bold text-primary">
                                        Stanza {{ $index + 1 }}
                                    </h6>

                                    <p class="mb-0" style="white-space: pre-line;">
                                        {!! $stanza !!}
                                    </p>

                                </div>

                            @endforeach

                            @if(!empty($anthem->chorus))

                                <div class="alert alert-light border">

                                    <h6 class="fw-bold text-success">
                                        Chorus
                                    </h6>

                                    <p class="mb-0" style="white-space: pre-line;">
                                        {!! $anthem->chorus !!}
                                    </p>

                                </div>

                            @endif

                        @else

                            <div class="text-muted">
                                No anthem has been added yet.
                            </div>

                        @endif

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection