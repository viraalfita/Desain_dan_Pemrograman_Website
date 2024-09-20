<?php
$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilai);

array_shift($nilai); // Hapus nilai terendah pertama
array_shift($nilai); // Hapus nilai terendah kedua

array_pop($nilai); // Hapus nilai tertinggi pertama
array_pop($nilai); // Hapus nilai tertinggi kedua

$total_nilai = array_sum($nilai);

echo "Nilai: " . implode(", ", $nilai) . "<br>";
echo "Total nilai setelah mengabaikan dua nilai tertinggi dan terendah: " . $total_nilai;
?>
