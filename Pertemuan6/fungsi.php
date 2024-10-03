<?php

function perkenalan($nama, $salam = "Assalamualaikum") {
    echo $salam . ", ";
    echo "Perkenalkan nama saya ". $nama . "<br>";
    echo "Senang berkenalan dengan anda <br>";
}

perkenalan("Ranni", "Salam");

echo "<hr>";

$saya = "Vira";
$ucapanSalam = "Selamat pagi";

perkenalan($saya);
?>