
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
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        name="name" value="{{ old('name') }}" required
                                                        autocomplete="fname" autofocus id="namef"
                                                        placeholder="Enter your first name">
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <label for="name">{{ __('Name') }}</label>
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
                                            <div class="form-floating maxwidth-100">
                                                <select class="form-select" id="code" aria-label="Country code">
                                                    <option value="1">+1</option>
                                                    <option selected>+44</option>
                                                    <option value="3">+66</option>
                                                    <option value="2">+91</option>
                                                </select>
                                                <label for="code">Code</label>
                                            </div>
                                           <div class="form-floating">
                                                <input type="text"
                                                    class="form-control @error('phone') is-invalid @enderror"
                                                    name="phone" value="{{ old('phone') }}" required
                                                    autocomplete="phone" id="phonen"
                                                    placeholder="Enter your phone number">
                                                <label for="phonen">{{ __('Phone Number') }}</label>
                                            </div>
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


