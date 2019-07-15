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
        #menu{
  margin: 0;
  padding: 0;
  margin-top: 10px;
  margin-bottom: 10px;


}
#menu li{
  list-style: none;
  display: inline-block;

}
#menu li a{
  text-decoration: none;
  position: relative;
  color: #1565C0;
  font-size: 25px;
  font-weight: 700;
  font-family: 'Prompt', sans-serif;
  display: block;
  overflow: hidden;
  transition: 0.7s all;
  padding: 14px 30px;
  text-transform: uppercase;
}
#menu li a:before{
  content: '';
  width: 60px;

  position: absolute;
  border-bottom: 5px solid #b92b27;
  bottom: 0;
  right: 350px;
  transition: 0.4s all;
}
#menu li a:hover:before{
  right: 5px;
}
    </style>
</head>

<body>






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
                        aria-expanded="false"> <a    href="{{ url('/admin') }}">{{ Auth::user()->fullname }}</a> <span class="caret"></span></a> /
                        <a style="color:red;"   href="{{ url('/logout') }}">Logout</a> <span class="caret"></span></a>



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
