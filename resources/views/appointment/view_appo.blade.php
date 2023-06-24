@extends('layouts.navbar3')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center  ">
        <div class="col-md-12 mt-5">
            <div class="card">

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
                <div class="alert alert-primary text-center" role="alert">
                    {{session('already')}} &#10071;
                </div>
                @endif

                <div class="card-header ">
                    <h3>View Appointments
                    <a href="/admin" class="btn btn-outline-primary" style="float:right;">Back to Dashbord</a>
                     </h3>   
                </div>

                <div class="card-body">
                    <table class="table table-dark">
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
                                <th>Confirm Ap..</th>
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
                                    <span style="color: rgb(7, 248, 7)">Confirmed</span>
                                    @else
                                    <span style="color: rgb(248, 244, 1)">Waiting...</span> 
                                    @endif   
                                </td>
                                <td><a href="/confirm_appointment/{{$data->id}}" class="btn btn-success">Confirm</a></td>
                                <td><a href="/delete_appointment/{{$data->id}}" class="btn btn-danger">Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
