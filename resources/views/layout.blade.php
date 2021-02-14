<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bookstore</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

</head>
<body>

    <nav class="navbar navbar-inverse  ">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand text-light" href="#">Bookstore</a>
          </div>
          <ul class="nav navbar-nav">
                <li class="dropdown">



            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li>
            <a class="p-2 text-white" href="{{ route('cart') }}"><i class="fas fa-cart-arrow-down bg-white"></i>Cart

            </a>    </li>
            <li>
            @guest
            @if(Route::has('register'))
            <a class="p-2 text-dark" href="{{ route('register') }}"><span class="glyphicon glyphicon-log-in"></span> Register </a>

            @endif
          <a class="p-2 text-dark" href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login </a>

          @else

            <a class="p-2 text-dark" href="{{ route('logout') }}"
            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <span class="glyphicon glyphicon-log-in"></span>
             Logout ({{ Auth::user()->name }}) </a>

            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none";>
                @csrf


            </form>
          @endguest
        </li>
          </ul>


        </div>



      </nav>


      <script src="{{ asset('js/app.js') }}"></script>
      <script src="{{ asset('js/search.js') }}"></script>

    @yield('content')
</body>
</html>
