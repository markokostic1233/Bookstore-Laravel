@extends('layout')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12 main-section">
            <div class="dropdown">
                <button type="button" class="btn btn-info" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">3</span>
                </button>
                <div class="dropdown-menu">
                    <div class="row total-header-section">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">3</span>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                            <p>Total: <span class="text-info">$2,978.24</span></p>
                        </div>
                    </div>
                    <div class="row cart-detail">
                        <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                            <img src="https://images-na.ssl-images-amazon.com/images/I/811OyrCd5hL._SX425_.jpg">
                        </div>
                        <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                            <p>Sony DSC-RX100M..</p>
                            <span class="price text-info"> $250.22</span> <span class="count"> Quantity:01</span>
                        </div>
                    </div>
                    <div class="row cart-detail">
                        <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                            <img src="https://cdn2.gsmarena.com/vv/pics/blu/blu-vivo-48-1.jpg">
                        </div>
                        <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                            <p>Vivo DSC-RX100M..</p>
                            <span class="price text-info"> $500.40</span> <span class="count"> Quantity:01</span>
                        </div>
                    </div>
                    <div class="row cart-detail">
                        <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                            <img src="https://static.toiimg.com/thumb/msid-55980052,width-640,resizemode-4/55980052.jpg">
                        </div>
                        <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                            <p>Lenovo DSC-RX100M..</p>
                            <span class="price text-info"> $445.78</span> <span class="count"> Quantity:01</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ url('cart') }}" class="btn btn-primary btn-block">View all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container page">
    @yield('content')
</div>
@yield('scripts')
@yield('content')
@endsection
