<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">

        <title>Konsultasi SISPAPG Penyakit Anak</title>
    </head>
    <body style="background-color: rgb(20,184,173);">
    <ul>
            <li><a   href="login.php"> <i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
            <li><a class="active" href="konsultasi.php"> <i class="fa fa-question-circle" aria-hidden="true"></i> Konsultasi</a></li>
            <li><a  href="informasi.php"> <i class="fa fa-info-circle" aria-hidden="true"></i> Informasi</a></li>
            <li><a href="index.php"><i class="fa fa-home"></i> Beranda</a></li>
            <li style="float:left; border:none; "><b href="index.php" style="color:black;">SISPAPG</b></li>
        </ul>
        <div class="box-welcome">
            <h1>HALAMAN KONSULTASI</h1>
            <p style="font-size: 12px;">SILAHKAN PILIH GEJALA YANG ANAK ANDA ALAMI DAN SISPAPG AKAN MEMBERIKAN DIAGNOSA TERHADAP PENYAKIT ANAK ANDA</p>
            </div>
        </div>
        <div class="box-tabel-konsul">  
            <h1 style="text-align: center;">SILAHKAN PILIH GEJALA ANAK ANDA</h1>
            <form action="hasilkonsul.php" method="post">
                <table>
            <?php
                    include "koneksi.php";
                    $query = mysqli_query($conn,"select * from gejala");
                    
                    while($data = mysqli_fetch_array($query)){ 
                        echo "<tr>";
                                echo"<td style='padding:5px'>$data[nama_gejala]</td>";
                                echo"<td style='padding:5px; padding-top:2px;'><input style='float:right' type='checkbox' value='$data[id_gejala]' name='gejala[]'></td>";
                        echo "</tr>";
                    }
                    ?>  
                </table>     
            <button class="button-input" type="submit">  
            </form>
            
                Input
            </button>
        </div>

        <script src="'main.js" ></script>
    <div class="footer-2">
        <p>Author: Dela</p>
    </div>
    </body>
    

</html>