<?php
require 'functions.php';
$phpdasar = query("SELECT * FROM phpdasar ORDER BY id ASC");

//tombol cari ditekan
if( isset($_POST["cari"]) ) {
    $phpdasar = cari($_POST["keyword"]);
}
// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM phpdasar");

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() //mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array asosiatif
// mysqli_fetch_array() // mengembalikan keduanya
// mysqli_fetch_object()

// while( $mhs = mysqli_fetch_assoc($result) ) {
// var_dump($mhs);
// }

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah Data Mahasiswa</a>
<br><br>

<form action="" method="post">

<input type="text" name="keyword" size="30" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
<button type="submit" name="cari">Cari!</button>

</form>

<br>
<table border="1" cellpadding="10" cellspacing="0">

<tr>
    <th>No.</th>
    <th>Aksi</th>
    <th>Gambar</th>
    <th>Nrp</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Jurusan</th>

</tr>

<?php $i = 1; ?>
<?php foreach( $phpdasar as $row ) : ?>
<tr>
    <td><?= $i; ?></td>
    <td>
        <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>
        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
    </td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>

</table>
    
</body>
</html>