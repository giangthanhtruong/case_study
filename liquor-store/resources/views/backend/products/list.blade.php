@extends('backend.core.master')
@section('content')
    <div>
        <h1 style="text-align: center" class="text-primary pt-5"><strong>QUẢN LÝ SẢN PHẨM</strong></h1>
    </div>
    <div class="col-12 mt-2">
        <a class="btn btn-success" href="{{ route('products.create') }}">Thêm mới sản phẩm</a>
        <button class="btn btn-danger delete-user" id="product-delete"
                onclick="return confirm('Bạn có chắc muốn xóa không ?')">Delete
        </button>
    </div>
    <div class="card mt-2">
        <h3 class="card-header text-white text-center" style="background-color: #0c84ff"><strong>Danh sách sản
                phẩm</strong></h3>
        <div class="card-body">
            <table class="table table-hover">
                <tr>
                    <th><input type="checkbox" id="product-checkbox"></th>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Nhà sản xuất</th>
                    <th>Năm sản xuất</th>
                    <th>Số lượng</th>
                    <th>Mô tả sản phẩm</th>
                    <th>Ảnh</th>
                    <th>Giá</th>

                </tr>
                @forelse($products as $key => $product)
                    <tr id="product-item{{$product->id}}">
                        <td><input type="checkbox" class="product-checked" value="{{$product->id}} "></td>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->company }}</td>
                        <td>{{ $product->product_year }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->description }}</td>
                        <td><img src="{{ asset('storage/' . $product->image)  }}" alt="" width="100px" height="100px">
                        </td>
                        <td>{{ $product->price }}</td>
                        <td><a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Cập nhật</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No data</td>
                    </tr>
                @endforelse
            </table>
        </div>
    </div>
{{$products->links()}}

@endsection


