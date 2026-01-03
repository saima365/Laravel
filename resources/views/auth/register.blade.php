{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}




<!DOCTYPE html>
<html lang="en">
<!-- dir="rtl"-->

<head>
    <!-- Required meta tags  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('assets') }}/img/favicon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&amp;family=Open+Sans:ital,wght@0,300..800;1,300..800&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
        :root {
            --adminuiux-content-font: "Open Sans", sans-serif;
            --adminuiux-content-font-weight: 400;
            --adminuiux-title-font: "Lexend", sans-serif;
            --adminuiux-title-font-weight: 600;
        }
    </style>

    <script defer src="{{ asset('assets') }}/js/app435e.js?1096aad991449c8654b2"></script>
    <link href="{{ asset('assets') }}/css/app435e.css?1096aad991449c8654b2" rel="stylesheet">
</head>

<body
    class="main-bg main-bg-opac main-bg-blur adminuiux-sidebar-fill-white adminuiux-sidebar-boxed  theme-blue roundedui"
    data-theme="theme-blue" data-sidebarfill="adminuiux-sidebar-fill-white" data-bs-spy="scroll"
    data-bs-target="#list-example" data-bs-smooth-scroll="true" tabindex="0">
    <!-- Pageloader -->
    <div class="pageloader">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center text-center h-100">
                <div class="col-12 mb-auto pt-4"></div>
                <div class="col-auto">
                    <img src="{{ asset('assets') }}/img/logo.svg" alt="" class="height-60 mb-3">
                    <p class="h6 mb-0">AdminUIUX</p>
                    <p class="h3 mb-4">Investment</p>
                    <div class="loader10 mb-2 mx-auto"></div>
                </div>
                <div class="col-12 mt-auto pb-4">
                    <p class="text-secondary">Please wait we are preparing awesome things to preview...</p>
                </div>
            </div>
        </div>
    </div>

    <main class="flex-shrink-0 pt-0 h-100">
        <div class="container-fluid">
            <div class="auth-wrapper">

                <!--Page body-->
                <!-- login wrap -->
                <div class="row">
                    <div class="col-12 col-md-6 col-xl-4 minvheight-100 d-flex flex-column px-0">
                        <!-- standard header -->
                        <!-- standard header -->
                        <header class="adminuiux-header">
                            <!-- Fixed navbar -->
                            <nav class="navbar">
                                <div class="container-fluid">
                                    <!-- logo -->
                                    <a class="navbar-brand" href="investment-dashboard.html">
                                        <img data-bs-img="light" src="{{ asset('assets') }}/img/logo-light.svg"
                                            alt="">
                                        <img data-bs-img="dark" src="{{ asset('assets') }}/img/logo.svg"
                                            alt="">
                                        <div class="">
                                            <span class="h4">Investment<b>UX</b></span>
                                            <p class="company-tagline">AdminUIUX HTML template</p>
                                        </div>
                                    </a>

                                    <div class=" ms-auto "></div>
                                    <!-- right icons button -->
                                    <div class="ms-auto">


                                    </div>
                                </div>
                            </nav>
                        </header>

                        <div class="h-100 py-3 px-3">
                            <div class="row h-100 align-items-center justify-content-center ">
                                <div class="col-11 col-sm-8 col-md-11 col-xl-11 col-xxl-10 login-box">
                                    <div class="text-center mb-4">
                                        <h1 class="mb-3">{{ __("Let's get started") }}&#128077;</h1>
                                        <p class="text-secondary">{{ __('Provide your few details') }}</p>
                                    </div>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-floating mb-3">
                                                    <input type="text"
                                                        class="form-control @error('fname') is-invalid @enderror"
                                                        name="fname" value="{{ old('fname') }}" required
                                                        autocomplete="fname" autofocus id="namef"
                                                        placeholder="Enter your first name">
                                                    @error('fname')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <label for="namef">{{ __('First Name') }}</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-floating mb-3">
                                                    <input type="text"
                                                        class="form-control @error('lname') is-invalid @enderror"
                                                        name="lname" value="{{ old('lname') }}" required
                                                        autocomplete="lname" autofocus id="namel"
                                                        placeholder="Enter last name" value="{{ old('lname') }}">
                                                    @error('lname')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <label for="namel">{{ __('Last Name') }}</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" required
                                                autocomplete="email" id="emailadd" placeholder="Enter email address"
                                                value="info@adminuiux">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label for="emailadd">{{ __('Email Address') }}</label>
                                        </div>


                                        <div class="input-group mb-3">
                                            {{-- <div class="form-floating maxwidth-100">
                                                <select class="form-select" id="code" aria-label="Country code">
                                                    <option value="1">+1</option>
                                                    <option selected>+44</option>
                                                    <option value="3">+66</option>
                                                    <option value="2">+91</option>
                                                </select>
                                                <label for="code">Code</label>
                                            </div> --}}
                                            {{-- <div class="form-floating">
                                                <input type="text"
                                                    class="form-control @error('phone') is-invalid @enderror"
                                                    name="phone" value="{{ old('phone') }}" required
                                                    autocomplete="phone" id="phonen"
                                                    placeholder="Enter your phone number">
                                                <label for="phonen">{{ __('Phone Number') }}</label>
                                            </div> --}}
                                        </div>

                                        <div class="position-relative">
                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control" id="checkstrength"
                                                    placeholder="Enter your password">
                                                <label for="checkstrength">Password</label>
                                            </div>
                                            <button
                                                class="btn btn-square btn-link text-theme-1 position-absolute end-0 top-0 mt-2 me-2 ">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                        </div>
                                        <div class="feedback mb-3">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="check-strength" id="checksterngthdisplay">
                                                        <div></div>
                                                        <div></div>
                                                        <div></div>
                                                        <div></div>
                                                        <div></div>
                                                        <div></div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="small" id="textpassword"></span>
                                                    <i class="bi bi-info-circle text-theme ms-1"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Password should contain atleast 1 capital, 1 alphanumeric & min. 8 characters"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="position-relative">
                                            <div class="form-floating mb-3">
                                                <input type="password" id="password-confirm" type="password"
                                                    class="form-control" name="password_confirmation" required
                                                    autocomplete="new-password" placeholder="Confirm your password">
                                                <label for="passwd">{{ __('Confirm Password') }}</label>
                                            </div>
                                            <button
                                                class="btn btn-square btn-link text-theme-1 position-absolute end-0 top-0 mt-2 me-2 ">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                        </div>

                                        <button type="submit"
                                            class="btn btn-lg btn-theme w-100 mb-4">{{ __('Sign up') }}</button>
                                        <!-- <button class="btn btn-lg btn-theme w-100 mb-4">Login</button> -->
                                        <div class="text-center mb-3">
                                            Already have account? <a href="investment-login.html"
                                                class=" ">Login</a> here.
                                        </div>

                                        <div class="row align-items-center mb-3">
                                            <div class="col">
                                                <hr class="">
                                            </div>
                                            <div class="col-auto">
                                                <p class="text-secondary">{{ __('OR Continue with') }}</p>
                                            </div>
                                            <div class="col">
                                                <hr class="">
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <button class="btn btn-lg btn-outline-theme w-100 mb-3 text-start">
                                                    <img src="{{ asset('assets') }}/img/g-logo.png" alt=""
                                                        class="me-2"> Google
                                                </button>
                                            </div>
                                            <div class="col">
                                                <button class="btn btn-lg btn-outline-theme w-100 mb-4 text-start">
                                                    <img src="{{ asset('assets') }}/img/f-logo.png" alt=""
                                                        class="me-2"> Facebook
                                                </button>
                                            </div>
                                        </div>

                                </div>
                            </div>
                        </div>
                        </form>
                        <!-- standard footer -->
                        <!-- standard index footer -->
                        <footer class="adminuiux-footer mt-auto">
                            <div class="container-fluid text-center">
                                <span class="small">Copyright @2024, <a href="https://adminuiux.com/"
                                        target="_blank">InvestmentUX - Adminuiux</a> on Earth ❤️
                                </span>
                            </div>
                        </footer>

                        <!-- theming action-->
                        <div class="position-fixed bottom-0 end-0 m-3 z-index-5">
                            <button class="btn btn-square btn-theme shadow" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#theming" aria-controls="theming"><i
                                    class="bi bi-palette"></i></button>
                            <br>
                            <button class="btn btn-theme btn-square rounded-circle shadow mt-2 d-none"
                                id="backtotop"><i class="bi bi-arrow-up"></i></button>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-8 p-4 d-none d-md-block">
                        <div class="card adminuiux-card bg-theme-1-space position-relative overflow-hidden h-100">
                            <div class="position-absolute start-0 top-0 h-100 w-100 coverimg opacity-75 z-index-0">
                                <img src="{{ asset('assets') }}/img/background-image/background-image-8.html"
                                    alt="">
                            </div>
                            <div class="card-body position-relative z-index-1">
                                <div
                                    class="row h-100 d-flex flex-column justify-content-center align-items-center gx-0 text-center">
                                    <div class="col-10 col-md-11 col-xl-8 mb-4 mx-auto">

                                        <!-- Slider container -->
                                        <div class="swiper swipernavpagination pb-5">
                                            <div class="swiper-wrapper">
                                                <!-- Slides -->
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('assets') }}/img/investment/slider.png"
                                                        alt="" class="mw-100 mb-3">
                                                    <h2 class="text-white mb-3">Create and Manage your Investment
                                                        appointments easily at your own very personalized space.</h2>
                                                    <p class="lead opacity-75">You are at the best Adminuiux Investment
                                                        UX<br>HTML template demo preview</p>
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('assets') }}/img/investment/slider.png"
                                                        alt="" class="mw-100 mb-3">
                                                    <h2 class="text-white mb-3">Create and Manage your Investment
                                                        appointments easily at your own very personalized space.</h2>
                                                    <p class="lead opacity-75">You are at the best Adminuiux Investment
                                                        UX<br>HTML template demo preview</p>
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('assets') }}/img/investment/slider.png"
                                                        alt="" class="mw-100 mb-3">
                                                    <h2 class="text-white mb-3">Create and Manage your Investment
                                                        appointments easily at your own very personalized space.</h2>
                                                    <p class="lead opacity-75">You are at the best Adminuiux Investment
                                                        UX<br>HTML template demo preview</p>
                                                </div>
                                            </div>
                                            <!-- pagination -->
                                            <div class="swiper-pagination white bottom-0"></div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>


    <!-- Page Level js -->
    <script src="{{ asset('assets') }}/js/investment/investment-auth.js"></script>

</body>

</html>
