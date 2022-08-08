<!DOCTYPE html><html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{$title}}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins')}}/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist')}}/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #80f4be;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link">
          <i class="nav-icon fas fa-sign-out-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('images')}}/rekayasa-industri.png" style="width: 100%;">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="#" class="nav-link {{$active === 'beranda' ? 'active' : ''}}">
              <i class="fas fa-house-user nav-icon" style="color: #58dfa0;"></i>
              <p>Beranda</p>
            </a>
          </li>
          <li class="nav-item {{in_array($active, ['daftar_aset']) ? 'menu-open' : ''}}">
            <a href="#" class="nav-link">
              <i class="fas fa-briefcase nav-icon" style="color: #58dfa0;"></i>
              <p>
                Aset
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('aset')}}" class="nav-link {{$active === 'daftar_aset' ? 'active' : ''}}">
                  <i class="nav-icon fas fa-th"></i>
                  <p>Daftar Aset</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('identifikasi_aset')}}" class="nav-link">
                  <i class="fas fa-pen-squaree nav-icon"></i>
                  <p>Identifikasi Aset</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-book nav-icon"></i>
                  <p>Status Aset</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-folder-open nav-icon"></i>
                  <p>Rekapitulasi Aset</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #58dfa0">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            @if ($beranda)
              <h1 class="m-0">
                Halo
                @switch(auth()->user()->role)
                  @case('wadek')
                    Wakil Dekan 2
                    @break
                  @case('kaur_lab')
                    Kaur Laboratorium
                    @break
                  @case('kaur')
                    Kaur Keuangan dan Sumber Daya
                    @break
                  @case('staff')
                    Staff Keuangan dan Sumber Daya
                    @break
                  @case('laboran')
                    Laboran
                    @break
                @endswitch
              </h1>
              <h2>Selamat Datang di FRI</h2>
            @else
              {{$title}}
            @endif
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('plugins')}}/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist')}}/js/adminlte.min.js"></script>
</body>
</html>
