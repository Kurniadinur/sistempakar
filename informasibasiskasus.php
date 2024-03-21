<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style-admin.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
    <?php
    include "koneksi.php";
    $sql = mysqli_query($conn,"select nm_penyakit from penyakit where id_penyakit = '$_GET[id]'");
    while ($row = mysqli_fetch_array($sql)) {
        echo"<div class='box-judul-gejala'><h1>Detail Penyakit $row[nm_penyakit]</h1></div>";   
    }
    ?> 
    <div class="box-tabel-gejala">
    <button class="open-button" onclick='openForm()' style="float: right;"> <i class="fa fa-plus" aria-hidden="true"></i> Tambah &nbsp</button>
    <div class="form-popup" id="myForm">
        <form action="tambahbasiskasus.php" class="form-container-1" method="post">
            <label for="id_gejala"><b>Pilih Gejala dan Bobot</b></label>
            <select style="margin-bottom:10px; display:none;"class="form-control form-control-lg" aria-label="Default select example" name="id_penyakit">
            <?php 
            include "koneksi.php";
            $penyakit = mysqli_query($conn,"select * from penyakit where id_penyakit = $_GET[id]");
            while ($data = mysqli_fetch_array($penyakit)) {
            echo"<option value=$data[id_penyakit]>$data[nm_penyakit]</option>";
            }

            ?>
            </select>
            <select style="margin-bottom:10px;"class="form-control form-control-lg" aria-label="Default select example" name="id_gejala">
            <?php 
            include "koneksi.php";
            $gejala = mysqli_query($conn,"select * from gejala");
            while ($data = mysqli_fetch_array($gejala)) {
            echo"<option value=$data[id_gejala]>$data[nama_gejala]</option>";
            }

            ?></select>
            <select style="margin-bottom:10px;"class="form-control form-control-lg" aria-label="Default select example" name="bobot_gejala">
            <option value=0>0</option> 
            <option value=10>10</option> 
            <option value=20>20</option> 
            <option value=30>30</option> 
            <option value=40>40</option>
            <option value=50>50</option>
            <option value=60>60</option>
            <option value=70>70</option>
            <option value=80>80</option>
            <option value=90>90</option>
            <option value=100>100</option>
            </select>
    
            <button type='submit' class='btn'>Input</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
    </div>    
    <script type="text/javascript">

    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
    </script>
    <table>
                <tr>
                    <th style="text-align:center; width: 2%;"> No</th>
                    <th style="text-align:center; width: 10%;">ID Gejala</th>
                    <th style="text-align:center; width: 75%;">Gejala</th>
                    <th style="text-align:center; width: 6%;">Bobot</th>
                    <th style="text-align:center; width: 6%;">aksi</th>
                </tr>

                <?php
                include "koneksi.php";
                    $id_penyakit = $_GET['id'];
                    $penyakit = mysqli_query($conn, "select id_aturan,id_gejala, nama_gejala, bobot from basis_kasus where id_penyakit = $id_penyakit");

                    $n = 1;


                    while($data = mysqli_fetch_array($penyakit)){
                        echo"<tr>";
                        echo"<td style='text-align:center; height:30px;'>$n</td>";
                        echo"<td style='text-align:center;'>&nbsp;$data[id_gejala]</td>";
                        echo"<td >&nbsp;$data[nama_gejala]</td>";
                        echo"<td style='text-align:center;'>&nbsp;$data[bobot]</td>";
                        echo"<td style='text-align:center;'> <a href='tambahbasiskasus.php?kode=$data[id_aturan]&kode2=$id_penyakit' class='btn btn-danger btn-xs' ><i  class='fa fa-trash'></i></a>
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