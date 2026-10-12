<?php
$angka = range(1, 20);
foreach ($angka as $nilai) {
    if ($nilai % 3 == 0) {
        echo "$nilai <br>";
    }
}
?>