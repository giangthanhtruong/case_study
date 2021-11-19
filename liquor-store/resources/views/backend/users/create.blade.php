@extends('backend.core.master')
@section('content')

<div class="container">
    <div class="card mt-2" >
    <h4 class="card-header text-white text-center " style="background-color: #0c84ff">Thêm mới người dùng</h4>
    <div class="card-body">
        <form method="post" action="" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="" class="">Name</label>
                <input type="text" name="name" class="form-control">

                <p class="text-danger">{{$errors->first('name')}}</p>

            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control">

                <p class="text-danger">{{$errors->first('password')}}</p>

            </div>
            <div class="form-group">
                <label for="">Ngày Sinh</label>
                <input type="date" name="age"  class="form-control">

                <p class="text-danger">{{$errors->first('age')}}</p>

            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control">

                <p class="text-danger">{{ $errors->first('email') }}</p>

            </div>
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" name="address" class="form-control">

                <p class="text-danger">{{$errors->first('address')}}</p>

            </div>
            <div class="form-group">
                <label for="">Ảnh</label>
                <input type="file" name="image" class="form-control">

                <p class="text-danger">{{$errors->first('image')}}</p>

            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="number" name="phone"  class="form-control">

                <p class="text-danger">{{$errors->first('phone') }}</p>

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>
@endsection
