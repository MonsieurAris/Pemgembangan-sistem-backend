<?php
function hitungNilaiAkhir($tugas, $uts, $uas) {
    $nilaiAkhir = ($tugas * 0.3) + ($uts * 0.3) + ($uas * 0.4);
    return $nilaiAkhir;
}

$tugas = 80;
$uts = 85;
$uas = 84;

$nilai = hitungNilaiAkhir($tugas, $uts,$uas);

echo "Output :<br>";
echo "Nilai Akhir: $nilai<br>";

if ($nilai >= 70) {
    echo "Status: Lulus";
} else {
    echo "Status: Tidak Lulus";
}
?>