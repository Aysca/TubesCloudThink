
<!-- auth -->
<?php
    include 'db.php';
    session_start();
    if($_SESSION['status_login'] != true ){
      echo '<script>alert("Silahkan login sebagai admin terlebih dahulu")</script>';
      echo '<script>window.location="../colorlib-regform-7/login.php"</script>';   
  }
  $kategori = mysqli_query($conn, "SELECT * FROM donatur WHERE donatur_id = '".$_GET['id']."' ");
    if(mysqli_num_rows($kategori)==0){
        echo '<script>window.location="index.php"</script>';
    }
    $k = mysqli_fetch_object($kategori);
    
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
    <link href="styles.css" rel="stylesheet">


    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head></head>
<body>
<div class="container-sm">

<form method="POST" >
                    <p> <?php echo $k->name ?> </p>                    
                    
                    <select  name="status" class="btn btn-secondary dropdown-toggle">
                        <option  value=""> - Pilih Status - </option>
                        <option value="1" <?php echo ($k->status == 1)? 'selected':''; ?> >Menunggu Dikirim</option>
                        <option value="2" <?php echo ($k->status == 2)? 'selected':''; ?> >Di Warehouse Cloudthink</option>
                        <option value="3" <?php echo ($k->status == 3)? 'selected':''; ?> >Dikirim Ke Lembaga</option>
                        <option value="4" <?php echo ($k->status == 4)? 'selected':''; ?> >Diterima Lembaga</option>
                    </select>
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                </form>
                <?php
                if(isset($_POST['submit'])){
                    $status = ucwords($_POST['status']);
                    $update = mysqli_query($conn,"UPDATE donatur SET status =  '".$status."' WHERE donatur_id = '".$k->donatur_id."' ");
                    if($update){
                        echo '<script>alert("Status Diubah")</script>';
                        echo '<script>window.location="index.php"</script>';
                    }else{
                        mysqli_error($conn);
                    }
                }
                ?>  
</div>

</body>
</html>
