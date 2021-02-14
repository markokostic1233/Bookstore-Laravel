@extends('layout')


@section('content')










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




            <script>

                $(document).ready(function(){



                    $(".search").on("keyup", function() {
                    var value = $(this).val().toLowerCase();

                        $(".product").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                        });
                    });
                });




               </script>





        @endsection
