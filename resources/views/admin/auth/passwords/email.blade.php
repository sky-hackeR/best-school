@extends('admin.layout.auth')

@section('content')
<div class="w-100">
    <div class="text-center mb-4">
        <div class="mb-3">
            <i class="ri-lock-unlock-line display-5 text-muted"></i>
        </div>
        <h5 class="text-dark fw-bold fs-22">Forgot Password?</h5>
        <p class="text-muted">Enter your email and we'll send you instructions to reset your admin credentials.</p>
    </div>

    @if (session('status'))
        <div class="alert alert-success border-0 bg-success-subtle text-success mb-4" role="alert">
            <i class="ri-check-double-line me-1"></i> {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ url('/admin/password/email') }}">
        @csrf

        <div class="mb-4">
            <label for="email" class="form-label fw-semibold">Administrative Email</label>
            <div class="input-group">
                <span class="input-group-text bg-light border-end-0 text-dark">
                    <i class="ri-mail-send-line"></i>
                </span>
                <input type="email" 
                       class="form-control bg-light border-start-0 ps-0 @error('email') is-invalid @enderror" 
                       id="email" 
                       name="email" 
                       placeholder="admin@system.com" 
                       value="{{ old('email') }}" 
                       required 
                       autofocus>
                
                @error('email')
                    <div class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <button class="btn btn-dark w-100 fw-bold shadow" type="submit">
                <i class="ri-mail-check-line me-1"></i> Send Password Reset Link
            </button>
        </div>
    </form>

    <div class="text-center mt-4">
        <p class="mb-0">Wait, I remember my password... 
            <a href="{{ url('/admin/login') }}" class="fw-bold text-primary text-decoration-underline">
                 Signin here
            </a>
        </p>
    </div>
</div>
@endsection