<!-- auth -->
<?php
    include 'db.php';
    session_start();
    if($_SESSION['status_login'] != true ){
      echo '<script>alert("Silahkan login sebagai admin terlebih dahulu")</script>';
      echo '<script>window.location="../colorlib-regform-7/login.php"</script>';   
  }
    
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
    <title>Cloudthink dashboard</title>
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
                <span class="nav-profile-name">
                  <?php
                  echo $_SESSION['u_global']->adminname
                  ?>
                </span>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown"
                aria-labelledby="profileDropdown"
              >
                
                <a class=" dropdown-item" href="logout.php"> 
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
              <a class="nav-link" href="index.php">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            
           
            <li class="nav-item">
              <a class="nav-link" href="basic-table.php">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Tables</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="table-testimonial.php">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Testimonial</span>
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
                            ><img src="images/donation.png"  style="margin-right: 30px;" alt="total"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Total Terkumpul</small>
                              <?php                        
                        $totalpakaian = "SELECT COUNT(*) as total_pakaian FROM pakaian";
                        $result = $conn->query($totalpakaian);
                        $row = $result->fetch_assoc();
                        $totalRows = $row["total_pakaian"];
                            ?>
                              <h5 class="me-2 mb-0"><?php echo $totalRows ?> Item</h5>
                            </div>
                          </div>
                          <div
                            class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              
                            ><img src="images/cloth.png" style="margin-right:10px;" alt="kemeja">
                          </i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Kemeja</small>
                              <?php                              
                              // Menjalankan kueri untuk menghitung total baris dengan nilai tertentu pada kolom
                              $totalkemeja = "SELECT COUNT(*) as total_kemeja FROM pakaian WHERE jenis_pakaian = 'Kemeja'";
                              $resultkemeja = $conn->query($totalkemeja);       
                              $rowkemeja = $resultkemeja->fetch_assoc();
                              $totalRowskemeja = $rowkemeja["total_kemeja"];
                              ?>
                              <h5 class="me-2 mb-0"><?php echo $totalRowskemeja ?></h5>
                            </div>
                          </div>
                          <div
                            class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                             
              ><img src="images/pants.png" alt="celana"  style="margin-right:10px;"
            
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Celana</small>
                              <?php                              
                              // Menjalankan kueri untuk menghitung total baris dengan nilai tertentu pada kolom
                              $totalcelana = "SELECT COUNT(*) as total_celana FROM pakaian WHERE jenis_pakaian = 'Celana'";
                              $resultcelana = $conn->query($totalcelana);       
                              $rowcelana = $resultcelana->fetch_assoc();
                              $totalRowscelana = $rowcelana["total_celana"];
                              ?>
                              <h5 class="me-2 mb-0"><?php echo $totalRowscelana ?></h5>
                            </div>
                          </div>
                          <div
                            class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                            ><img src="images/shirt.png" alt="kaos"  style="margin-right:10px;">
                            </i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Kaos</small>
                              <?php                              
                              // Menjalankan kueri untuk menghitung total baris dengan nilai tertentu pada kolom
                              $totalkaos = "SELECT COUNT(*) as total_kaos FROM pakaian WHERE jenis_pakaian = 'Kaos'";
                              $resultkaos = $conn->query($totalkaos);       
                              $rowkaos = $resultkaos->fetch_assoc();
                              $totalRowskaos = $rowkaos["total_kaos"];
                              ?>
                              <h5 class="me-2 mb-0"><?php echo $totalRowskaos ?></h5>
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
                    <p class="card-title">Grafik Donatur</p>
                    <p class="mb-4">
                      Berikut adalah grafik yang menunjukkan donasi dari 12 bulan terakhir
                    </p>
                    <div
                      id="cash-deposits-chart-legend"
                      class="d-flex justify-content-center pt-3"
                    ></div>
                    
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<canvas id="lineChart"></canvas>
<?php


// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari tabel
$sql = "SELECT MONTH(tanggal) AS bulan, COUNT(*) AS jumlah FROM donatur WHERE tanggal >= DATE_SUB(CURDATE(), INTERVAL 12 MONTH) GROUP BY MONTH(tanggal)";
$result = $conn->query($sql);

$labels = [];
$data = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $bulan = DateTime::createFromFormat('!m', $row["bulan"]);
        $labels[] = $bulan->format('F');
        $data[] = $row["jumlah"];
    }
}



?>
<script>
var ctx = document.getElementById('lineChart').getContext('2d');
var chart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: <?php echo json_encode($labels); ?>,
        datasets: [{
            label: 'Jumlah Pakaian',
            data: <?php echo json_encode($data); ?>,
            backgroundColor: 'rgba(75, 192, 192, 0.6)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1,
            fill: false
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                precision: 0
            }
        }
    }
});
</script>

                  </div>
                </div>
              </div>
              <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title">Grafik Donatur</p>
                    <p class="mb-4">
                      Berikut adalah grafik yang menunjukkan donasi dari 12 bulan terakhir
                    </p>
                    <div
                      id="cash-deposits-chart-legend"
                      class="d-flex justify-content-center pt-3"
                    ></div>
                    
                    <canvas id="chart"></canvas>

