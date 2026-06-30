@extends('admin.layout.dashboard')

@section('content')

{{-- PAGE HEADER --}}
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Site Sections</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">
                        Management Team
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="row">

    {{-- MAIN TABLE --}}
    <div class="col-xl-9">

        <div class="card shadow-sm border-0">

            <div class="card-header bg-transparent border-bottom d-flex align-items-center justify-content-between">

                <div>
                    <h4 class="card-title mb-0">
                        Management Team
                    </h4>

                    <p class="text-muted mb-0 small">
                        Upload and manage management team displayed across the website.
                    </p>
                </div>

                <button
                    type="button"
                    class="btn btn-primary btn-rounded px-4"
                    data-bs-toggle="modal"
                    data-bs-target="#addManagement"
                >
                    <i class="bx bx-plus me-1"></i>
                    Add Member 
                </button>

            </div>

            <div class="card-body">

                <div class="table-responsive">

                    <table
                        id="datatable-buttons"
                        class="table table-hover table-bordered align-middle dt-responsive nowrap w-100"
                    >

                        <thead class="table-light">

                            <tr>
                                <th class="text-center" style="width:80px">
                                    Image
                                </th>

                                <th>
                                    Name
                                </th>

                                <th>
                                    Role
                                </th>

                                <th>
                                    Status
                                </th>

                                <th>
                                    Set Status
                                </th>

                                <th class="text-center">
                                    Actions
                                </th>
                            </tr>

                        </thead>

                        <tbody>

                            @foreach($management as $item)

                                <tr>

                                    <td class="text-center">

                                        <div class="avatar-sm mx-auto">

                                            <img
                                                src="{{ asset($item->image) }}"
                                                class="rounded"
                                                style="object-fit:cover;height:100%;width:100%;"
                                            >

                                        </div>

                                    </td>

                                    <td>

                                        <h5 class="font-size-14 mb-0 text-dark fw-semibold">
                                            {{ $item->name }}
                                        </h5>

                                    </td>

                                    <td>
                                        {{ $item->role }}
                                    </td>

                                    <td>

                                        <span class="badge {{ $item->status == 'active' ? 'bg-soft-success text-success' : 'bg-soft-danger text-danger' }} font-size-12 px-2 py-1">
                                            {{ ucfirst($item->status) }}
                                        </span>

                                    </td>

                                    <td>

                                        <form action="{{ url('/admin/setManagementStatus') }}" method="POST" class="d-flex flex-wrap gap-1">

                                            @csrf

                                            <input type="hidden" name="management_id" value="{{ $item->id }}">

                                            @foreach(['active','inactive'] as $status)

                                                <button
                                                    type="submit"
                                                    name="status"
                                                    value="{{ $status }}"
                                                    class="btn btn-sm {{ $item->status == $status ? ($status == 'active' ? 'btn-success' : 'btn-danger') : 'btn-outline-secondary' }}"
                                                >
                                                    {{ ucfirst($status) }}
                                                </button>

                                            @endforeach

                                        </form>

                                    </td>

                                    <td class="text-center">

                                        <div class="d-flex justify-content-center gap-1">

                                            <button
                                                type="button"
                                                class="btn btn-soft-info btn-sm"
                                                data-bs-toggle="modal"
                                                data-bs-target="#viewManagement{{ $item->id }}"
                                            >
                                                <i class="bx bx-show-alt"></i>
                                            </button>

                                            <button
                                                type="button"
                                                class="btn btn-soft-primary btn-sm"
                                                data-bs-toggle="modal"
                                                data-bs-target="#editManagement{{ $item->id }}"
                                            >
                                                <i class="bx bx-pencil"></i>
                                            </button>

                                            <button
                                                type="button"
                                                class="btn btn-soft-danger btn-sm"
                                                data-bs-toggle="modal"
                                                data-bs-target="#deleteManagement{{ $item->id }}"
                                            >
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

    {{-- RIGHT PANEL --}}
    <div class="col-xl-3">

        <div class="card shadow-sm border-0 bg-primary text-white mb-4">

            <div class="card-body">

                <div class="d-flex align-items-center">

                    <div class="flex-grow-1">

                        <p class="text-white-50 fw-medium mb-2">
                            Total Members
                        </p>

                        <h3 class="text-white mb-0">
                            {{ $management->count() }}
                        </h3>

                    </div>

                    <div class="avatar-sm">

                        <span class="avatar-title bg-soft-light text-white rounded-circle font-size-20">

                            <i class="bx bxs-user-detail"></i>

                        </span>

                    </div>

                </div>

            </div>

        </div>

        <div class="card shadow-sm border-0">

            <div class="card-body">

                <h5 class="card-title mb-3">
                    Management Guidelines
                </h5>

                <div class="alert alert-soft-info border-info font-size-13 mb-0">

                    <i class="bx bx-info-circle me-1"></i>

                    Upload high-quality images.

                    Recommended minimum size:

                    <strong>1200 × 800px</strong>

                </div>

                <ul class="list-group list-group-flush mt-3 font-size-13">

                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">

                        Active Members

                        <span class="badge bg-success rounded-pill">
                            {{ $management->where('status','active')->count() }}
                        </span>

                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">

                        Hidden Members

                        <span class="badge bg-secondary rounded-pill">
                            {{ $management->where('status','inactive')->count() }}
                        </span>

                    </li>

                </ul>

            </div>

        </div>

    </div>

