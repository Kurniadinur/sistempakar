<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Basis Kasus</title>

    </head>
    <body>
    <div class="box-tabel-konsul">
        <?php
        include"koneksi.php";
        $query = mysqli_query($conn, "SELECT * FROM penyakit"); 
        while($data = mysqli_fetch_array($query)){
            $penyakit[] = $data['id_penyakit'];
        }

        $x = 1;
        
        foreach($penyakit as  $p){ 
            foreach($_POST["gejala"] as $tokek){
                $sql = mysqli_query($conn,"select bobot, nama_penyakit from basis_kasus where id_penyakit=$p and id_gejala=$tokek");
                while($isi = mysqli_fetch_array($sql)){
                    echo" <p>$isi[nama_penyakit]= $isi[bobot]</p>";
                }
            }
            
            // while($isi = mysqli_fetch_array($sql)){
            //     $bobot_($x) [] =  $sql['bobot'];
            // }
            // $x+=1;

        }


        ?>
    </div>

    </body>


</html>

        

