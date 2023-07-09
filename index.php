<!-- auth -->
<?php
    include 'db.php';
    session_start();
    
?>


<!DOCTYPE html>
<php lang="en">

<head>
    <meta charset="utf-8">
    <title>CloudThink</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="donate.php" class="nav-item nav-link">Donate</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="causes.php" class="dropdown-item">Cause</a>
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


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Ubah Dunia Dengan
                                        Kemanusiaan</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">Sedikit Bantuanmu Dapat
                                        Menyelamatkan Banyak Orang</p>
                                    <a class="btn btn-primary py-2 px-3 animated slideInDown" href="about.php">
                                        Learn More
                                        <div
                                            class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Ubah Dunia Dengan
                                        Kemanusiaan</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">Sedikit Bantuanmu Dapat
                                        Menyelamatkan Banyak Orang</p>
                                    <a class="btn btn-primary py-2 px-3 animated slideInDown" href="">
                                        Learn More
                                        <div
                                            class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


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

                        <a class="btn btn-primary py-2 px-3 me-3" href="about.php">
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

    <!-- Donate Start -->
    <div class="container-fluid donate my-5 py-5" data-parallax="scroll" data-image-src="img/carousel-2.jpg">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Donate Now</div>
                    <h1 class="display-6 text-white mb-5">Formulir Donasi Pakaian</h1>
                    <p class="text-white-50 mb-0">Donasi ini akan dikumpulkan kemudian disumbangkan kepada wilayah yang terkena dampak
                        Bencana </p>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 bg-white p-5">
                        <form method="POST">
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input Required type="text" class="form-control bg-light border-0" id="name" name="name"
                                            placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input Required type="email" class="form-control bg-light border-0" id="email" name="email"
                                            placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input Required type="text" class="form-control bg-light border-0" id="phone" name="phone"
                                            placeholder="Your Email">
                                        <label for="email">Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                   
                                      <div class="form-floating">
                
                                        <select Required  class="btn btn-secondary dropdown-toggle " style="background-color:white ; width: 525px; height: 50px;" name="jenis_pakaian" id="jenis_pakaian">
                                        <option label="Jenis Pakaian" 
                        ></option>  
                                        <option value="Kemeja">Kemeja</option>
                                          <option value="Celana">Celana</option>
                                          <option value="Kaos">Kaos</option>
                                          
                                        </select>
                                      </div>
                
                
                                  </div> <div class="col-12">
                                      
                                        <div class="form-floating">
                
                                          <select  Required class="btn btn-secondary dropdown-toggle " style="background-color:white ; float: left; width: 525px; height: 50px;" name="size">
                                          <option label="Size" 
                        ></option>  
                                          <option value="S">S</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                            <option value="XL">XL</option>
                                          </select>
                                        </div>
                
                
                                    </div>
                                    
                                          
                                    <div class="col-12">
                        <input  class="btn btn-primary px-5" style="margin-top : 20px;" href="resi.php" type="submit" value="submit" name="submit" id="submit"
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
    <!-- Donate End -->
    <!-- Donate Function -->

    <?php        
                if(isset($_POST['submit'])){
                  if($_SESSION['status_login'] != true ){
                    echo '<script>alert("Silahkan login terlebih dahulu")</script>';
                    echo '<script>window.location="colorlib-regform-7/login.php"</script>';   
                }else{
                  $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $jenis_pakaian = $_POST['jenis_pakaian'];
                    $size = $_POST['size'];
                    $date = date('Y-m-d H:i:s');
                    $time = date('H:i:s');
                    $dates = date('Ymd');
                    $randomString = '';
                    $length = 6;
                    function generateRandomString() {
                      $randomNumber = mt_rand(10000, 40000);
                      $randomString = strval($randomNumber);
                      return $randomString;
                  }                  
                  // Contoh penggunaan
                  $ongkir = generateRandomString();

                    for ($i = 0; $i < $length; $i++) {
                        $randomString .= rand(0, 9);}
                    $unique_code = 'INV/' . $dates . '/' . $randomString;
                   
                    $insert = mysqli_query($conn,"INSERT INTO donatur VALUES (
                        null,
                            '".$name."',
                            '".$email."',
                            '".$phone."',
                            '".$jenis_pakaian."',
                            '".$size."' ,
                            '".$date."',
                            '".$time."',
                            1,
                            '".$unique_code."'  ,
                            '".$ongkir."'
                        )");

                        $fk_query = mysqli_query($conn, "SELECT donatur_id from donatur WHERE donatur_id=(SELECT MAX(donatur_id) FROM donatur)");
                        $fk_donatur_id = mysqli_fetch_assoc($fk_query);
                        $fk = $fk_donatur_id['donatur_id'];

                    $insert2 = mysqli_query(
                      $conn,"INSERT INTO pakaian VALUES (
                        null,
                            '".$jenis_pakaian."',
                            '".$size."',
                            '".$fk."'
                        )"
                    );
                        if($insert){
                            echo '<script>alert("Data Berhasil Ditambahkan")</script>';
                            echo '<script>window.location="resi.php"</script>';
                            
                        }else{
                            mysqli_error($conn);
                        }
                }                    
                    }
                ?>


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Team Members</div>
                <h1 class="display-6 mb-5">Let's Meet With Our Ordinary Soldiers</h1>
                                
                
                <p>
                    
                    
                    
                </p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/iwang.jpg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>R Siliwangi Prabaswara N</h5>
                            
                            <p class="text-primary">Founder</p>
                            

                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/fatih.jpg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Al - Fatih Berlian Palsa</h5>
                            <p class="text-primary">CEO</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/ica.jpg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>AISYAH</h5>
                            <p class="text-primary">Project Manager</p>
                         
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" style="width:2000px;" src="img/fauzan.jpg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Fauzan Al Ghifari</h5>
                            <p class="text-primary">Administrator</p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->





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
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://phpcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a href="https://phpcodex.com">CloudThink</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Footer End -->
  


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


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

</php>