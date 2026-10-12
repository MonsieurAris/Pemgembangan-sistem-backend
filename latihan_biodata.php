<?php
$nim = "250030725";
$nama = "Aris Syaputra";
$kode_jurusan = "SI";
$angkatan = 2025;
$umur = 20;
$gender = "Laki-Laki";
$hobi = array("Gaming", "Riding", "Coding");

echo "NIM : $nim" . "<br>";
echo "Nama : $nama" . "<br>";
echo "Kode Jurusan : $kode_jurusan" . "<br>";
echo "Angkatan : $angkatan" . "<br>";
echo "Umur : $umur" . "<br>";
echo "Gender : $gender" . "<br>";
echo "Hobi : " . implode(", ", $hobi) . "<br>";
?>