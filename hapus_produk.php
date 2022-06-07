<?php 
    include 'koneksi.php';

    $id = $_GET['id'];
    $query = "DELETE FROM produk WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
    } else {
        echo "<script>
        alert('Data Berhasil Dihapus!');
        window.location = 'databarang.php';
    </script>";
    }
?>