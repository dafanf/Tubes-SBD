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
            <i class="bi bi-journal-text"></i>
            <span>Input Transaksi</span>
          </a>
        </li><!-- End Input Transaksi Nav -->

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
              <form class="row g-3">
                <div class="col-md-12">
                  <label for="inputName5" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="inputName5">
                </div>
                <div class="col-md-12">
                  <label for="inputText" class="form-label">NIK</label>
                  <input type="text" class="form-control" id="inputNIK5">
                </div>  
                <div class="col-12">
                  <label for="inputAddress5" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="inputAddres5s" placeholder="Jl.Senang No.123">
                </div>
                <div class="col-md-12">
                  <label for="inputText" class="form-label">No Telepon</label>
                  <input type="text" class="form-control" id="inputNoTelp">
                </div>
                <div class="col-md-12">
                  <label for="inputType" class="form-label">Jenis Pakaian</label><br>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="baju">
                    <label class="form-check-label" for="baju">Baju</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="kemaja">
                    <label class="form-check-label" for="Kemeja">Kemeja</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="kaus">
                    <label class="form-check-label" for="kaus">Kaus</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="jubah">
                    <label class="form-check-label" for="jubah">Jubah</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="celana">
                    <label class="form-check-label" for="celana">Celana</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="rok">
                    <label class="form-check-label" for="rok">Rok</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="pakaian-dalam">
                    <label class="form-check-label" for="pakaian-dalam">Pakaian Dalam</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <label for="inputNumber" class="form-label">Berat</label>
                  <input type="number" class="form-control" id="inputWeight">
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