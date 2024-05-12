<!DOCTYPE html>
<!--
 ustora by freshdesignweb.com
 Twitter: https://twitter.com/freshdesignweb
 URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">

<head>
    <base href="/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop Online</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="header-area">
        <div class="container">
            @if (Route::has('login'))
                <div class="login">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">
                            <div>{{ Auth::user()->name }}</div>
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div> <!-- End header area -->

    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="./"><img src="img/logo1.png" width="64px" height="64px"></a></h1>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index">Home</a></li>
                        <li class="active"><a href="shop">Shop page</a></li>
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn">Category</button>
                                <div class="dropdown-content">
                                    @foreach ($data_category as $data)
                                        <a href="{{ route('category', $data->id) }}"
                                            class="menu_categories">{{ $data->name }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </li>
                        {{-- <li>
                            <div class="dropdown">
                                <button class="dropbtn">QLy</button>
                                <div class="dropdown-content">
                                    @foreach ($data_category as $data)
                                        <a href="{{ route('category', $data->id) }}"
                                            class="menu_categories">{{ $data->name }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </li> --}}
                        <!--Thêm Nav -->
                        <li>
                            <form role="timkiem" action="{{ route('timkiem.product', 'searchproduct') }}"
                                method="get">
                                <input style="border-radius: 10px; margin-top: 10px; margin-left: 180px; width:300px;"
                                    name="key" type="text" placeholder="Search products...">
                                <button
                                    style="border-radius: 10px; width:80px; height: 45px; margin-left: 10px;">Search</button>
                            </form>
                        </li>
                        </li>
                        <li style="margin-left: 220px;">
                            <a href="{{ route('cart.product', 'listproduct') }}"><i class="fa fa-shopping-cart"></i>
                                <span class="product-count"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- End mainmenu area -->

    @yield('content')


    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="footer-about-us">
                        <a href="index">
                            <h2><span>ShopOnline</span></h2>
                        </a>
                        <p>128 Quang Trung,Phường Bến Nghé, Quận 1, TP.Hồ Chí Minh</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>



                <div class="col-md-4 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            @foreach ($data_category as $data)
                                <a style="margin-left: 40px;" href="{{ route('category', $data->id) }}"
                                    class="menu_categories">{{ $data->name }}</a>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title" style="text-align: center;">Map</h2>
                        <div class="col-md-4 col-sm-6">
                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <iframe class="position-relative rounded w-100 h-100"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15693.125032219153!2d106.6931843!3d10.762622500000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175295b3b9050f3%3A0xf4c7b3e1c24da02!2sHo%20Chi%20Minh%20City%2C%20Vietnam!5e0!3m2!1sen!2sbd!4v1640452681322!5m2!1sen!2sbd"
                                    frameborder="0" style="min-height: 300px; border:0;" allowfullscreen=""
                                    aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2024 All Rights Reserved.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>

    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>

    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>

    <!-- Main Script -->
    <script src="js/main.js"></script>
</body>

</html>
