<?php
include 'db.php';
if (isset($_SESSION['username'])) {
  session_destroy();
};

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign In</title>

    <!-- Font Icon -->
    <link
      rel="stylesheet"
      href="fonts/material-icon/css/material-design-iconic-font.min.css"
    />

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="main">
      <!-- Sing in  Form -->
      <section class="sign-in">
        <div class="container">
          <div class="signin-content">
            <div class="signin-image">
              <figure>
                <img src="images/signin-image.jpg" alt="sing up image" />
              </figure>
              <a href="signup.php" class="signup-image-link"
                >Create an account</a
              >
            </div>

            <div class="signin-form">
              <h2 class="form-title">Sign in</h2>
              <form method="POST" class="register-form" id="login-form">
                <div class="form-group">
                  <label for="your_name"
                    ><i class="zmdi zmdi-account material-icons-name"></i
                  ></label>
                  <input
                    type="text"
                    name="email"
                    id="email"
                    placeholder="Email"
                  />
                </div>
                <div class="form-group">
                  <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                  <input
                    type="password"
                    name="pass"
                    id="pass"
                    placeholder="Password"
                  />
                </div>
                <div class="form-group">
                  <input
                    type="checkbox"
                    name="remember-me"
                    id="remember-me"
                    class="agree-term"
                  />
                  <label for="remember-me" class="label-agree-term"
                    ><span><span></span></span>Remember me</label
                  >
                </div>
                <div class="form-group form-button">
                  <input
                    type="submit"
                    name="submit"
                    id="signin"
                    class="form-submit"
                    value="Log in"
                  />
                </div>
                <?php
if(isset($_POST['submit'])){
    session_start();

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $hashpass = md5($pass);

    // Cek pada tabel 'user'
    $cek_user = mysqli_query($conn, "SELECT * FROM user WHERE useremail = '".$email."' AND password = '".$pass."' ");
    
    // Cek pada tabel 'admin'
    $cek_admin = mysqli_query($conn, "SELECT * FROM admin WHERE adminemail = '".$email."' AND password = '".$pass."' ");

    
    if(mysqli_num_rows($cek_user) > 0){
        $d = mysqli_fetch_object($cek_user);
        $_SESSION['status_login'] = true;
        $_SESSION['u_global'] = $d;
        $_SESSION['userid'] = $d->userid;
        $_SESSION['username'] = $d->username;
        $_SESSION['useremail'] = $d->useremail;
        $_SESSION['profile_picture'] = $d->profile_picture;
        echo 'Login berhasil sebagai pengguna';
        echo '<script>window.location="../index.php"</script>';
    }elseif(mysqli_num_rows($cek_admin) > 0){
        $d = mysqli_fetch_object($cek_admin);
        $_SESSION['status_login'] = true;
        $_SESSION['u_global'] = $d;
        $_SESSION['adminname'] = $d->adminname;
        $_SESSION['adminemail'] = $d->adminemail;
        echo 'Login berhasil sebagai admin';
        echo '<script>window.location="../template/index.php"</script>';
    }else{
        echo ' <br> Username / Password Salah'; 
    }
}
?>

                
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
  </body>
  <!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
