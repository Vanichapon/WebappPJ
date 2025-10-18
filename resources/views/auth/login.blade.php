{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | My Website</title>

  <!-- Favicon -->
  <link href="{{ asset('asset/front/img/favicon.ico') }}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Custom Style (เฉพาะหน้านี้เท่านั้น) -->
  <style>
    body {
      background: linear-gradient(135deg, #1f1c2c, #928dab);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Nunito', sans-serif;
      overflow: hidden;
    }

    .login-card {
      background: rgba(255, 255, 255, 0.12);
      backdrop-filter: blur(10px);
      border-radius: 20px;
      padding: 40px 35px;
      color: #fff;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 400px;
      animation: fadeInUp 0.8s ease;
    }

    @keyframes fadeInUp {
      from {
        transform: translateY(30px);
        opacity: 0;
      }
      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    .login-card h1 {
      font-weight: 700;
      text-align: center;
      margin-bottom: 25px;
      color: #fff;
    }

    .form-control {
      background: rgba(255, 255, 255, 0.2);
      border: none;
      border-radius: 10px;
      color: #fff;
    }

    .form-control::placeholder {
      color: rgba(255, 255, 255, 0.6);
    }

    .form-check-label {
      color: rgba(255, 255, 255, 0.8);
    }

    .btn-login {
      width: 100%;
      border: none;
      border-radius: 10px;
      background: linear-gradient(135deg, #ff9966, #ff5e62);
      color: #fff;
      font-weight: 600;
      transition: all 0.3s ease;
      padding: 10px;
    }

    .btn-login:hover {
      background: linear-gradient(135deg, #ff5e62, #ff9966);
      transform: scale(1.03);
    }

    a {
      color: #ffd6d6;
      text-decoration: none;
    }

    a:hover {
      color: #fff;
      text-decoration: underline;
    }

    .forgot {
      text-align: right;
      display: block;
      margin-top: 10px;
    }
  </style>
</head>
<body>

  <div class="login-card">
    <h1><i class="bi bi-lock-fill me-2"></i>Login</h1>
    <form method="POST" action="{{ route('login') }}">
      @csrf

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input id="email" type="email" name="email" class="form-control" placeholder="Enter your email" required autofocus autocomplete="username">
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input id="password" type="password" name="password" class="form-control" placeholder="Enter your password" required autocomplete="current-password">
      </div>

      <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="form-check">
          <input id="remember_me" type="checkbox" name="remember" class="form-check-input">
          <label for="remember_me" class="form-check-label">Remember me</label>
        </div>
        @if (Route::has('password.request'))
          <a href="{{ route('password.request') }}" class="forgot">Forgot Password?</a>
        @endif

      </div>

      <button type="submit" class="btn btn-login">Log In</button>
      <p class="mt-5 mb-0">Not a member yet? <a href="{{ route('register') }}">Register Here</a></p>
    </form>
  </div>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

