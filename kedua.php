<?php

function luasLingkaran($jari) : float {
    $luas = 3.14*$jari*$jari;
    return $luas;
}

function kelilingLingkaran($jari) : float {
    $keliling = 2 * 3.14 * $jari;
    return $keliling;
}

function volumeBola($jari) : float {
    $volume = 4/3 * 3.14 * $jari ** 3;
    return $volume;
}

function volumeTabung($jari, $tinggi) : float {
    $volume = 3.14 * $jari ** 2 * $tinggi;
    return $volume;
}

function volumeKerucut($jari, $tinggi) : float {
    $volume = 1/3 * 3.14 * $jari ** 2 * $tinggi;
    return $volume;
}

$luas_tanah = luasLingkaran(45);
echo "Luas tanah budi adalah {$luas_tanah}\n";

$keliling_lingkaran = kelilingLingkaran(20);
echo "Keliling Lingkaran adalah {$keliling_lingkaran}\n";

$bola = volumeBola(15);
echo "Volume Bola adalah {$bola}\n";

$tabung = volumeTabung(15, 21);
echo "Volume Tabung adalah {$tabung}\n";

$kerucut = volumeKerucut(11, 23);
echo "Volume Kerucut adalah {$kerucut}";