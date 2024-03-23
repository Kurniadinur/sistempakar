<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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
        <p>Author: Kurniadinur</p>
    </div>
    </body>
    

</html>