<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SRS System Shop/Admin</title>
  <link rel="shortcut icon" type="image/x-icon" href="/images/LogoMakr_2ToleR.png" /

  <!-- Custom fonts for this template-->



  <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="/js/jquery.datetimepicker.css" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">

  <style>
    body{
      font-family: 'Prompt', sans-serif;
    }
  </style>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gray-900 sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SRS Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
            <a class="nav-link" href="/">
              <i class="fas fa-fw fa-bookmark"></i>
              <span>หน้าหลัก</span></a>
          </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <div class="sidebar-brand-text mx-3 color">
          <i class="fas fa-fw fa-cog"></i>
          <span>จัดการระบบ</span>
        </a>
      </div>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="/admin/user">
          <i class="fas fa-fw fa-users"></i>
          <span>ผู้ใช้งาน</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/userType">
          <i class="fas fa-fw fa-star"></i>
          <span>สิทธิ์ผู้ใช้งาน</span></a>
      </li>

       <hr class="sidebar-divider">

      <div class="sidebar-brand-text mx-3">
          <i class="fas fa-fw fa-cog"></i>
          <span>จัดการข่าว</span>
        </a>
      </div>

      <li class="nav-item">
        <a class="nav-link" href="/admin/category">
          <i class="fas fa-fw fa-bookmark"></i>
          <span>หมวดหมู่ข่าวสาร</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/article">
          <i class="fas fa-fw fa-inbox"></i>
          <span>ข่าวสาร</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/banner">
          <i class="fas fa-fw fa-bullhorn"></i>
          <span>การโปรโมท</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/fb_page">
          <i class="fa fa-facebook-square"></i>
          <span>เพื่มเพจ facebook</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/contact">
            <i class="fa fa-address-card-o" aria-hidden="true"></i>
          <span>เพื่ม google maps</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <li class="nav-item mb-3">
        <a class="nav-link" href="{{ route('logout') }}">
          <i class="fa fa-sign-out"></i>
          <span>ออกจากระบบ</span></a>
      </li>
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          {{-- <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-info" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form> --}}

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-search fa-fw"></i>
                </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-info" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>{{ Auth::user()->fullname }}</span>
              </a>
          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

        @yield('content')

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!--     Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="/js/jquery.datetimepicker.full.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>


  <script src="/js/sb-admin-2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

  @yield('script')
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
</body>

</html>
