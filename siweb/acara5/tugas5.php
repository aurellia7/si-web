<?php
echo "Tugas Nomor 1 <br>";
function cariBilanganTerbesar($bilangan1, $bilangan2) {
    if ($bilangan1 > $bilangan2) {
        return $bilangan1;
    } else {
        return $bilangan2;
    }
}

//contoh penggunaan
$bilangan1 = 100;
$bilangan2 = 150;
$bilanganTerbesar = cariBilanganTerbesar($bilangan1, $bilangan2);
echo "Bilangan terbesar antara $bilangan1 dan $bilangan2 adalah = " . $bilanganTerbesar . "<br>";

echo "Tugas Nomor 2 <br>";
$dateInfo = getdate();
$tanggal = $dateInfo['mday'];
$bulan = $dateInfo['mon'];
$tahun = $dateInfo['year'];
echo "Tanggal sekarang adalah = " . $tanggal . "-" . $bulan . "-" . $tahun . "<br>";

echo "Tugas Nomor 3 <br>";
$tanggalSekarang = date('d-F-Y');
echo "Tanggal sekarang adalah = " . $tanggalSekarang;
?>