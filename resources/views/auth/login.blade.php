@extends('layouts.app')

@section('custom_style')
<style>
  .login-container {
    max-width: 420px;
    margin: auto;
  }

  .login-card {
    background: #fff;
    border-radius: 1rem;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    overflow: hidden;
  }

  .login-header {
    background: linear-gradient(90deg, #6f42c1, #4f8cff);
    color: #fff;
    text-align: center;
    padding: 1.5rem;
    font-weight: 700;
    letter-spacing: 0.5px;
  }

  .login-body {
    padding: 2rem 1.5rem;
  }

  .form-control {
    border-radius: 10px;
    padding: 0.75rem 1rem;
    font-size: 1rem;
  }

  .input-group-addon a {
    color: #6f42c1;
    text-decoration: none;
  }

  .btn-primary {
    background: linear-gradient(90deg, #6f42c1, #4f8cff);
    border: none;
    font-weight: 600;
    border-radius: 10px;
    padding: 0.75rem;
    width: 100%;
  }

  .btn-primary:hover {
    background: linear-gradient(90deg, #5b35a0, #3b77e5);
  }

  .btn-link {
    color: #6f42c1;
    text-decoration: none;
  }
  .btn-link:hover {
    text-decoration: underline;
  }

  @media (max-width: 576px) {
    .login-body {
      padding: 1.5rem 1rem;
    }
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
          <div class="input-group" id="show_hide_password">
            <input id="password" type="password"
                   class="form-control @error('password') is-invalid @enderror"
                   name="password" required>
            <span class="input-group-text bg-white border-start-0">
              <a href="javascript:void(0)" class="text-muted"><i class="fa fa-eye-slash"></i></a>
            </span>
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
  document.querySelector('#show_hide_password a').addEventListener('click', function (e) {
    e.preventDefault();
    const passwordInput = document.querySelector('#show_hide_password input');
    const icon = document.querySelector('#show_hide_password i');
    if (passwordInput.type === 'text') {
      passwordInput.type = 'password';
      icon.classList.add('fa-eye-slash');
      icon.classList.remove('fa-eye');
    } else {
      passwordInput.type = 'text';
      icon.classList.remove('fa-eye-slash');
      icon.classList.add('fa-eye');
    }
  });
</script>
@endsection
