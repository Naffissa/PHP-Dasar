<?php
$mahasiswa = [
    ["Nafisa Maulidan", "043040023", "Rekayasa Perangkat Lunak", "nafisamaulidan@gmail.com"],
    ["Nurul Dhea", "0430400234", "Rekayasa Perangkat Lunak", "nuruldhea@gmail.com"],
    ["Nadiatul", "0430400287", "Rekayasa Peragkat Lunak", "nadiatul@gmail.com"],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $ahs) : ?>
<ul>
    <li>Nama :<?= $ahs[1]; ?></li>
    <li>NRP :<?= $ahs[2]; ?></li>
    <li>Jurusan :<?= $ahs[3]; ?></li>
    <li>Email :<?= $ahs[4]; ?></li>
</ul>
<?php endforeach; ?>

        </body>
        </html>