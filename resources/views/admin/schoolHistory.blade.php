@extends('admin.layout.dashboard')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">About Management</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">School History</li>
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
                    Update School History
                </h5>
            </div>

            <div class="card-body">

                <form
                    action="{{ url('/admin/updateSchoolHistory') }}"
                    method="POST"
                    enctype="multipart/form-data"
                >
                    @csrf

                    <input
                        type="hidden"
                        name="history_id"
                        value="{{ $history?->id }}"
                    >

                    <div class="mb-3">
                        <label class="form-label">
                            Section Title
                        </label>

                        <input
                            type="text"
                            name="title"
                            class="form-control"
                            value="{{ old('title', $history?->title) }}"
                            placeholder="Enter section title"
                            required
                        >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            School History Content
                        </label>
                        <textarea name="content" rows="12" class="form-control" placeholder="Write the history of the school...">{{ old('content', $history?->content) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Change Image
                        </label>

                        <input
                            type="file"
                            class="form-control"
                            name="image"
                            accept="image/*"
                        >

                        <small class="text-muted">
                            Recommended: About section image
                        </small>
                    </div>

                    <div class="mt-4">
                        <button
                            type="submit"
                            class="btn btn-primary w-100"
                        >
                            <i class="bx bx-save me-1"></i>
                            Save History
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>

    {{-- PREVIEW SECTION --}}
    <div class="col-xl-7">

        <div class="card border shadow-none">

            <div class="card-header bg-transparent border-bottom text-primary">
                <h5 class="card-title mb-0 font-weight-bold">
                    Current School History
                </h5>
            </div>

            <div class="card-body">

                @if($history)

                    <div class="row">

                        {{-- IMAGE PREVIEW --}}
                        <div class="col-lg-5 mb-4">

                            <h6 class="fw-bold mb-3">
                                History Image
                            </h6>

                            @if(!empty($history->image))
                                <div class="border rounded p-2 bg-light">
                                    <img
                                        src="{{ asset($history->image) }}"
                                        alt="{{ $history->title }}"
                                        class="img-fluid rounded"
                                        style="width:100%; object-fit:cover;"
                                    >
                                </div>
                            @else
                                <div
                                    class="alert alert-soft-warning mb-0 border-dashed"
                                    role="alert"
                                >
                                    No image uploaded.
                                </div>
                            @endif

                        </div>

                        {{-- CONTENT PREVIEW --}}
                        <div class="col-lg-7">

                            <h4 class="mb-3">
                                {{ $history->title }}
                            </h4>

                            <div
                                class="text-muted"
                                style="
                                    max-height: 450px;
                                    overflow-y: auto;
                                    line-height: 1.8;
                                "
                            >
                                {!! $history->content !!}
                            </div>

                        </div>

                    </div>

                @else

                    <div
                        class="alert alert-soft-warning mb-0 border-dashed"
                        role="alert"
                    >
                        <i class="bx bx-error-circle me-2"></i>

                        No school history has been added yet.
                    </div>

                @endif

            </div>

        </div>

    </div>

</div>

@endsection