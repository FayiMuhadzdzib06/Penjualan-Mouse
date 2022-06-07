<?php 
    require 'koneksi.php';

    $user= $_POST['username'];
    $pass= $_POST['password'];

    $sql = mysqli_query($conn, "SELECT * FROM user where username='$user' and password='$pass'");
    $cek = mysqli_num_rows($sql);

    if ($cek > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "proseslogin";
        header("location:tambahbarang.php");
    }else{
        header("location:login.php?pesan=gagal/pastikan_anda_memasukan_data_dengan_benar");
    }
    
?>