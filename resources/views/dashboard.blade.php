@extends('layouts.navbar3')

@section('content')
<title>Dashboard</title>


<body onLoad="initClock()">


    <div class="container">
        <div class="row">
            <div class="col-2">

                <nav class="col-md-2 d-none d-md-block bg-light sidebar mt-5">
                    <div class="sidebar-sticky mt-5">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="/admin">
                                    <span data-feather="home"></span>
                                    Dashboard <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/view_appointment">
                                    <span data-feather="file"></span>
                                    View Appointments
                                </a>
                                {{-- </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="shopping-cart"></span>
                                    Products
                                </a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="users"></span>
                                    Doctors
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="bar-chart-2"></span>
                                    Reports
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="layers"></span>
                                    Integrations
                                </a>
                            </li>
                        </ul>

                        <h6
                            class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Saved reports</span>
                            <a class="d-flex align-items-center text-muted" href="#">
                                <span data-feather="plus-circle"></span>
                            </a>
                        </h6>
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Current month
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Last quarter
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Social engagement
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Year-end sale
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>





            <div class="col-10">
                <div class="container-fluid ">
                    <div class="row ">
                        {{-- <div class="col-md-1">
                        </div> --}}
                        <div class="col-mb-12 " id="main">
                        </div>
                        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4 mt-5 ">
                            <div
                                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom mt-5">
                                <h2>Appointments</h2>
                            </div>
                            <div class="btn-group mr-2">
                                <a href="/view_appointment" class="btn btn-sm btn-outline-primary ">View Appointments</a>
                            </div>

                            <div class="container-fluid mt-3">
                                <div class="row">
                                        <div class="col-md">
                                            <!-- Product Views  -->
                                            <div class="card"
                                                style="background-color: rgb(80, 68, 246); box-shadow: 0 0px 20px 0 rgba(0,0,0,0.2);">
                                                <div class="card-body flex items-center gap-4">
                                                    <div
                                                        class="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-primary-500 bg-opacity-20 text-primary-500">

                                                    </div>
                                                    <div class="flex flex-1 flex-col gap-1">
                                                        <h6 class="text-sm tracking-wide text-slate-500">All Appointments
                                                        </h6>
                                                        <div class="flex flex-wrap items-baseline justify-between gap-2">
                                                            <h2>{{ $total }}</h2>
                                                            <h5
                                                                class="flex items-center text-xs font-medium text-success-500">100%</h5>
                                                        </div>
                                                    </div>
                                                    <a href="/generate_report/all" class="btn btn-sm btn-danger">Get Report All Appo</a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md">
                                            <!-- Product Sold  -->
                                            <div class="card"
                                                style="background-color: rgb(37, 241, 37); box-shadow: 0 0px 20px 0 rgba(0,0,0,0.2);">
                                                <div class="card-body flex items-center gap-4">
                                                    <div
                                                        class="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-success-500 bg-opacity-20 text-success-500">
                                                        <i class="bx bx-dollar-circle text-3xl"></i>
                                                    </div>
                                                    <div class="flex flex-1 flex-col gap-1">
                                                        <h6 class="text-sm tracking-wide text-slate-500">Confirmed
                                                            Appointments</h6>
                                                        <div class="flex flex-wrap items-baseline justify-between gap-2">
                                                            <h2>{{ $confirmed }}</h2>
                                                            <h5
                                                                class="flex items-center text-xs font-medium text-danger-500">{{ number_format($confirmedPercentage, 1) }}%</h5>
                                                        </div>
                                                    </div>
                                                    <a href="/generate_report/confirmed" class="btn btn-sm btn-danger">Get Report Confirmed Appo</a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md">
                                            <!-- Likes  -->
                                            <div class="card"
                                                style="background-color: rgb(231, 245, 44); box-shadow: 0 0px 20px 0 rgba(0,0,0,0.2);">
                                                <div class="card-body flex items-center gap-4">
                                                    <div
                                                        class="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-warning-500 bg-opacity-20 text-warning-500">
                                                        <i class="ti ti-thumb-up text-3xl"></i>
                                                    </div>
                                                    <div class="flex flex-1 flex-col gap-1">
                                                        <h6 class="text-sm tracking-wide text-slate-500">Waiting
                                                            Appointments</h6>
                                                        <div class="flex flex-wrap items-baseline justify-between gap-2">
                                                            <h2>{{ $pending }}</h2>
                                                            <h5
                                                                class="flex items-center text-xs font-medium text-success-500">
                                                                {{ number_format($pendingPercentage, 1) }}%</h5>
                                                        </div>
                                                    </div>
                                                    <a href="/generate_report/waiting" class="btn btn-sm btn-danger">Get Report Waiting Appo</a>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                            </div>
                    </div>


                                {{-- clock --}}
                                    <div id="timedate">
                                        <a id="mon">January</a>
                                        <a id="d">1</a>,
                                        <a id="y">0</a><br />
                                        <a id="h">12</a> :
                                        <a id="m">00</a>:
                                        <a id="s">00</a>:
                                        <a id="mi">000</a>
                                    </div>

                            <div
                                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom mt-5">
                                <h1 class="h2">Dashboard</h1>

                                <div class="btn-toolbar mb-2 mb-md-0">
                                    <div class="btn-group mr-2">
                                        <button class="btn btn-sm btn-outline-secondary">Share</button>
                                        <button class="btn btn-sm btn-outline-secondary">Export</button>
                                    </div>
                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                                        <span data-feather="calendar"></span>
                                        This week
                                    </button>
                                </div>
                            </div>
                            <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

                        </main>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery || document.write(
            '<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')

    </script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()

    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday",
                    "Saturday"
                ],
                datasets: [{
                    data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: '#007bff',
                    borderWidth: 4,
                    pointBackgroundColor: '#007bff'
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: false
                        }
                    }]
                },
                legend: {
                    display: false,
                }
            }
        });

    </script>
</body>






@endsection
