@extends('layout')


@section('content')

<div class="container custom-product">
    <a href="{{ asset('/bookstore') }}"> <h1 class="text-center">Find Book </h1>

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

<br><br>


<div class="container">

    <div class="row">
        <table>
            <thead>
            <tr>

                <th>Quantity</th>
                <th>Price</th>

                <tr>
            </thead>
            <tbody>

                @php
                $total=0;
                @endphp

                @if(session('cart'))
                    @foreach(session('cart') as $id => $book)
                        @php
                           $subTotal = $book['price'] * $book['quantity'];

                           $total += $subTotal;

                        @endphp
                        <tr>

                        <td> {{ $book['quantity'] }} </td>
                        <td> {{ $book['price'] }}$ </td>

                        <td>
                            <a href="{{route('remove', [$id])}}" class="btn btn-danger btn-sm">X</a>
                        </td>


                        <tr>
                    @endforeach

                @endif

            </tbody>

        </table>
        @if(isset($subTotal))
        <ul class="list-group">
            <h4>

              Subtotal
              <span class="badge bg-primary rounded">{{$subTotal  }}$</span>
            </h4>
            <h3>
            Amount
              <span class="badge bg-primary rounded">{{$total }}$</span>
            </h3>

          </ul>

    </div>
    @endif
    <h5> {{ Session::get('remove') }} </h5>
    <h5> {{ Session::get('success') }} </h5>


</div>




@endsection
