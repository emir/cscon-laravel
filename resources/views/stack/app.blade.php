<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site Description Here">
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/css/socicon.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/css/flickity.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/css/iconsmind.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/css/jquery.steps.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/css/theme.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class=" ">
<a id="start"></a>
<div class="nav-container ">
    <div class="bar bar--sm visible-xs">
        <div class="container">
            <div class="row">
                <div class="col-3 col-md-2">
                    <a href="index.html">
                        <img class="logo logo-dark" alt="logo" src="assets/img//logo-dark.png" />
                        <img class="logo logo-light" alt="logo" src="assets/img//logo-light.png" />
                    </a>
                </div>
                <div class="col-9 col-md-10 text-right">
                    <a href="#" class="hamburger-toggle" data-toggle-class="#menu1;hidden-xs">
                        <i class="icon icon--sm stack-interface stack-menu"></i>
                    </a>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </div>
    <!--end bar-->

    @include('stack.header')

</div>
<div class="main-container">
    <section class="height-100 imagebg text-center" data-overlay="4">
        <div class="background-image-holder">
            <img alt="background" src="assets/img//inner-6.jpg" />
        </div>

        @yield('content')

        <!--end of container-->
    </section>
</div>
<!--<div class="loader"></div>-->
<a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
    <i class="stack-interface stack-up-open-big"></i>
</a>
<script src="assets/js/jquery-3.1.1.min.js"></script>
<script src="assets/js/flickity.min.js"></script>
<script src="assets/js/easypiechart.min.js"></script>
<script src="assets/js/parallax.js"></script>
<script src="assets/js/typed.min.js"></script>
<script src="assets/js/datepicker.js"></script>
<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/ytplayer.min.js"></script>
<script src="assets/js/lightbox.min.js"></script>
<script src="assets/js/granim.min.js"></script>
<script src="assets/js/jquery.steps.min.js"></script>
<script src="assets/js/countdown.min.js"></script>
<script src="assets/js/twitterfetcher.min.js"></script>
<script src="assets/js/spectragram.min.js"></script>
<script src="assets/js/smooth-scroll.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>