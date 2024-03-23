<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style.css" />
        <title>Informasi Gizi Balita</title>
    </head>
    <body>
        <ul>
            <li><a href="login.php">Login</a></li>
            <li><a href="konsultasi.php">Konsultasi</a></li>
            <li><a class="active" href="informasi.php">Informasi</a></li>
            <li><a href="index.php">Beranda</a></li>
            <li style="float:left;" ><b href="index.php">SIPAGB</li>
        </ul>
        <div class="box-welcome">
            <h1>INFORMASI GIZI BALITA</h1>
            <p style="font-size: 12px;">SISTEM INFORMASI PAKAR KLASIFIKASI GIZI BALITA DENGAN MENGGUNAKAN METODE FUZZY DAN CBR</p>
            </div>
        </div>
        <div class="box-tabel-informasi"> 
            <table>
                <tr>
                    <th style="text-align:center; width: 3%;">No</th>
                    <th style="width: 10%;">Penyakit</th>
                    <th style="width: 35%;">Keterangan</th>
                    <th style="width: 30%;">Solusi</th>
                </tr>

                <?php
                include "koneksi.php";
                    $penyakit = mysqli_query($conn, "select * from penyakit;");
                    $n = 1;
                
                    while($data = mysqli_fetch_array($penyakit)){
                            echo"<tr>";
                            echo"<td style='text-align:center;'>$n</td>";
                            echo"<td style = 'padding:5px;'>$data[nm_penyakit]</td>";
                            echo"<td style = 'padding:5px;'>$data[keterangan]</td>";
                            echo"<td style = 'padding:5px;'>$data[solusi]</td>";
                            echo"</tr>";
                            $n++;
                    }
                    ?>  
            </table>
        </div>

        <script src="'main.js" ></script>
    <div class="footer-2">
        <p>Author: Kurniadinur</p>
    </div>
    </body>
    

</html>