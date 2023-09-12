<?php

$hari = array("senin","selasa","rabu","dst");
$bulan = ["januari", "februari","maret"];
$arr1 = [123, "tulisan", false];

var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
echo "<br>";
var_dump($hari);
?>