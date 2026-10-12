<?php
//Percabangan
$nilai = 85;
if ($nilai > 70) {echo "Lulus";
}
?>

<?php
echo "<br>";
//If-else
$nilai = 60; 
if ($nilai >= 70) {
    echo "Lulus";
} else {
    echo "Tidak Lulus";
}
?>

<?php
echo "<br>";
//If-elseif-else
$nilai = 85;
if ($nilai >= 90) {
    echo "A";
} elseif ($nilai >= 80) {
    echo "B";
} elseif ($nilai >= 70) {
    echo "C";
} else { 
    echo "D";
}
?>

<?php
echo "<br>";
//Switch
$hari = "Rabu";
switch ($hari) {
    case "Senin":
        echo "Awal minggu";
        break;
    case "Selasa":
        echo "Pertengahan minggu";
        break;
    case "Jumat";
        echo "Akhir minggu kerja";
        break;
    default;
        echo "Hari libur atau akhir pekan";
}
?>

<?php
echo "<br>";
//Perulangan
for ($i = 1; $i <= 5; $i++) {
    echo"Angka ke-$i <br>";
}
?>

<?php
echo "<br>";
//While
$i = 1;
while ($i <= 5) {
    echo "Perulangan ke-$i <br>";
    $i++;
}
?>

<?php
echo "<br>";
//Do-while
$i = 1;
do {
    echo "Nomor: $i <br>";
    $i++;
} while ($i <= 3);
?>

<?php
echo "<br>";
//Foreach
$buah = ["Apel", "Jeruk", "Mangga"];
foreach ($buah as $nama) {
    echo $nama . "<br>";
}
?>

