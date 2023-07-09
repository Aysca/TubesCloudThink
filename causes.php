<!-- auth -->
<?php
    include 'db.php';
    session_start();
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>CloudThink</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i>JL Kaliurang KM 14</small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>CloudThink@gmail.com</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-primary m-0">Cloud<span class="text-white">Think</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link ">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="donate.php" class="nav-item nav-link">Donate</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="causes.php" class="dropdown-item active">Cause</a>
                            <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Pengajuan</a>
                    <a href="profile.php" class="nav-item nav-link">Profile</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    
                <?php                         
                        if (isset($_SESSION['username'])) {
                            // Jika session ada, tampilkan tulisan Logout
                            echo '<a class="btn btn-outline-primary py-2 px-3" href="colorlib-regform-7/logout.php">' ;
                            echo $_SESSION['u_global']->username; 
                            echo'<div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">';
                            ?>
                            <br>
                            <img src="colorlib-regform-7/user/<?php echo $_SESSION['u_global']->profile_picture ?>" style=" 
                           border-radius: 50%;
                           width: 100%;
                           height: 100%;
        object-fit: cover;
        object-position: center;" alt="">
                                                       
                            </div></a>
                            <?php 
                          } else {
                            // Jika session tidak ada, tampilkan tulisan Login
                            echo '<a class="btn btn-outline-primary py-2 px-3" href="colorlib-regform-7/login.php">Login<div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div></a>';
                          }
                          
                        ?>
                    
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div
      class="container-fluid page-header mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Causes</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Pages</a>
            </li>
            <li class="breadcrumb-item text-primary active" aria-current="page">
              Causes
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

     <!-- Causes Start -->
     <div class="container-xxl py-5">
      <div class="container">
        <div
          class="text-center mx-auto mb-5 wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 500px"
        >
          <div
            class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3"
          >
            Feature Causes
          </div>
          <h1 class="display-6 mb-5">
            Every Child Deserves better Clothes
          </h1>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div
              class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100"
            >
              <div class="text-center p-4 pt-0">
                <div
                  class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4"
                >
                  <small>Tsunami</small>
                </div>
                <h5 class="mb-3">Bencana Tsunami Aceh</h5>
                <p>
                  Bencana tsunami yang terjadi di aceh membuah kita kehilangan segalanya. Bantu korban mengumpulkan pakaian layak pakai.
                </p>
                <div class="causes-progress bg-white p-3 pt-2">
                  <div class="d-flex justify-content-between">
                    <p class="text-dark">
                      10.000 <small class="text-body">Goal</small>
                    </p>
                    <p class="text-dark">
                      9542 <small class="text-body">Raised</small>
                    </p>
                  </div>
                  <div class="progress">
                    <div
                      class="progress-bar"
                      role="progressbar"
                      aria-valuenow="90"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    >
                      <span>90%</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="position-relative mt-auto">
                <img class="img-fluid" src="img/courses-1.jpg" alt="" />
                <div class="causes-overlay">
                  <a class="btn btn-outline-primary" href="">
                    Read More
                    <div
                      class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2"
                    >
                      <i class="fa fa-arrow-right"></i>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div
              class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100"
            >
              <div class="text-center p-4 pt-0">
                <div
                  class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4"
                >
                  <small>Tanah Longsor</small>
                </div>
                <h5 class="mb-3">14 Rumah Terdapampak tanah longsor di magelang</h5>
                <p>
                  Tanah longsor yang menimpa 14 rumah di daerah mertoyudan magelang. Pemda  ikut turun tangan dalam hal kebutuhan bahan pokok.
                </p>
                <div class="causes-progress bg-white p-3 pt-2">
                  <div class="d-flex justify-content-between">
                    <p class="text-dark">
                      10.000 <small class="text-body">Goal</small>
                    </p>
                    <p class="text-dark">
                      9.542 <small class="text-body">Raised</small>
                    </p>
                  </div>
                  <div class="progress">
                    <div
                      class="progress-bar"
                      role="progressbar"
                      aria-valuenow="90"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    >
                      <span>90%</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="position-relative mt-auto">
                <img class="img-fluid" src="img/courses-2.jpg" alt="" />
                <div class="causes-overlay">
                  <a class="btn btn-outline-primary" href="">
                    Read More
                    <div
                      class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2"
                    >
                      <i class="fa fa-arrow-right"></i>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div
              class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100"
            >
              <div class="text-center p-4 pt-0">
                <div
                  class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4"
                >
                  <small>Gempa Bumi</small>
                </div>
                <h5 class="mb-3">Korban bencana gempa bumi gunung kidul</h5>
                <p>
                  Gempa bumi merenggut 16 Korban jiwa 12 korban luka berat serta 112 membutuhkan bantuan pakaian layak pakai.
                </p>
                <div class="causes-progress bg-white p-3 pt-2">
                  <div class="d-flex justify-content-between">
                    <p class="text-dark">
                      10.000 <small class="text-body">Goal</small>
                    </p>
                    <p class="text-dark">
                      9.542 <small class="text-body">Raised</small>
                    </p>
                  </div>
                  <div class="progress">
                    <div
                      class="progress-bar"
                      role="progressbar"
                      aria-valuenow="90"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    >
                      <span>90%</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="position-relative mt-auto">
                <img class="img-fluid" src="img/courses-3.jpg" alt="" />
                <div class="causes-overlay">
                  <a class="btn btn-outline-primary" href="">
                    Read More
                    <div
                      class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2"
                    >
                      <i class="fa fa-arrow-right"></i>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Causes End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100 pt-5 pe-5" src="img/about-1.jpg" alt=""
                            style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2" src="img/about-2.jpg" alt=""
                            style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">About Us</div>
                        <h1 class="display-6 mb-5">Ini adalah tempat untuk saling membantu sesama manusia</h1>
                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                            <p class="text-dark mb-2">CloudThink adalah tempat untuk membantu teman teman kita.
                                CloudThink
                                memberikan fitur donasi dan galang dana
                                Manfaat berdonasi juga sangat banyak, tidak hanya bagi orang yang
                                menerima tetapi juga bagi orang yang melakukannya. Ini merupakan
                                Tindakan yang sangat mulia, namun tidak sedikit yang masih ragu
                                melakukannya. Donasi adalah pemberian yang dilakukan oleh diri
                                sendiri untuk kepentingan orang lain tanpa mengharapkan balasan
                                dan tanpa ada paksaan

                            </p>
                            <span class="text-primary">R Siliwangi Prabaswara Nurasha, Founder</span>
                        </div>

                        <a class="btn btn-primary py-2 px-3 me-3" href="">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h1 class="fw-bold text-primary mb-4">Cloud<span class="text-white">Think</span></h1>
                    <p>Ini adalah tempat untuk saling membantu sesama manusia</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>JL KALIURANG KM 14</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+62274515591</p>
                    <p><i class="fa fa-envelope me-3"></i>cloudthink@gmail.com</p>
                </div>

                <div class="col-lg-3 col-md-6">



                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">CloudThink</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a href="https://htmlcodex.com">CloudThink</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Footer End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