</div>


@foreach($management as $item)

    {{-- VIEW Management MODAL --}}
    <div class="modal fade" id="viewManagement{{ $item->id }}" tabindex="-1" aria-hidden="true">

        <div class="modal-dialog modal-lg modal-dialog-centered">

            <div class="modal-content border-0 shadow">

                <div class="modal-header bg-light">

                    <h5 class="modal-title">
                        Management Image Details
                    </h5>

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                    ></button>

                </div>

                <div class="modal-body p-0">

                    <div class="row g-0">

                        <div class="col-md-5 border-end bg-light text-center p-4">

                            <img
                                src="{{ asset($item->image) }}"
                                class="img-fluid rounded shadow-sm border"
                                style="max-height:300px;width:100%;object-fit:cover;"
                            >

                            <div class="mt-3">

                                <span class="badge {{ $item->status == 'active' ? 'bg-soft-success text-success' : 'bg-soft-danger text-danger' }}">
                                    {{ ucfirst($item->status) }}
                                </span>

                            </div>

                        </div>

                        <div class="col-md-7">

                            <div class="card-body p-4">

                                <h6 class="text-muted text-uppercase mb-3">
                                    Management Information
                                </h6>

                                <div class="row mb-3">

                                    <div class="col-sm-4 text-muted">
                                        Role:
                                    </div>

                                    <div class="col-sm-8 fw-semibold">
                                        {{ $item->role }}
                                    </div>

                                </div>

                                <div class="row mb-3">

                                    <div class="col-sm-4 text-muted">
                                        Name:
                                    </div>

                                    <div class="col-sm-8 fw-semibold">
                                        {{ $item->name }}
                                    </div>

                                </div>

                                <div class="row mb-3">

                                    <div class="col-sm-4 text-muted">
                                        Status
                                    </div>

                                    <div class="col-sm-8">
                                        {{ ucfirst($item->status) }}
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-sm-4 text-muted">
                                        Created
                                    </div>

                                    <div class="col-sm-8">
                                        {{ $item->created_at->format('d M, Y') }}
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="modal-footer bg-light">

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


    {{-- EDIT Management MODAL --}}
    <div class="modal fade" id="editManagement{{ $item->id }}" tabindex="-1" aria-hidden="true">

        <div class="modal-dialog modal-lg modal-dialog-centered">


            <form
                action="{{ url('/admin/updateManagement') }}"
                method="POST"
                enctype="multipart/form-data"
                class="w-100"
            >

                @csrf

                <input
                    type="hidden"
                    name="management_id"
                    value="{{ $item->id }}"
                >

                <div class="modal-content border-0 shadow">

                    <div class="modal-header bg-light">

                        <h5 class="modal-title">
                            Update Member Details
                        </h5>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                        ></button>

                    </div>

                    <div class="modal-body p-4">

                        <div class="row">

                            <div class="col-md-6 border-end text-center">

                                <img
                                    id="management-preview-{{ $item->id }}"
                                    src="{{ asset($item->image) }}"
                                    class="img-thumbnail shadow-sm mb-3"
                                    style="width:100%;max-width:240px;height:240px;object-fit:cover;"
                                >
                                <br>

                                <label class="form-label fw-semibold">
                                    Change Image
                                </label>

                                <input
                                    type="file"
                                    name="image"
                                    class="form-control form-control-sm"
                                    accept="image/*"
                                    onchange="previewImage(this,'management-preview-{{ $item->id }}')"
                                >

                            </div>

                            <div class="col-md-6">

                                <div class="row g-3">

                                    <div class="col-md-12">

                                        <label class="form-label fw-bold">
                                            Role
                                        </label>

                                        <input
                                            type="text"
                                            name="role"
                                            class="form-control"
                                            value="{{ $item->role }}"
                                            required
                                        >

                                    </div>


                                    <div class="col-md-12">

                                        <label class="form-label fw-bold">
                                            Name
                                        </label>

                                        <input
                                            type="text"
                                            name="name"
                                            class="form-control"
                                            value="{{ $item->name }}"
                                            required
                                        >

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="modal-footer bg-light">

                        <button
                            type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal"
                        >
                            Close
                        </button>

                        <button
                            type="submit"
                            class="btn btn-success px-4"
                        >
                            Update Member
                        </button>

                    </div>

                </div>

            </form>

        </div>

    </div>


    {{-- DELETE Management MODAL --}}
    <div class="modal fade" id="deleteManagement{{ $item->id }}" tabindex="-1" aria-hidden="true">

        <div class="modal-dialog modal-lg modal-dialog-centered">

            <form
                action="{{ url('/admin/deleteManagement') }}"
                method="POST"
                class="w-100"
            >

                @csrf

                <input
                    type="hidden"
                    name="management_id"
                    value="{{ $item->id }}"
                >

                <div class="modal-content border-0 shadow">

                    <div class="modal-body text-center p-5">

                        <div class="avatar-lg mx-auto mb-4">

                            <div class="avatar-title bg-soft-danger text-danger display-4 rounded-circle">

                                <i class="bx bx-trash"></i>

                            </div>

                        </div>

                        <h4 class="text-danger">
                            Delete Management Member?
                        </h4>

                        <p class="text-muted">

                            You are about to permanently remove this member from the management.

                        </p>

                        <div class="mt-3">

                            <img
                                src="{{ asset($item->image) }}"
                                class="img-thumbnail"
                                style="height:240px;width:240px;"
                            >

                            <p class="mt-2 fw-semibold mb-0">
                                {{ $item->name }}
                            </p>

                        </div>

                        <div class="d-flex gap-2 mt-4">

                            <button
                                type="button"
                                class="btn btn-light w-50"
                                data-bs-dismiss="modal"
                            >
                                Cancel
                            </button>

                            <button
                                type="submit"
                                class="btn btn-danger w-50"
                            >
                                Confirm Delete
                            </button>

                        </div>

                    </div>

                </div>

            </form>

        </div>

    </div>

