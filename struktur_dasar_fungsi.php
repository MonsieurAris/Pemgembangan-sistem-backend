<?php
// Membuat fungsi sederhana
function sapa () {
    echo "Halo, selamat datang di kelas!";
}
sapa(); // Memanggil fungsi
?>

<?php
echo "<br>";
// Fungsi dengan parameter
function sapaUser ($nama) {
    echo "Halo, $nama! Selamat belajar PHP.<br>";
}
sapaUser("Aksa");
sapaUser("Andi");
?>

<?php
echo "<br>";
// Fungsi dengan nilai kembali (return)
function hitungLuasPersegi ($sisi) {
    $luas = $sisi * $sisi;
    return $luas;
}
echo "Luas persegi dengan sisi 4 adalah " . hitungLuasPersegi(4);
?>

<?php
echo "<br>";
// Fungsi dengan beberapa parameter
function hitungLuasPersegiPanjang($panjang,$lebar) {
    return $panjang * $lebar;
}
$hasil = hitungLuasPersegiPanjang(5, 3);
echo "Luas persegi panjang: $hasil";
?>

<?php
echo "<br>";
// Fungsi dengan nilai default
function sapaOrang($nama = "Pengunjung") {
    echo "Halo, $nama!<br>";
}
sapaOrang("Aksa");
sapaOrang(); // tanpa argumen
?>

<?php
echo "<br>";
// Fungsi memanggil fungsi lain
function hitungKeliling($panjang, $lebar) {
    return 2 * ($panjang + $lebar);
}
function tampilHasil($panjang, $lebar) {
    $keliling = hitungKeliling($panjang, $lebar); 
    echo "Keliling persegi panjang adalah: $keliling";
    }
    tampilHasil(10, 5);
    ?>

