<?php
$matrikA = [
    [1, 1, 1],
    [2, 2, 2],
    [3, 3, 3]
];

$matrikB = [
    [3, 3, 3],
    [2, 2, 2],
    [1, 1, 1]
];

// Matriks hasil penjumlahan
$matrikHasil = [];
// Looping untuk menjumlahkan matriks
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matrikHasil[$i][$j] = $matrikA[$i][$j] + $matrikB[$i][$j];
    }
}

// Tampilkan hasil penjumlahan
echo "Hasil Penjumlahan Matriks = \n";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matrikHasil[$i][$j] . " ";
    }
    echo "\n";
}
?>