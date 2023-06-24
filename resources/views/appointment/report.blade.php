@extends('layouts.navbar3')
@section('content')

<div class="container-fluid mt-5">
    <div class="row justify-content-center  ">
        <div class="col-md-12 mt-5">
            <div class="card">

                <div class="card-header ">
                    
                    <h3>{{ $reportTitle }}
                      <a href="/admin" class="btn btn-outline-primary " >Back to Dashbord</a> &nbsp;   
                        <button class="btn btn-primary float-end" onclick="window.print()" >Print Report</button>
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
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reportAppo as $data )
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
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Automatically trigger the print dialog box when the page loads
    window.onload = function() {
        window.print();
    };
</script>

@endsection