<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">



    <!-- Bootstrap core CSS -->
    <link href=" {{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/styleindex.css')}}" rel="stylesheet">
    <link href="{{asset('css/welcomenev.css')}}" rel="stylesheet">
</head>

<header>
    <div class="container-fluede bg-light ">
        <div class="container ">
            <header class="conteiner blog-header py-3">
                <div class="row flex-nowrap justify-content-between align-items-center">
                    <div class="col-4 pt-1">
                        <a class="text-muted" href="#">Hot line : +9411-2233-456</a>
                    </div>
                    <div class="col-4 text-center">
                        <img src="{{URL('/images/logo.png')}}" width="30px" height="30px">
                        <a class="blog-header-logo text-dark" href="/">R-MEDICARE</a>
                    </div>
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <a class="btn btn-sm btn-outline-primary mr-2" href="{{route('login')}}">Login</a> &nbsp;
                        <a class="btn btn-sm btn-outline-primary" href="{{route('register')}}">Sign up</a>
                    </div>
                </div>
            </header>
        </div>
    </div>
</header>

    @yield('content')



    <footer class="blog-footer mt-auto ">
        <p>All Rights Reserved<a href=""> 2023</a> by <a href="">R-MEDICARE</a>.</p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>



</html>
