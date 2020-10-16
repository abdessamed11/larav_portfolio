<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iPortfolio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
  <link href="{{asset('css/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('css/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v1.4.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <div class="container">
    <h2>Facts</h2>
    @foreach($facts as $fact)
  <div class="row my-3">

    <div class="col-sm">
      <span class="font-weight-bold display-4 d-block">{{$fact->clients}}</span> <strong>Happy clients</strong> lorem ipsum
      <p>
        lorem ipsum
      </p>
    </div>
    <div class="col-sm">
      <span class="font-weight-bold display-4 d-block">{{$fact->projets}}</span> <strong>Projets</strong> lorem ipsum
      <p>
        lorem ipsum
      </p>
    </div>
    <div class="col-sm">
      <span class="font-weight-bold display-4 d-block">{{$fact->supports}}</span> <strong>Supports</strong> lorem ipsum
      <p>
        lorem ipsum
      </p>
    </div>
    <div class="col-sm">
      <span class="font-weight-bold display-4 d-block">{{$fact->works}}</span> <strong>Works</strong> lorem ipsum
      <p>
        lorem ipsum
      </p>
    </div>

  </div>
  @endforeach
</div>
