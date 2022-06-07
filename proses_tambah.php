<?php 
    include 'koneksi.php';

    $nama_produk = $_POST['nama_produk'];
    $harga_produk = $_POST['harga_produk'];
    $merk = $_POST['merk'];
    $foto = $_FILES['foto']['name'];

    if($foto != ""){
        $ekstensi_diperbolehkan = array('png', 'jpg');
        $x = explode('.', $foto);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['foto']['tmp_name'];
        $angka_acak = rand(1, 999);
        $nama_foto_baru = $angka_acak.'-'.$foto;

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            move_uploaded_file($file_tmp, 'foto/'.$nama_foto_baru);

            $query = "INSERT INTO produk (nama_produk, harga_produk, merk, foto) VALUES('$nama_produk', '$harga_produk', '$merk', '$nama_foto_baru') ";
            $result = mysqli_query($conn, $query);

            if(!$result){
                die("Query Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
            } else {
                echo "<script>
                alert('Data Berhasil Ditambahkan!');
                window.location = 'databarang.php';
            </script>";
            }
        }else {
            echo "<script>
                alert('Ekstensi Gambar Hanya Bisa JPG dan PNG!!');
                window.location = 'tambahbarang.php';
            </script>";
        }
    }else{
        $query = "INSERT INTO produk (nama_produk, harga_produk, merk) VALUES('$nama_produk', '$harga_produk', '$merk') ";
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
        } else {
            echo "<script>
            alert('Data Berhasil Ditambahkan!');
            window.location = 'databarang.php';
        </script>";
        }
    }
?>