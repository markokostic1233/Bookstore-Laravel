@extends('layout')


@section('content')



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




<br><br><br>









  <div class="container">
    @foreach($bookstores as $bookstore)
    <div class="row justify-content-md-center">

      <div class="col-4 col-lg-3">

        <img class="card-img-top" src="data:image/png;base64,{{ chunk_split(base64_encode($bookstore->boooks->Images)) }}" alt="Card image cap">
      </div>
      <div class="col-4 col-lg-3"> {{$bookstore->boooks->Name}}</div>

      <div class="col-4 col-lg-3 ">
        <i class="fas fa-clock">
        {{ $bookstore->boooks->created_at->diffForHumans()}}

         <input type="hidden" id="pro_id" value="{{ $bookstore->boooks->id }}">

        <a class="btn btn-primary" href="{{ route('add-cart',[$bookstore->boooks->id]) }}"> Add to Cart </a>
    </i>

        <button class="disabled btn btn-primary"> {{ $bookstore->boooks->price }}$</button>


    </div>



    </div>

    <hr>


     @endforeach
</div>




@endsection








