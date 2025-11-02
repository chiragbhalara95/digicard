@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-gradient text-white text-center py-4 rounded-top-4"
                    style="background: linear-gradient(135deg, #6f42c1, #6610f2);">
                    <h4 class="mb-0 fw-bold">{{ __('Reset Your Password') }}</h4>
                    <p class="mb-0 small opacity-75">{{ __('Enter your new password below') }}</p>
                </div>

                <div class="card-body p-4">
                    <form method="POST" action="{{ route('reset.password.post') }}" id="resetForm">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        {{-- Email --}}
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">{{ __('Email Address') }}</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-envelope-fill text-primary"></i>
                                </span>
                                <input id="email" type="email"
                                       class="form-control border-start-0 @error('email') is-invalid @enderror"
                                       name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- New Password --}}
                        <div class="mb-3">
                            <label for="password" class="form-label fw-semibold">{{ __('New Password') }}</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-lock-fill text-primary"></i>
                                </span>
                                <input id="password" type="password"
                                       class="form-control border-start-0 @error('password') is-invalid @enderror"
                                       name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-text">Must be at least 8 characters long.</div>
                        </div>

                        {{-- Confirm Password --}}
                        <div class="mb-4">
                            <label for="password-confirm" class="form-label fw-semibold">{{ __('Confirm Password') }}</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-check-circle-fill text-primary"></i>
                                </span>
                                <input id="password-confirm" type="password"
                                       class="form-control border-start-0" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        {{-- Submit --}}
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg rounded-pill shadow-sm">
                                <i class="bi bi-arrow-repeat me-2"></i> {{ __('Reset Password') }}
                            </button>
                        </div>
                    </form>
                </div>

                <div class="card-footer text-center bg-light py-3 rounded-bottom-4">
                    <a href="{{ route('login') }}" class="text-decoration-none text-primary fw-semibold">
                        <i class="bi bi-arrow-left"></i> {{ __('Back to Login') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
