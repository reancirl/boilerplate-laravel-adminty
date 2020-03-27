<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Reancirl Balaba</title>
        <link rel="icon" href="{{asset('stack/img/agila.svg')}}" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{asset('stack/css/iconsmind.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('stack/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('stack/css/stack-interface.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('stack/css/theme.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('stack/css/custom.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700" rel="stylesheet">

    </head>
    <body data-smooth-scroll-offset="77">
        <div class="nav-container"> </div>
        <div class="main-container">
            <section class="cover cover-features imagebg" data-overlay="2">
                <div class="background-image-holder"> <img alt="background" src="{{asset('stack/img/landing-10.jpg')}}"> </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-7">
                            <h1>Laravel - Adminty Boilerplate&nbsp; &nbsp; &nbsp;</h1>
                            <p class="lead"> Made with Adminty, Stack, bootstrap 4 and packages made by Spatie, Nwidart, Nesbot and More!<br></p>

                            @if (Route::has('login'))
                                @auth
                                    <a class="btn btn--primary type--uppercase" href="{{ route('home') }}">
                                        <span class="btn__text">
                                            Home
                                        </span> 
                                    </a>
                                @else
                                    <a class="btn btn--primary type--uppercase" href="{{ route('login') }}">
                                        <span class="btn__text">
                                            Login Here
                                        </span> 
                                    </a>
                                @endauth
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="feature feature-2 boxed boxed--border bg--white"> <i class="icon icon-Clock-Back color--primary"></i>
                                <div class="feature__body">
                                    <p> Save time</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature feature-2 boxed boxed--border bg--white"> <i class="icon icon-Duplicate-Window color--primary"></i>
                                <div class="feature__body">
                                    <p> Build with ease</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature feature-2 boxed boxed--border bg--white"> <i class="icon icon-Life-Jacket color--primary"></i>
                                <div class="feature__body">
                                    <p>Have comfort</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <script src="{{asset('stack/js/jquery-3.1.1.min.js')}}"></script>
        <script src="{{asset('stack/js/parallax.js')}}"></script>
        <script src="{{asset('stack/js/smooth-scroll.min.js')}}"></script>
        <script src="{{asset('stack/js/scripts.js')}}"></script>

    </body>

</html>