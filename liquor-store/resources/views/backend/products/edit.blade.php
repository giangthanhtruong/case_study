@extends('backend.core.master')
@section('content')
    <div class="card mt-2">
        <h3 class="card-header " style="text-align: center">Cập nhật thông tin sản phẩm</h3>
        <div class="card-body">
            <form method="post" action="" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="" class="">Tên sản phẩm</label>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control">

                    <p class="text-danger">{{$errors->first('name')}}</p>

                </div>

                <div class="form-group">
                    <label for="">Nhà sản xuất</label>
                    <input type="text" name="company" value="{{ $product->company }}" class="form-control">

                    <p class="text-danger">{{$errors->first('company')}}</p>

                </div>
                <div class="form-group">
                    <label for="">Năm sản xuất</label>
                    <input type="number" name="product_year" value="{{ $product->product_year }}" class="form-control">

                    <p class="text-danger">{{$errors->first('product_year')}}</p>

                </div>
                <div class="form-group">
                    <label for="">Số lượng</label>
                    <input type="number" name="quantity" value="{{ $product->quantity }}" class="form-control">

                    <p class="text-danger">{{ $errors->first('quantity') }}</p>

                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mô tả sản phẩm</label>
                    <textarea class="form-control" name="description" value="{{ $product->description }}" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Ảnh</label>
                    <input type="file" name="image" value="{{ $product->image }}" class="form-control">

                    <p class="text-danger">{{$errors->first('image')}}</p>

                </div>
                <div class="form-group">
                    <label for="">Giá</label>
                    <input type="number" name="price" value="{{ $product->price }}" class="form-control">

                    <p class="text-danger">{{ $errors->first('price') }}</p>

                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
