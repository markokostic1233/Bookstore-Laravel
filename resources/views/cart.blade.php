@extends('layout')


@section('content')

<div class="container">
    <h1 class="text-center">Cart Page</h1>
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
                <h5> {{ Session::get('success') }} </h5>
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
        <ul class="list-group">
            <h4>
              Subtotal
              <span class="badge bg-primary rounded">{{$subTotal }}$</span>
            </h4>
            <h3>
            Amount
              <span class="badge bg-primary rounded">{{$total }}$</span>
            </h3>

          </ul>

    </div>


</div>


@endsection
