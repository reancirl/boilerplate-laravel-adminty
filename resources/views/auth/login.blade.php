<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login | Made by : Reancirl Balaba</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="stack/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="stack/css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
        <link href="stack/css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="stack/css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700" rel="stylesheet">
        <style type="text/css">
            .outline-1 {
                color: black;
                -webkit-text-stroke:2.1px #ffffff;
                font-weight: bolder;
                font-size: 3em;
            }
            .card-1{
                background-color: white;
                padding: 1em 3em 1em 3em;
                height: 23em;
                border: 2px solid #0078ff;
            }
        </style>
    </head>
    <body data-smooth-scroll-offset="77">
        <div class="main-container">
    <section class="imageblock switchable feature-large height-100 section--ken-burns bg--secondary">
        <div class="imageblock__content col-lg-6 col-md-4 pos-right">
            <div class="background-image-holder section--ken-burns" data-overlay="1"> <img alt="image" src="{{ asset('stack/img/landing-20.jpg')}}">
            </div> 
        </div>
        <div class="container pos-vertical-center">
            <div class="row">
                <div class="col-lg-5 col-md-7 card-1">
                    <hr data-title="Login here" style="border: 1px solid #0078ff;">
                    <form method="POST" action="{{ route('login') }}">
                     @csrf
                        <div class="row">

                            <div class="col-12"> 
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"placeholder="Email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </div>

                            <div class="col-12"> 
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-12"> 
                                <button type="submit" class="btn btn--primary type--uppercase">{{ __('Login') }}</button> 
                            </div>

                            <div class="col-12"> 
                                <span class="type--fine-print block">Forgot your username or password? <a href="{{ route('password.request') }}">Recover account</a></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
        <script src="stack/js/jquery-3.1.1.min.js"></script>
        <script src="stack/js/parallax.js"></script>
        <script src="stack/js/smooth-scroll.min.js"></script>
        <script src="stack/js/scripts.js"></script>

    </body>

</html>