@extends('frontend.core.master')
@section('content')


    <div class=" mt-5">
        <h1 style="text-align: center; color: #0c84ff"><strong>MY CART</strong></h1>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="table-wrap">
                    <table class="table">
                        <thead class="thead-primary">
                        <tr>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>total</th>
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($products = session('cart')?? $products=[])
                        @php($counts = session('count')?? $counts=[])

                        @foreach($products as $key=>$product)
                            <tr class="alert" role="alert">
                                <td>
                                    <label class="checkbox-wrap checkbox-primary">
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                                <td>
                                    <img src="{{asset('storage/'. $product->image)}}" alt="" width="300px"
                                         height="400px">
                                </td>
                                <td>
                                    <div class="email">
                                        <span>{{$product->company}}</span>
                                        <span>{{$product->name}}</span>
                                    </div>
                                </td>
                                <td>{{$product->price}}</td>
                                <td class="quantity">
                                    <div class="input-group">
                                        <input type="text" name="quantity" class="quantity form-control input-number" value="{{$counts[$key]}}">
                                    </div>
                                </td>
                                <td>{{$product->price * $counts[$key]}}</td>
                                <td>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                    </button>
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
                    <div class="cart-total mb-3">
                        <h3>Cart Totals</h3>
                        <p class="d-flex">
                            <span>Subtotal</span>
                            <span>$20.60</span>
                        </p>
                        <p class="d-flex">
                            <span>Delivery</span>
                            <span>$0.00</span>
                        </p>
                        <p class="d-flex">
                            <span>Discount</span>
                            <span>$3.00</span>
                        </p>
                        <hr>
                        <p class="d-flex total-price">
                            <span>Total</span>
                            <span>$17.60</span>
                        </p>
                    </div>
                    <p class="text-center"><a href="checkout.html" class="btn btn-primary py-3 px-4">Proceed to
                            Checkout</a></p>
                </div>
            </div>
        </div>
    </section>

@endsection
