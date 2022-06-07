<?php 
    include 'koneksi.php';

    if(isset($_GET['id'])) {
        $id =  $_GET['id'];
        $query = "SELECT * FROM produk WHERE id = '$id'";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query Error : ".mysqli_errno($conn). " - ".mysqli_error($conn));
        }
        $data = mysqli_fetch_assoc($result);

        if(!count($data)){
            echo "<script>
                alert('Data Tidak Ditemukan Pada Tabel.');
                window.location = 'databarang.php';
            </script>";
        }
    }else {
        echo "<script>
            alert('Masukkan ID yang ingin di edit');
            window.location = 'databarang.php';
        </script>";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link rel="stylesheet" href="style/tbstyle.css">
</head>
<body>
    <h1>Edit Produk <?php echo $data['nama_produk']; ?> </h1>
        <form method="POST" action="proses_edit.php" enctype="multipart/form-data">
            <div class="container">
                <div>
                    <input type="text" name="nama_produk" placeholder="Masukkan Nama Barang" autofocus required value="<?php echo $data['nama_produk']; ?>">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                </div>
                <div>
                    <input type="text" name="harga_produk" placeholder="Masukkan Harga Barang" required value="<?php echo $data['harga_produk']; ?>">
                </div>
                <div>
                    <input type="text" name="merk" placeholder="Masukkan Merk Barang" required value="<?php echo $data['merk']; ?>">
                </div>
                <div>
                    <img src="foto/<?php echo $data['foto']; ?>" width="120px">
                    <input type="file" name="foto" required>
                    <i style="float: left; color: red; font-size: 11px;">abaikan jika tidak merubah gambar produk</i>
                </div>
                <button type="submit">Simpan Perubahan</button>
            </div>
        </form>
</body>

</html>