@extends('admin_user.layout_home')
@section('content')
    <div class="card" style="margin:20px;">
        <div class="card-header">Thêm Người Dùng</div>
        <div class="card-body">
            <form action="{{ url('/admin_user') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="user_name">Tên User: </label>
                <input type="text" name="user_name" id="name" class="form-control" required><br>
                <label for="user_name">Email: </label>
                <input type="text" name="user_email" id="email" class="form-control" required><br>
                <label for="user_name">Phone: </label>
                <input type="text" name="user_phone" id="phone" class="form-control" required><br>
                <label for="user_name">Password: </label>
                <input type="text" name="user_password" id="password" class="form-control" required><br>
                <label for="user_name">Address:</label>
                <input type="text" name="user_address" id="address" class="form-control" required><br>
                <label for="user_name">Avatar</label>
                <input type="file" name="user_avatar" id="avatar" class="form-control" accept="image/*" required><br>
                <select name="usertype" id="usertype" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select><br>

                <input type="submit" value="Thêm Người Dùng" class="btn btn-success"><br>
            </form>

        </div>
    </div>
@endsection
