<?php
// mendefinisikan matriks A dan B
$A = [
    [1, 1, 1],
    [2, 2, 2],
    [3, 3, 3]
];

$B = [
    [3, 3, 3],
    [2, 2, 2],
    [1, 1, 1]
];

// matriks untuk menyimpan hasil penjumlahan
$C = [];

// proses penjumlahan dua matriks menggunakan looping
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}

// menampilkan hasil penjumlahan matriks
echo "Hasil penjumlahan matriks A dan B adalah: <br>";

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $C[$i][$j] . " ";
    }
    echo "<br>";
}
?>
