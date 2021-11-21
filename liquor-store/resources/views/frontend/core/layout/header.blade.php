<div class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <p class="mb-0 phone pl-md-2">
                    <a href="#" class="nav-item active mr-2"><span class="fa fa-phone mr-1"></span> 0899 480 222</a>
                    <a href="#"><span class="fa fa-paper-plane mr-1"></span> giangthanhtruong88@email.com</a>
                </p>
            </div>
            <div class="col-md-6 d-flex justify-content-md-end">
                <div class="social-media mr-4">
{{--                    <p class="mb-0 d-flex">--}}
{{--                        </p>--}}
                </div>
                <div class="reg">
                    <p class="mb-0">
                        @if (!\Illuminate\Support\Facades\Auth::user())
                            <a href="{{route('register')}}" class="mr-2">Register</a>
                            <a href="{{route('login')}}" >Log In</a>
                        @else
                            <span style="color: white" class="mr-2"> Hello {{\Illuminate\Support\Facades\Auth::user()->name}} </span>
                            <a href="{{route('user.logout')}}">Log out</a>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>
@php($products = session('cart') ?? $products=[])
@php($counts = session('count')?? $counts=[])
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">Liquor <span>store</span></a>
        <div class="order-lg-last btn-group">
            <a href="" class="btn-cart dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <span class="flaticon-shopping-bag"></span>
                <div class="d-flex justify-content-center align-items-center"><small
                        id="cart-count">{{count($products) }}</small>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                @foreach($products as $key => $product)

                    <div class="dropdown-item d-flex align-items-start" href="#">
                        <div class="img" style="background-image: url({{asset('storage/'. $product->image)}});">

                        </div>
                        <div class="text pl-3">
                            <h4>{{$product->name}}</h4>
                            <p class="mb-0"><a href="#" class="price">{{asset($product->price)}}</a>
                                <span class="quantity ml-3">{{$product->counts}}</span></p>
                        </div>

                    </div>
                @endforeach
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
                <li class="nav-item active"><a href="{{route('home')}}" class="nav-link">Home</a></li>
                <li class="nav-item active"><a href="" class="nav-link">About</a></li>
                <li class="nav-item active"><a href="{{route('show.products')}}" class="nav-link">Products
                    </a></li>
                <li class="nav-item active"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
                <li class="nav-item active"><a href="{{route('home.deleteAll')}}" class="nav-link">Reset</a></li>
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
                </div>
            </div>
        </div>
    </div>
</div>
