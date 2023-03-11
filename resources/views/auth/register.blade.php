@extends('layouts.navbar')

@section('content')

<body class="d-flex flex-column min-vh-100">
    <div class="container-fluide">
        <div class="row justify-content-center">

            <section class="background-radial-gradient2 overflow-hidden">
                <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
                    <div class="row gx-lg-5 align-items-center mb-5">
                        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                            <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(0, 0%, 100%)">
                                R-MEDICARE <br />
                                <span style="color: hsl(0, 0%, 100%)">For Your Healthiness</span>
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
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="form-outline mb-1">
                                            <div class="h4">Sign Up</div>

                                            <label class="form-label"> Please Enter Your Register Details</label>
                                        </div>

                                        <!-- name input -->
                                        <div class="form-outline mb-2">
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <label class="form-label" for="form3Example3">Name</label>
                                        </div>

                                        <!-- name Email -->
                                        <div class="form-outline mb-2">

                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <label class="form-label" for="form3Example3">Email address</label>
                                        </div>

                                        <!--  password -->
                                        <div class="form-outline mb-2">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="new-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            <label class="form-label" for="form3Example3">Password</label>
                                        </div>

                                        <!--  Confirm password -->
                                        <div class="form-outline mb-2">

                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password">
                                            <label class="form-label" for="form3Example3">Confirm password</label>
                                        </div>

                                        <!-- Submit button -->
                                        <div class="row mb-2">
                                            <div class="col-md-2 ">
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
                </div>
            </section>

        </div>
    </div>
</body>
@endsection
