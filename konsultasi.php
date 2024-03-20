<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style.css" />
        <title>Konsultasi SISPAG Gizi Balita</title>
    </head>
    <body>
        <ul>
            <li><a href="login.php">Login</a></li>
            <li><a class="active" href="konsultasi.php">Konsultasi</a></li>
            <li><a href="informasi.php">Informasi</a></li>
            <li><a href="index.php">Beranda</a></li>
            <li style="float:left;" ><b href="index.php">SIPAGB</b></li>
        </ul>
        <div class="box-welcome">
            <h1>HALAMAN KONSULTASI</h1>
            <p style="font-size: 12px;">SILAHKAN PILIH GEJALA YANG BAYI ANDA ALAMI DAN SISPAGB AKAN MEMBERIKAN DIAGNOSA TERHADAP PENYAKIT ANAK ANDA</p>
            </div>
        </div>
        <div class="box-tabel-konsul">  
            <h1>SILAHKAN PILIH GEJALA ANAK ANDA</h1>
            <table>
                    <?php
                    include "koneksi.php";
                    $query = mysqli_query($conn,"select * from gejala");
                    
                    while($data= mysqli_fetch_array($query)){ 
                            echo"<tr>";
                                echo"<td style='width: 95%; padding:4px;'>$data[nama_gejala]</td>";
                                echo"<td style='width: 5%; text-align:center;'><input type='checkbox' value='$data[id_gejala]' name='$data[nama_gejala]'></td>";
                            echo"</tr>";
                    }
                    ?>         
                    
            </table>
            <button class="button-input">
                Input
            </button>
        </div>

        <script src="'main.js" ></script>
    <div class="footer-2">
        <p>Author: Dela</p>
    </div>
    </body>
    

</html>