<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SRS System Shop</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/modern-business.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Prompt|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body style="font-family: 'Prompt', sans-serif;">
    <!-- Navigation -->
    <div class="container">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand ml-5" href="/"> <span><i class="fa fa-scribd" aria-hidden="true"></i></span>
               MeShop</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">หน้าหลัก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">ติดต่อเรา</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">เลือกชมสินค้า</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#news">ข่าวใหม่</a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link " href="#" id="navbarDropdownBlog" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right text-center" aria-labelledby="navbarDropdownBlog">
                            @if (Auth::guest())
                            <a class="dropdown-item" href="{{ url('/login') }}">เข้าสู่ระบบ</a>
                            <a class="dropdown-item" href="{{ url('/register') }}">สมัคสมาชิก</a>
                            @else
                            <a href="#" class="dropdown-item" data-toggle="dropdown" role="button"
                                aria-expanded="false">{{ Auth::user()->fullname }} <span class="caret"></span></a>



                            <a class="dropdown-item" href="{{ url('/logout') }}">ออกจากระบบ</a>
                            @endif
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    @yield('content')
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-4 bg-dark">
        <div class="container">
            <div class="m-0 text-center text-white">
                <i class="fa fa-copyright text-warning"></i> สงวนลิขสิทธิ์ พ.ศ. 2561, <span class="text-warning">ติดต่อผู้ดูแลระบบ :</span>  Veerapath784@gmail.com
            </div>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
