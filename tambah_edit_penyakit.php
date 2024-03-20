
<?php
    include "koneksi.php";

    #tambah penyakit
    if ($_POST['penyakit']!=null and $_POST['keterangan']!=null and $_POST['solusi']!=null){
    $nama_penyakit = $_POST['penyakit'];
    $keterangan = $_POST['keterangan'];
    $solusi = $_POST['solusi'];

    $tambah = mysqli_query($conn, "insert into penyakit (nm_penyakit,keterangan,solusi) values ('$nama_penyakit','$keterangan','$solusi')"); 
    echo '<script type ="text/JavaScript">window.location.href="penyakit.php";</script>';
    }

    #Edit penyakit, keterangan dan solusi
    if ($_POST['penyakit_baru']!=null and $_POST['keterangan_baru']!=null and $_POST['solusi_baru']!=null){
    $penyakit_baru = $_POST['penyakit_baru'];
    $keterangan_baru = $_POST['keterangan_baru'];
    $solusi_baru = $_POST['solusi_baru'];
    $id_penyakit = $_POST['id_penyakit'];

    $update = mysqli_query($conn,"UPDATE penyakit SET nm_penyakit='$penyakit_baru', keterangan ='$keterangan_baru', solusi='$solusi_baru' WHERE id_penyakit=$id_penyakit");
    echo '<script type ="text/JavaScript">window.location.href="penyakit.php";</script>';

    #Penyakit aja yang di edit
    }elseif($_POST['penyakit_baru']!=null and $_POST['keterangan_baru']==null and $_POST['solusi_baru']==null){
        $penyakit_baru = $_POST['penyakit_baru'];
        $id_penyakit = $_POST['id_penyakit'];
        $update = mysqli_query($conn,"UPDATE penyakit SET nm_penyakit='$penyakit_baru' WHERE id_penyakit=$id_penyakit");
        echo '<script type ="text/JavaScript">window.location.href="penyakit.php";</script>';
    #Keterangan aja yang di edit
    }elseif($_POST['penyakit_baru']==null and $_POST['keterangan_baru']!=null and $_POST['solusi_baru']==null){
        $keterangan_baru = $_POST['keterangan_baru'];
        $id_penyakit = $_POST['id_penyakit'];
        $update = mysqli_query($conn,"UPDATE penyakit SET keterangan ='$keterangan_baru' WHERE id_penyakit=$id_penyakit");
        echo '<script type ="text/JavaScript">window.location.href="penyakit.php";</script>';
    #solusi aja yang di edit
    }elseif($_POST['penyakit_baru']==null and $_POST['keterangan_baru']==null and $_POST['solusi_baru']!=null){
        $solusi_baru = $_POST['solusi_baru'];
        $id_penyakit = $_POST['id_penyakit'];
        $update = mysqli_query($conn,"UPDATE penyakit SET solusi='$solusi_baru' WHERE id_penyakit=$id_penyakit");
        echo '<script type ="text/JavaScript">window.location.href="penyakit.php";</script>';
    #penyakit dan keterangan aja yang di edit
    }elseif($_POST['penyakit_baru']!=null and $_POST['keterangan_baru']!=null and $_POST['solusi_baru']==null){
        $penyakit_baru = $_POST['penyakit_baru'];
        $keterangan_baru = $_POST['keterangan_baru'];
        $id_penyakit = $_POST['id_penyakit'];
        $update = mysqli_query($conn,"UPDATE penyakit SET nm_penyakit='$penyakit_baru', keterangan ='$keterangan_baru' WHERE id_penyakit=$id_penyakit");
        echo '<script type ="text/JavaScript">window.location.href="penyakit.php";</script>';
   #penyakit dan solusi aja yang di edit
    }elseif($_POST['penyakit_baru']!=null and $_POST['keterangan_baru']==null and $_POST['solusi_baru']!=null){
        $penyakit_baru = $_POST['penyakit_baru'];
        $solusi_baru = $_POST['solusi_baru'];
        $id_penyakit = $_POST['id_penyakit'];
        $update = mysqli_query($conn,"UPDATE penyakit SET nm_penyakit='$penyakit_baru',solusi='$solusi_baru' WHERE id_penyakit=$id_penyakit");
        echo '<script type ="text/JavaScript">window.location.href="penyakit.php";</script>';
    #keterangan dan solusi aja yang di edit
    }elseif($_POST['penyakit_baru']==null and $_POST['keterangan_baru']!=null and $_POST['solusi_baru']!=null){
        $keterangan_baru = $_POST['keterangan_baru'];
        $solusi_baru = $_POST['solusi_baru'];
        $id_penyakit = $_POST['id_penyakit'];
    
        $update = mysqli_query($conn,"UPDATE penyakit SET keterangan ='$keterangan_baru', solusi='$solusi_baru' WHERE id_penyakit=$id_penyakit");
        echo '<script type ="text/JavaScript">window.location.href="penyakit.php";</script>';
    }else{
        echo '<script type ="text/JavaScript">window.location.href="penyakit.php";</script>';
    }


?>