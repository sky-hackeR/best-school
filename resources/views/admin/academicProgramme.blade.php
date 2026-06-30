@extends('admin.layout.dashboard')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Site Pages</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Academic Programmes</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-xl-9">

        <div class="card shadow-sm border-0">

            <div class="card-header bg-transparent border-bottom d-flex align-items-center justify-content-between">

                <div>
                    <h4 class="card-title mb-0">Academic Programmes</h4>
                    <p class="text-muted mb-0 small">Manage programmes and their subjects.</p>
                </div>

                <button class="btn btn-primary btn-rounded px-4" data-bs-toggle="modal" data-bs-target="#addProgramme">
                    <i class="bx bx-plus me-1"></i> Add Programme
                </button>

            </div>

            <div class="card-body">

                <div class="table-responsive">

                    <table id="datatable-buttons" class="table table-hover table-bordered align-middle dt-responsive nowrap w-100">

                        <thead class="table-light">
                            <tr>
                                <th>Programme Name</th>
                                <th>Total Subjects</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($programmes as $programme)

                                @php
                                    $subjects = is_array($programme->subjects) ? $programme->subjects : json_decode($programme->subjects, true);
                                    $subjects = $subjects ?? [];
                                @endphp

                                <tr>

                                    <td>
                                        <h5 class="font-size-14 mb-0 fw-semibold">
                                            {{ $programme->programme_name }}
                                        </h5>
                                    </td>

                                    <td>
                                        <span class="badge bg-soft-primary text-primary">
                                            {{ count($subjects) }} Subjects
                                        </span>
                                    </td>

                                    <td class="text-center">

                                        <div class="d-flex justify-content-center gap-1">

                                            <button class="btn btn-soft-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewProgramme{{ $programme->id }}">
                                                <i class="bx bx-show-alt"></i>
                                            </button>

                                            <button class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editProgramme{{ $programme->id }}">
                                                <i class="bx bx-pencil"></i>
                                            </button>

                                            <button class="btn btn-soft-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteProgramme{{ $programme->id }}">
                                                <i class="bx bx-trash"></i>
                                            </button>

                                        </div>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

    <div class="col-xl-3">

        <div class="card shadow-sm border-0 bg-primary text-white mb-4">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <p class="text-white-50 fw-medium mb-2">Programmes</p>
                        <h3 class="text-white mb-0">{{ $programmes->count() }}</h3>
                    </div>
                    <div class="avatar-sm">
                        <span class="avatar-title bg-soft-light text-white rounded-circle font-size-20">
                            <i class="bx bx-book-content"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body">

                <h5 class="card-title mb-3">Statistics</h5>

                <ul class="list-group list-group-flush">

                    @foreach($programmes as $programme)

                        @php
                            $subjects = is_array($programme->subjects) ? $programme->subjects : json_decode($programme->subjects, true);
                            $subjects = $subjects ?? [];
                        @endphp

                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            {{ $programme->programme_name }}
                            <span class="badge bg-primary rounded-pill">{{ count($subjects) }}</span>
                        </li>

                    @endforeach

                </ul>

            </div>
        </div>

    </div>

</div>



    @foreach($programmes as $programme)

        @php
            $subjects = is_array($programme->subjects) ? $programme->subjects : json_decode($programme->subjects, true);
            $subjects = $subjects ?? [];
        @endphp

        {{-- VIEW MODAL --}}
        <div class="modal fade" id="viewProgramme{{ $programme->id }}" tabindex="-1">

            <div class="modal-dialog modal-lg modal-dialog-centered">

                <div class="modal-content border-0 shadow">

                    <div class="modal-header bg-light">
                        <h5 class="modal-title">{{ $programme->programme_name }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">

                        <div class="row">

                            @foreach($subjects as $subject)

                                <div class="col-md-6 mb-2">
                                    <div class="alert alert-soft-primary mb-0">
                                        {{ $subject }}
                                    </div>
                                </div>

                            @endforeach

                        </div>

                    </div>

                </div>

            </div>

        </div>

        {{-- EDIT MODAL --}}
        <div class="modal fade" id="editProgramme{{ $programme->id }}" tabindex="-1">

            <div class="modal-dialog modal-lg modal-dialog-centered">

                <form action="{{ url('/admin/updateProgramme') }}" method="POST" class="w-100">

                    @csrf

                    <input type="hidden" name="programme_id" value="{{ $programme->id }}">

                    <div class="modal-content border-0 shadow">

                        <div class="modal-header bg-light">
                            <h5 class="modal-title">Edit Programme</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">

                            <div class="mb-3">
                                <label class="form-label fw-bold">Programme Name</label>
                                <input type="text" name="programme_name" class="form-control" value="{{ $programme->programme_name }}">
                            </div>

                            <label class="form-label fw-bold">Subjects</label>

                            <div class="subject-wrapper">

                                @foreach($subjects as $subject)

                                    <div class="input-group mb-2">
                                        <input type="text" name="subjects[]" class="form-control" value="{{ $subject }}">
                                        <button type="button" class="btn btn-danger remove-subject">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </div>

                                @endforeach

                                <button type="button" class="btn btn-success btn-sm add-subject-edit mt-2">
                                    Add Subject
                                </button>

                            </div>

                        </div>

                        <div class="modal-footer bg-light">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update Programme</button>
                        </div>

                    </div>

                </form>

            </div>

        </div>

        {{-- DELETE MODAL --}}
        <div class="modal fade" id="deleteProgramme{{ $programme->id }}" tabindex="-1">

            <div class="modal-dialog modal-md modal-dialog-centered">

                <form action="{{ url('/admin/deleteProgramme') }}" method="POST" class="w-100">

                    @csrf

                    <input type="hidden" name="programme_id" value="{{ $programme->id }}">

                    <div class="modal-content border-0 shadow">

                        <div class="modal-body text-center p-5">

                            <div class="avatar-lg mx-auto mb-4">
                                <div class="avatar-title bg-soft-danger text-danger display-4 rounded-circle">
                                    <i class="bx bx-trash"></i>
                                </div>
                            </div>

                            <h4 class="text-danger">Delete Programme?</h4>

                            <p class="text-muted">
                                You are about to delete
                                <strong>{{ $programme->programme_name }}</strong>
                            </p>

                            <div class="d-flex gap-2 mt-4">
                                <button type="button" class="btn btn-light w-50" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-danger w-50">Delete</button>
                            </div>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    @endforeach

    {{-- ADD PROGRAMME MODAL --}}
    <div class="modal fade" id="addProgramme" tabindex="-1">

        <div class="modal-dialog modal-dialog-centered">

            <form action="{{ url('/admin/newProgramme') }}" method="POST" class="w-100">

                @csrf

                <div class="modal-content border-0 shadow">

                    <div class="modal-header bg-light">
                        <h5 class="modal-title">Add Programme</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">

                        <div class="mb-3">
                            <label class="form-label fw-bold">Programme Name</label>
                            <input type="text" name="programme_name" class="form-control" required>
                        </div>

                        <label class="form-label fw-bold">Subjects</label>

                        <div id="add-subject-wrapper">

                            <div class="input-group mb-2">
                                <input type="text" name="subjects[]" class="form-control" placeholder="Enter Subject">
                                <button type="button" class="btn btn-success add-subject">
                                    <i class="bx bx-plus"></i>
                                </button>
                            </div>

                        </div>

                    </div>

                    <div class="modal-footer bg-light">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Programme</button>
                    </div>

                </div>

            </form>

        </div>

    </div>

@endsection


