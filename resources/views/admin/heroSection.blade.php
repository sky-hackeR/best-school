@extends('admin.layout.dashboard')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Hero Customizer</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Hero Section</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<form action="{{ url('/admin/updateHeroSection') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="hero_section_id" value="{{ $carousel?->id }}">

    <div class="row">
        <div class="col-xxl-6 col-lg-7">
            <div class="card">
                <div class="card-body p-4">
                    
                    <ul class="nav nav-tabs nav-tabs-custom nav-success nav-justified mb-4" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#hero-content" role="tab">
                                <i class="ri-file-text-line me-1 align-bottom"></i> 1. Content & Links
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#hero-media" role="tab">
                                <i class="ri-image-2-line me-1 align-bottom"></i> 2. Slider Assets
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content text-muted">
                        
                        <div class="tab-pane active" id="hero-content" role="tabpanel">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="title" class="form-label fw-semibold">Hero Heading</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $carousel?->title) }}" placeholder="e.g., Transforming Digital Education">
                                </div>

                                <div class="col-12">
                                    <label for="subtitle" class="form-label fw-semibold">Supporting Paragraph</label>
                                    <textarea class="form-control" id="subtitle" name="subtitle" rows="4" placeholder="Enter the text that displays below the headline...">{{ old('subtitle', $carousel?->subtitle) }}</textarea>
                                </div>

                                <div class="col-md-6">
                                    <label for="button_text" class="form-label fw-semibold">Button Label</label>
                                    <input type="text" class="form-control" id="button_text" name="button_text" value="{{ old('button_text', $carousel?->button_text) }}" placeholder="e.g., Get Started">
                                </div>

                                <div class="col-md-6">
                                    <label for="button_link" class="form-label fw-semibold">Button URL</label>
                                    <input type="text" class="form-control" id="button_link" name="button_link" value="{{ old('button_link', $carousel?->button_link) }}" placeholder="e.g., /admissions">
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="hero-media" role="tabpanel">
                            <p class="text-muted mb-4 small"><i class="ri-info-letter-line me-1 text-info"></i> Uploading a new image will replace the active asset for that slot.</p>
                            
                            <div class="row g-4">
                                @foreach([
                                    ['key' => 'image_1', 'label' => 'Primary Slide Image'],
                                    ['key' => 'image_2', 'label' => 'Secondary Slide Image'],
                                    ['key' => 'image_3', 'label' => 'Tertiary Slide Image']
                                ] as $img)
                                    @php $field = $img['key']; @endphp
                                    <div class="col-12">
                                        <div class="border border-dashed rounded p-3">
                                            <label class="form-label fw-medium text-dark d-block mb-2">{{ $img['label'] }}</label>
                                            <input type="file" class="form-control" name="{{ $field }}" accept="image/*">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div><div class="text-end mt-4 pt-3 border-top">
                        <button type="submit" class="btn btn-success btn-label right shadow">
                            <i class="ri-send-plane-fill label-icon align-middle fs-16 ms-2"></i> Deploy Changes
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-xxl-6 col-lg-5">
            <div class="card card-height-100 bg-light bg-opacity-50 border shadow-none">
                <div class="card-header bg-transparent border-bottom align-items-center d-flex">
                    <h5 class="card-title mb-0 flex-grow-1 text-dark fw-semibold">Active Composition</h5>
                    <span class="badge bg-soft-success text-success fs-11">Live Preview</span>
                </div>
                
                <div class="card-body d-flex flex-column justify-content-between">
                    
                    <div class="bg-white p-4 rounded-3 border shadow-sm mb-4">
                        <span class="badge bg-soft-primary text-primary text-uppercase tracking-wider mb-2 fs-10">Hero Element Preview</span>
                        <h2 class="text-dark fw-bold mb-2 fs-22">{{ $carousel?->title ?: 'Headline text unassigned.' }}</h2>
                        <p class="text-muted fs-13 mb-4">{{ $carousel?->subtitle ?: 'No context description or subtitle block configured.' }}</p>
                        
                        @if($carousel?->button_text)
                            <button type="button" class="btn btn-primary btn-sm px-4 rounded disabled">{{ $carousel->button_text }}</button>
                        @endif
                    </div>

                    <div>
                        <h6 class="text-muted text-uppercase fw-semibold fs-11 mb-3 tracking-wide">Stored Graphics Carousel Images</h6>
                        <div class="row g-3">
                            @foreach(['image_1' => 'Slot #1', 'image_2' => 'Slot #2', 'image_3' => 'Slot #3'] as $field => $slotLabel)
                                <div class="col-sm-4">
                                    <div class="card border mb-0 shadow-none">
                                        <div class="card-body p-2 text-center">
                                            <span class="text-muted small fw-medium d-block mb-2">{{ $slotLabel }}</span>
                                            @if($carousel?->$field)
                                                <div class="position-relative overflow-hidden rounded" style="height: 70px;">
                                                    <img src="{{ asset($carousel->$field) }}" alt="" class="w-100 h-100 object-fit-cover">
                                                </div>
                                            @else
                                                <div class="bg-light rounded d-flex align-items-center justify-content-center text-muted" style="height: 70px;">
                                                    <i class="ri-image-line fs-20 text-muted opacity-40"></i>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>
@endsection