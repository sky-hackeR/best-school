@extends('admin.layout.auth')

@section('content')
<div class="w-100">
    <div class="text-center mb-4">
        <div class="mb-3">
            <i class="ri-key-2-line display-5 text-muted"></i>
        </div>
        <h5 class="text-dark fw-bold fs-22">Set New Password</h5>
        <p class="text-muted">Your new password must be different from previously used passwords.</p>
    </div>

    <form method="POST" action="{{ url('/admin/password/reset') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="mb-3">
            <label for="email" class="form-label fw-semibold">Email Address</label>
            <div class="input-group">
                <span class="input-group-text bg-light border-end-0 text-dark">
                    <i class="ri-mail-line"></i>
                </span>
                <input type="email" 
                       class="form-control bg-light border-start-0 ps-0 @error('email') is-invalid @enderror" 
                       name="email" 
                       id="email" 
                       placeholder="Enter email" 
                       value="{{ $email ?? old('email') }}" 
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
            <label class="form-label fw-semibold" for="password-input">New Password</label>
            <div class="input-group mb-3">
                <span class="input-group-text bg-light border-end-0 text-dark">
                    <i class="ri-lock-password-line"></i>
                </span>
                <input type="password" 
                       class="form-control bg-light border-start-0 border-end-0 ps-0 @error('password') is-invalid @enderror" 
                       name="password" 
                       id="password-input" 
                       placeholder="Enter new password"
                       required>
                <button class="btn btn-light border-start-0 text-muted" type="button" id="password-addon">
                    <i class="ri-eye-fill align-middle"></i>
                </button>

                @error('password')
                    <div class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold" for="confirm-password-input">Confirm Password</label>
            <div class="input-group mb-3">
                <span class="input-group-text bg-light border-end-0 text-dark">
                    <i class="ri-checkbox-circle-line"></i>
                </span>
                <input type="password" 
                       class="form-control bg-light border-start-0 ps-0" 
                       name="password_confirmation" 
                       id="confirm-password-input" 
                       placeholder="Confirm new password"
                       required>
            </div>
            @error('password_confirmation')
                <div class="text-danger small mt-1">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>

        <div class="mt-4">
            <button class="btn btn-dark w-100 fw-bold shadow" type="submit">
                <i class="ri-save-line me-1"></i> Reset Password
            </button>
        </div>

        <div class="mt-4 text-center">
            <p class="mb-0">Remembered it? <a href="{{ url('/admin/login') }}" class="fw-semibold text-primary text-decoration-underline"> Login </a> </p>
        </div>
    </form>
</div>
@endsection