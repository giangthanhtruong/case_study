@extends('backend.core.master')
@section('content')
    <div class="col-12 mt-2">
        <a class="btn btn-success" href="{{ route('users.create') }}">Thêm mới người dùng</a>
        <button class="btn btn-danger delete-user">Delete</button>
    </div>
    <div class="card mt-2">
        <h3 class="card-header text-white text-center" style="background-color: #0c84ff"><strong>Danh sách khách hàng</strong></h3>
        <div class="card-body">
            <table class="table table-hover">
                <tr>
                    <th><input type="checkbox"></th>
                    <th>STT</th>
                    <th>Tên khách hàng</th>
                    <th>Mật khẩu</th>
                    <th>Tuổi</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Ảnh</th>
                    <th>Số điện thoại</th>
                </tr>
                @forelse($users as $key => $user)
                    <tr id="user-item-{{$user->id}}">
                        <td><input type="checkbox" class="user-checked" value="{{$user->id}}"></td>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->password }}</td>
                        <td>{{ $user->age }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->address }}</td>
                        <td><img src="{{ asset('storage/' . $user->image)  }}" alt="" width="100"></td>

                        <td>{{ number_format($user->phone)  }} </td>
                        <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Cập nhật</a></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No data</td>
                    </tr>
                @endforelse
            </table>
        </div>
    </div>


@endsection

