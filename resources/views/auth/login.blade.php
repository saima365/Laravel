<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #4f46e5, #06b6d4);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', sans-serif;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            overflow: hidden;
        }

        .login-header {
            background: linear-gradient(135deg, #4f46e5, #6366f1);
            color: #fff;
            padding: 2rem;
            text-align: center;
        }

        .login-header h3 {
            margin-bottom: 0.25rem;
        }

        .form-control {
            border-radius: 10px;
        }

        .btn-login {
            border-radius: 10px;
            padding: 0.6rem;
            font-weight: 600;
        }

        .eye-btn {
            position: absolute;
            top: 71%;
            right: 12px;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #6c757d;
        }

        .eye-btn:hover {
            color: #000;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-8 col-md-6 col-lg-4">
                <div class="login-card">

                    <!-- Header -->
                    <div class="login-header">
                        <h3>Welcome Back 👋</h3>
                        <p class="mb-0 opacity-75">Sign in to continue</p>
                    </div>

                    <!-- Body -->
                    <div class="p-4">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <!-- Email -->
                            <div class="mb-3">

                                <label class="form-label">{{ __('Email Address') }}</label>
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="you@example.com" value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="mb-3 position-relative">
                                <label class="form-label">{{ __('Password') }}</label>
                                <input type="password" id="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password" placeholder="••••••••" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <button class="eye-btn" type="button" onclick="togglePassword()">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>

                            <!-- Remember + Forgot -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember">
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember me') }}
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                @endif
                            </div>

                            <!-- Login button -->
                            <button type="submit" class="btn btn-primary w-100 btn-login mb-3">
                                {{ __('Login') }}
                            </button>

                            <!-- Register -->
                            <p class="text-center mb-0">
                                {{ __('Don’t have an account?') }}
                                @if (Route::has('register'))
                                    <a class="fw-semibold text-decoration-none"
                                        href="{{ route('register') }}">{{ __('Create Account') }}</a>
                                @endif
                            </p>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const password = document.getElementById('password');
            const icon = document.getElementById('eyeIcon');

            if (password.type === 'password') {
                password.type = 'text';
                icon.classList.replace('bi-eye', 'bi-eye-slash');
            } else {
                password.type = 'password';
                icon.classList.replace('bi-eye-slash', 'bi-eye');
            }
        }
    </script>

</body>

</html>
