<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reancirl Balaba</title>
    @include('inc.metatag')
    @include('inc.styles')
</head>

<body>
@include('inc.theme-loader')
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        @include('inc.navbar')
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                @include('inc.sidebar')
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                @yield('content')
                            </div>
                        </div>
                        <div id="styleSelector">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('inc.scripts')
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>

</html>
