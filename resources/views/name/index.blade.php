@extends('layout')


@section('content')

  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

</head>
<body>

<nav class="navbar navbar-inverse  ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand text-light" href="#">Bookstore</a>
    </div>
    <ul class="nav navbar-nav">

    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">
      <i class="glyphicon glyphicon-home"></i>
      </span>
          {{Session::get('name')}}

      </a></li>
      <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>

    </ul>


  </div>



</nav>

<div class="container">

    <div class="row">
        <div class="col-md-5 col-md-offset-4">
            <form action="{{ route('book.search')}}" method="GET" class="search-form">
             {{csrf_field()}}
                <div class="input-group">
            		<label for="search" class="sr-only">Search</label>
            		<input type="text" class="form-control" name="query" id="search" placeholder="Search book..">
 <span class="input-group-btn ">
    <button class="btn btn-outline-primary" style="margin-left:5px" type="submit">Go</button>
  </span>

            </form>
        </div>
    </div>
</div>


  <section id="facilitiess">



 <div class="row">

 <div class="card" style="width: 18rem;">
  <div class="card-header">
    Featured
  </div>
     @foreach($bookShows as $bookShow)

  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{$bookShow->category}}</li>
    <li class="list-group-item">{{$bookShow->Name}}</li>
  <li class="list-group-item"><img src="data:image/png;base64,{{ chunk_split(base64_encode($bookShow->Images)) }}" height="70" width="auto"></td>

    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
     @endforeach
</div>
</div>



 </div>

</section>
@yield('content')
@endsection
