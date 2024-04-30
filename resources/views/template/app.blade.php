<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? 'Rs_app' }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <form action="{{ route('logout') }}" method="POST" style="border: none; padding: 0; margin: 0;">
            @csrf
            <button type="submit" class="nav-link" style="background: none; border: none;">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
            </button>
        </form>
      </li>
      <li class="nav-item">
        <div class="btn-group btn-group-toggle" data-toggle="buttons" >
            <label class="btn btn-secondary active">
              <input type="radio" name="options" autocomplete="off" checked>
              <i class="fa-regular fa-sun"></i>
            </label>
            <label class="btn btn-secondary">
              <input type="radio" name="options" autocomplete="off">
              <i class="fa-solid fa-moon"></i>
            </label>
          </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    @php
    // Mengambil data menggunakan model Webset
    $setweb = App\Models\setweb::first(); // Anda bisa sesuaikan query ini dengan kebutuhan Anda
    @endphp
    <a href="#" class="brand-link">
      <img src="{{ asset('webset/'.$setweb->logo_app) }}" alt="Webset Logo" class="brand-image img-circle elevation-4" style="opacity: .9">
      <span class="brand-text font-weight-light">{{ $setweb->name_app }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('storage/' . Auth::user()->profile) }}" class="img-circle elevation-2" alt="Profile Photo">
        </div>
        <div class="info">
            @if(Auth::check())
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            @endif
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
          <!-- awal -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                REGISTRASI
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{  route('superadmin.add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rawat Jalan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rawat Inap</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Paket Perawatan</p>
                </a>
                </li>
              <li class="nav-item">
                <a href="{{  route('superadmin.pasienbaru') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pasien Baru</p>
                </a>
                </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Pasien</p>
                </a>
                </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cetak Kartu</p>
                </a>
                </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pasien Dalam Perawatan</p>
                </a>
                </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>BPJS VKLAIM</p>
                </a>
                </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jadwal Dokter</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- akhir -->
          <!-- awal -->
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-shopping-cart"></i>
              <p>
                KASIR
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{  route('superadmin.add') }}" class="nav-link">
                <i class="fas fa-weight-hanging"></i>
                  <p>Pembayaran</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <!-- submenu -->
             <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kunjungan</p>
                </a>
              </li>
                </ul>
                <!-- submenu-end -->
                <!-- submenu -->
             <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>UBL</p>
                </a>
              </li>
                </ul>
                <!-- submenu-end -->
                <!-- submenu -->
             <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Transaksi Sebelumnya</p>
                </a>
              </li>
                </ul>
                <!-- submenu-end -->
                <!-- submenu -->
             <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Merge Kwitansi</p>
                </a>
              </li>
                </ul>
                <!-- submenu-end -->
                <!-- submenu -->
             <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E Hospital</p>
                </a>
              </li>
                </ul>
                <!-- submenu-end -->
                <!-- submenu -->
             <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Seting</p>
                </a>
              </li>
                </ul>
                <!-- submenu-end -->
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Titipan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Angsuran</p>
                </a>
                </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Retur Pasien</p>
                </a>
                </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nota dan Invoice</p>
                </a>
                </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                <i class="fas fa-tags"></i>
                  <p>Daftar Tarif</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <!-- submenu -->
             <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tarif Basic</p>
                </a>
              </li>
                </ul>
                <!-- submenu-end -->
                <!-- submenu -->
             <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tarif Bertingkat</p>
                </a>
              </li>
                </ul>
                <!-- submenu-end -->
                <!-- submenu -->
             <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tarif Paket</p>
                </a>
              </li>
                </ul>
                <!-- submenu-end -->
                <!-- submenu -->
             <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tarif Kelas Ranap</p>
                </a>
              </li>
                </ul>
                <!-- submenu-end -->
                <!-- submenu -->
             <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tarif Lab</p>
                </a>
              </li>
                </ul>
                <!-- submenu-end -->
                <!-- submenu -->
             <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tarif Radiologi</p>
                </a>
              </li>
                </ul>
                <!-- submenu-end -->
                <!-- submenu -->
             <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tarif Diagnosa</p>
                </a>
              </li>
                </ul>
                <!-- submenu-end -->
              </li>
            </ul>
          </li>
          <!-- akhir -->
          <!-- awal -->
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-prescription-bottle-alt"></i>
              <p>
                APOTIK / FARMASI
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{  route('superadmin.add') }}" class="nav-link">
                <i class="fas fa-pills"></i>
                  <p>Transaksi</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <!-- submenu -->
             <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Entry Obat</p>
                </a>
              </li>
                </ul>
                <!-- submenu-end -->
                <!-- submenu -->
             <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Retur Obat</p>
                </a>
              </li>
                </ul>
                <!-- submenu-end -->
                <!-- submenu -->
             <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penyerahan Obat</p>
                </a>
              </li>
                </ul>
                <!-- submenu-end -->
                <!-- submenu -->
             <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Template Resep</p>
                </a>
              </li>
                </ul>
                <!-- submenu-end -->
                <!-- submenu -->
             <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengkajian Obat</p>
                </a>
              </li>
                </ul>
                <!-- submenu-end -->
                <!-- submenu -->
             <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stock Obat</p>
                </a>
              </li>
                </ul>
                <!-- submenu-end -->
                </a>
              </li>
            </ul>
          </li>
          <!-- akhir -->
          <!-- awal -->
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-microscope"></i>
              <p>

                LABORATORIUM
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{  route('superadmin.add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lab Umum</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lab Pathology</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lab BDRS</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- akhir -->
          <!-- awal -->
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-radiation-alt"></i>
              <p>

                RADIOLOGI
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{  route('superadmin.add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Transaksi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DEPO</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Seting</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- akhir -->
          <!-- awal -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>

                UGD / IGD
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{  route('superadmin.add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>UGD Umum</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PONEK</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>INFEKSIUS</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- akhir -->
          <!-- awal -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>

                E.MEDICAL RECORD
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{  route('superadmin.add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Status</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <!-- submenu -->
                <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>RL Report</p>
                </a>
              </li>
                </ul>
                <!-- submenu-end -->
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>RL Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Seting</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- akhir -->

          <li class="nav-item {{ \Route::is('superadmin.bank') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{ \Route::is('superadmin.bank') ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                SETTING
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{  route('superadmin.bank') }}" class="nav-link {{ \Route::is('superadmin.bank') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>

                  <p>Add Bank</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{  route('superadmin.departemen') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Departemen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{  route('superadmin.bidang') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Bidang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{  route('superadmin.jabatan') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jabatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{  route('superadmin.pendidikan') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add pendidikan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Web Seting
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


  @yield('content')




  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)

  $(function () {
        bsCustomFileInput.init();
    });
</script>
<!-- bs-custom-file-input -->
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- SweetAlert2 -->
<script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- Page specific script -->
<script>
    $(function () {
        $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["csv", "excel", "pdf", "print"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 10000,
        timerProgressBar: true
    });

        // Saat halaman dimuat, cek apakah ada pesan sukses atau error dari server dan tampilkan SweetAlert sesuai.
        document.addEventListener('DOMContentLoaded', function() {
            if ("{{ session('success') }}") {
                Toast.fire({
                    icon: 'success',
                    title: "{{ session('success') }}"
                });
            }

            if ("{{ session('error') }}") {
                Toast.fire({
                    icon: 'error',
                    title: "{{ session('error') }}"
                });
            }
        });

        // Event listener untuk perubahan mode
        $('.btn-group-toggle label').on('click', function() {
            // Menghapus kelas 'active' dari semua label
            $('.btn-group-toggle label').removeClass('active');
            // Menambahkan kelas 'active' ke label yang diklik
            $(this).addClass('active');

            // Memeriksa apakah label yang diklik adalah label pertama (mode terang)
            if ($(this).index() === 0) {
                $('body').removeClass('dark-mode');
                localStorage.setItem('darkMode', 'disabled'); // Menyimpan preferensi dark mode pada local storage
            } else {
                $('body').addClass('dark-mode');
                localStorage.setItem('darkMode', 'enabled'); // Menyimpan preferensi dark mode pada local storage
            }
        });

        // Menerapkan preferensi dark mode saat halaman dimuat
        $(document).ready(function() {
            // Memeriksa preferensi dark mode pada local storage
            var darkModeEnabled = localStorage.getItem('darkMode') === 'enabled';

            // Mengatur mode berdasarkan preferensi yang disimpan
            if (darkModeEnabled) {
                $('.btn-group-toggle label:nth-child(2)').addClass('active'); // Menandai label mode gelap
                $('body').addClass('dark-mode'); // Mengatur mode gelap pada body
            } else {
                $('.btn-group-toggle label:nth-child(1)').addClass('active'); // Menandai label mode terang
            }
        });

</script>
</body>
</html>
