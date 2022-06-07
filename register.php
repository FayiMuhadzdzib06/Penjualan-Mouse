<?php
    include 'prosesregister.php';

    if (isset($_POST["register"])) {
        if (tambahuser($_POST) > 0) {
            echo"<script>
            alert('Daftar Telah Berhasil, Silahkan Login')
            window.location='login.php' </script>";
        }else {
            echo"<script>
            alert('Maaf, Daftar Telah Gagal')
            window.location='register.php' </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <form method="POST" action="">
            <input type="text" name="id" placeholder="Masukkan Id" required>
            <input type="text" name="nama" placeholder="Masukkan Nama" required>
            <input type="text" name="username" placeholder="Masukkan Username" required>
            <input type="password" name="password" placeholder="Masukkan Password" required>
            <input type="text" name="telepon" placeholder="Masukkan No Telp" required>
            <button type="submit" class="btn" name="register">Submit</button>
            <p>Silahkan Login <a href="login.php">Disini</a></p>
        </form>
    </div>
</body>
</html>