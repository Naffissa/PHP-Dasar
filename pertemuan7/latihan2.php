<?php

if( !isset($_GET["nama"]) || 
    !isset($_GET["nrp"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["gambar"]))
    {
    header("Location: latihan1.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Detail Mahasiswa</tytle>
</head>
<body>

<ul>
    <li><img src="img/<?= $_GET["nama"]; ?>"></li>
    <li><?= $_GET["nama"]; ?></li>
    <li><?= $_GET["nrp"]; ?></li>
    <li><?= $_GET["email"]; ?></li>
    <li><?= $_GET["jurusan"]; ?></li>
</ul>

<a href="latihan1.php">Kembali ke Daftar Mahasiswa</a>

</body>
</html>