@extends('layouts.navbar')
@section('content')
<title>R-MEDICARE</title>


<main role="main">

    <section class="jumbotron text-center">
        <div class="container mt-5 mb-5 bg-glass1">
            <h1 class="jumbotron-heading mt-5 text-primary">Welcome to R-MEDICARE</h1>
            <p class="lead text-dark ">your premier destination for all your medical needs.
                <br>We are a dedicated team of healthcare professionals committed to
                <br>providing the highest quality of care and service to our patients.</p>
            <p>
                <a href="/login" class="btn btn-primary my-2">Make an Appointment</a>
                <a href="/register" class="btn btn-secondary my-2">Sign up</a>
            </p>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{URL('/images/w1.jpg')}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Cardiology</h5>
                                    <p class="card-text">Our Cardiology department is dedicated to providing 
                                        the highest quality care for patients.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{URL('/images/w2.jpg')}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Neurology</h5>
                                    <p class="card-text">Our Neurology department is dedicated to providing 
                                        comprehensive care for patients with neurological conditions.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{URL('/images/w3.jpg')}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Hepatology</h5>
                                    <p class="card-text">Our Hepatology department is dedicated to providing 
                                        specialized care for patients with liver disease.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

</main>

@endsection
