<?php
echo "Tugas 4_2 php";
echo "<br>";
$jum_saluran = 523;
$jum_terpakai = 8891;

$pemakaian = ($jum_terpakai / $jum_saluran);

print_r("Jumlah Saluran = " . $jum_saluran);
echo "<br>";
print_r("Jumlah Terpakai = " . $jum_terpakai);
echo "<br>";
print_r("Rata-rata Pemakaian = " . $pemakaian);
echo "<br>";
print_r("Jawaban  = " . ceil($pemakaian) . " liter/keluarga");
echo "<br>";



?>