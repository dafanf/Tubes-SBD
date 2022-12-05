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
        <a class="nav-link collapsed" href="<?= BASEURL; ?>/DashboardPemilik">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= BASEURL; ?>/DashboardPemilik/tambah_pegawai_page">
          <i class="bi bi-person"></i>
          <span>Tambah Pegawai</span>
        </a>
      </li><!-- End Dashboard Nav -->

        <li class="nav-item">
        <a class="nav-link " href="<?= BASEURL; ?>/DashboardPemilik/tambah_outlet_page">
          <i class="bi bi-building"></i>
          <span>Tambah Outlet</span>
        </a>

        <li class="nav-item">
        <a class="nav-link collapsed" href="<?= BASEURL; ?>/DashboardPemilik/tambah_harga_laundry_page">
          <i class="bi bi-cash-stack"></i>
          <span>Tambah Harga Laundry</span>
        </a>

        <li class="nav-item">
        <a class="nav-link collapsed " href="<?= BASEURL; ?>/DashboardPemilik/tambah_akun_page">
          <i class="bi bi-person"></i>
          <span>Tambah Akun</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" confirm="Are you sure?" href="login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Logout Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

    <main id="main" class="main">

      <div class="pagetitle">
        <h1>Tambah Outlet</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Tambah Outlet</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <section class="section dashboard">
        <div class="row">

          <!-- Left side columns -->
          <div class="col-lg-8">
            <div class="row">

              <!-- Multi Columns Form -->
              <form class="row g-3" method="post" action="<?= BASEURL;?>/dashboardpemilik/tambah_outlets_page">
              <div class="col-md-12">
                  <label for="inputOutletId" class="form-label">Id</label>
                  <input type="text" class="form-control" name="inputOutletId" id="inputOutletId">
                </div>
                <div class="col-md-12">
                  <label for="inputNamaOut" class="form-label">Nama</label>
                  <input type="text" class="form-control" name="inputNamaOut" id="inputNamaOut">
                </div> 
                <div class="col-12">
                  <label for="inputStatusOut" class="form-label">Status</label>
                  <input type="text" class="form-control" name="inputStatusOut" id="inputStatusOut" placeholder="Buka/Tutup">
                </div>
                <div class="col-md-12">
                  <label for="inputAlamatOut" class="form-label">Alamat</label>
                  <input type="text" class="form-control" name="inputAlamatOut" id="inputAlamatOut">
                </div> 
                <div class="col-md-12">
                  <label for="inputNoTelp" class="form-label">No Telepon</label>
                  <input type="text" class="form-control" name="inputNoTelp" id="inputNoTelp">
                </div> 
                <div class="col-md-12">
                  <label for="inputTgl_new_out" class="form-label">Tanggal Submit</label>
                  <td><input type="date" id="inputTgl_new_out" class="form-control" name="inputTgl_new_out"></td>
                </div> 
                <div class="col-md-12">
                  <label for="inputTgl_Update_out" class="form-label">Tanggal Update</label>
                  <td><input type="date" id="inputTgl_update_out" class="form-control" name="inputTgl_update_out"></td>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->
              
            </div>
          </div><!-- End Left side columns -->

          <!-- Right side columns -->
          <div class="col-lg-4">

          </div><!-- End Right side columns -->

        </div>
      </section>

    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

