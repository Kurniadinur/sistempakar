<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style 2.css" />
        <title> SISTEM PAKAR CBR</title>
    </head>
    <body >
    <ul>
            <li><a class="active" href="login.php">Login</a></li>
            <li><a href="konsultasi.php">Konsultasi</a></li>
            <li><a href="informasi.php">Informasi</a></li>
            <li><a href="index.php">Beranda</a></li>
            <li style="float:left; "><b href="index.php">SIPAGB</b></li>
        </ul>
    <div class="container-login"><h3><br>SELAMAT DATANG ADMIN</h3><h5>Silahkan masukkan username dan password</h5>
        <form action="ceklogin.php" method="post" role="form">
        <input type="text" placeholder="Enter Username" name="uname" required>
        <input type="password" placeholder="Enter Password" name="psw" required><br>
        <button type="submit">Login</button>  
        </form>
    </div>
        <script src="'main.js" ></script>
    </body>

    <footer>
        <p>
            Author: Dela</p>
    </footer>

</html>