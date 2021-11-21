@extends('frontend.core.master')
@section('content')

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Our Delightful offerings</span>
                    <h2>Tastefully Yours</h2>
                </div>
            </div>
            <div class="row">

                @foreach($products as $key=>$product)

                    <div class="col-md-3 d-flex">
                        <div class="product ftco-animate">
                            <div class="img d-flex align-items-center justify-content-center">
                                <img src="{{asset('storage/'. $product->image)}}" alt="" width="250px" height="350px">
                            </div>
                            <div class="text text-center">
                                <span class="category">{{$product->company}}</span>
                                <h2>{{$product->name}}</h2>
                                <span class="price">$ {{$product->price}}</span>
                                <br>
                                <a href="{{route('addToCart',$product->id)}}"><button class = 'addToCart btn btn-success'
                                    >Add to Cart</button></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    {{ $products->links()}}
                </div>
            </div>
        </div>
    </section>
@endsection
