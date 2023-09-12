<?php
//$mahasiswa = [
  //   ["Nafisa Maulidan",042330400", "rekayasa perangkat lunak","nafisamaulidan@gmail.com"],
   // ["Akbar Falah", "033040001", "teknik mesin","akbar@gmail.com"]
// ];

// array associatife
// definisinya sama seperti array numefik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [  
    [
    "nama"=>"NAFISA MAULIDAN",
    "nrp" =>"042330400",
    "email" =>"nafisamaulidan@gmail.com",
    "jurusan" =>"Rekayasa Perangkat lunak",
    "gambar" =>"pict1.jpg"
    ],
[
    "nama"=>"AMJAD BALQIS",
    "nrp" =>"042330400",
    "email" =>"balqis@gmail.com",
    "jurusan" =>"Multimedia",
    "gambar" =>"pict2.jpg",
]
];

?>
<!DOCTYPE html>
<html>
<head>
     <title>Daftar Mahasiswa</title>
</head>
<body>
     <h1>Daftar Mahasiswa</h1>

     <?php foreach ( $mahasiswa as $mhs ) : ?>
<ul>
   <li>
      <img src="img/<?= $mhs["gambar"]; ?>" width="150">
   </li>
   <li> NAMA : <?= $mhs["nama"]; ?></li>
   <li> NRP : <?= $mhs["nrp"]; ?></li>
   <li> JURUSAN : <?=$mhs["jurusan"]; ?></li>
   <li> EMAIL : <?= $mhs["email"]; ?></li>
</ul>
<?php  endforeach; ?>



</body>
</html>