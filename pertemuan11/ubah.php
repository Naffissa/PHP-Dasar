<?php
require 'functions.php';

// ambil data dari URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM phpdasar WHERE id = $id")[0];

// cek apakah tombol submit sudah diubah atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diubah!');
            document.location.href = 'index.php';
        </script>
    ";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"]; ?>">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" required  value="<?= $mhs["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="nama" required value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label><br>
                <img src="img/<?= $mhs["gambar"]; ?>" width="150px"><br>
                <input type="file" name="gambar" id="gambar">
            </li><br>
            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>

    </form>

</body>

</html>