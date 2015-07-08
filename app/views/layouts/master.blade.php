<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>@yield('title')</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
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

@include('partials.navbar')

@yield('home')


@include('partials.footer')

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=432306783477743";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


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
