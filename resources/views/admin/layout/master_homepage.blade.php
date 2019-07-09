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
<!-- Latest compiled and minified CSS -->



    <!-- Custom styles for this template -->
    <link href="/css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style2.css">
    <link rel="stylesheet" href="/css/style-homepage.css">


    <link href="https://fonts.googleapis.com/css?family=Prompt|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    
    </style>
</head>

<body>
        <div class="container mt-1  logo" style="border-top: 1px solid LightGray;">
        <div class="text-center">
            <img class="img-fluid rounded" src="{{$logos->thumbnail}}" alt="" style="background-repeat: no-repeat;
            background-size: 100% 100%; max-width: 100%; height:200px;"> </div>
        <div class="container"><i class="fas fa-phone-square"></i> Tel. {{$contact->phone}}</div>
    </div>


    <!-- Navigation -->
   
    <div class="container mt-3 nav2" style=" 
   ">
     <div >
        <nav class=" navbar  navbar-expand-lg navbar-light  navb" >
                <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav nav-fill w-100">
                    <li class="nav-item">
                        <a class="nav-link" href="/"><i class="fas fa-home"></i> หน้าหลัก</a>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">ติดต่อเรา</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://www.project3.cmru.ac.th/60134740/?fbclid=IwAR0SzYkfNdD19vVlgm6VsqkqsMWgquoFtcmEO01TCmhgMCM2Ph_kC6VX_rc">เลือกชมสินค้า</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#news">ข่าวใหม่</a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
    @yield('content')
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-4">
        <div class="container">
            <div class="m-0 text-center text-white" >
                <i class="fa fa-copyright text-dark"></i> สงวนลิขสิทธิ์ พ.ศ. 2561, <span class="text-dark">ติดต่อผู้ดูแลระบบ :</span>  Veerapath784@gmail.com
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

                    @if (Auth::guest())
                    <a  href="{{ url('/login') }}">Admin</a>
                    @else

                    <a href="#"   data-toggle="dropdown" role="button"
                        aria-expanded="false"> <a    href="{{ url('/admin') }}">{{ Auth::user()->fullname }}</a> <span class="caret"></span></a>



                    @endif
                </div>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    {{-- <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}





    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="/js/active.js"></script>

</body>

</html>
