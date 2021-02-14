@extends('layout')


@section('content')

  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
</head>
<body>


<div class="card text-center">
    <div class="card-header">
      <h1>Online Bookstore </h1>
    </div>
<br> <br>
      <h5 class="card-title">

        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    {{ __('You are logged in!') }}</h5>
      <p class="card-text">Support Local Bookstores. Shop Online with Bookshop.
    </p>
      <a class="css" href="{{ asset('/bookstore') }}" class="btn btn-primary">View List</a>


  </div>

<div class="container custom-product">



    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">







        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>

        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <img class="slider-img" src="{{ asset('sliders/bookstore1.jpg') }}" class="d-block " alt="...">
          </div>
          <div class="item">
            <img class="slider-img" src="{{ asset('sliders/cropped.png') }}" class="d-block " alt="...">
          </div>
          <div class="item">
            <img class="slider-img" src="{{ asset('sliders/reference-books.jpg') }}" class="d-block " alt="...">
          </div>
          <div class="item">
            <img class="slider-img"  src="{{ asset('sliders/SELL_YOUR_BOOKS.png') }}" class="d-block" alt="...">
          </div>
        </div>
        <a class="left carousel-control" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>



      @yield('content')

      @endsection
