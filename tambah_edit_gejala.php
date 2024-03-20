
<?php
    include "koneksi.php";

    #tambah Gejala
    if ($_POST['gejala']!=null){
    $nama_gejala = $_POST['gejala'];

    $sql = mysqli_query($conn, "insert into gejala (nama_gejala) values ('$nama_gejala')"); 
    echo '<script type ="text/JavaScript">window.location.href="gejala.php";</script>';
    }

    #Edit Gejala
    if ($_POST['gejala_baru']!=null){
    $gejala_baru= $_POST['gejala_baru'];
    $id_gejala= $_POST['id_gejala'];
    $update = mysqli_query($conn,"UPDATE gejala SET nama_gejala= '$gejala_baru' WHERE id_gejala=$id_gejala");
    echo '<script type ="text/JavaScript">window.location.href="gejala.php";</script>';
    }else{
        echo '<script type ="text/JavaScript">window.location.href="gejala.php";</script>';
    }
?>