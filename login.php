<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style 2.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title> Login admin</title>
    </head>
    <body >
    <ul>
            <li><a class="active"  href="login.php"> <i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
            <li><a href="konsultasi.php"> <i class="fa fa-question-circle" aria-hidden="true"></i> Konsultasi</a></li>
            <li><a  href="informasi.php"> <i class="fa fa-info-circle" aria-hidden="true"></i> Informasi</a></li>
            <li><a href="index.php"><i class="fa fa-home"></i> Beranda</a></li>
            <li style="float:left; border:none; "><b href="index.php" style="color:black;">SISPAPG</b></li>
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