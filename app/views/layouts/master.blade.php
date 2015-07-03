<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>@yield('title')</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/slider-pro.min.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link rel="stylesheet" type="text/css" href="css/animate-custom.css">
<link rel="stylesheet" type="text/css" href="css/royalslider.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/rs-minimal-white.css">
<link rel="stylesheet" type="text/css" href="css/loader.css">
</head>

<body>
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
    <div class="load_title">Roofing Services Premier HTML</div>
</div>

<div class="container">
    <a href="#" class="back-to-top text-center" style="display: inline;">
    <i class="fa fa-angle-up"></i>
    </a>
</div>
@include('partials.navbar')
@yield('home')
@yield('detail')
<!-- news-letter -->

@include('partials.footer')


<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.mosaicflow.js" type="text/javascript"></script>
<script src="js/waypoints.js" type="text/javascript"></script>
<script src="js/smoothScroll.js" type="text/javascript"></script>
<script src="js/jquery.royalslider.min.js" type="text/javascript"></script>
<script src="js/jquery.easing-1.3.js" type="text/javascript"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/owl-slider.js"></script>
<script src="js/custom.js" type="text/javascript"></script>
<script type="text/javascript">


</body>
</html>
