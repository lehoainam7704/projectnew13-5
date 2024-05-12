@extends('admin_user.TimkiemUser')
@section('content')
{{-- <div class="user-breadcrumb">
    <a href="{{ url('index') }}">Trang chủ</a> <!-- Đường dẫn đến trang chủ -->
</div>
<h2 style="text-align: center;">Kết quả tìm kiếm</h2>
<h3>Tìm thấy {{count($users_timkiem)}} Người Dùng</h3>
<div class="single-user-area">
    <div class="container">
        <div class="row">
            @foreach($users_timkiem as $user)
            <div class="col-md-3 col-sm-6">
                <div class="user-timkiem">
                    <div class="user-timkiem-avatar">
                        <a href="{{ url('/admin_user/', $user->id) }}"> <!-- Đường dẫn đến trang thông tin chi tiết của người dùng -->
                            <img src="{{ asset('img/' . $user->avatar) }}" alt="{{ $user->name }}">
                        </a>
                    </div>
                    <h2><a href="{{ route('/admin_user/', $user->id) }}">{{ $user->name }}</a></h2>
                    <div class="user-timkiem-email">
                        Email: {{ $user->email }}
                    </div>
                    <!-- Bổ sung thông tin khác của người dùng nếu cần -->
                </div>
            </div>
            @endforeach
        </div>
        <div style="text-align: center;">
            {{ $users_timkiem->links() }} <!-- Phân trang cho kết quả tìm kiếm -->
        </div>
    </div>
</div> --}}
@endsection
