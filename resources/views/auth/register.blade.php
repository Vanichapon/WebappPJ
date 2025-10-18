<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>

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
      max-width: 450px;
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
      margin-bottom: 15px;
      color: #fff;
    }

    .login-card p {
      text-align: center;
      margin-bottom: 30px;
      color: rgba(255, 255, 255, 0.7);
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

    label {
      font-weight: 500;
      margin-bottom: 5px;
      color: rgba(255, 255, 255, 0.85);
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

    .text-danger {
      font-size: 0.9rem;
    }
  </style>
</head>
<body>

  <div class="login-card">
    <h1><i class="bi bi-person-plus-fill me-2"></i>Sign Up</h1>
    <p>Join us and feel better</p>

    <form method="POST" action="{{ route('register') }}">
      @csrf

      <div class="mb-3">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Your full name" required>
        @error('name')
          <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Enter a valid email" required>
        @error('email')
          <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="mb-3">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="A strong password" required>
        @error('password')
          <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="mb-4">
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Re-enter password" required>
      </div>

      <button type="submit" class="btn btn-login">Sign Up</button>

      <p class="mt-4 text-center mb-0">Already have an account?
        <a href="{{ route('login') }}">Log in</a>
      </p>
    </form>
  </div>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
