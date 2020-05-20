<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        {{-- <link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/landingPage.css') }}" rel="stylesheet" type="text/css" >

    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-md  navbar-light bg-light">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item acitve">
                            <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Health care</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <hr class="black">
            <hr class="red">
            <hr class="green">
        {{-- CONTENT --}}
            <main class="py-4">
                @yield('content')
            </main>

            {{-- FOOTER --}}
            <hr class="black">
            <hr class="red">
            <hr class="green">
            <footer class="mastfoot">
                <div class="inner">
                    <div class="row align-items-end">
                        <div class="col">
                          One of three columns
                        </div>
                        <div class="col">
                          One of three columns
                        </div>
                        <div class="col">
                          One of three columns
                        </div>
                      </div>
                </div>
              </footer>
        </div>
    </body>
</html>
