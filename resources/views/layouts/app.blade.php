<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://html5-templates.com/" />
    <title>Bootstrap Template</title>
	<meta name="description" content="A minimalist Bootstrap theme by StartBootstrap. Contains everything you need to get started building your website. All you have to do is change the text and images.">
    <link href={{ asset('css/app.css') }} rel="stylesheet" type="text/css">
    <script src="{{ asset('js/app.js') }}"> </script>
</head>

<body>


 @include('layouts.header')
  
@yield('content')

  <!-- ======= Footer ======= -->
  <footer>
@include('layouts.footer')
  </footer><!-- End  Footer -->

</div>
<!-- /.container -->


<!-- Script to Activate the Carousel -->
<script>
$('.carousel').carousel({
    interval: 5000 //changes the speed
})
</script>

</body>

</html>
