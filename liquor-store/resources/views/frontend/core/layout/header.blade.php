<div class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <p class="mb-0 phone pl-md-2">
                    <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> 0899 480 222</a>
                    <a href="#"><span class="fa fa-paper-plane mr-1"></span> giangthanhtruong88@email.com</a>
                </p>
            </div>
            <div class="col-md-6 d-flex justify-content-md-end">
                <div class="social-media mr-4">
                    <p class="mb-0 d-flex">
                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                    </p>
                </div>
                <div class="reg">
                    <p class="mb-0">
                        @if (!\Illuminate\Support\Facades\Auth::user())
                            <a href="{{route('register')}}" class="mr-2">Register</a>
                            <a href="{{route('login')}}">Log In</a>
                        @else
                            <a href="{{route('user.logout')}}">Log out</a>
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Liquor <span>store</span></a>
        <div class="order-lg-last btn-group">
            <a href="#" class="btn-cart dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <span class="flaticon-shopping-bag"></span>
                <div class="d-flex justify-content-center align-items-center"><small
                        id="cart-count">{{session()->has('carts') ? count(session()->get('carts')):0}}</small></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="list-cart"></div>
                {{--                <div class="dropdown-item d-flex align-items-start" href="#">--}}
                {{--                    <div class="img" style="background-image: url({{asset('images/prod-1.jpg')}});"></div>--}}
                {{--                    <div class="text pl-3">--}}
                {{--                        <h4>Bacardi 151</h4>--}}
                {{--                        <p class="mb-0"><a href="#" class="price">$25.99</a><span class="quantity ml-3">Quantity: 01</span></p>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <a class="dropdown-item text-center btn-link d-block w-100" href="{{route('user.order')}}">
                    View All
                    <span class="ion-ios-arrow-round-forward"></span>
                </a>
            </div>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Products</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="{{asset('product')}}">Products</a>
                        <a class="dropdown-item" href="product-single.html">Single Product</a>
                        <a class="dropdown-item" href="cart.html">Cart</a>
                        <a class="dropdown-item" href="checkout.html">Checkout</a>
                    </div>
                </li>
                <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="{{route('home.deleteAll')}}" class="nav-link">Reset</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="hero-wrap" style="background-image: url('{{asset('images/bg_2.jpg')}}');"
     data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-8 ftco-animate d-flex align-items-end">
                <div class="text w-100 text-center">
                    <h1 class="mb-4">Good <span>Drink</span> for Good <span>Moments</span>.</h1>
                    {{--                    <p><a href="#" class="btn btn-primary py-2 px-4">Shop Now</a> <a href="#" class="btn btn-white btn-outline-white py-2 px-4">Read more</a></p>--}}
                </div>
            </div>
        </div>
    </div>
</div>