@endforeach

{{-- ADD Management MODAL --}}
<div class="modal fade" id="addManagement" tabindex="-1">

    <div class="modal-dialog modal-lg modal-dialog-centered">

        <form
            action="{{ url('/admin/newManagement') }}"
            method="POST"
            enctype="multipart/form-data"
            class="w-100"
        >

            @csrf

            <div class="modal-content border-0 shadow">

                <div class="modal-header bg-light">

                    <h5 class="modal-title">
                        Add Management Member
                    </h5>

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                    ></button>

                </div>

                <div class="modal-body p-4">

                    <div class="row">

                        {{-- <div class="col-md-6 border-end text-center">

                            <label class="form-label fw-bold">
                                Upload Image 
                            </label>

                            <input
                                type="file"
                                name="image"
                                class="form-control"
                                accept="image/*"
                                required
                            >

                        </div> --}}

                        <div class="col-md-6 border-end text-center"> 
                            <label class="form-label fw-bold">Upload Image</label> 
                            <input type="file" name="image" id="imageInput" class="form-control" accept="image/*" required>
                            
                            <!-- Image preview container -->
                            <div class="mt-3">
                                <img id="imagePreview" src="#" alt="Image Preview" class="img-fluid d-none" style="max-height: 200px;">
                            </div>
                        </div>


                        <div class="col-md-6">

                            <div class="row g-3">

                                <div class="col-md-12">

                                    <label class="form-label fw-bold">
                                        Role
                                    </label>

                                    <input
                                        type="text"
                                        name="role"
                                        class="form-control"
                                        placeholder="e.g Chairman, Headteacher"
                                        required
                                    >

                                </div>


                                <div class="col-md-12">

                                    <label class="form-label fw-bold">
                                        Name
                                    </label>

                                    <input
                                        type="text"
                                        name="name"
                                        class="form-control"
                                        placeholder="e.g Title, Lastname, Firstname"
                                        required
                                    >

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="modal-footer bg-light">

                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                    >
                        Close
                    </button>

                    <button
                        type="submit"
                        class="btn btn-success px-4"
                    >
                        Save Image
                    </button>

                </div>

            </div>

        </form>

    </div>

</div>

<script>
    document.getElementById('imageInput').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const preview = document.getElementById('imagePreview');
    
    if (file) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.classList.remove('d-none'); 
        }
        
        reader.readAsDataURL(file);
    } else {
        preview.src = '#';
        preview.classList.add('d-none');
    }
});

</script>

@endsection