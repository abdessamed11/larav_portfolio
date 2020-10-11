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

<h1 class="text-center">Listes des compétence</h1>

<div class="container">
  <div class="row">
    <div class="col-6">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">compétence</th>
            <th scope="col">pourcentage</th>
            <th scope="col">edit</th>
            <th scope="col">delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach($skills as $skill)
          <tr>
            <th scope="row">1</th>
            <td>{{$skill->competence}}</td>
            <td>{{$skill->pourcentage}}</td>
            <td><a class="btn btn-outline-success my-auto" href="{{ url('skills/'.$skill->id.'/edit') }}">Editer</a></td>
            <td>
              <form action="{{ url('skills/'.$skill->id)}}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-outline-danger">delete</button>
                </form></td>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

    </div>


  </div>

</div>
