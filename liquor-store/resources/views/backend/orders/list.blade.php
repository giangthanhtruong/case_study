@extends('backend.core.master')
@section('content')

    <div class="container">
        <div class="card mt-2" >
            <h4 class="card-header text-white text-center " style="background-color: #0c84ff">Danh sách đơn hàng</h4>
            <div class="card-body">
                <form method="post" action="{{route('orders.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="" class="">Tên người dùng</label>
                        <input type="text" name="userName" class="form-control">

                        <p class="text-danger">{{$errors->first('userName')}}</p>

                    </div>

                    <div class="form-group">
                        <label for="">Số điện thoại</label>
                        <input type="number" name="phone" class="form-control">

                        <p class="text-danger">{{$errors->first('phone')}}</p>

                    </div>
                    <div class="form-group">
                        <label for="">Sản phẩm</label>
                        <input type="text" name="product"  class="form-control">

                        <p class="text-danger">{{$errors->first('product')}}</p>

                    </div>

                    <div class="form-group">
                        <label for="">Số lượng</label>
                        <input type="number" name="quantity" class="form-control">

                        <p class="text-danger">{{ $errors->first('quantity') }}</p>


                    <div class="form-group">
                        <label for="">Tổng tiền</label>
                        <input type="number" name="totalPrice" class="form-control">

                        <p class="text-danger">{{ $errors->first('totalPrice') }}</p>

                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
