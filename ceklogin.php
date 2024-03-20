<?php
    include "koneksi.php";
    $username = $_POST['uname'];
    $password = $_POST['psw'];

    $sql = mysqli_query($conn,"select * from admin where username ='$username' and password='$password'") or die("ga ada");
    if ((mysqli_num_rows($sql)==0)){
       
        echo '<script type ="text/JavaScript"> alert("Username atau pasword salah"); window.location.href="login.php";</script>';
    }else{
        echo '<script type ="text/JavaScript"> window.location.href = "dashboard.php";</script>'; 
    }
?>
