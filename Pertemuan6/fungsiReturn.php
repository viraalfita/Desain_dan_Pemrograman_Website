<?php

function hitungUmur($thnLhr, $thnSkrg) {
    $umur = $thnSkrg - $thnLhr;
    return $umur;
}

function perkenalan($nama, $salam = "Assalamualaikum") {
    echo $salam . ", ";
    echo "Perkenalkan nama saya " . $nama . "<br>";
    echo "Saya berusia " . hitungUmur(2005, 2024) . " tahun<br>";
    echo "Senang berkenalan dengan anda <br>";
}

perkenalan("Vira");

?>