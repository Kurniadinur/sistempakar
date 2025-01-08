

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style-admin.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js" integrity="sha512-qZvrmS2ekKPF2mSznTQsxqPgnpkI4DNTlrdUmTzrDgektczlKNRRhy5X5AAOnx5S09ydFYWWNSfcEqDTTHgtNA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <title>Basis Kasus</title>

    </head>
    <body style="background-color: rgb(20,184,173); margin:0">
    <h2 style="padding-left: 150px; padding-right: 150px; color:white; text-align:center;" > Hasil Diagnosis Penyakit Gizi Pada Balitaa Menggunakan Metode Fuzzy dan Case-based Reasoning</h2>
    <a style="text-decoration:none" class="button-kembali" href="konsultasi.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp;Kembali</a>
    
    <div id="coba">

    <div class="box-tabel-hasil" id="tabelHasil">
    <h4 id="hasil1" style="padding-left: 30px; padding-right: 30px;"></h4>
    <h4 id="hasil2" style="padding-left: 30px; padding-right: 30px;"></h4>
    <table style="top: -20px;">
    <tr>
            <th style="text-align:center; width: 3%;">No</th>
            <th style="text-align:center; width: 80%;">Nama Penyakit</th>
            <th style="text-align:center; width: 20%;">Hasil (Dalam persentase)</th>
            <th style="text-align:center; width: 30%;">Resiko</th>
        </tr>
        <?php
        include "koneksi.php";
        //Header
        $query = mysqli_query($conn, "SELECT * FROM penyakit"); 
        while($data = mysqli_fetch_array($query)){
            $id_penyakit[] = $data['id_penyakit'];
            $nama_penyakit[] = $data['nm_penyakit'];
        }
        $bobot_terbesar = 0;
        $penyakitfix="";
        $nama_diagnosa="";
        $rendah = 0;
        $sedang = 0;
        $tinggi = 0;
        $label = "RENDAH";
        $label;
        $simpanbobot=[];
        $bobotfix=[];
        $labelfix="";
        $kumpulanpenyakit100 =[];
        $jumlah100=0;
        $jumlahpersen = [];


        $x = 1;
        foreach($nama_penyakit as  $p){ 
            $bobot = 0;
            $bobot_total_penyakit=0;
            foreach($_POST["gejala"] as $j){
                $sql = mysqli_query($conn,"select bobot from basis_kasus where nama_penyakit='$p' and id_gejala=$j");
                while($isi = mysqli_fetch_array($sql)){
                    $bobot += $isi['bobot'];
                    $simpanbobot [] = $isi['bobot'];

                        if ($isi['bobot']<= 20){
                            $rendah +=1;
                        }
                        if ($isi['bobot']>20 and $isi['bobot']<=30){
                            $rendah +=0.5;
                        }
                        if ($isi['bobot']>30 and $isi['bobot']<=40){
                            $sedang +=0.5;
                        }
                        if ($isi['bobot']>40 and $isi['bobot']<=50){
                            $sedang +=1;
                        }
                        if ($isi['bobot']>50 and $isi['bobot']<70){
                            $sedang +=0.5;
                        }
                        if ($isi['bobot']>60 and $isi['bobot']<80){
                            $tinggi +=0.5;
                        }
                        if ($isi['bobot']>=80){
                            $tinggi +=1;
                        }
                    
                    
                }       
            }

        $sql2 = mysqli_query($conn,"select bobot from basis_kasus where nama_penyakit='$p'");
        while($isi2 = mysqli_fetch_array($sql2)){
            $bobot_total_penyakit += $isi2['bobot'];
        }    
            $persentase = round($bobot/($bobot_total_penyakit)*100,2);
            
            if($persentase>99.99){
                $jumlahpersen[]=$persentase;
                $kumpulanpenyakit100 []= $p;
            }

            if ($rendah>$sedang and $rendah>$tinggi){
                $label = "RENDAH";
            }
            if ($sedang>$rendah and $sedang>$tinggi){
                $label = "SEDANG";
            }
            if ($tinggi>$rendah and $tinggi>$sedang){
                $label = "TINGGI";
            }
            if ($tinggi!=0 and ($tinggi==$rendah or $tinggi==$sedang)){
                $label = "TINGGI";
            }
            if ($sedang!=0 and $sedang==$rendah and $sedang>$tinggi){
                $label = "SEDANG";
            }
            if ($tinggi == 0 and $sedang==0 and $rendah==0 ){
                $label = "RENDAH";
            }

            if ($bobot_terbesar<$persentase) {
                $bobot_terbesar=$persentase;
                $penyakitfix = $p;
                $nama_diagnosa = strtoupper($p);
                $bobotfix = $simpanbobot;
                $labelfix=$label;

            }
            echo"<tr>";
            echo"<td style='text-align:center;'>$x</td>";
            echo"<td>$p</td>";
            echo"<td style='text-align:center'>$persentase %</td>";
            echo"<td>$label</td>";
            echo"</tr>";
            $rendah = 0;
            $sedang = 0;
            $tinggi = 0;
            $x++;
            
        }
        echo"</table>";


        echo"<table style='width:35%; top: -50px;' >";
        echo"<tr>";
        echo "<th style='text-align:center; width: 2%;'>No</th>";
        echo"<th style='text-align:center; width: 20%;'>Gejala</th>";
        echo"</tr>";
        $jumlah100 = count($jumlahpersen);
                $n =1;
                foreach($_POST["gejala"] as $tokek){
                    $gjl = mysqli_query($conn,"select nama_gejala from gejala where id_gejala=$tokek");
                    while($isi = mysqli_fetch_array($gjl)){
                    echo"<tr>";
                    echo "<td style='text-align:center; width: 3%;'>$n</td>";
                    echo"<td style='text-align:left; width: 80%; height: 5px;'>$isi[nama_gejala]</td>";
                    echo"</tr>";
                    $n+=1;
                    }
                }       
                echo"</table>";

            if ($jumlah100<=1){
                $np = mysqli_query($conn,"select solusi from penyakit where nm_penyakit='$penyakitfix'");
                while($apa = mysqli_fetch_array($np)){
                echo"<table style='top: -70px;'>";
                echo"<tr>";
                echo "<th style= width: 100%; height:10px;'>    Saran</th>";
                echo"</tr>";
                echo"<tr>";
                echo "<td style='text-align:left; width: 100%;'>$apa[solusi]</td>";
                echo"</tr>";   
                echo"</table>";}
            } 
            else{
                $i=1;
                echo"<table style='top: -70px;'>";
                echo"<tr>";
                echo "<td style='text-align:center; width: 15%;'>Nama Penyakit</td>";
                echo "<th style= text-align:center; width: 80%; '>Saran</th>";
                echo"</tr>";
                foreach($kumpulanpenyakit100 as $H){
                        $np = mysqli_query($conn,"select solusi from penyakit where nm_penyakit='$H'");
                            while($apa = mysqli_fetch_array($np)){
                                echo"<tr>";
                                echo "<td style='text-align:center; width: 15%;'>$H</td>";
                                echo "<td style='text-align:left; width: 80%;'>$apa[solusi]</td>";
                                echo"</tr>";
                        }
                    $i++;   
                }
                echo"</table>";
            }

        echo"</div>";
        


        if($bobot_terbesar!=0 ){
            
            if ($jumlah100<=1){
            echo "<script type='text/JavaScript'>
                document.getElementById('hasil1').innerHTML = 'MENURUT HASIL DIAGNOSA, ANAK ANDA MENGALAMI BANYAK GEJALA DARI PENYAKIT <b>$nama_diagnosa</b>'
                document.getElementById('hasil2').innerHTML = 'DENGAN HASIL ANALISA SEBESAR <b>$bobot_terbesar %</b> DAN DENGAN RESIKO <b>$labelfix</b>'
	        </script>"; 
                $date = date('Y-m-d');
                $idksl = mysqli_query($conn,"select id_konsultasi from konsultasi");
                $jmlid=1;
                while($apa = mysqli_fetch_array($idksl)){
                 $jmlid+=1;
                }  
                $input = mysqli_query($conn,"insert into konsultasi (id_konsultasi,tanggal,diagnosa,persentase) values ($jmlid,'$date', '$nama_diagnosa', $bobot_terbesar)");
        
            }
            if ($jumlah100>1){
                
                echo "<script type='text/JavaScript'>
                document.getElementById('hasil1').innerHTML = 'MENURUT HASIL DIAGNOSA, ANAK ANDA MEMLIKI <b>$jumlah100</b> PENYAKIT BERBEDA DENGAN NILAI <b>100%</b>, SEPERTI TABEL BERIKUT : '</script>"; 
            }

        }
        
        else{
            echo "<script type='text/JavaScript'>
            document.getElementById('hasil1').innerHTML = 'ANDA BELUM MEMILIH GEJALA $bobot_terbesar'
            document.getElementById('hasil2').innerHTML = '$jumlah100','$bobot_terbesar'
	    </script>";
        }
        
        
         ?>
                 </div>
        <button class='button-download' type='submit' onclick='download()'>Download</button> 
         <script text="javascript">
            window.jsPDF = window.jspdf.jsPDF;
            var docPDF = new jsPDF();
            function download(){
                var divContent = document.querySelector("#coba");
                docPDF.html(divContent, {
                    callback: function(){
                        docPDF.save('file.pdf');
                    }, 
                    x :0,
                    y:0,
                    width: 215,
                    windowWidth: 1000
                });
            }

         </script>
         

    

    <div class="footer-2">
    <p><b>Author: Dela Fitria</b></p>
    </div>

    </body>


</html>

        

