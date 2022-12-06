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
        <a class="nav-link " href="<?= BASEURL;?>/DashboardPemilik">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed " href="<?= BASEURL; ?>/DashboardPemilik/tambah_akun_page">
          <i class="bi bi-person"></i>
          <span>Tambah Akun</span>
        </a>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= BASEURL;?>/DashboardPemilik/tambah_pegawai_page">
          <i class="bi bi-person"></i>
          <span>Tambah Pegawai</span>
        </a>

        <li class="nav-item">
        <a class="nav-link collapsed" href="<?= BASEURL;?>/DashboardPemilik/tambah_outlet_page">
          <i class="bi bi-building"></i>
          <span>Tambah Outlet</span>
        </a>

        <li class="nav-item">
        <a class="nav-link collapsed" href="<?= BASEURL; ?>/DashboardPemilik/tambah_harga_laundry_page">
        <i class="bi bi-cash-stack"></i>
          <span>Tambah Harga Laundry</span>
        </a>

      </li><!-- End Profile Page Nav -->

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
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
          <div class="row">

            <!-- Sales Card -->
            <div class="col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Hari Ini</a></li>
                    <li><a class="dropdown-item" href="#">Bulan Ini</a></li>
                    <li><a class="dropdown-item" href="#">Tahun Ini</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Pegawai <span>| Bulan Ini</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $data5?></h6>
                      <span class="text-muted small pt-2 ps-1">Pegawai</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Hari Ini</a></li>
                    <li><a class="dropdown-item" href="#">Bulan Ini</a></li>
                    <li><a class="dropdown-item" href="#">Tahun Ini</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Outlet <span>| Bulan Ini</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-shop"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?=$data6?></h6>
                      <span class="text-muted small pt-2 ps-1">Outlet</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

          
             <!-- Recent Sales -->
             <div class="col-12">
              <div class="card recent-sales overflow-auto">
                  <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Hari Ini</a></li>
                    <li><a class="dropdown-item" href="#">Bulan Ini</a></li>
                    <li><a class="dropdown-item" href="#">Tahun Ini</a></li>
                  </ul>
                </div>
               

                <div class="card-body">
                  <h5 class="card-title">Transaksi <span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Pelanggan</th>
                        <th scope="col">Jumlah Laundry</th>
                        <th scope="col">Tanggal Dimulai</th>
                        <th scope="col">Tanggal Selesai</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach( $data as $transaksi) : ?>
                        <?php
                          if($transaksi['STATUS'] == 'Dikerjakan'){
                            $status_badge = "bg-danger";
                          }
                          elseif($transaksi['STATUS'] == 'Selesai'){
                            $status_badge = "bg-success";
                          }
                          elseif($transaksi['STATUS'] == 'Menunggu'){
                            $status_badge = "bg-warning ";
                          }
                        ?>
                        <tr>
                          <th scope="row"><a href="#"><?= $transaksi['ID']; ?></a></th>
                          <td><?= $transaksi['NAMA'] ;?></td>
                          <td><a href="#" class="text-primary"><?= $transaksi['JUMLAH_LAUNDRY'] ;?></a></td>
                          <td><?= $transaksi['TGL_DIMULAI'] ;?></td>
                          <td><?= $transaksi['TGL_BERAKHIR'] ;?></td>
                          <td><span class="badge rounded-pill <?= $status_badge;?>"><?= $transaksi['STATUS'] ;?></span></td>
                        </tr>
                      <?php endforeach;?>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title">Pegawai </h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Akun ID</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach( $data3 as $akun) : ?>
                      <tr>
                        <th scope="row"><a href="#"><?= $akun['ID']; ?></a></th>
                        <td><?= $akun['NAMA']; ?></td>
                        <td><a href="#" class="text-primary"><?= $akun['EMAIL']; ?></a></td>
                        <td><?= $akun['AKUN_ID']; ?></td>
                        <td><a href="<?= BASEURL; ?>/dashboardPemilik/delete/<?= $akun['ID']?>" class="badge rounded-pill bg-secondary">Delete</a></td>
                      </tr>
                    <?php endforeach;?>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->


            
            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title">Outlet </h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">Tanggal Disubmit</th>
                        <th scope="col">Tanggal Diupdate</th>
                        <th scope="col" colspan="2">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach( $data4 as $outlet) : ?>
                      <tr>
                        <th scope="row"><a href="#"><?= $outlet['ID']; ?></a></th>
                        <td><?= $outlet['NAMA']; ?></td>
                        <td><a href="#" class="text-primary"><?= $outlet['ALAMAT']; ?></a></td>
                        <td><?= $outlet['NO_TLP']; ?></td>
                        <td><?= $outlet['TGL_DIBUAT']; ?></td>
                        <td><?= $outlet['TGL_DIUPDATE']; ?></td>
                        <td><span class="badge rounded-pill bg-primary"><?= $outlet['STATUS']; ?></span></td>
                        <td><a href="#" class="badge rounded-pill bg-secondary">Delete</a></td>
                      </tr>
                    <?php endforeach;?>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Hari Ini</a></li>
                    <li><a class="dropdown-item" href="#">Bulan Ini</a></li>
                    <li><a class="dropdown-item" href="#">Tahun Ini</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">Transaksi per Jenis Pakaian <span>| Bulan Ini</span></h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Tanggal Update</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data2 as $harga): ?>
                      <tr>
                        <td><a href="#" class="text-primary fw-bold"><?= $harga['NAMA']; ?></a></td>
                        <td><?= $harga['HARGA'];?></td>
                        <td class="fw-bold"><?= $harga['TGL_UPDATE']?></td>
                        <td><a href="#" class="badge rounded-pill bg-secondary">Delete</a></td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>