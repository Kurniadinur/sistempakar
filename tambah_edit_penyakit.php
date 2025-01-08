
<?php
    include "koneksi.php";

    $directory = 'css/imagePenyakit/';
    #tambah penyakit
    if ($_POST['penyakit']!=null and $_POST['keterangan']!=null and $_POST['solusi']!=null and $_FILES['NamaFile']!=null){
    $nama_penyakit = $_POST['penyakit'];
    $keterangan = $_POST['keterangan'];
    $solusi = $_POST['solusi'];
    $filename = $_FILES ['NamaFile']['name'];
    move_uploaded_file($_FILES ['NamaFile']['tmp_name'],$directory.$filename);

    $tambah = mysqli_query($conn, "insert into penyakit (gambar,nm_penyakit,keterangan,solusi) values ('$filename','$nama_penyakit','$keterangan','$solusi')"); 
    echo '<script type ="text/JavaScript">window.location.href="penyakit.php";</script>';
    }




    #Edit penyakit, keterangan solusi dan gambar
    if ($_POST['penyakit_baru']!=null and $_POST['keterangan_baru']!=null and $_POST['solusi_baru']!=null and $_FILES['EditFile']['name']!=null){
    $penyakit_baru = $_POST['penyakit_baru'];
    $keterangan_baru = $_POST['keterangan_baru'];
    $solusi_baru = $_POST['solusi_baru'];
    $id_penyakit = $_POST['id_penyakit'];
    $filename = $_FILES ['EditFile']['name'];
    move_uploaded_file($_FILES ['EditFile']['tmp_name'],$directory.$filename);
    $update = mysqli_query($conn,"UPDATE penyakit SET  gambar= '$filename', nm_penyakit='$penyakit_baru', keterangan ='$keterangan_baru', solusi='$solusi_baru' WHERE id_penyakit=$id_penyakit");
    $update2 = mysqli_query($conn,"UPDATE basis_kasus SET nama_penyakit='$penyakit_baru' WHERE id_penyakit=$id_penyakit");
    echo '<script type ="text/JavaScript">window.location.href="penyakit.php";</script>';
    
    #Edit penyakit, keterangan solusi
    } elseif ($_POST['penyakit_baru']!=null and $_POST['keterangan_baru']!=null and $_POST['solusi_baru']!=null and $_FILES['EditFile']['name']==null){
        $penyakit_baru = $_POST['penyakit_baru'];
        $keterangan_baru = $_POST['keterangan_baru'];
        $solusi_baru = $_POST['solusi_baru'];
        $id_penyakit = $_POST['id_penyakit'];
        $filename = $_FILES ['EditFile']['name'];
        move_uploaded_file($_FILES ['EditFile']['tmp_name'],$directory.$filename);
        $update = mysqli_query($conn,"UPDATE penyakit SET  nm_penyakit='$penyakit_baru', keterangan ='$keterangan_baru', solusi='$solusi_baru' WHERE id_penyakit=$id_penyakit");
        $update2 = mysqli_query($conn,"UPDATE basis_kasus SET nama_penyakit='$penyakit_baru' WHERE id_penyakit=$id_penyakit");
        echo '<script type ="text/JavaScript">window.location.href="penyakit.php";</script>';
    
    #Penyakit aja yang di edit
    }elseif($_POST['penyakit_baru']!=null and $_POST['keterangan_baru']==null and $_POST['solusi_baru']==null){
        $penyakit_baru = $_POST['penyakit_baru'];
        $id_penyakit = $_POST['id_penyakit'];
        $update = mysqli_query($conn,"UPDATE penyakit SET nm_penyakit='$penyakit_baru' WHERE id_penyakit=$id_penyakit");
        $update2 = mysqli_query($conn,"UPDATE basis_kasus SET nama_penyakit='$penyakit_baru' WHERE id_penyakit=$id_penyakit");
        echo '<script type ="text/JavaScript">window.location.href="penyakit.php";</script>';

    #Keterangan aja yang di edit
    }
    elseif($_POST['penyakit_baru']==null and $_POST['keterangan_baru']!=null and $_POST['solusi_baru']==null and $_FILES['EditFile']['name']==null){
        $keterangan_baru = $_POST['keterangan_baru'];
        $id_penyakit = $_POST['id_penyakit'];
        $update = mysqli_query($conn,"UPDATE penyakit SET keterangan ='$keterangan_baru' WHERE id_penyakit=$id_penyakit");
        echo '<script type ="text/JavaScript">window.location.href="penyakit.php";</script>';

    #solusi aja yang di edit
    }elseif($_POST['penyakit_baru']==null and $_POST['keterangan_baru']==null and $_POST['solusi_baru']!=null and $_FILES['EditFile']['name']==null){
        $solusi_baru = $_POST['solusi_baru'];
        $id_penyakit = $_POST['id_penyakit'];
        $update = mysqli_query($conn,"UPDATE penyakit SET solusi='$solusi_baru' WHERE id_penyakit=$id_penyakit");
        echo '<script type ="text/JavaScript">window.location.href="penyakit.php";</script>';

    #Gambar aja yang di edit
    }elseif($_POST['penyakit_baru']==null and $_POST['keterangan_baru']==null and $_POST['solusi_baru']==null and $_FILES['EditFile']['name']!=null){
        $filename = $_FILES ['EditFile']['name'];
        $id_penyakit = $_POST['id_penyakit'];
        move_uploaded_file($_FILES ['EditFile']['tmp_name'],$directory.$filename);
        $update = mysqli_query($conn,"UPDATE penyakit SET gambar='$filename' WHERE id_penyakit=$id_penyakit");
        echo '<script type ="text/JavaScript">window.location.href="penyakit.php";</script>';

    #penyakit dan keterangan aja yang di edit
    }elseif($_POST['penyakit_baru']!=null and $_POST['keterangan_baru']!=null and $_POST['solusi_baru']==null and $_FILES['EditFile']['name']==null){
        $penyakit_baru = $_POST['penyakit_baru'];
        $keterangan_baru = $_POST['keterangan_baru'];
        $id_penyakit = $_POST['id_penyakit'];
        $update = mysqli_query($conn,"UPDATE penyakit SET nm_penyakit='$penyakit_baru', keterangan ='$keterangan_baru' WHERE id_penyakit=$id_penyakit");
        $update2 = mysqli_query($conn,"UPDATE basis_kasus SET nama_penyakit='$penyakit_baru' WHERE id_penyakit=$id_penyakit");
        echo '<script type ="text/JavaScript">window.location.href="penyakit.php";</script>';

   #penyakit dan solusi aja yang di edit
    }elseif($_POST['penyakit_baru']!=null and $_POST['keterangan_baru']==null and $_POST['solusi_baru']!=null and $_FILES['EditFile']['name']==null){
        $penyakit_baru = $_POST['penyakit_baru'];
        $solusi_baru = $_POST['solusi_baru'];
        $id_penyakit = $_POST['id_penyakit'];
        $update = mysqli_query($conn,"UPDATE penyakit SET nm_penyakit='$penyakit_baru',solusi='$solusi_baru' WHERE id_penyakit=$id_penyakit");
        $update2 = mysqli_query($conn,"UPDATE basis_kasus SET nama_penyakit='$penyakit_baru' WHERE id_penyakit=$id_penyakit");
        echo '<script type ="text/JavaScript">window.location.href="penyakit.php";</script>';

    #penyakit dan gambar aja yang di edit
    }elseif($_POST['penyakit_baru']!=null and $_POST['keterangan_baru']==null and $_POST['solusi_baru']!=null and $_FILES['EditFile']['name']!=null){
        $penyakit_baru = $_POST['penyakit_baru'];
        $filename = $_FILES ['EditFile']['name'];
        $id_penyakit = $_POST['id_penyakit'];
        move_uploaded_file($_FILES ['EditFile']['tmp_name'],$directory.$filename);
        $update = mysqli_query($conn,"UPDATE penyakit SET nm_penyakit='$penyakit_baru',gambar='$filename' WHERE id_penyakit=$id_penyakit");
        $update2 = mysqli_query($conn,"UPDATE basis_kasus SET nama_penyakit='$penyakit_baru' WHERE id_penyakit=$id_penyakit");
        echo '<script type ="text/JavaScript">window.location.href="penyakit.php";</script>';

    #keterangan,solusi dan gambar aja yang di edit
    }elseif($_POST['penyakit_baru']==null and $_POST['keterangan_baru']!=null and $_POST['solusi_baru']!=null and $_FILES['EditFile']['name']!=null){
        $keterangan_baru = $_POST['keterangan_baru'];
        $solusi_baru = $_POST['solusi_baru'];
        $id_penyakit = $_POST['id_penyakit'];
        $filename = $_FILES ['EditFile']['name'];
        move_uploaded_file($_FILES ['EditFile']['tmp_name'],$directory.$filename);
        $update = mysqli_query($conn,"UPDATE penyakit SET gambar='$filename', keterangan ='$keterangan_baru', solusi='$solusi_baru' WHERE id_penyakit=$id_penyakit");
        echo '<script type ="text/JavaScript">window.location.href="penyakit.php";</script>';
    #keterangan dan solusi aja yang di edit
    }elseif($_POST['penyakit_baru']==null and $_POST['keterangan_baru']!=null and $_POST['solusi_baru']!=null and $_FILES['EditFile']['name']==null){
        $keterangan_baru = $_POST['keterangan_baru'];
        $solusi_baru = $_POST['solusi_baru'];
        $id_penyakit = $_POST['id_penyakit'];

        $update = mysqli_query($conn,"UPDATE penyakit SET keterangan ='$keterangan_baru', solusi='$solusi_baru' WHERE id_penyakit=$id_penyakit");
        echo '<script type ="text/JavaScript">window.location.href="penyakit.php";</script>';
    #solusi dan gambar yang di edit
    }elseif($_POST['penyakit_baru']==null and $_POST['keterangan_baru']!=null and $_POST['solusi_baru']!=null and $_FILES['EditFile']['name']!=null){
        $filename = $_FILES ['EditFile']['name'];
        $solusi_baru = $_POST['solusi_baru'];
        $id_penyakit = $_POST['id_penyakit'];
        move_uploaded_file($_FILES ['EditFile']['tmp_name'],$directory.$filename);

        $update = mysqli_query($conn,"UPDATE penyakit SET gambar ='$filename', solusi='$solusi_baru' WHERE id_penyakit=$id_penyakit");
        echo '<script type ="text/JavaScript">window.location.href="penyakit.php";</script>';
    }
    else{
        echo '<script type ="text/JavaScript">window.location.href="penyakit.php";</script>';
    }


?>