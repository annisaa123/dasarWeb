<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b; // Menggunakan pembagian biasa, bukan modulus
$pangkat = $a ** $b;

echo "Hasil penjumlahan $a + $b = $hasilTambah<br>";
echo "Hasil pengurangan $a - $b = $hasilKurang<br>";
echo "Hasil perkalian $a * $b = $hasilKali<br>";
echo "Hasil pembagian $a / $b = $hasilBagi<br>";
echo "Hasil pemangkatan $a ** $b = $pangkat<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil perbandingan apakah $a == $b : " . ($hasilSama ? "Benar" : "Salah") . "<br>";
echo "Hasil perbandingan apakah $a != $b : " . ($hasilTidakSama ? "Benar" : "Salah") . "<br>";
echo "Hasil perbandingan apakah $a < $b : " . ($hasilLebihKecil ? "Benar" : "Salah") . "<br>";
echo "Hasil perbandingan apakah $a > $b : " . ($hasilLebihBesar ? "Benar" : "Salah") . "<br>";
echo "Hasil perbandingan apakah $a <= $b : " . ($hasilLebihKecilSama ? "Benar" : "Salah") . "<br>";
echo "Hasil perbandingan apakah $a >= $b : " . ($hasilLebihBesarSama ? "Benar" : "Salah") . "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil logika $a && $b (AND) : " . ($hasilAnd ? "Benar" : "Salah") . "<br>";
echo "Hasil logika $a || $b (OR) : " . ($hasilOr ? "Benar" : "Salah") . "<br>";
echo "Hasil logika !$a (NOT A) : " . ($hasilNotA ? "Benar" : "Salah") . "<br>";
echo "Hasil logika !$b (NOT B) : " . ($hasilNotB ? "Benar" : "Salah") . "<br>";

$a += $b;
echo "Hasil dari \$a += \$b (penjumlahan dan penugasan) = $a<br>";

$a -= $b;
echo "Hasil dari \$a -= \$b (pengurangan dan penugasan) = $a<br>";

$a *= $b;
echo "Hasil dari \$a *= \$b (perkalian dan penugasan) = $a<br>";

$a /= $b;
echo "Hasil dari \$a /= \$b (pembagian dan penugasan) = $a<br>";

$a %= $b;
echo "Hasil dari \$a %= \$b (modulus dan penugasan) = $a<br>";

$hasilIdentik = $a === $b;
$tidakIdentik = $a !== $b;

echo "Hasil perbandingan apakah $a === $b : " . ($tidakIdentik ? "Benar" : "Salah") . "<br>";
echo "Hasil perbandingan apakah $a !== $b : " . ($tidakIdentik ? "Salah" : "Salah") . "<br>";

$totalKursi = 45;
$kursiTerisi = 28;

// Menghitung jumlah kursi kosong
$kursiKosong = $totalKursi - $kursiTerisi;

// Menghitung persentase kursi kosong
$persenKursiKosong = ($kursiKosong / $totalKursi) * 100;

echo "Total kursi di restoran: $totalKursi<br>";
echo "Kursi yang terisi: $kursiTerisi<br>";
echo "Kursi yang masih kosong: $kursiKosong<br>";
echo "Persentase kursi yang masih kosong: $persenKursiKosong%<br>";
?>
