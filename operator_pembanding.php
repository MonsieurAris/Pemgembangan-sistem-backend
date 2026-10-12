<?php
// == = Sama Dengan ($a == $b)
// === = Identik ($a === $b)
// != atau <> = Tidak sama dengan ($a != $b atau $a <> $b)
// !== = Tidak Identik (%a !== $b)
// > = Lebih besar dari ($a > $b)
// < = Lebih kecil dari ($a <$b)
// >= = Lebih besar atau sama dengan ($a >= $b)
// <= = Lebih kecil atau sama dengan ($a <= $b)
// <=> = Spaceship ($a <=> $b)

$a = 10;
$b = "10";
$c = 7; 

echo " a = $a, b = $b, c = $c <br><br>";

//Perbandingan Nilai
var_dump($a == $b); //true (karena nilai sama)
var_dump($a === $b); //false (karena tipe data berbeda)
var_dump($a != $c); //true
var_dump($a > $c); //true
var_dump($a < $c); //false
var_dump($a >= 10); //true
var_dump($a <= 9); //false

//Spaceship Operator
echo "<br>Operator <=> menghasilkan: " . ($a <=> $c); //outrput: 1 
?>