<?php
include 'db.php';

if(isset($_GET['id'])){
    $delete = mysqli_query($conn, "DELETE FROM testimoni WHERE testimoni_id = '".$_GET['id']."' ");
    
    echo '<script>alert("Data Dihapus")</script>';
    echo '<script>window.location="table-testimonial.php"</script>';
}


?>