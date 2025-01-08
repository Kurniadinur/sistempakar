<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Kanit' rel='stylesheet'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
        <title >Informasi Penyakit Balita</title>
    </head>
    <body style="background-color: rgb(20,184,173);" >
        <ul>
            <li><a href="login.php"> <i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
            <li><a href="konsultasi.php"> <i class="fa fa-question-circle" aria-hidden="true"></i> Konsultasi</a></li>
            <li><a  class="active" href="informasi.php"> <i class="fa fa-info-circle" aria-hidden="true"></i> Informasi</a></li>
            <li><a href="index.php"><i class="fa fa-home"></i> Beranda</a></li>
            <li style="float:left; border:none; "><b href="index.php" style="color:black;">SISPAPG</b></li>
        </ul>
        <div class="box-welcome">
            <h1 style="font-size: 32px; font-family: 'Montserrat';">INFORMASI PENYAKIT GIZI BALITA</h1>
            <p style="font-size: 15px;  font-family: 'Kanit'; ">SISTEM PAKAR DIAGNOSIS PENYAKIT BALITA MENGGUNAKAN METODE FUZZY DAN CBR (CASE-BASED REASONING)</p>
        </div>
        <?php

use function PHPSTORM_META\sql_injection_subst;

        include "koneksi.php";
        $sql = mysqli_query($conn, "select * from penyakit");


        while($data = mysqli_fetch_array($sql)){
            $sebagian = substr($data['keterangan'],0,250);
        echo"<div class='box-tabel-informasi'> ";
            echo " <img style='width:100px;height:100px; float:left; margin-right:10px' src= css/imagePenyakit/$data[gambar] alt=$data[gambar]>";
            echo"<h3>$data[nm_penyakit]</h3>";
            echo "<p>$sebagian ... <a href='informasipenyakit.php?id=$data[id_penyakit]'>baca selengkapnya</a></p>";

        echo'</div>';
        }
        ?>

        </div>

        <script src="'main.js" ></script>
    <div class="footer-2">
        <p>Author: Dela Fitria</p>
    </div>
    </body>
    

</html>