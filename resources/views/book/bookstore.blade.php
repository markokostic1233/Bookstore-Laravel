@extends('layout')


@section('content')



<div class="container">

    <div class="row">
        <div class="col-md-5 col-md-offset-4">
           <div class="hide-phone app-search" style="margin: 0px">
           <form action="{{ route('book.search')}}" method="GET" class="search-form">
             {{csrf_field()}}
                <div class="input-group">
            		<label for="search" class="sr-only">Search</label>
<input type="search" style="min-width: 350px"
                 name="query" id="productSearch" placeholder="Search category.."
                   class="form-control search"/> <span class="input-group-btn ">
    <button class="btn btn-outline-primary" style="margin-left:5px" type="submit">Go</button>
  </span>

            </form>
        </div><br><br>
        </div>
    </div>
</div>





  <section id="facilities">



 <div class="row">

@foreach($bookstores as $bookstore)

   <div class="col-md-4">

     <div class="card text-center">

     <a href="/table/{{$bookstore->Name}}">

     <img src="data:image/png;base64,{{ chunk_split(base64_encode($bookstore->prices->Picture)) }}"class="card-img-top">
       </a>
        <div class="card-body">
        <h5 class="card-title"> {{$bookstore->category}} </h5>
        <p class="card-text">{{$bookstore->Name}} </p>
        <p class="card-text">{{$bookstore->prices->price}} </p>




 </div>

</div>
</div>
 @endforeach





</div>

 </div>

</section>




 <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/search.js') }}"></script>



        @endsection
