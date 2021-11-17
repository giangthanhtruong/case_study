@extends('backend.core.master')
@section('content')

    <div class="container">
        <div class="card mt-2" >
            <h4 class="card-header text-white text-center " style="background-color: #0c84ff">Thêm mới sản phẩm</h4>
            <div class="card-body">
                <form method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="" class="">Tên sản phẩm</label>
                        <input type="text" name="name" class="form-control">

                        <p class="text-danger">{{$errors->first('name')}}</p>

                    </div>

                    <div class="form-group">
                        <label for="">Nhà sản xuất</label>
                        <input type="text" name="company" class="form-control">

                        <p class="text-danger">{{$errors->first('company')}}</p>

                    </div>
                    <div class="form-group">
                        <label for="">Năm sản xuất</label>
                        <input type="number" name="product_year"  class="form-control">

                        <p class="text-danger">{{$errors->first('product_year')}}</p>

                    </div>
                    <div class="form-group">
                        <label for="">Số lượng</label>
                        <input type="number" name="quantity" class="form-control">

                        <p class="text-danger">{{ $errors->first('quantity') }}</p>

                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Mô tả sản phẩm</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh</label>
                        <input type="file" name="image" class="form-control">

                        <p class="text-danger">{{$errors->first('image')}}</p>

                    </div>
                    <div class="form-group">
                        <label for="">Giá</label>
                        <input type="number" name="price" class="form-control">

                        <p class="text-danger">{{ $errors->first('price') }}</p>

                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

