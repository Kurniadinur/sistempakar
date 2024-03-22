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
    <body>
    <h2 style="padding-left: 40px; color:gray;"> Hasil Analisa dengan metode Fuzzy dan CBR</h2>
    <a style="text-decoration:none" class="button-kembali" href="konsultasi.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp;Kembali</a>
    
    <div class="box-tabel-hasil">
    
    <table>
    <tr>
            <th style="text-align:center; width: 3%;">No</th>
            <th style="text-align:center; width: 80%;">Nama Penyakit</th>
            <th style="text-align:center; width: 30%;">Hasil (Dalam persentase)</th>
        </tr>
        <?php
        include"koneksi.php";
        $query = mysqli_query($conn, "SELECT * FROM penyakit"); 
        while($data = mysqli_fetch_array($query)){
            $id_penyakit[] = $data['id_penyakit'];
            $nama_penyakit[] = $data['nm_penyakit'];
        }
        $bobot_terbesar = 0;
        $nama_diagnosa="";
        $x = 1;
        foreach($nama_penyakit as  $p){ 
            $bobot = 0;
            $bobot_total_penyakit=0;
            foreach($_POST["gejala"] as $tokek){
                $sql = mysqli_query($conn,"select bobot from basis_kasus where nama_penyakit='$p' and id_gejala=$tokek");
                while($isi = mysqli_fetch_array($sql)){
                    $bobot += $isi['bobot'];
                }       
        }
        $sql2 = mysqli_query($conn,"select bobot from basis_kasus where nama_penyakit='$p'");
        while($isi2 = mysqli_fetch_array($sql2)){
            $bobot_total_penyakit += $isi2['bobot'];
        }    
            $persentase = round($bobot/($bobot_total_penyakit)*100,2);

            if ($bobot_terbesar<$persentase) {
                $bobot_terbesar=$persentase;
                $nama_diagnosa = strtoupper($p);
            }
            echo"<tr>";
            echo"<td style='text-align:center;'>$x</td>";
            echo"<td>$p</td>";
            echo"<td>$persentase %</td>";
            echo"</tr>";
            $x++;
        }
        echo"</table>";
        echo"</div>";


        if($bobot_terbesar !=0){
        echo" <div class='box-atas-hasil'> ";
        echo"<h4> MENURUT HASIL DIAGNOSA, ANAK ANDA MENGALAMI PENYAKIT <b>$nama_diagnosa</b> </h4>";
        echo"<h4> DENGAN HASIL ANALISA SEBESAR <b>$bobot_terbesar %</b> </h4>";
        echo"</div>";
        $date = date('Y-m-d');
        $input = mysqli_query($conn,"insert into konsultasi (tanggal,diagnosa,persentase) values ('$date', '$nama_diagnosa', $bobot_terbesar)");
        } else{
            echo" <div class='box-atas-hasil'> ";
            echo"<h4> ANDA BELUM MEMILIH GEJALA </h4>";
            echo"</div>";
        }
        
        
         ?>

    

    <div class="footer-2">
    <p>Author: Dela</p>
    </div>

    </body>


</html>

        

