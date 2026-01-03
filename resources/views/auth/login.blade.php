{{-- <head>
        <!-- Required meta tags  -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>Investment AdminUIUX - Bootstrap HTML Admin template - adminuiux.com</title>
        <link rel="icon" type="image/png"  href="{{ asset('assets') }}/img/favicon.png">

        <!-- Fonts -->
         <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&amp;family=Open+Sans:ital,wght@0,300..800;1,300..800&amp;display=swap"
            rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">


        <script defer  src="{{ asset('assets') }}/js/app435e.js?1096aad991449c8654b2"></script>
        <link  href="{{ asset('assets') }}/css/app435e.css?1096aad991449c8654b2" rel="stylesheet">
    </head>

    <body
        class="main-bg main-bg-opac main-bg-blur adminuiux-sidebar-fill-white adminuiux-sidebar-boxed  theme-blue roundedui "
        data-theme="theme-blue" data-sidebarfill="adminuiux-sidebar-fill-white" data-bs-spy="scroll"
        data-bs-target="#list-example" data-bs-smooth-scroll="true" tabindex="0">


        <main class="flex-shrink-0 pt-0 h-100">
            <div class="container-fluid">
                <div class="auth-wrapper">
                    <!--Page body-->

                    <!-- login wrap -->


                                <div class="h-100 py-4 px-3">
                                    <div class="row h-100 align-items-center justify-content-center mt-md-4">
                                        <div class="col-11 col-sm-8 col-md-11 col-xl-11 col-xxl-10 login-box">
                                            <div class="text-center mb-4">
                                                <h1 class="mb-2">Welcome&#9996;</h1>
                                                <p class="text-secondary">Enter your credential to login</p>
                                            </div>
                                            <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input type="email"
                                                    class="form-control @error('email') is-invalid @enderror" id="emailadd"
                                                    placeholder="Enter email address" value="{{ old('email') }}"
                                                    name="email" required autocomplete="email" autofocus>
                                                <label for="emailadd">{{ __('Email Address') }}</label>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="position-relative">
                                                <div class="form-floating mb-3">
                                                    <input type="password" id="passwd" placeholder="Enter your password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        name="password" required autocomplete="current-password">
                                                    <label for="passwd">{{ __('Password') }}</label>
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <button
                                                    class="btn btn-square btn-link text-theme-1 position-absolute end-0 top-0 mt-2 me-2 " type="button">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                            </div>

                                            <div class="row align-items-center mb-3">
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="remember"
                                                            id="rememberme">
                                                        <label class="form-check-label"
                                                            for="rememberme">{{ __('Remember Me') }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    @if (Route::has('password.request'))
                                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                                            {{ __('Forgot Password?') }}
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-lg btn-theme w-100 mb-4">Login</button>

                                            <div class="text-center mb-3">
                                                Don't have account? @if (Route::has('register'))
                                                    <a class="nav-link btn btn-secondary"
                                                        href="{{ route('register') }}">{{ __('Create Account') }}</a>
                                                @endif
                                            </div>
                                        </form>

                                            {{-- <div class="row align-items-center mb-3">
                                                <div class="col">
                                                    <hr class="">
                                                </div>
                                                <div class="col-auto">
                                                    <p class="text-secondary">OR</p>
                                                </div>
                                                <div class="col">
                                                    <hr class="">
                                                </div>
                                            </div> --}}

{{-- <button class="btn btn-lg btn-outline-theme w-100 mb-3 text-start" type="button">
                                                <img  src="{{ asset('assets') }}/img/g-logo.png" alt="" class="me-2"> Sign in
                                                with
                                                Google
                                            </button>
                                            <button class="btn btn-lg btn-outline-theme w-100 mb-4 text-start" type="button">
                                                <img  src="{{ asset('assets') }}/img/f-logo.png" alt="" class="me-2"> Sign in
                                                with
                                                Facebook
                                            </button> --}}
{{--
                                        </div>
                                    </div>
                                </div>  --}}


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
