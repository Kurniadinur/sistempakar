<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style-admin.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.0.min.js">
        </script>
        <title>Basis Kasus</title>
    </head>
    <body >
    <div class="atas"><a href="login.php"><i class="fa fa-sign-out fa-2x"  style="float: right;"></i></a></div>
    <ul>
            <li style="height: 80px; border:none"><b href="dashboard.php" style="height: 70px; color:white;">SISTEM PAKAR FUZZY DAN CBR</b></li>
            <li><a href="dashboard.php"><i class="fa fa-home"></i> Beranda</a></li>
            <li><a href="gejala.php"> <i class="far fa-clipboard"></i> Gejala</a></li>
            <li><a href="penyakit.php"><i class="fa fa-stethoscope"></i> Penyakit</a></li>
            <li><a href="basiskasus.php"><i class="fa fa-plus-square"></i> Basis Kasus</a></li>
            <li><a href="konsultasi.php"><i class="fa fa-user-md"></i> Konsultasi</a></li>
    </ul>
    <div class="box-judul-gejala"><h1>TABEL BASIS KASUS</h1></div>    
    <div class="box-tabel-gejala">
    <table>
                <tr>
                    <th style="text-align:center; width: 2%;">No</th>
                    <th style="text-align:center; width: 50%;">Jenis Kasus</th>
                    <th style="text-align:center; width: 4%;">Detail</th>
                </tr>

                <?php
                include "koneksi.php";
                    $kasus = mysqli_query($conn, "select * from penyakit");
                    $n = 1;
                    while($data = mysqli_fetch_array($kasus)){
                        echo"<tr>";
                        echo"<td style='text-align:center; height:30px;'>$n</td>";
                        echo"<td >&nbsp;$data[nm_penyakit]</td>";
                        echo"<td style='text-align:center;'> <a href='informasibasiskasus.php?id=$data[id_penyakit]' class='btn btn-primary btn-xs'><i class='fa fa-info-circle fa-2xs'></i></a>
                        </td>";
                        echo"</tr>";
                        $n++;
                    }
                    ?>
            </table>
    </div>
    <div class="footer-2">
        <p>Author: Dela</p>
    </div>
    </body>
</html>