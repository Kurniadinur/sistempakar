<?php 
        include "koneksi.php";

        if($_POST['id_penyakit']!=null and $_POST['id_gejala']!=null and $_POST['bobot_gejala']!=null){
            $id_penyakit = $_POST['id_penyakit'];
            $id_gejala = $_POST['id_gejala'];
            $bobot = $_POST['bobot_gejala'];

            $query = mysqli_query($conn,"insert into basis_kasus (id_penyakit,id_gejala,nama_penyakit,nama_gejala,bobot) values ($id_penyakit,$id_gejala,(select nm_penyakit from penyakit where id_penyakit=$id_penyakit),(select nama_gejala from gejala where id_gejala =$id_gejala),$bobot)");
            header("location:informasibasiskasus.php?id=$id_penyakit");
    }

    if(isset($_GET['kode']) and isset($_GET['kode2'])){
        $kode = $_GET['kode']; 
        $kode2= $_GET['kode2'];
        mysqli_query($conn,"delete from basis_kasus where id_aturan=$kode");
        header("location:informasibasiskasus.php?id=$kode2");
    }

?>
