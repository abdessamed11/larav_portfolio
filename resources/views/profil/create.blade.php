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
<div class="text-center">
  <h2>Ajouter un profil</h2>
</div>
<div class="container">
  <form class="" action="{{ url('profil')}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" name="nom" placeholder="nom"></br>
    <input type="text" name="prenom" placeholder="penom"></br>
    <input type="email" name="email" placeholder="email"></br>
    <input type="text" name="naissance" placeholder="date de naissance "></br>
    <input type="text" name="telephone" placeholder="telephone "></br>
    <input type="text" name="adresse" placeholder="adresse"></br>
    <input type="text" name="password" placeholder="password"></br>
    <input type="text" name="diplome" placeholder="diplome"></br>

    <input type="submit" name="submit" value="ajouter">

  </form>

</div>
