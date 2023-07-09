<?php
include 'db.php';

if(isset($_GET['id'])){
    $deletes = mysqli_query($conn, "DELETE FROM pakaian WHERE donatur_id = '".$_GET['id']."' ");
    $delete = mysqli_query($conn, "DELETE FROM donatur WHERE donatur_id = '".$_GET['id']."' ");
    
    echo '<script>alert("Data Dihapus")</script>';
    echo '<script>window.location="index.php"</script>';
}


?>