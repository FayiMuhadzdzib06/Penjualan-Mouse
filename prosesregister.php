<?php
    include 'koneksi.php';

    function tambahuser($data){
        global $conn;

        $id = $_POST ['id'];
        $nama = $_POST ['nama'];
        $username = $_POST ['username'];
        $password = $_POST ['password'];
        $telepon = $_POST ['telepon'];

        $simpan = mysqli_query($conn, "INSERT INTO user VALUES ('$id', '$nama', '$username', '$password', '$telepon')");    

        return mysqli_affected_rows($conn);
    }
?>