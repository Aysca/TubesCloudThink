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
                            <a href="causes.php" class="dropdown-item">Cause</a>
                            <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link active">Pengajuan</a>
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
        <h1 class="display-4 text-white animated slideInDown mb-4">
          Pengajuan
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Pages</a>
            </li>
            <li class="breadcrumb-item text-primary active" aria-current="page">
              Pengajuan
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
            <div
              class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3"
            >
              Request
            </div>
            <h1 class="display-6 mb-5">
              Formulir Pengajuan Donasi
            </h1>
            <p class="mb-0">
             Silahkan Daftarkan Lembaga/Panti Asuhan/Bantuan bencana dengan mengisi formulir disamping. Kami akan berusaha membantu kebutuhan pakaian layak pakai anda.</p>
          </div>
    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
      <div class="h-100 bg-secondary p-5">
        <form method="POST">
          <div class="row g-3">
              <div class="col-12">
                  <div class="form-floating">
                      <input type="text" class="form-control bg-light border-0" id="name" name="lembaga"
                          placeholder="Your Name" Required>
                      <label for="name">Nama Lembaga</label>
                  </div>
              </div>
              <div class="col-12">
                  <div class="form-floating">
                      <input type="text" class="form-control bg-light border-0" id="alamat" name="alamat"
                          placeholder="Your Email" Required>
                      <label for="email">Alamat</label>
                  </div>
              </div>
              <div class="col-12">
                  <div class="form-floating">
                      <input type="number" class="form-control bg-light border-0" id="email" name="jumlah"
                          placeholder="Your Email" Required>
                      <label for="email">Jumlah yang dibutuhkan</label>
                  </div>
              </div>
            
            </div> <div class="col-12">
              <label for="Size"></label>
                <div class="form-floating">

                  <select Required class="btn btn-secondary dropdown-toggle "  style="background-color:white ; width: 525px; height: 50px;" name="jenis">
                  <option label="Jenis Pakaian" 
                        ></option>  
                    <option value="Kemeja">Kemeja</option>
                    <option value="Celana">Celana</option>
                    <option value="Kaos">Kaos</option>
                    
                  </select>
                </div>


    
               
              <div class="col-12">
                  <input type="submit" style="margin-top : 20px;" class="btn btn-primary px-5" href="resi.php" name="submit" 
                 >
                    
                      <div
                      >
                      </div>

                        </input>
                    </div>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
                if(isset($_POST['submit'])){
                  if($_SESSION['status_login'] != true ){
                    echo '<script>alert("Silahkan login terlebih dahulu")</script>';
                    echo '<script>window.location="colorlib-regform-7/login.php"</script>';   
                  }else{
                  $lembaga = $_POST['lembaga'];
                  $alamat = $_POST['alamat'];
                  $jumlah = $_POST['jumlah'];
                  $jenis = $_POST['jenis'];
                 
                  $insert2 = mysqli_query($conn,"INSERT INTO lembagadonasi VALUES (
                    null,
                      '".$lembaga."'
                      
                  )");
                  $fk_query = mysqli_query($conn, "SELECT lembaga_id from lembagadonasi WHERE lembaga_id=(SELECT MAX(lembaga_id) FROM lembagadonasi)");
                  $fk_pengajuan_id = mysqli_fetch_assoc($fk_query);
                  $fk = $fk_pengajuan_id['lembaga_id'];

                  $insert = mysqli_query($conn,"INSERT INTO pengajuan VALUES (
                      null,
                          '".$lembaga."',
                          '".$alamat."',
                          '".$jumlah."',
                          '".$jenis."',
                          1,
                          '".$fk."'
                      )");

                      
                  
                      if($insert){
                          echo '<script>alert("Data Berhasil Ditambahkan")</script>';
                          
                      }else{
                          mysqli_error($conn);
                      }
                  }
                }

                    
                ?>


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
                </div>            <div class="col-md-6 text-center text-md-end">
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
