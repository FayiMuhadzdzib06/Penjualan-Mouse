<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="style/tbstyle.css">
</head>

<body>
    <div class="container">
        <h1>Tambah Barang</h1>
        <form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
            <input type="text" name="nama_produk" placeholder="Masukkan Nama Barang" autofocus required>
            <input type="text" name="harga_produk" placeholder="Masukkan Harga Barang" required>
            <input type="text" name="merk" placeholder="Masukkan Merk Barang" required>
            <input type="file" name="foto" required>
            <button type="submit" name="submit">Simpan Produk</button>
        </form>
    </div>
</body>

</html>