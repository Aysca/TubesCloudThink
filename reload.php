<?php
include 'db.php';
session_start();
$userid = $_SESSION['u_global']->userid; 

// Cek pada tabel 'user'
$sql = "SELECT * FROM user WHERE userid = '".$userid."'";
$cek_user = mysqli_query($conn, $sql);


if(mysqli_num_rows($cek_user) > 0){
    $d = mysqli_fetch_object($cek_user);
    $_SESSION['status_login'] = true;
    $_SESSION['u_global'] = $d;
    $_SESSION['userid'] = $d->userid;
    $_SESSION['username'] = $d->username;
    $_SESSION['useremail'] = $d->useremail;
    $_SESSION['profile_picture'] = $d->profile_picture;

    echo '<script>window.location="profile.php"</script>';
}

exit();
?>