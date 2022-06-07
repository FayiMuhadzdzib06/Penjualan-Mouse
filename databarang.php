<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
    <link rel="stylesheet" href="style/dbstyle.css">
</head>
<body>
    <div class="container">
        <h1>Data Produk</h1>
        <a href="tambahbarang.php">+ &nbsp; Tambah Barang</a>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Barang</th>
                    <th>Harga</th>
                    <th>Merk</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include 'koneksi.php';
                    $query = "SELECT * FROM produk ORDER BY id ASC";
                    $result = mysqli_query($conn, $query);
    
                    if(!$result){
                        die("Query Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
                    }
                    $no = 1;
    
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td>
                        <?php echo $no; ?>
                    </td>
                    <td><?php echo $row['nama_produk']; ?></td>
                    <td>Rp <?php echo number_format($row['harga_produk'], 0,',','.'); ?></td>
                    <td><?php echo $row['merk']; ?></td>
                    <td><img width="120px" src="foto/<?php echo $row['foto']; ?>"></td>
                    <td>
                        <a href="edit_produk.php?id=<?php echo $row['id']; ?>" class="edit">Edit</a>
                        <a href="hapus_produk.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Yakin Ingin Dihapus??')" class="hapus">Hapus</a>
                    </td>
                </tr>
                <?php 
                    $no++; 
                } 
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
