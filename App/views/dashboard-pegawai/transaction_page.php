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
            <span class="d-none d-md-block dropdown-toggle ps-2">Dafa Nurul Fauziansyah</span>
          </a><!-- End Profile Iamge Icon -->

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
        <a class="nav-link collapsed" href="dashboard_pegawai.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="input_pegawai.html">
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
      <h1>Bukti Transaksi</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard_pegawai.html">Home</a></li>
          <li class="breadcrumb-item active">Bukti Transaksi</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
          <div class="row">

            <!-- Receipt -->
            <div class="receipt-content">
                <div class="container bootstrap snippets bootdey">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="invoice-wrapper">
                                <div class="intro">
                                    Hi <strong>John McClane</strong>, 
                                    <br>
                                    This is the receipt for a payment of <strong>$312.00</strong> (USD) for your works
                                </div>
            
                                <div class="payment-info">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <span>Payment No.</span>
                                            <strong>434334343</strong>
                                        </div>
                                        <div class="col-sm-6 text-right">
                                            <span>Payment Date</span>
                                            <strong>Jul 09, 2014 - 12:20 pm</strong>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="payment-details">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <span>Client</span>
                                            <strong>
                                                Andres felipe posada
                                            </strong>
                                            <p>
                                                989 5th Avenue <br>
                                                City of monterrey <br>
                                                55839 <br>
                                                USA <br>
                                                <a href="#">
                                                    jonnydeff@gmail.com
                                                </a>
                                            </p>
                                        </div>
                                        <div class="col-sm-6 text-right">
                                            <span>Payment To</span>
                                            <strong>
                                                Juan fernando arias
                                            </strong>
                                            <p>
                                                344 9th Avenue <br>
                                                San Francisco <br>
                                                99383 <br>
                                                USA <br>
                                                <a href="#">
                                                    juanfer@gmail.com
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="line-items">
                                    <div class="headers clearfix">
                                        <div class="row">
                                            <div class="col-xs-4">Description</div>
                                            <div class="col-xs-3">Quantity</div>
                                            <div class="col-xs-5 text-right">Amount</div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="row item">
                                            <div class="col-xs-4 desc">
                                                Html theme
                                            </div>
                                            <div class="col-xs-3 qty">
                                                3
                                            </div>
                                            <div class="col-xs-5 amount text-right">
                                                $60.00
                                            </div>
                                        </div>
                                        <div class="row item">
                                            <div class="col-xs-4 desc">
                                                Bootstrap snippet
                                            </div>
                                            <div class="col-xs-3 qty">
                                                1
                                            </div>
                                            <div class="col-xs-5 amount text-right">
                                                $20.00
                                            </div>
                                        </div>
                                        <div class="row item">
                                            <div class="col-xs-4 desc">
                                                Snippets on bootdey 
                                            </div>
                                            <div class="col-xs-3 qty">
                                                2
                                            </div>
                                            <div class="col-xs-5 amount text-right">
                                                $18.00
                                            </div>
                                        </div>
                                    </div>
                                    <div class="total text-right">
                                        <p class="extra-notes">
                                            <strong>Extra Notes</strong>
                                            Please send all items at the same time to shipping address by next week.
                                            Thanks a lot.
                                        </p>
                                        <div class="field">
                                            Subtotal <span>$379.00</span>
                                        </div>
                                        <div class="field">
                                            Shipping <span>$0.00</span>
                                        </div>
                                        <div class="field">
                                            Discount <span>4.5%</span>
                                        </div>
                                        <div class="field grand-total">
                                            Total <span>$312.00</span>
                                        </div>
                                    </div>
            
                                    <div class="print">
                                        <a href="#">
                                            <i class="fa fa-print"></i>
                                            Print this receipt
                                        </a>
                                    </div>
                                </div>
                            </div>
            
                        </div>
                    </div>
                </div>
            </div>                    
            <!-- Receipt -->

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>