<script>
// Mengambil data dari PHP menggunakan PHP
<?php
// Koneksi ke database dan query data

$query = mysqli_query($conn, "SELECT jenis_pakaian, SUM(jumlah_butuh) AS total FROM pengajuan GROUP BY jenis_pakaian");

// Mengubah hasil query menjadi array PHP
$data = array();
while ($row = mysqli_fetch_assoc($query)) {
  $data[] = $row;
}
?>

// Mengubah data PHP menjadi data JavaScript
var labels = <?php echo json_encode(array_column($data, 'jenis_pakaian')); ?>;
var values = <?php echo json_encode(array_column($data, 'total')); ?>;

// Membuat chart menggunakan Chart.js
var ctx = document.getElementById('chart').getContext('2d');
var chart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: labels,
    datasets: [{
      label: 'Jumlah Butuh',
      data: values,
      backgroundColor: 'rgba(54, 162, 235, 0.5)',
      borderColor: 'rgba(54, 162, 235, 1)',
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
</script>
</body>



                  </div>
                </div>
              </div>
              <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title">Grafik Jenis Pakaian</p>
                    <h1> <?php echo $totalRows ?> Item</h1>
                    
                    <p class="text">
                    Berikut adalah grafik yang menunjukkan perbandingan jenis pakaian dari donatur
                    </p>
                    <!-- <div id="total-sales-chart-legend"></div> -->
                  </div>
                  <!-- <canvas id="total-sales-chart"></canvas> -->
                  
                  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<canvas id="pieChart"></canvas>
<?php
// Mengambil data dari tabel
$sql = "SELECT jenis_pakaian, COUNT(*) AS jumlah FROM pakaian GROUP BY jenis_pakaian";
$result = $conn->query($sql);

$labels = [];
$data = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $labels[] = $row["jenis_pakaian"];
        $data[] = $row["jumlah"];
    }
}

?>
<script>
var ctx = document.getElementById('pieChart').getContext('2d');
var chart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: <?php echo json_encode($labels); ?>,
        datasets: [{
            label: 'Jumlah Jenis Pakaian',
            data: <?php echo json_encode($data); ?>,
            backgroundColor: ['rgba(75, 192, 192, 0.6)', 'rgba(255, 99, 132, 0.6)', 'rgba(54, 162, 235, 0.6)', 'rgba(255, 206, 86, 0.6)'],
            borderColor: ['rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)'],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                precision: 0
            }
        }
    }
});
</script>

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
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jenis Pakaian</th>                        
                        <th>Ukuran</th>  
                        <th>Tanggal</th>
                        <th>Status</th>                        
                        <th>Aksi</th>                        
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        $no = 1;
                        $kategori = mysqli_query($conn,"SELECT * FROM donatur ORDER BY donatur_id DESC");
                        while($row = mysqli_fetch_array($kategori)){
                            ?>                    
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row ['name'] ?></td>
                        <td><?php echo $row ['email'] ?></td>
                        <td><?php echo $row ['jenis_pakaian'] ?></td>
                        <td><?php echo $row ['size'] ?></td> 
                        <td><?php echo $row ['tanggal'] ?></td>                         
                        <td><?php echo ($row['status'] == 1) ? 'Menunggu Dikirim' : (($row['status'] == 2) ? 'Di Warehouse Cloudthink' : (($row['status'] == 3) ? 'Dikirim Ke Lembaga' : (($row['status'] == 4) ? 'Diterima Lembaga' : ''))); ?></td>
                        <td><a class="btn btn-success" href="edit-status.php?id=<?php echo $row['donatur_id'] ?>">Edit</a> || <a href="delete.php?id=<?php echo $row['donatur_id'] ?>" onclick="return confirm('Yakin ingin menghapus data?')"  class="btn btn-danger" >Delete</a></td>
                      </tr>                      
                      <?php } ?>
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
        </div>
           <!-- partial:partials/_footer.html -->
           <footer class="footer">
            <div
              class="d-sm-flex justify-content-center justify-content-sm-between"
            >
              <span
                class="text-muted text-center text-sm-left d-block d-sm-inline-block"
                >Copyright ©
                <a href="https://www.cloudthink.com/" target="_blank"
                  >CloudThink </a
                >2023</span
              >
              <span
                class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"
                >Only the best
                <a href="https://www.cloudthink.com/" target="_blank">
                  cloudthink
                </a>
                donation</span
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
