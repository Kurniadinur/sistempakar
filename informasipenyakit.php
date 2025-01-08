<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Informasi Penyakit Balita</title>
    </head>
    <body style="background-color: rgb(20,184,173);">
        <ul>
            <li><a href="login.php"> <i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
            <li><a href="konsultasi.php"> <i class="fa fa-question-circle" aria-hidden="true"></i> Konsultasi</a></li>
            <li><a  class="active" href="informasi.php"> <i class="fa fa-info-circle" aria-hidden="true"></i> Informasi</a></li>
            <li><a href="index.php"><i class="fa fa-home"></i> Beranda</a></li>
            <li style="float:left; border:none; "><b href="index.php" style="color:black;">SIPAPB</b></li>
        </ul>
        <a style="text-decoration:none" class="button-kembali" href="informasi.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp;Kembali</a>
        <div class="box-welcome">
            <h1>INFORMASI PENYAKIT GIZI BALITA</h1>
            <p style="font-size: 12px;">SISTEM PAKAR DIAGNOSIS PENYAKIT BALITA MENGGUNAKAN METODE FUZZY DAN CBR (CASE-BASED REASONING)</p>
        </div>

            
        <?php

use function PHPSTORM_META\sql_injection_subst;

        include "koneksi.php";
        $id = $_GET['id'];
        $sql = mysqli_query($conn, "select * from penyakit where id_penyakit = $id ");


        while($data = mysqli_fetch_array($sql)){
        echo"<div class='box-tabel-informasi'> ";
            echo " <img style='width:100px;height:100px; float:left; margin-right:10px' src= css/imagePenyakit/$data[gambar] alt=$data[gambar]>";
            echo"<h3>$data[nm_penyakit]</h3>";
            echo "<p>$data[keterangan]</p>";

        echo'</div>';

        echo"<div class='box-tabel-informasi'> ";
        echo"<h3>Solusi dan Saran</h3>";
        echo "<p>$data[solusi]</p>";
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