@extends('layouts.app')

@section('custom_style')
<style>
  .login-container {
    max-width: 500px;
    margin: auto;
  }

  .login-card {
    background: linear-gradient(145deg, rgba(25,23,19,.98), rgba(18,17,14,.98));
    border: 1px solid rgba(215,181,106,.18);
    border-radius: 2rem;
    box-shadow: 0 24px 70px rgba(0,0,0,.34);
    overflow: hidden;
  }

  .login-header {
    background: transparent;
    color: #f5ecdd;
    font-family: 'Fraunces', Georgia, serif;
    text-align: left;
    padding: 2.25rem 2.25rem 0;
    font-size: 2rem;
    font-weight: 400;
  }

  .login-body {
    padding: 1.5rem 2.25rem 2.25rem;
  }

  .login-body label, .form-check-label { color: #b7afa4; font-size: .78rem; letter-spacing: .13em; text-transform: uppercase; }

  .form-control {
    background: #211f1b;
    border: 1px solid rgba(215,181,106,.16);
    border-radius: 1rem;
    padding: 0.75rem 1rem;
    font-size: 1rem;
    color: #f5ecdd;
    caret-color: #ebcf8c;
  }
  .form-control:focus { background: #211f1b; border-color: #d7b56a; box-shadow: 0 0 0 4px rgba(215,181,106,.11); color: #f5ecdd; }
  .form-control:-webkit-autofill, .form-control:-webkit-autofill:focus { -webkit-text-fill-color: #f5ecdd; -webkit-box-shadow: 0 0 0 1000px #211f1b inset; }
  .password-input-group .form-control { border-right: 0; border-radius: 1rem 0 0 1rem; }
  .password-input-group .password-toggle {
    width: 54px;
    background: #211f1b;
    border: 1px solid rgba(215,181,106,.16);
    border-left: 0;
    border-radius: 0 1rem 1rem 0;
    color: #d7b56a;
  }
  .password-input-group:focus-within .form-control,
  .password-input-group:focus-within .password-toggle { border-color: #d7b56a; }
  .password-input-group .password-toggle:hover { color: #ebcf8c; background: #29251f; }

  .input-group-addon a {
    color: #d7b56a;
    text-decoration: none;
  }

  .btn-primary {
    background: linear-gradient(100deg,#c69645,#ebcf8c);
    border: 0;
    color: #15120d;
    font-weight: 600;
    border-radius: 999px;
    padding: 0.75rem;
    width: 100%;
  }

  .btn-primary:hover {
    background: #ebcf8c;
    color: #15120d;
  }

  .btn-link {
    color: #d7b56a;
    text-decoration: none;
  }
  .btn-link:hover {
    text-decoration: underline;
  }

  @media (max-width: 576px) {
    .login-body {
      padding: 1.25rem 1.25rem 1.75rem;
    }
    .login-header { padding: 1.75rem 1.25rem 0; }
  }
</style>
@endsection

@section('content')
<div class="container login-container">
  <div class="login-card">
    <div class="login-header">{{ __('Login') }}</div>
    <div class="login-body">
      <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div class="mb-3">
          <label for="email" class="form-label fw-semibold">Email Address</label>
          <input id="email" type="email"
                 class="form-control @error('email') is-invalid @enderror"
                 name="email" value="{{ old('email') }}" required autofocus>
          @error('email')
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
          <label for="password" class="form-label fw-semibold">Password</label>
          <div class="input-group password-input-group" id="show_hide_password">
            <input id="password" type="password"
                   class="form-control @error('password') is-invalid @enderror"
                   name="password" required>
            <button type="button" class="password-toggle" aria-label="Show password" aria-pressed="false">
              <i class="fa-solid fa-eye-slash" aria-hidden="true"></i>
            </button>
          </div>
          @error('password')
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>

        <!-- Remember Me -->
        <div class="form-check mb-3">
          <input class="form-check-input" type="checkbox" name="remember" id="remember"
                 {{ old('remember') ? 'checked' : '' }}>
          <label class="form-check-label" for="remember">
            Remember Me
          </label>
        </div>

        <!-- Submit -->
        <button type="submit" class="btn btn-primary">Login</button>

        <!-- Forgot password -->
        @if (Route::has('password.request'))
          <div class="text-center mt-3">
            <a class="btn-link" href="{{ route('password.request') }}">
              Forgot Your Password?
            </a>
          </div>
        @endif
      </form>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.querySelector('#show_hide_password .password-toggle');
    const passwordInput = document.querySelector('#show_hide_password input');
    const icon = toggle.querySelector('i');
    toggle.addEventListener('click', function () {
      const isVisible = passwordInput.type === 'text';
      passwordInput.type = isVisible ? 'password' : 'text';
      icon.classList.toggle('fa-eye-slash', !isVisible);
      icon.classList.toggle('fa-eye', isVisible);
      toggle.setAttribute('aria-label', isVisible ? 'Show password' : 'Hide password');
      toggle.setAttribute('aria-pressed', String(!isVisible));
    });
  });
</script>
@endsection
