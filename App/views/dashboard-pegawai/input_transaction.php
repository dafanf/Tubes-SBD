<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Input Transaksi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= BASEURL; ?>/img/favicon.png" rel="icon">
  <link href="<?= BASEURL; ?>/img/logo laundry.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= BASEURL; ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= BASEURL; ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= BASEURL; ?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= BASEURL; ?>/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?= BASEURL; ?>/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?= BASEURL; ?>/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= BASEURL; ?>/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= BASEURL; ?>/css/style.css" rel="stylesheet">
</head>

  <body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

      <div class="d-flex align-items-center justify-content-between">
        <div class="logo d-flex align-items-center">
          <img src="<?= BASEURL; ?>/img/login-logo.png" alt="d'laundry-logo">
          <span class="d-none d-lg-block">D'Laundry</span>
        </div>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div><!-- End Logo -->

      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

          <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle " href="#">
              <i class="bi bi-search"></i>
            </a>
          </li><!-- End Search Icon-->

          <li class="nav-item dropdown pe-3">

            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
              <img src="<?= BASEURL; ?>/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
            </a><!-- End Profile Image Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header">
                <h6>Kevin Anderson</h6>
                <span>Web Designer</span>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Sign Out</span>
                </a>
              </li>

            </ul><!-- End Profile Dropdown Items -->
          </li><!-- End Profile Nav -->

        </ul>
      </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= BASEURL; ?>/DashboardPegawai">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
          <a class="nav-link " href="<?= BASEURL; ?>/DashboardPegawai/input_transaction">
            <i class="bi bi-cart-plus"></i>
            <span>Input Transaksi</span>
          </a>
        </li><!-- End Input Transaksi Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= BASEURL; ?>/DashboardPegawai/customer_transaction">
            <i class="bi bi-person-plus"></i>
            <span>Input Customer</span>
          </a>
        </li><!-- End Input Customer Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="login.html">
            <i class="bi bi-box-arrow-in-right"></i>
            <span>Logout</span>
          </a>
        </li><!-- End Logout Page Nav -->

      </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

      <div class="pagetitle">
        <h1>Input Transaksi</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard_pegawai.html">Home</a></li>
            <li class="breadcrumb-item active">Input Transaksi</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <section class="section dashboard">
        <div class="row">

          <!-- Left side columns -->
          <div class="col-lg-8">
            <div class="row">

              <!-- Multi Columns Form -->
              <form class="row g-3" method="post" action="<?= BASEURL; ?>/dashboardpegawai/transaction_insert">
                <div class="col-md-12">
                  <label for="inputTransaksiId" class="form-label">Transaksi Id</label>
                  <input type="text" class="form-control" id="inputTransaksiId" name="inputTransaksiId">
                </div>
                <div class="col-md-2">
                  <label for="inputJumlah" class="form-label">Jumlah laundry</label>
                  <input type="number" class="form-control" id="inputJumlah" name="inputJumlah">
                </div> 
                <div class="col-md-12">
                  <label for="inputTgl_mulai" class="form-label">Tanggal Dimulai</label>
                  <td><input type="date" id="inputTgl_dimulai" class="form-control" name="inputTgl_dimulai"></td>
                </div> 
                <div class="col-md-12">
                  <label for="inputTgl_berakhir" class="form-label">Tanggal Berakhir</label>
                  <td><input type="date" id="inputTgl_berakhir" class="form-control" name="inputTgl_berakhir"></td>
                </div>
                <div class="form-group col-md-3">
                  <label for="inputStatus">Status</label>
                  <select class="form-control" id="inputStatus" placeholder="Baju">
                    <option value="Pilih-status" disabled selected>Pilih status..</option>
                    <option value="dikerjakan" >Dikerjakan</option>
                    <option value="menunggu">Menunggu</option>
                    <option value="selesai">Selesai</option>
                  </select>
                </div>
                <div class="col-md-12">
                  <label for="inputTgl_new" class="form-label">Tanggal Dibuat</label>
                  <td><input type="date" id="inputTgl_new" class="form-control" name="inputTgl_new"></td>
                </div> 
                <div class="col-md-12">
                  <label for="inputTgl_Update" class="form-label">Tanggal Update</label>
                  <td><input type="date" id="inputTgl_update" class="form-control" name="inputTgl_update"></td>
                </div>
                <div class="col-md-12">
                  <label for="inputOutletId" class="form-label">Outlet Id</label>
                  <input type="text" class="form-control" name="inputOutletId" id="inputOutletId">
                </div> 
                <div class="col-12">
                  <label for="inputCustomerId" class="form-label">Customer Id</label>
                  <input type="text" class="form-control" id="inputCustomerId" name="inputCustomerId">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->
              
            </div>
          </div><!-- End Left side columns -->

        </div>
      </section>

    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= BASEURL; ?>/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?= BASEURL; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASEURL; ?>/vendor/chart.js/chart.min.js"></script>
    <script src="<?= BASEURL; ?>/vendor/echarts/echarts.min.js"></script>
    <script src="<?= BASEURL; ?>/vendor/quill/quill.min.js"></script>
    <script src="<?= BASEURL; ?>/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?= BASEURL; ?>/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?= BASEURL; ?>/vendor/php-email-form/validate.js"></script>
    <script type="text/javascript" src="<?= BASEURL; ?>/js/jquery-3.3.1.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <script type="text/javascript">
      $('#example-multiple-selected').multiselect();
    </script>

    <!-- Template Main JS File -->
    <script src="<?= BASEURL; ?>/js/main.js"></script>

  </body>

</html>