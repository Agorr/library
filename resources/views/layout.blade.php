<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
        <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .navbar {
                top: 0;
                z-index: 1000;
                margin-bottom:100px; 
            }
            .sidebar {
                top: 40px;
                bottom: 0;
                left: 0;
                z-index: 1000;
                padding: 20px;
            }
            .main-content {padding-top: 70px;
                padding-left: 300px;
                overflow-y: auto;
            }
        </style>
        <title>@yield('title')</title>

    </head>
    <body >
        <div class="container-fluid">
            <div class="row" style="font-size: 1.5em;">
                <nav class="navbar navbar-expand-lg navbar-light bg-dark text-light position-fixed w-100">
                    <div class="collapse navbar-collapse bg-dark text-light" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('books.index') }}" style="margin-left: 70px ; color: {{ $Color2 }};">Books</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="row h-100">
                <div class="sidebar col-md-3 col-lg-2 col-xl-2 bg-dark text-light position-fixed h-100">
                    @include('sidebar')
                </div>
                <div class="main-content col-md-9 col-lg-10 col-xl-10 position-relative">
                    @yield('content')
                </div>
            </div>
        </div>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}"></script>    
    </body>
</html>
