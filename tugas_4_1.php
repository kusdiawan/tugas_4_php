<?php
echo "Tugas 4_1 php";
echo "<br>";
$harga_beli = 8000;
$harga_jual = 7500;
$keuntungan = 300;

$jum_kambing = (($harga_beli - $harga_jual) / $keuntungan);

print_r("Harga Beli  = Rp " . $harga_beli);
echo "<br>";
print_r("Harga Jual  = Rp " . $harga_jual);
echo "<br>";
print_r("Keuntungan  = Rp " . $keuntungan);
echo "<br>";
print_r("Jumlah kambing yang dibeli  = " . ceil($jum_kambing) . " ekor");
echo "<br>";



?>