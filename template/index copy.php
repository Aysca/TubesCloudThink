<?php
    include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Majestic Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href="vendors/datatables.net-bs4/dataTables.bootstrap4.css"
    />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
  </head>
  <body>
    
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center">
          <div
            class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100"
          >
          <a class="navbar-brand brand-logo" href="index.php"
              ><img src="images/CLOUDTHNK.png" alt="logo"
            /></a>
            <a class="navbar-brand brand-logo-mini" href="index.php"
              ><img src="images/CLOUDTHNK.png" alt="logo"
            /></a>
            <button
              class="navbar-toggler navbar-toggler align-self-center"
              type="button"
              data-toggle="minimize"
            >
              <span class="mdi mdi-sort-variant"></span>
            </button>
          </div>
        </div>
        <div
          class="navbar-menu-wrapper d-flex align-items-center justify-content-end"
        >
          <ul class="navbar-nav mr-lg-4 w-100">
            <li class="nav-item nav-profile dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                data-bs-toggle="dropdown"
                id="profileDropdown"
              >
                <img src="images/faces/face5.jpg" alt="profile" />
                <span class="nav-profile-name">Louis Barnett</span>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown"
                aria-labelledby="profileDropdown"
              >
                <a class="dropdown-item">
                  <i class="mdi mdi-logout text-primary"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
          <button
            class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
            type="button"
            data-toggle="offcanvas"
          >
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            
           
            <li class="nav-item">
              <a class="nav-link" href="basic-table.html">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Tables</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                  <div class="d-flex align-items-end flex-wrap">
                    <div class="me-md-3 me-xl-5">
                      <h2>Welcome back,</h2>
                      <p class="mb-md-0">Your analytics dashboard template.</p>
                    </div>
                    
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body dashboard-tabs p-0">
                    <ul class="nav nav-tabs px-4" role="tablist">
                      <li class="nav-item">
                        <a
                          class="nav-link active"
                          id="overview-tab"
                          data-bs-toggle="tab"
                          href="#overview"
                          role="tab"
                          aria-controls="overview"
                          aria-selected="true"
                          >Overview</a
                        >
                      </li>
                      
                    </ul>
                    <div class="tab-content py-0 px-0">
                      <div
                        class="tab-pane fade show active"
                        id="overview"
                        role="tabpanel"
                        aria-labelledby="overview-tab"
                      >
                        <div
                          class="d-flex flex-wrap justify-content-xl-between"
                        >
                          
                          <div
                            class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-currency-usd me-3 icon-lg text-danger"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Total Terkumpul</small>
                              <h5 class="me-2 mb-0">$577545</h5>
                            </div>
                          </div>
                          <div
                            class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-eye me-3 icon-lg text-success"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Kemeja</small>
                              <h5 class="me-2 mb-0">9833550</h5>
                            </div>
                          </div>
                          <div
                            class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-download me-3 icon-lg text-warning"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Celana</small>
                              <h5 class="me-2 mb-0">2233783</h5>
                            </div>
                          </div>
                          <div
                            class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-flag me-3 icon-lg text-danger"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Kaos</small>
                              <h5 class="me-2 mb-0">3497843</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="tab-pane fade"
                        id="sales"
                        role="tabpanel"
                        aria-labelledby="sales-tab"
                      >
                        <div
                          class="d-flex flex-wrap justify-content-xl-between"
                        >
                          <div
                            class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-calendar-heart icon-lg me-3 text-primary"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Start date</small>
                              <div class="dropdown">
                                <a
                                  class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium"
                                  href="#"
                                  role="button"
                                  id="dropdownMenuLinkA"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                >
                                  <h5 class="mb-0 d-inline-block">
                                    26 Jul 2018
                                  </h5>
                                </a>
                                <div
                                  class="dropdown-menu"
                                  aria-labelledby="dropdownMenuLinkA"
                                >
                                  <a class="dropdown-item" href="#"
                                    >12 Aug 2018</a
                                  >
                                  <a class="dropdown-item" href="#"
                                    >22 Sep 2018</a
                                  >
                                  <a class="dropdown-item" href="#"
                                    >21 Oct 2018</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div
                            class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-download me-3 icon-lg text-warning"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Downloads</small>
                              <h5 class="me-2 mb-0">2233783</h5>
                            </div>
                          </div>
                          <div
                            class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-eye me-3 icon-lg text-success"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Total views</small>
                              <h5 class="me-2 mb-0">9833550</h5>
                            </div>
                          </div>
                          <div
                            class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-currency-usd me-3 icon-lg text-danger"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Revenue</small>
                              <h5 class="me-2 mb-0">$577545</h5>
                            </div>
                          </div>
                          <div
                            class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-flag me-3 icon-lg text-danger"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Flagged</small>
                              <h5 class="me-2 mb-0">3497843</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="tab-pane fade"
                        id="purchases"
                        role="tabpanel"
                        aria-labelledby="purchases-tab"
                      >
                        <div
                          class="d-flex flex-wrap justify-content-xl-between"
                        >
                          <div
                            class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-calendar-heart icon-lg me-3 text-primary"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Start date</small>
                              <div class="dropdown">
                                <a
                                  class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium"
                                  href="#"
                                  role="button"
                                  id="dropdownMenuLinkA"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                >
                                  <h5 class="mb-0 d-inline-block">
                                    26 Jul 2018
                                  </h5>
                                </a>
                                <div
                                  class="dropdown-menu"
                                  aria-labelledby="dropdownMenuLinkA"
                                >
                                  <a class="dropdown-item" href="#"
                                    >12 Aug 2018</a
                                  >
                                  <a class="dropdown-item" href="#"
                                    >22 Sep 2018</a
                                  >
                                  <a class="dropdown-item" href="#"
                                    >21 Oct 2018</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div
                            class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-currency-usd me-3 icon-lg text-danger"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Revenue</small>
                              <h5 class="me-2 mb-0">$577545</h5>
                            </div>
                          </div>
                          <div
                            class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-eye me-3 icon-lg text-success"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Total views</small>
                              <h5 class="me-2 mb-0">9833550</h5>
                            </div>
                          </div>
                          <div
                            class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-download me-3 icon-lg text-warning"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Downloads</small>
                              <h5 class="me-2 mb-0">2233783</h5>
                            </div>
                          </div>
                          <div
                            class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-flag me-3 icon-lg text-danger"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Flagged</small>
                              <h5 class="me-2 mb-0">3497843</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title">Cash deposits</p>
                    <p class="mb-4">
                      To start a blog, think of a topic about and first
                      brainstorm party is ways to write details
                    </p>
                    <div
                      id="cash-deposits-chart-legend"
                      class="d-flex justify-content-center pt-3"
                    ></div>
                    <canvas id="cash-deposits-chart"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title">Total sales</p>
                    <h1>$ 28835</h1>
                    <h4>Gross sales over the years</h4>
                    <p class="text-muted">
                      Today, many people rely on computers to do homework, work,
                      and create or store useful information. Therefore, it is
                      important
                    </p>
                    <div id="total-sales-chart-legend"></div>
                  </div>
                  <canvas id="total-sales-chart"></canvas>
                </div>
              </div>
            </div>
            
          </div>
          <!-- content-wrapper ends -->
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Daftar Bantuan Terkumpul</h4>
                
                <div class="table-responsive pt-3">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Jenis Pakaian</th>
                        <th>Ukuran</th>
                        <th>Jumlah</th>
                        <th>Kebutuhan</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        $no = 1;
                        $kategori = mysqli_query($conn,"SELECT * FROM tb_category ORDER BY category_id DESC");
                        while($row = mysqli_fetch_array($kategori)){
                            ?>
                      <tr>
                        <td>1</td>
                        <td>Herman Beck</td>
                        <td>
                          s
                          </div>
                        </td>
                        <td>$ 77.99</td>
                        <td>May 15, 2015</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Messsy Adam</td>
                        <td>
                          s
                        </td>
                        <td>$245.30</td>
                        <td>July 1, 2015</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>John Richards</td>
                        <td>
                          s
                        <td>$138.00</td>
                        <td>Apr 12, 2015</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Peter Meggik</td>
                        <td>
                          s
                        </td>
                        <td>$ 77.99</td>
                        <td>May 15, 2015</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Edward</td>
                        <td>
                         s 
                        </td>
                        <td>$ 160.25</td>
                        <td>May 03, 2015</td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>John Doe</td>
                        <td>
                        s  
                        </td>
                        <td>$ 123.21</td>
                        <td>April 05, 2015</td>
                      </tr>
                      <tr>
                        <td>7</td>
                        <td>Henry Tom</td>
                        <td>
                          s
                        </td>
                        <td>$ 150.00</td>
                        <td>June 16, 2015</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
              </div>
            </div>
          </div>
        </div>
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div
              class="d-sm-flex justify-content-center justify-content-sm-between"
            >
              <span
                class="text-muted text-center text-sm-left d-block d-sm-inline-block"
                >Copyright ©
                <a href="https://www.bootstrapdash.com/" target="_blank"
                  >bootstrapdash.com </a
                >2021</span
              >
              <span
                class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"
                >Only the best
                <a href="https://www.bootstrapdash.com/" target="_blank">
                  Bootstrap dashboard
                </a>
                templates</span
              >
            </div>
            
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <script src="js/data-table.js"></script>
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/dataTables.bootstrap4.js"></script>
    <!-- End custom js for this page-->

    <script src="js/jquery.cookie.js" type="text/javascript"></script>
  </body>
</html>
