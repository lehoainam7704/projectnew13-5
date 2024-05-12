@extends('admin_user.layout_home')
@section('content')
    <div class="card" style="margin:20px;">
        <div class="card-header">Edit</div>
        <div class="card-body">
            <form action="{{ url('/admin_user/' . $user->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label for="user_name">Tên User: </label>
                <input type="text" name="user_name" id="name" class="form-control" value="{{ $user->name }}"
                    required><br>
                <label for="user_name">Email: </label>
                <input type="text" name="user_email" id="email" class="form-control" value="{{ $user->email }}"
                    required><br>
                <label for="user_name">Phone: </label>
                <input type="text" name="user_phone" id="phone" class="form-control" value="{{ $user->phone }}"
                    required><br>
                <label for="user_name">Password: </label>
                <input type="text" name="user_password" id="password" class="form-control" value="{{ $user->password }}"
                    required><br>
                <label for="user_name">Address:</label>
                <input type="text" name="user_address" id="address" class="form-control" value="{{ $user->address }}"
                    required><br>
                <label for="user_name">Avatar</label>
                <input type="file" name="user_avatar" id="avatar" class="form-control" accept="image/*" required><br>
                <select name="usertype" id="usertype" class="form-control">
                    @if ($user->usertype == 'admin')
                        <option value="admin" selected>Admin</option>
                        <option value="user">User</option>
                    @else
                        <option value="admin">Admin</option>
                        <option value="user" selected>User</option>
                    @endif
                </select><br>

                <input type="submit" value="Sửa Người Dùng" class="btn btn-success"><br>
            </form>

        </div>
    </div>
@endsection
