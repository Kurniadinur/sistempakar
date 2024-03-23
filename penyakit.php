<?php
    session_start();
    if($_SESSION['username']==null and $_SESSION['password']==null){
        echo '<script type ="text/JavaScript"> alert("Kamu belum login"); window.location.href="login.php";</script>'; 
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style-admin.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title> Daftar Penyakit</title>
    </head>
    <body >
    <div class="atas"><a href="logout.php"><i class="fa fa-sign-out fa-2x"  style="float: right;"></i></a></div>
    <ul>
            <li style="height: 80px; border:none"><b href="dashboard.php" style="height: 70px; color:white;">SISTEM PAKAR FUZZY DAN CBR</b></li>
            <li><a href="dashboard.php"><i class="fa fa-home"></i> Beranda</a></li>
            <li><a href="gejala.php"> <i class="fa fa-hospital-o"></i> Gejala</a></li>
            <li><a href="penyakit.php"><i class="fa fa-stethoscope"></i> Penyakit</a></li>
            <li><a href="basiskasus.php"><i class="fa fa-plus-square"></i> Basis Kasus</a></li>
            <li><a href="konsultasiadmin.php"><i class="fa fa-user-md"></i> Konsultasi</a></li>
    </ul>
    <div class="box-judul-gejala"><h1>TABEL PENYAKIT</h1></div>    
    <div class="box-tabel-gejala">
    <button class="open-button" onclick='openForm()' style="float: right;"> <i class="fa fa-plus" aria-hidden="true"></i> Tambah &nbsp</button>
    <div class="form-popup" id="myForm">
        <form action="tambah_edit_penyakit.php" class="form-container" method="post">
            <label for="penyakit"><b>Penyakit</b></label>
            <input type="text" placeholder="Masukkan nama penyakit" name="penyakit" required>

            <label for="keterangan"><b>Keterangan</b></label>
            <textarea  placeholder="Keterangan" name="keterangan" required></textarea>

            <label for="penyakit"><b>Solusi</b></label>
            <textarea placeholder="Masukkan Solusi penyakit" name="solusi" required></textarea>
            <button type="submit" class="btn">Input</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
    </div>    
    <button class="button-edit" onclick='bukaForm()'><i class="fa fa-edit" aria-hidden="true"></i>&nbsp;Edit</button>
    <div class="form-popup-edit" id="editForm">
        <form action="tambah_edit_penyakit.php" class="form-container" method="post">
            <label for="id_penyakit"><b>Edit penyakit</b></label><br>
            
            <select class="form-control form-control-lg" aria-label="Default select example" name="id_penyakit">
            <?php 
            include "koneksi.php";
            $sql = mysqli_query($conn,"select * from penyakit");
            while ($data = mysqli_fetch_array($sql)) {
            echo"<option value=$data[id_penyakit]>$data[nm_penyakit]</option>";
             }
            ?>
            </select>
            <input type='text' placeholder='Edit Penyakit' name='penyakit_baru' >
            <label for="keterangan_baru"><b>Keterangan</b></label>
            <textarea type='text' placeholder='Edit keterangan' name='keterangan_baru'></textarea>
            <label for="solusi_baru"><b>Solusi</b></label>
            <textarea type='text' placeholder='Edit solusi' name='solusi_baru'></textarea>
        <button type="submit" class="btn">Edit</button>
        <button type="button" class="btn cancel" onclick="tutupForm()">Close</button>
    </form>
    </div>
    <script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
        document.getElementById("editForm").style.display = "none";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }

    function bukaForm() {
        document.getElementById("editForm").style.display = "block";
        document.getElementById("myForm").style.display = "none";
    }

    function tutupForm() {
        document.getElementById("editForm").style.display = "none";
    }
    </script>
    
    <table>
                <tr>
                    <th style="text-align:center; width: 3%;">No</th>
                    <th style="text-align:center; width: 10%;">Penyakit</th>
                    <th style="text-align:center; width: 35%;">Keterangan</th>
                    <th style="text-align:center; width: 30%;">Solusi</th>
                    <th style="text-align:center; width: 5%;">Aksi</th>
                </tr>
        

                <?php
                include "koneksi.php";
                    $penyakit = mysqli_query($conn, "select * from penyakit;");
                    $n = 1;
                    while($data = mysqli_fetch_array($penyakit)){
                        echo"<tr>";
                        echo"<td style='text-align:center; height:30px;'>$n</td>";
                        echo"<td style='padding-left:5px;'>$data[nm_penyakit]</td>";
                        echo"<td style='padding-left:5px;'>$data[keterangan]</td>";
                        echo"<td style='padding-left:5px;'>$data[solusi]</td>";
                        echo"<td style='text-align:center;'>
                        <a href='?id=$data[id_penyakit]' class='btn btn-danger btn-xs' ><i  class='fa fa-trash'></i></a>
                        </td>";
                        echo"</tr>";
                        $n++;
                    }

                    if(isset($_GET['id'])){
                        mysqli_query($conn,"delete from penyakit where id_penyakit='$_GET[id]'");
                        echo '<script type ="text/JavaScript"> window.location.href="penyakit.php";</script>';
                    }

                    ?>
            </table>
    </div>
    <div class="footer-2">
        <p>Author: Dela</p>
    </div>
    </body>
</html>