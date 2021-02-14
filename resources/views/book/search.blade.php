
@extends('layout')


@section('content')


<div class="container">

    <div class="row">
        <div class="col-md-5 col-md-offset-4">
            <form action="{{ route('book.search')}}" method="GET" class="search-form">
             {{csrf_field()}}
                <div class="input-group">
            		<label for="search" class="sr-only">Search</label>
            		<input type="text" class="form-control" name="query" id="search" placeholder="Search category..">
 <span class="input-group-btn ">
    <button class="btn btn-outline-primary" style="margin-left:5px" type="submit">Go</button>
  </span>

            </form>
        </div>
    </div>
</div>





  <section id="facilities">



 <div class="row">


    @foreach($bookstores as $bookstore)
   <div class="col-md-4">

     <div class="card text-center">

       <img src="data:image/png;base64,{{ chunk_split(base64_encode($bookstore->prices->Picture)) }}"class="card-img-top">

        <div class="card-body">
        <h5 class="card-title"> {{$bookstore->boooks->Name}} </h5>

        <p class="card-text">{{$bookstore->prices->price}} </p>




 </div>

</div>
</div>
 @endforeach





</div>

 </div>

</section>


@endsection
