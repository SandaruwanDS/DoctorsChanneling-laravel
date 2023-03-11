@extends('layouts.navbar')
@section('content')

<body class="d-flex flex-column min-vh-100">
    <div class="container-fluid">
        <div class="row justify-content-center">



            <!-- Section: Design Block -->
            <section class="background-radial-gradient1 overflow-hidden">


                <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
                    <div class="row gx-lg-5 align-items-center mb-5">

                        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                            <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(0, 0%, 100%)">
                                R-MEDICARE <br />
                                <span style="color: hsl(201, 59%, 93%)">For Your Healthiness</span>
                            </h1>
                            <p class="mb-4 opacity-70" style="color: hsl(0, 0%, 100%)">
                                Your one-stop solution for hassle-free medical appointments! <br>
                                We understand that your time is precious. That's why we've created a <br>
                                fast, easy, and secure way to book your medical appointments online.
                            </p>
                        </div>


                        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                            <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                            <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                            <div class="card bg-glass">
                                <div class="card-body px-4 py-5 px-md-5">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="form-outline mb-3">
                                            <div class="h4">Login</div>

                                            <label class="form-label"> Please Enter Your Login Details</label>
                                        </div>

                                        <!-- Email input -->
                                        <div class="form-outline mb-3">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus />
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <label class="form-label" for="form3Example3">Email address</label>
                                        </div>

                                        <!-- Password input -->
                                        <div class="form-outline mb-3">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password" />
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <label class="form-label" for="form3Example4">Password</label>
                                        </div>

                                        <!-- Checkbox -->
                                        <div class="row mb-3">
                                            <div class="col-md-6 ">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember"
                                                        id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Submit button -->
                                        <div class="row mb-0">
                                            <div>
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Login') }}
                                                </button>

                                                @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                                @endif
                                            </div>
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</body>
@endsection
