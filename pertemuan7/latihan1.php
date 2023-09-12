<?php
$mahasiswa =[
    [
    "nama" => "Nafisa maulidan",
    "nrp" => "042330400",
    "email" => "nafisamaulidan@gmail.com",
    "jurusan" => "Rekayasa Perangkat Lunak",
    "gambar" => "pict1.jpg",
    ],
[
    "nama" => "Amjad Balqis",
    "nrp" => "042330400",
    "email" =>"balqis@gmail.com",
    "jurusan" =>"Multimedia",
    "gambar" =>"pict2.jpg",
]
];
?>
<!DOCTYPE html>
<html>

    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $ahs) : ?>
    <li>
        <a href="latihan2.php?nama=<?= $ahs["nama"]; ?>&nrp=
        <? $ahs["nrp"]; ?>&email=<?= $ahs["email"]; ?>
        &jurusan=<?= $ahs["jurusan"]; ?>&gambar=<?= $ahs["
        gambar"]; ?><?= $ahs["nama"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>

</body>
</html>