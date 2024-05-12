<!DOCTYPE html>
<html>
<head>
    <title>CRUD PRODUCT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    /* Tùy chỉnh thanh điều hướng */
    .navbar {
        background-color: #a6e978;
        /* Màu nền */
        border-radius: 5px;
        padding: 10px;
        border: none;
        margin-bottom: 20px;
    }

    .navbar-brand {
        font-weight: bold;
        color: #212529;
        font-size: 1.5rem;
        /* Độ lớn chữ */
    }

    .navbar-nav .nav-item {
        margin-left: 20px;
    }

    .navbar-nav .nav-link {
        color: #212529;
        font-weight: bold;
    }

    .navbar-toggler-icon {
        color: #212529;
    }

    /*
    /* Form tìm kiếm */

    .d-flex {
        margin-left: auto;
        display: flex;
        align-items: center;
        margin-right: 10px;
        border: none;
        color: #e0868b;
        font-weight: bold;

    }

    .btn-outline-success {
        align-items: center;
        margin-right: 10px;
        font-weight: bold;
        margin-left: auto;
    }

    .form-control {
        border-radius: 10px;
        /* Bo góc */
    }

    */ .nav-link {
        color: #f13602;
    }

    .search-form input[type="search"] {
        width: 200px;
        margin-right: 10px;
        border-radius: 5px;
    }

    .bottom-button {
        position: fixed;
        /* Đảm bảo nút button không di chuyển khi cuộn trang */
        bottom: 20px;
        /* Điều chỉnh khoảng cách từ bottom của trình duyệt */
        right: 20px;
        /* Điều chỉnh khoảng cách từ right của trình duyệt */
        padding: 10px 20px;
        /* Padding của nút */
        background-color: #007bff;
        /* Màu nền của nút */
        color: #fff;
        /* Màu chữ của nút */
        border: none;
        /* Loại bỏ border */
        border-radius: 5px;
        /* Bo tròn góc nút */
        cursor: pointer;
        /* Con trỏ khi di chuột qua nút */
        z-index: 9999;
        /* Đảm bảo nút hiển thị trên các phần tử khác */
    }

    .bottom-button:hover {
        background-color: #0056b3;
        /* Màu nền khi di chuột qua */
    }


    /* Nút đăng xuất */
    .logout-btn {
        width: 200px;
        margin-right: 10px;
        background: #f13602;
        font-weight: bold;
        border-radius: 5px;
        right: 20px;
        position: absolute;
        /* Đảm bảo nút button không di chuyển khi cuộn trang */
        bottom: 20px;
        padding: 5px;
        border: none;
    }

    .logout-btn:hover {
        background-color: #0056b3;
        /* Màu nền khi di chuột qua */
    }
</style>
<body>

<div class="container">

<nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Quản Lý </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin_product.index') }}">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin_category.index') }}">Danh mục</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin_product.trangchu') }}">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin_user') }}">User</a>
                    </li>
                </ul>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="logout-btn " type="submit"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Đăng Xuất') }}
                    </button>
                </form>
            </div>
        </div>
    </nav>

    @yield('content')

</div>

</body>
</html>
