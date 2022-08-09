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
  <link rel="stylesheet" href="{{asset('dist')}}/css/adminlte.css">
  <link rel="stylesheet" href="{{asset('plugins')}}/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('plugins')}}/datatables-responsive/css/responsive.bootstrap4.min.css">
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
        <a class="nav-link" data-toggle="modal" data-target="#logout">
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
            <a href="{{url('beranda')}}" class="nav-link {{$active === 'beranda' ? 'active' : ''}}">
              <i class="fas fa-house-user nav-icon" style="color: #58dfa0;"></i>
              <p>Beranda</p>
            </a>
          </li>
          <li class="nav-item {{in_array($active, ['daftar_aset', 'identifikasi_aset', 'detail_aset', 'status_aset', 'tambah_aset', 'pengadaan_aset']) ? 'menu-open' : ''}}">
            <a href="#" class="nav-link">
              <i class="fas fa-briefcase nav-icon" style="color: #58dfa0;"></i>
              <p>
                Aset
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('aset')}}" class="nav-link {{in_array($active, ['daftar_aset', 'detail_aset', 'tambah_aset']) ? 'active' : ''}}">
                  <i class="nav-icon fas fa-th"></i>
                  <p>Daftar Aset</p>
                </a>
              </li>
              @if (auth()->user()->role !== 'wadek')
                <li class="nav-item {{in_array($active, ['pengadaan_aset']) ? 'menu-open' : ''}}">
                  <a href="#" class="nav-link">
                    <i class="fas fa-pen-square nav-icon"></i>
                    <p>
                      Pengajuan Aset
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{url('pengadaan_aset')}}" class="nav-link {{$active === 'pengadaan_aset' ? 'active' : ''}}">
                        <p>Pengajuan Pengadaan Aset</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{url('maintenance_aset')}}" class="nav-link {{$active === 'maintenance_aset' ? 'active' : ''}}">
                        <p>Pengajuan Maintenance Aset</p>
                      </a>
                    </li>
                  </ul>
                </li>
              @endif
              <li class="nav-item">
                <a href="{{url('identifikasi_aset')}}" class="nav-link {{$active === 'identifikasi_aset' ? 'active' : ''}}">
                  <i class="fas fa-columns nav-icon"></i>
                  <p>Identifikasi Aset</p>
                </a>
              </li>
              @if (auth()->user()->role === 'wadek')
                <li class="nav-item">
                  <a href="{{url('status_aset')}}" class="nav-link {{$active === 'status_aset' ? 'active' : ''}}">
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
              @endif
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
        <div class="fixed-bottom">
          <ul
            class="nav nav-pills nav-sidebar flex-column"
            data-widget="treeview"
            role="menu"
            data-accordion="false"
          >
            <li class="nav-item">
              <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#58dfa0" style="width: 1.1rem"><path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"/></svg>
                <p>
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
                </p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="{{url('akun')}}" class="nav-link {{$active === 'akun' ? 'active' : ''}}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#58dfa0" style="width: 1.1rem"><path d="M495.9 166.6C499.2 175.2 496.4 184.9 489.6 191.2L446.3 230.6C447.4 238.9 448 247.4 448 256C448 264.6 447.4 273.1 446.3 281.4L489.6 320.8C496.4 327.1 499.2 336.8 495.9 345.4C491.5 357.3 486.2 368.8 480.2 379.7L475.5 387.8C468.9 398.8 461.5 409.2 453.4 419.1C447.4 426.2 437.7 428.7 428.9 425.9L373.2 408.1C359.8 418.4 344.1 427 329.2 433.6L316.7 490.7C314.7 499.7 307.7 506.1 298.5 508.5C284.7 510.8 270.5 512 255.1 512C241.5 512 227.3 510.8 213.5 508.5C204.3 506.1 197.3 499.7 195.3 490.7L182.8 433.6C167 427 152.2 418.4 138.8 408.1L83.14 425.9C74.3 428.7 64.55 426.2 58.63 419.1C50.52 409.2 43.12 398.8 36.52 387.8L31.84 379.7C25.77 368.8 20.49 357.3 16.06 345.4C12.82 336.8 15.55 327.1 22.41 320.8L65.67 281.4C64.57 273.1 64 264.6 64 256C64 247.4 64.57 238.9 65.67 230.6L22.41 191.2C15.55 184.9 12.82 175.3 16.06 166.6C20.49 154.7 25.78 143.2 31.84 132.3L36.51 124.2C43.12 113.2 50.52 102.8 58.63 92.95C64.55 85.8 74.3 83.32 83.14 86.14L138.8 103.9C152.2 93.56 167 84.96 182.8 78.43L195.3 21.33C197.3 12.25 204.3 5.04 213.5 3.51C227.3 1.201 241.5 0 256 0C270.5 0 284.7 1.201 298.5 3.51C307.7 5.04 314.7 12.25 316.7 21.33L329.2 78.43C344.1 84.96 359.8 93.56 373.2 103.9L428.9 86.14C437.7 83.32 447.4 85.8 453.4 92.95C461.5 102.8 468.9 113.2 475.5 124.2L480.2 132.3C486.2 143.2 491.5 154.7 495.9 166.6V166.6zM256 336C300.2 336 336 300.2 336 255.1C336 211.8 300.2 175.1 256 175.1C211.8 175.1 176 211.8 176 255.1C176 300.2 211.8 336 256 336z"/></svg>
                <p>Pengaturan Akun</p>
              </a>
            </li>
          </ul>
        </div>
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
              <h1>{{$title}}</h1>
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
<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Logout</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah anda yakin akan keluar?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #58dfa0;">Close</button>
        <form action="{{url('logout')}}" method="post">
          @csrf
          <button type="submit" class="btn btn-danger">Logout</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('plugins')}}/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist')}}/js/adminlte.min.js"></script>
<script src="{{asset('plugins')}}/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('plugins')}}/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('plugins')}}/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('plugins')}}/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
  function previewImg() {
    const gambar      = document.querySelector('#foto');
    const imgPreview  = document.querySelector('.img-preview');
    // label.textContent = gambar.files[0].name;
    const file = new FileReader();
    file.readAsDataURL(gambar.files[0]);
    file.onload = function(e) {
      imgPreview.src = e.target.result;
    }
  }

  $(function () {
    $("#table").DataTable();
  });
</script>
</body>
</html>
