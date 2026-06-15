@extends('admin.layout.auth')

@section('content')
<div class="w-100">
    <div class="text-center mb-4">
        <h5 class="text-dark fw-bold fs-22">Admin Login <i class="ri-shield-check-line text-success ms-1"></i></h5>
        <p class="text-muted">Sign in to manage system resources.</p>
    </div>

    <form method="POST" action="{{ url('/admin/login') }}">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label fw-semibold">Administrative Email</label>
            <div class="input-group">
                <span class="input-group-text bg-light border-end-0 text-dark">
                    <i class="ri-user-settings-line"></i>
                </span>
                <input type="email" class="form-control bg-light border-start-0 ps-0 @error('email') is-invalid @enderror" 
                       id="email" name="email" placeholder="admin@system.com" value="{{ old('email') }}" autofocus>
                @error('email')
                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <div class="float-end">
                <a href="{{ url('/admin/password/reset') }}" class="text-muted text-decoration-underline fs-12">Forgot password?</a>
            </div>
            <label class="form-label fw-semibold" for="password-input">Password</label>
            <div class="input-group mb-3">
                <span class="input-group-text bg-light border-end-0 text-dark">
                    <i class="ri-lock-password-line"></i>
                </span>
                <input type="password" class="form-control bg-light border-start-0 border-end-0 ps-0 @error('password') is-invalid @enderror" 
                       name="password" id="password-input" placeholder="Enter secure password">
                <button class="btn btn-light border-start-0 text-muted" type="button" id="password-addon">
                    <i class="ri-eye-fill align-middle"></i>
                </button>
                @error('password')
                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="auth-remember-check">
            <label class="form-check-label" for="auth-remember-check">Keep me logged in</label>
        </div>

        <div class="mt-4">
            <button class="btn btn-dark w-100 fw-bold shadow" type="submit">
                <i class="ri-key-2-line me-1"></i> Access Dashboard
            </button>
        </div>
    </form>
</div>
@endsection