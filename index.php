<!DOCTYPE html>
<html>
<head>
    <title>Operator PHP</title>
</head>
<body>

<?php
// =========================
// Inisialisasi Variabel
// =========================
$angka1 = 6;
$angka2 = 2;
$angka3 = 12;

// =========================
// Operator Penugasan
// =========================
echo "<h2>Operator Penugasan (=)</h2>";

$angka1 = $angka2;
echo "angka1 = angka2 : $angka1 <br>";

$angka1 += $angka2;
echo "angka1 += angka2 : $angka1 <br>";

$angka1 -= $angka2;
echo "angka1 -= angka2 : $angka1 <br>";

$angka1 *= $angka2;
echo "angka1 *= angka2 : $angka1 <br>";

$angka1 /= $angka2;
echo "angka1 /= angka2 : $angka1 <br>";

$angka1 %= $angka2;
echo "angka1 %= angka2 : $angka1 <br>";

// =========================
// Operator Perbandingan
// =========================
echo "<h2>Operator Perbandingan</h2>";

var_dump($angka1 == $angka2);   echo "<br>";
var_dump($angka1 === $angka2);  echo "<br>";
var_dump($angka1 != $angka3);   echo "<br>";
var_dump($angka1 <> $angka3);   echo "<br>";
var_dump($angka1 !== $angka2);  echo "<br>";
var_dump($angka1 > $angka3);    echo "<br>";
var_dump($angka1 < $angka3);    echo "<br>";
var_dump($angka1 >= $angka2);   echo "<br>";
var_dump($angka1 <= $angka2);   echo "<br>";
var_dump($angka1 <=> $angka3);  echo "<br>";

// =========================
// Reset Nilai
// =========================
$angka1 = 6;
$angka2 = 2;

// =========================
// Increment & Decrement
// =========================
echo "<h2>Increment & Decrement</h2>";

$angka1++;
echo "angka1++ : $angka1 <br>";

++$angka1;
echo "++angka1 : $angka1 <br>";

$angka1--;
echo "angka1-- : $angka1 <br>";

--$angka1;
echo "--angka1 : $angka1 <br>";

// =========================
// Operator Logika
// =========================
echo "<h2>Operator Logika</h2>";

// AND
$hasil = ($angka1 > 2 && $angka2 < 6);
echo "AND (angka1 > 2 && angka2 < 6): ";
var_dump($hasil);
echo "<br>";

// OR
$hasil = ($angka1 > 24 || $angka2 < 6);
echo "OR (angka1 > 24 || angka2 < 6): ";
var_dump($hasil);
echo "<br>";

// NOT
$hasil = !($angka1 == 6);
echo "NOT !(angka1 == 6): ";
var_dump($hasil);
echo "<br>";

// XOR
$hasil = ($angka1 > 2 xor $angka2 > 6);
echo "XOR (angka1 > 2 xor angka2 > 6): ";
var_dump($hasil);
echo "<br>";

?>

</body>
</html>