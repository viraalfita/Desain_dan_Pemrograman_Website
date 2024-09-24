<?php

function hitungUmur($thnLhr, $thnSkrg) {
    $umur = $thnSkrg - $thnLhr;
    return $umur;
}

echo "Umur saya adalah " . hitungUmur(2005, 2024) . " tahun";
?>