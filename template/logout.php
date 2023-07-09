<?php
session_start();

// Menghapus semua data session
session_unset();

// Menghancurkan session
session_destroy();

// Mengarahkan pengguna ke halaman login atau halaman lain yang sesuai
echo '<script>window.location="../colorlib-regform-7/login.php"</script>';    
exit();
?>