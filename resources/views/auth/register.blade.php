<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;600&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- AdminUIUX -->
    <link href="{{ asset('assets/css/app435e.css') }}" rel="stylesheet">
    <script defer src="{{ asset('assets/js/app435e.js') }}"></script>

    <style>
        .auth-wrapper {
            min-height: 100vh;
            background: linear-gradient(135deg, #4f46e5, #06b6d4);
        }

        .auth-card {
            border-radius: 20px;
            box-shadow: 0 30px 60px rgba(0,0,0,.15);
            background: #fff;
        }

        .password-toggle {
            background: transparent;
            border: 0;
        }
    </style>
</head>

<body>

<div class="auth-wrapper d-flex align-items-center justify-content-center p-3">
    <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">

        <div class="auth-card p-4 p-md-5">

            <!-- Header -->
            <div class="text-center mb-4">
                <h2 class="fw-bold mb-2">Create Account 🚀</h2>
                <p class="text-secondary">Fill in your details to get started</p>
            </div>

            <!-- FORM -->
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="form-floating mb-3">
                    <input type="text"
                           class="form-control @error('name') is-invalid @enderror"
                           name="name"
                           value="{{ old('name') }}"
                           placeholder="Full Name"
                           required>
                    <label>Full Name</label>
                    @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <!-- Email -->
                <div class="form-floating mb-3">
                    <input type="email"
                           class="form-control @error('email') is-invalid @enderror"
                           name="email"
                           value="{{ old('email') }}"
                           placeholder="Email Address"
                           required>
                    <label>Email Address</label>
                    @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <!-- Phone -->
                <div class="input-group mb-3">
                    <span class="input-group-text">+880</span>
                    <div class="form-floating flex-grow-1">
                        <input type="text"
                               class="form-control @error('phone') is-invalid @enderror"
                               name="phone"
                               value="{{ old('phone') }}"
                               placeholder="Phone Number"
                               required>
                        <label>Phone Number</label>
                        @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>

                <!-- Password -->
                <div class="position-relative mb-3">
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <label>Password</label>
                    </div>
                    <button type="button"
                            class="password-toggle position-absolute end-0 top-50 translate-middle-y me-3"
                            onclick="togglePassword('password', this)">
                        <i class="bi bi-eye"></i>
                    </button>
                </div>

                <!-- Confirm Password -->
                <div class="position-relative mb-4">
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password_confirmation"
                               name="password_confirmation"
                               placeholder="Confirm Password" required>
                        <label>Confirm Password</label>
                    </div>
                    <button type="button"
                            class="password-toggle position-absolute end-0 top-50 translate-middle-y me-3"
                            onclick="togglePassword('password_confirmation', this)">
                        <i class="bi bi-eye"></i>
                    </button>
                </div>

                <!-- Submit -->
                <button type="submit" class="btn btn-primary btn-lg w-100 mb-3">
                    Create Account
                </button>

                <!-- Login link -->
                <div class="text-center mb-4">
                    Already have an account?
                    <a href="{{ route('login') }}" class="fw-semibold">Login</a>
                </div>

                <!-- Divider -->
                <div class="d-flex align-items-center mb-3">
                    <hr class="flex-grow-1">
                    <span class="mx-3 text-secondary">OR</span>
                    <hr class="flex-grow-1">
                </div>

                <!-- Social -->
                <div class="row">
                    <div class="col">
                        <button type="button" class="btn btn-outline-secondary w-100">
                            <i class="bi bi-google me-2"></i> Google
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-outline-secondary w-100">
                            <i class="bi bi-facebook me-2"></i> Facebook
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<script>
    function togglePassword(id, el) {
        const input = document.getElementById(id);
        const icon = el.querySelector('i');
        if (input.type === "password") {
            input.type = "text";
            icon.classList.replace("bi-eye", "bi-eye-slash");
        } else {
            input.type = "password";
            icon.classList.replace("bi-eye-slash", "bi-eye");
        }
    }
</script>

</body>
</html>
