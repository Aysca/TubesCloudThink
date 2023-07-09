<?php
include 'db.php';

if(isset($_GET['id'])){
    $delete = mysqli_query($conn, "DELETE FROM pengajuan WHERE pengajuan_id = '".$_GET['id']."' ");
    
    echo '<script>alert("Data Dihapus")</script>';
    echo '<script>window.location="basic-table.php"</script>';
}


?>