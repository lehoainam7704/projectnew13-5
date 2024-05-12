@extends('admin_user.layout_home')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">

                    @if (Session::has('success'))
                        <p class="text-success">
                            {{ Session::get('success') }}
                        </p>
                    @else
                        <p class="text-danger">
                            {{ Session::get('failed') }}
                        </p>
                    @endif
                    <div class="card-body">
                        <div class="card-body">
                            <a href="{{ url('/admin_user/create') }}" class="btn btn-success btn-sm" title="Add User">Add
                                User</a>

                            <br />
                            <br />
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Avatar</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Thao Tác</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($User as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td><img src="{{ asset('images/' . $user->avatar) }}" alt=""
                                                        with="50px" height="50px"></td>

                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->phone }}</td>
                                                <td>{{ $user->address }}</td>
                                                <td>
                                                    <a href="{{ url('/admin_user/' . $user->id . '/edit') }}"
                                                        class="btn btn-primary btn-sm">Edit</a>
                                                    <form action="{{ url('admin_user/' . $user->id) }}"
                                                        accept-charset="UTF-8" style="display:inline" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete"
                                                            onclick="return confirm('Bạn có chắc chắn muốn xóa người dùng này không ?')">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                                {!! $User->links() !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
