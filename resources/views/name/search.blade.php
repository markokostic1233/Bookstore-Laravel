@extends('layout')


@section('content')

  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

</head>
<body>



<div class="container">

    <div class="row">
        <div class="col-md-5 col-md-offset-4">
            <form action="{{ route('name.search')}}" method="GET" class="search-form">
             {{csrf_field()}}
                <div class="input-group">
            		<label for="search" class="sr-only">Search</label>
            		<input type="text" class="form-control" name="query" id="search" placeholder="Search name..">
 <span class="input-group-btn ">
    <button class="btn btn-outline-primary" style="margin-left:5px" type="submit">Go</button>
  </span>

            </form>
        </div>
    </div>
</div>
<br><br><br><br><br>
<div class="container">
    @foreach($bookShows as $bookShow)
    <div class="row justify-content-md-center">

      <div class="col-4 col-lg-3">

        <img class="card-img-top" src="data:image/png;base64,{{ chunk_split(base64_encode( $bookShow->Images)) }}" alt="Card image cap">
      </div>

      <div class="col-4 col-lg-3"> <h4> {{$bookShow->BooksName}} </h4>

      <br> <br> {{ $bookShow->Name}}</div>

      <div class="col-4 col-lg-3 ">
        <i class="fas fa-clock">
        {{  $bookShow->created_at->diffForHumans()}}

         <input type="hidden" id="pro_id" value="{{  $bookShow->id }}">

        <a class="btn btn-primary" href="{{ route('add-cart',[ $bookShow->id]) }}"> Add to Cart </a>
    </i>

        <button class="disabled btn btn-primary"> {{  $bookShow->price }}$</button>


    </div>



    </div>




     @endforeach
</div>

@yield('content')
@endsection
