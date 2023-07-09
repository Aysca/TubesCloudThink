<?php
session_start();

if(isset($_POST['submit'])){
  // Simpan data dari form ke session
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['email'] = $_POST['email'];

  // Redirect ke halaman selanjutnya
  echo '<script>window.location="../colorlib-regform-7/login.php"</script>';   
  exit();
}
?>
