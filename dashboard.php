<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style-admin.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title> Admin SISPAGB</title>
    </head>
    <body >
    <div class="atas"><a href="login.php"><i class="fa fa-sign-out fa-2x"  style="float: right;"></i></a></div>
    <ul>
            <li style="height: 80px; border:none"><b href="dashboard.php" style="height: 70px; color:white;">SISTEM PAKAR FUZZY DAN CBR</b></li>
            <li><a href="dashboard.php"><i class="fa fa-home"></i> Beranda</a></li>
            <li><a href="gejala.php"> <i class="far fa-clipboard"></i> Gejala</a></li>
            <li><a href="penyakit.php"><i class="fa fa-stethoscope"></i> Penyakit</a></li>
            <li><a href="basiskasus.php"><i class="fa fa-plus-square"></i> Basis Kasus</a></li>
            <li><a href="konsultasiadmin.php"><i class="fa fa-user-md"></i> Konsultasi</a></li>
</ul>
    <h1 class="box-judul">HALAMAN BERANDA</h1>
    <div class="box-welcome"><h4>SELAMAT DATANG ADMIN DI SISTEM PAKAR KLASIFIKASI GIZI BALITA 
        DENGAN METODE FUZZY DAN CASE BASED REASONING (CBR)</h4>
    </div>
    <?php
    include "koneksi.php";
    $sql1 = mysqli_query($conn,"SELECT * FROM gejala");
    $sql2 = mysqli_query($conn,"SELECT * FROM penyakit");
    $sql3 = mysqli_query($conn,"SELECT * FROM penyakit");
    $n = 0; $m=0;   $o=0;
    while($data=mysqli_fetch_array($sql1)){
        $n+=1;
    }
    while($data=mysqli_fetch_array($sql2)){
        $m+=1;
    }
    while($data=mysqli_fetch_array($sql3)){
        $o+=1;
    }
    echo"<div class='box-jml-gejala'><h4>Data Gejala</h4><h4 style='color:black'>$n</h4></div>";
    echo"<div class='box-jml-penyakit'><h4>Data Penyakit</h4><h4 style='color:black'>$m</h4></div>";
    echo"<div class='box-jml-basis'><h4>Data Basis</h4><h4 style='color:black'>$o</h4></div>";
    ?>
        <script src="'main.js" ></script>
    <div class="footer-1">
        <p>Author: Dela</p>
    </div>
    </body>


</html>