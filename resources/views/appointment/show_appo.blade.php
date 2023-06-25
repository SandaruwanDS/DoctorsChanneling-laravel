@extends('layouts.navbar2')
@section('content')

<section id="appointment" class="appointment section-bg">
    <div class="container mt-5">
        <div class="row justify-content-center  ">
            <div class="col-md-12 mt-5">

                @if (session('delete'))
                <div class="alert alert-danger text-center" role="alert">
                    {{session('delete')}} &#10004;
                </div>
                @endif

                @if (session('update'))
                <div class="alert alert-success text-center" role="alert">
                    {{session('update')}} &#10004;
                </div>
                @endif

                @if (session('already'))
                <div class="alert alert-warning text-center" role="alert">
                    {{session('already')}} &#10060;
                </div>
                @endif

                @if (session('cntedit'))
                <div class="alert alert-warning text-center" role="alert">
                    {{session('cntedit')}} &#10060;
                </div>
                @endif

                <div class="card">
                    <div class="card-header ">
                        <h3>My Appointments
                            <a href="/home" class="btn btn-outline-primary" style="float:right;">Back to Home</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                    <th>Department</th>
                                    <th>Doctor</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appointment as $data )
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->phone}}</td>
                                    <td>{{$data->date}}</td>
                                    <td>{{$data->department}}</td>
                                    <td>{{$data->doctor}}</td>
                                    <td>{{$data->message}}</td>
                                    <td>
                                        @if ($data->status == 1)
                                        <span style="color: rgb(18, 136, 0)">Confirmed</span>
                                        @else
                                        <span style="color: rgb(255, 0, 0)">Waiting...</span>
                                        @endif
                                    </td>
                                    @if($data->status == 0)
                                    <td><a href="/view_appointment_edit_form/{{$data->id}}"
                                            class="btn btn-success">Edit</a></td>
                                    @else
                                    <td><a href="/view_appointment_edit_form/{{$data->id}}"
                                            class="btn btn-primary">Confirmed</a></td>
                                    @endif

                                    @if($data->status == 0)
                                    <td><a href="/delete_appointment_by_user/{{$data->id}}"
                                            class="btn btn-danger">Delete</a></td>
                                    @else
                                    <td><a href="/delete_appointment_by_user/{{$data->id}}"
                                            class="btn btn-danger">Confirmed</a></td>
                                    @endif
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="text-center mt-5 mb-2">
                    <a href="/home" class="btn btn-warning mr-2">
                        <<- Back to Home</a> &nbsp; <a href="/create_appointment" class="btn btn-primary"> Make another
                            Appointment ->>
                    </a>
                </div>
            </div>
        </div>
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
</section>
@endsection
