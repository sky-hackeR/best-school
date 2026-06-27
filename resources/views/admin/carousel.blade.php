@extends('admin.layout.dashboard')

@section('content')

{{-- PAGE HEADER --}}
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Carousels</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Carousels</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="row">
    {{-- MAIN CAROUSEL TABLE PANEL --}}
    <div class="col-xl-9">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-transparent border-bottom d-flex align-items-center justify-content-between">
                <div>
                    <h4 class="card-title mb-0">Carousel Management</h4>
                    <p class="text-muted mb-0 small">Configure background image slides, headings, and CTA configurations.</p>
                </div>
                <button type="button" class="btn btn-primary btn-rounded px-4" data-bs-toggle="modal" data-bs-target="#addCarousel">
                    <i class="bx bx-plus me-1"></i> Add Carousel
                </button>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-hover table-bordered align-middle dt-responsive nowrap w-100">
                        <thead class="table-light">
                            <tr>
                                <th class="text-center" style="width: 70px;">Image</th>
                                <th>Tagline</th>
                                <th>Button Text</th>
                                <th>Button Link</th>
                                <th>Status</th>
                                <th>Set Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($carousels as $carousel)
                                <tr>
                                    <td class="text-center">
                                        <div class="avatar-sm mx-auto">
                                            <img src="{{ $carousel->image ? asset($carousel->image) : asset('assets/images/small/img-1.jpg') }}" 
                                                 alt="Carousel Thumbnail" 
                                                 class="avatar-title rounded-circle img-thumbnail shadow-sm img-fluid"
                                                 style="object-fit: cover; height: 100%; width: 100%;">
                                        </div>
                                    </td>
                                    <td>
                                        <h5 class="font-size-14 mb-0 text-dark fw-semibold">{{ $carousel->tagline }}</h5>
                                    </td>
                                    <td>{{ $carousel->button_text ?? 'N/A' }}</td>
                                    <td>
                                        @if($carousel->button_link)
                                            <span class="text-muted font-size-13">{{ Str::limit($carousel->button_link, 25) }}</span>
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td>
                                        <span class="badge {{ $carousel->status === 'active' ? 'bg-soft-success text-success' : 'bg-soft-danger text-danger' }} font-size-12 px-2 py-1">
                                            {{ ucfirst($carousel->status) }}
                                        </span>
                                    </td>
                                    <td>
                                        <form action="{{ url('admin/setCarouselStatus') }}" method="POST" class="d-flex flex-wrap gap-1">
                                            @csrf
                                            <input type="hidden" name="carousel_id" value="{{ $carousel->id }}">
                                            @foreach(['active', 'inactive'] as $status)
                                                <button 
                                                    type="submit" 
                                                    name="status" 
                                                    value="{{ $status }}" 
                                                    class="btn btn-sm {{ $carousel->status === $status ? ($status === 'active' ? 'btn-success' : 'btn-danger') : 'btn-outline-secondary' }} waves-effect py-0 px-2 font-size-11">
                                                    {{ ucfirst($status) }}
                                                </button>
                                            @endforeach
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center gap-1">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#viewCarousel{{ $carousel->id }}" class="btn btn-soft-info btn-sm" title="View Carousel">
                                                <i class="bx bx-show-alt font-size-16"></i>
                                            </button>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#editCarousel{{ $carousel->id }}" class="btn btn-soft-primary btn-sm" title="Edit Slide">
                                                <i class="bx bx-pencil font-size-16"></i>
                                            </button>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#deleteCarousel{{ $carousel->id }}" class="btn btn-soft-danger btn-sm" title="Remove Carousel">
                                                <i class="bx bx-trash font-size-16"></i>
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

    {{-- RIGHT SIDE PANEL: METRICS & INFOBAR --}}
    <div class="col-xl-3">
        <div class="card shadow-sm border-0 bg-primary text-white mb-4">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <p class="text-white-50 fw-medium mb-2">Total Slides</p>
                        <h3 class="text-white mb-0">{{ $carousels->count() }}</h3>
                    </div>
                    <div class="avatar-sm">
                        <span class="avatar-title bg-soft-light text-white rounded-circle font-size-20">
                            <i class="bx bx-image-add"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Live Guidelines</h5>
                <div class="alert alert-soft-info border-info font-size-13 mb-0">
                    <i class="bx bx-info-circle me-1"></i> 
                    For crisp and seamless rendering across dynamic device resolutions, upload banner graphic templates scaling explicitly up to <strong>1920x800px</strong> boundaries.
                </div>
                
                <ul class="list-group list-group-flush mt-3 font-size-13">
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        Active Banners <span class="badge bg-success rounded-pill">{{ $carousels->where('status', 'active')->count() }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        Inactive Hidden <span class="badge bg-secondary rounded-pill">{{ $carousels->where('status', 'inactive')->count() }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

{{-- MODALS SECTION --}}
@foreach($carousels as $carousel)
    
    {{-- VIEW CAROUSEL DETAILS MODAL --}}
    <div class="modal fade" id="viewCarousel{{ $carousel->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-light">
                    <h5 class="modal-title">Carousel Detail View</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="card mb-0 border-0">
                        <div class="row g-0 align-items-stretch">
                            {{-- LEFT SIDE BANNER WRAP --}}
                            <div class="col-md-5 border-end text-center p-4 bg-light d-flex flex-column justify-content-top align-items-center">
                                <img src="{{ $carousel->image ? asset($carousel->image) : asset('assets/images/small/img-1.jpg') }}" 
                                     alt="Carousel Preview" 
                                     class="img-fluid rounded border shadow-sm mb-3" 
                                     style="max-height: 220px; object-fit: cover; width: 100%;">
                                <div>
                                    <span class="badge rounded-pill {{ $carousel->status === 'active' ? 'bg-soft-success text-success' : 'bg-soft-danger text-danger' }} px-3 py-1">
                                        {{ ucfirst($carousel->status) }} Layout
                                    </span>
                                </div>
                            </div>

                            {{-- RIGHT SIDE DETAILS GRID --}}
                            <div class="col-md-7">
                                <div class="card-body p-4">
                                    <h6 class="text-muted text-uppercase font-size-11 fw-bold mb-3" style="letter-spacing: 0.5px;">Textual Elements</h6>
                                    
                                    <div class="row mb-3">
                                        <div class="col-sm-4 text-muted font-size-13">Tagline Content:</div>
                                        <div class="col-sm-8 fw-semibold text-dark">{{ $carousel->tagline }}</div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-4 text-muted font-size-13">Hero Heading:</div>
                                        <div class="col-sm-8 text-secondary">{!! $carousel->hero_heading ?? 'N/A' !!}</div>
                                    </div>

                                    <hr class="my-3 opacity-50">

                                    <h6 class="text-muted text-uppercase font-size-11 fw-bold mb-3" style="letter-spacing: 0.5px;">Target Navigation Setup</h6>
                                    
                                    <div class="row mb-3">
                                        <div class="col-sm-4 text-muted font-size-13">Action Label:</div>
                                        <div class="col-sm-8 fw-medium text-dark">{{ $carousel->button_text ?? 'N/A' }}</div>
                                    </div>
                                    
                                    <div class="row mb-0">
                                        <div class="col-sm-4 text-muted font-size-13">Hyperlink URI:</div>
                                        <div class="col-sm-8 text-break text-primary font-size-13 fw-medium">{{ $carousel->button_link ?? 'N/A' }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- UPDATE CAROUSEL MODAL --}}
    <div id="editCarousel{{ $carousel->id }}" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-light">
                    <h5 class="modal-title">Update Carousel Component</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('/admin/updateCarousel') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body p-4">
                        <input type="hidden" name="carousel_id" value="{{ $carousel->id }}">
        
                        <div class="row">
                            <div class="col-md-3 text-center mb-4 border-end">
                                <div>
                                    <img id="image-preview-{{ $carousel->id }}" 
                                         src="{{ $carousel->image ? asset($carousel->image) : asset('assets/images/small/img-1.jpg') }}"
                                         alt="Carousel Fluid Preview"
                                         class="img-thumbnail mb-2 shadow-sm"
                                         style="width: 100%; max-width: 180px; height: 130px; object-fit: cover; border-radius: 8px;">
                                </div>
                                <label class="form-label font-size-13 mt-2 fw-semibold">Change Image Asset</label>
                                <input type="file" class="form-control form-control-sm" name="image" accept="image/*" onchange="previewImage(this, 'image-preview-{{ $carousel->id }}')">
                            </div>
        
                            <div class="col-md-9">
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <label class="form-label fw-bold">Tagline *</label>
                                        <input type="text" class="form-control" name="tagline" value="{{ $carousel->tagline }}" required>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <label class="form-label fw-bold">Hero Heading</label>
                                        <input class="form-control" type="text" name="hero_heading" rows="2" value="{{ $carousel->hero_heading }}">
                                    </div>
        
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold">Button Text</label>
                                        <input type="text" class="form-control" name="button_text" value="{{ $carousel->button_text }}">
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold">Button Link</label>
                                        <input type="text" class="form-control" name="button_link" value="{{ $carousel->button_link }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer bg-light">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success px-4 fw-bold">Update Carousel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- DELETE CAROUSEL MODAL --}}
    <div class="modal fade" id="deleteCarousel{{ $carousel->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form method="POST" action="{{ url('admin/deleteCarousel') }}" class="w-100">
                @csrf
                <input type="hidden" name="carousel_id" value="{{ $carousel->id }}">
                <div class="modal-content border-0 shadow">
                    <div class="modal-body text-center p-5">
                        <div class="avatar-lg mx-auto mb-4">
                            <div class="avatar-title bg-soft-danger text-danger display-4 rounded-circle">
                                <i class="bx bx-trash"></i>
                            </div>
                        </div>
                        <h4 class="text-danger">Remove Slider Instance?</h4>
                        <p class="text-muted">You are removing slide entry text data from active queues: <br><strong class="text-dark">"{{ $carousel->tagline }}"</strong>.</p>
                        
                        <div class="d-flex gap-2 mt-4">
                            <button type="button" class="btn btn-light w-50" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger w-50 shadow-sm">Confirm Deletion</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endforeach

{{-- ADD NEW CAROUSEL MODAL --}}
<div class="modal fade" id="addCarousel" data-bs-backdrop="static" tabindex="-1" aria-labelledby="addCarouselLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <form action="{{ url('/admin/newCarousel') }}" method="POST" enctype="multipart/form-data" class="w-100">
            @csrf
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-light">
                    <h5 class="modal-title" id="addCarouselLabel">Create New Carousel Slide</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label class="form-label fw-bold">Title Header *</label>
                            <input type="text" name="tagline" class="form-control" placeholder="Enter prominent banner main header text" required>
                        </div>
                        
                        <div class="col-md-12">
                            <label class="form-label fw-bold">Hero Heading Context</label>
                            <input name="hero_heading" type="text" class="form-control" rows="2" placeholder="Enter micro copy or details summary">
                        </div>
                        
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Button CTA text</label>
                            <input type="text" name="button_text" class="form-control" placeholder="e.g. Explore Portfolio">
                        </div>
                        
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Button Link URL</label>
                            <input type="text" name="button_link" class="form-control" placeholder="e.g. /services">
                        </div>
                        
                        <div class="col-md-12">
                            <label class="form-label fw-bold">Carousel Banner Graphic Asset *</label>
                            <input type="file" name="image" class="form-control" accept="image/*" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
                    <button type="submit" class="btn btn-success px-4 fw-bold">Save Carousel</button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- IMAGE PREVIEW SCRIPTS --}}
<script>
function previewImage(input, previewId) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById(previewId).setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>

@endsection