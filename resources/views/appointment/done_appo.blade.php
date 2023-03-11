@extends('layouts.navbar2')
@section('content')

<section id="appointment" class="appointment section-bg">
    <div class="container mt-5">


        <div class="section-title mt-5 mb-2">



            <h2>Make an Appointment</h2>
            <p>
                To schedule an appointment, simply visit our website and select the "Make an Appointment" option from
                the menu. You will be directed to a user-friendly interface where you can choose the department you wish
                to see, select a healthcare professional, and choose a date and time that works best for you.
                We invite you to experience our exceptional care for yourself by using our online booking system to
                schedule your next appointment.

            </p>
        </div>

       
        @if (session('Done'))
               <div class="alert alert-success text-center" role="alert">
                {{ session('Done')}}
        </div>
        @endif
        

        <div class="text-center mt-5 mb-2">
            <a href="/home" class="btn btn-warning mr-2"> <<- Back to Home</a> &nbsp; 
            <a href="/create_appointment" class="btn btn-primary"> Make another Appointment ->> </a>
        
    </div>


        <section id="services" class="services">
            <div class="container mt-2">



                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-heartbeat"></i></div>
                            <h4><a href="">Appointment Booking</a></h4>
                            <p>

                                E-channeling can offer a simple and user-friendly platform to book medical appointments
                                online. This service allows patients to easily search and find available slots with
                                their
                                preferred doctors, select a time that suits them, and pay for their appointments online.


                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-pills"></i></div>
                            <h4><a href="">Doctor Directory</a></h4>
                            <p>
                                E-channeling can also provide a comprehensive directory of doctors and medical
                                professionals
                                in various specialties. This service can allow patients to view the qualifications and
                                credentials of each doctor, read patient reviews, and select the best doctor for their
                                medical needs.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-hospital-user"></i></div>
                            <h4><a href="">Health Records Management</a></h4>
                            <p>
                                E-channeling can offer a secure platform for patients to store their medical records
                                online.
                                This service can allow patients to easily access their medical history, test results,
                                and
                                other important information from any device, anytime, anywhere.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->











    </div>
</section><!-- End Appointment Section -->




@endsection
